<?php
/**
 * Created by PhpStorm.
 * User: Валерий
 * Date: 01.09.2016
 * Time: 17:00
 */
Class Sync{
    private $IBLOCK_ID = 7;
    private $arDBSection = array();
    private $arDBElement = array();
    function __construct(){
        require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
        CModule::IncludeModule( "iblock" );
        $this->arDBSection = $this->get_Sections();
        $this->arDBElement = $this->get_Elements();
    }
    public function test(){
        return 'test';
    }
    public function upFlat ($arConf){
        $arReturn=  array(
            'CONFIG'=>array(),
            'MESSAGE'=>array()
        );

        //$arMessages = array();
        $sElement_XML_ID = str_replace('.','_','fl'. $arConf['BeforeBtiNumber']);
        $sParentXML_ID = 7;
        $sHouse_XML_ID = str_replace('.','_','h'. $arConf['BuildingNumber']);
        $sSection_XML_ID = $sHouse_XML_ID.'s'.$arConf['SectionNumber'];
        $sFloor_XML_ID= $sSection_XML_ID.'f'.$arConf['Floor'];


        $sElement_URL_CODE = str_replace('-','', str_replace($arConf['BuildingNumber'],'',$arConf['BeforeBtiNumber']));
        $iStatus = ($arConf['status']==1?'Y':'N');
        $arConf['SECTION_XML_ID'] = $sSection_XML_ID;
        $arConf['FLAT_XML_ID'] = $sElement_XML_ID;
        $arSections = $this->arDBSection;
        $arElements = $this->arDBElement;




        if(!isset( $arSections[$sHouse_XML_ID])){
            $arReturn['MESSAGE'][] = "HOUSE_NOT_FOUND";
            $section = array('NAME'=>'Дом №'.$arConf['BuildingNumber'],
                'XML_ID'=>$sHouse_XML_ID, 'CODE'=>'building-'.$arConf['BuildingNumber'], 'IBLOCK_SECTION_ID'=>$sParentXML_ID);
            $ret = $this->addSection($section);
            $section['ID']= $ret['ID'];
            $arSections[$sHouse_XML_ID] = $section;
            //$this->arDBSection[$section['XML_ID']] = $section;

        }



        if(!isset( $arSections[ $sSection_XML_ID ])){
            $section = array(
                'NAME'=>'Секция '.$arConf['SectionNumber'],
                'XML_ID'=>$sSection_XML_ID ,
                'CODE'=>'section-'.$arConf['SectionNumber'],
                'IBLOCK_SECTION_ID'=>$arSections[$sHouse_XML_ID]['ID']);
            $ret = $this->addSection($section);
            $section['ID']= $ret['ID'];
            $arSections[$sSection_XML_ID] = $section;
            // $this->arDBSection[$section['XML_ID']] = $section;
        }
        if(!isset( $arSections[$sFloor_XML_ID])) {
            $section = array('NAME' => 'Этаж ' . $arConf['Floor'],
                'XML_ID' =>$sFloor_XML_ID ,
                'CODE' => 'floor-' . $arConf['Floor'],
                'IBLOCK_SECTION_ID' => $arSections[$sSection_XML_ID]['ID']);
            $ret = $this->addSection($section);
            $section['ID'] = $ret['ID'];

            $arSections[$sFloor_XML_ID] = $section;

        }
        $this->arDBSection = $arSections;
        $arProp = $this->nodeToProp($arConf);

        $arElement = array(
            'NAME'=> $arConf['BeforeBtiNumber'],
            'CODE'=> 'flat-'.$sElement_URL_CODE,
            'XML_ID'=>$sElement_XML_ID,
            'ACTIVE'=>$iStatus,
            'IBLOCK_SECTION_ID'=>$arSections[$sFloor_XML_ID]['ID'],
            'PROPERTY_VALUES'=>$arProp
        );


        if(!isset($arElements[$sElement_XML_ID])){
           echo 'Add flat: '.$this->add_Flat($arElement);
        }else{
            $ID = $arElements[$sElement_XML_ID]['ID'];
            $arElement['ID'] = $ID;
            //$arElements[$sElement_XML_ID] = $arElement;
            $ID = $arElement['ID'];
            echo 'Update flat: '.$this->updateFlat($ID, $arElement);
        }

        $arReturn['ELEMENT'] = $arElement;
        // $arReturn['PROPERTIES'] =$arProp;
        $arReturn['SECTIONS'] = $arSections;
        $arReturn['ITEMS'] = $arElements;
        $arReturn['CONFIG'] =  $arConf;
        return $arReturn;
    }
    function add_Flat($arFlat){
        $el = new CIBlockElement;
        $PROP = array();



        $arLoadProductArray = Array(
            "MODIFIED_BY"    => 1, // элемент изменен текущим пользователем
            "IBLOCK_SECTION_ID" =>  $arFlat['IBLOCK_SECTION_ID'],          // элемент лежит в корне раздела
            "IBLOCK_ID"      => $this->IBLOCK_ID,
            "PROPERTY_VALUES"=> $arFlat['PROPERTY_VALUES'],
            "NAME"           => $arFlat['NAME'],
            "CODE"           => $arFlat['CODE'],
            "XML_ID"           => $arFlat['XML_ID'],
            "ACTIVE"         =>  $arFlat['ACTIVE'],            // активен
            //"PREVIEW_TEXT"   => "текст для списка элементов",
            //"DETAIL_TEXT"    => "текст для детального просмотра",
            //"DETAIL_PICTURE" => CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"]."/image.gif")
        );

        if($PRODUCT_ID = $el->Add($arLoadProductArray)){
            //echo "New ID: ".$PRODUCT_ID;
            return $PRODUCT_ID;
        }  else return  "Error: ".$el->LAST_ERROR;
        //return $PRODUCT_ID;
    }

    function updateFlat($ID, $arFlat){
        $el = new CIBlockElement;
        $PROP = array();
        $arLoadProductArray = Array(
            "MODIFIED_BY"    => 1, // элемент изменен текущим пользователем
            "IBLOCK_SECTION_ID" =>  $arFlat['IBLOCK_SECTION_ID'],          // элемент лежит в корне раздела
            "IBLOCK_ID"      => $this->IBLOCK_ID,
            "PROPERTY_VALUES"=> $arFlat['PROPERTY_VALUES'],
            "NAME"           => $arFlat['NAME'],
            "CODE"           => $arFlat['CODE'],
            "XML_ID"           => $arFlat['XML_ID'],
            "ACTIVE"         => $arFlat['ACTIVE'],            // активен
            //"PREVIEW_TEXT"   => "текст для списка элементов",
            //"DETAIL_TEXT"    => "текст для детального просмотра",
            //"DETAIL_PICTURE" => CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"]."/image.gif")
        );

        if($PRODUCT_ID = $el->Update($ID, $arLoadProductArray)){

            // echo "New ID: ".$PRODUCT_ID;
            return $PRODUCT_ID;
        }else
            return "Error: ".$el->LAST_ERROR;
       // return $PRODUCT_ID;
    }

    function GetPropInit() {
        $res_prop = CIBlock::GetProperties( $this->IBLOCK_ID );

        $arOptionsBlock = array();

        while ($res_arr = $res_prop->Fetch()) {
            if ($res_arr['PROPERTY_TYPE'] == 'L') {
                $property_enums = CIBlockPropertyEnum::GetList( Array("SORT" => "ASC"), Array(
                    "IBLOCK_ID" =>  $this->IBLOCK_ID,
                    "CODE"      => $res_arr['CODE']
                ) );

                $res_arr['VARIANTS'] = array();
                while ($enum_fields = $property_enums->GetNext()) {
                    $res_arr['VARIANTS'][$enum_fields["XML_ID"]] = $enum_fields;
                }
            }
            $arOptionsBlock[$res_arr['CODE']] = array(
                'PROPERTY_TYPE'=>$res_arr['PROPERTY_TYPE'],
                'NAME'=>$res_arr['NAME'],
                'CODE'=>$res_arr['CODE'],
                'IBLOCK_ID'=>$res_arr['IBLOCK_ID'],
                'VARIANTS'=>$res_arr['VARIANTS'],
            );
        }

        return $arOptionsBlock;
    }

    public function addSection($arSect){
        $bs = new CIBlockSection;
        $arFields = Array(
            "ACTIVE" => 'Y',
            "IBLOCK_SECTION_ID" => $arSect['IBLOCK_SECTION_ID'],
            "IBLOCK_ID" => $this->IBLOCK_ID,
            "NAME" => $arSect['NAME'],
            "XML_ID"=>$arSect['XML_ID'],
            "CODE"=>$arSect['CODE'],
            "SORT" => 500,
        );
        $ID = $bs->Add($arFields);

        $arReturn = array(
            'error_code'=> ($ID>0),
            'error_info'=> $bs->LAST_ERROR,
            'ID'=>$ID
        );
        return $arReturn;
    }


    public function get_Elements(){
        $arElements = array();
        $arFilter = Array("IBLOCK_ID" => $this->IBLOCK_ID);
        $rsElem = CIBlockElement::GetList(array(), $arFilter, false, Array("nPageSize"=>5000), array('ID', 'NAME', 'XML_ID', 'IBLOCK_SECTION_ID'));
        while ($arElement = $rsElem->GetNext()) {
            $arElements[$arElement['XML_ID']] = $arElement;

        }
        return $arElements;
    }
    public function get_Sections()
    {
        $arSections = array();
        $arFilter = Array("IBLOCK_ID" => $this->IBLOCK_ID);
        $rsSect = CIBlockSection::GetList(array(), $arFilter, false, array('ID', 'NAME', 'XML_ID', 'IBLOCK_SECTION_ID'));
        while ($arSect = $rsSect->GetNext()) {
            $arSections[$arSect['XML_ID']] = $arSect;

        }
        return $arSections;
    }


    public function nodeToProp($element ) {
        //$element['type'] = EFLATS::ReplaceXML( $element['flat_num'], $element['type'] );
        $compares_array = array(

            "NAME"=>"BeforeBtiNumber",
            "BuildingNumber"=>"BuildingNumber",
            "BeforeBtiNumber"=>"BeforeBtiNumber",
            "Floor"=>"Floor",
            "COORDINATS"=>"",
            "liv_sp_1"=>"living_space_1",
            "type"=>"type",
            "format"=>"format",
            "Rooms"=>"Rooms",
            "area_full"=>"area_full",
            "SectionNumber"=>"SectionNumber",
            "total_cost"=>"total_cost",
            "StatusCode"=>"StatusCode",
            "TypeForSite"=>"TypeForSite",
            "panorama"=>"panorama",
            "SpaceDesign"=>"SpaceDesign",
            "balcony"=>"balcony",
            "windows_side"=>"windows_side",
            "finish_date"=>"finish_date",
            "liv_sp_2"=>"living_space_2",
            "liv_sp_3"=>"living_space_3",
            "liv_sp_4"=>"living_space_4",
            "liv_sp_5"=>"living_space_5",
            "liv_sp_6"=>"living_space_6",
            "liv_sp_kitchen_1"=>"living_space_kitchen_1",
            "liv_sp_kitchen_2"=>"living_space_kitchen_2",
            "liv_sp_kitchen_3"=>"living_space_kitchen_3",
            "liv_sp_kitchen_4"=>"living_space_kitchen_4",
            "liv_sp_kitchen_5"=>"living_space_kitchen_5",
            "liv_sp_kitchen_6"=>"living_space_kitchen_6",
            "liv_sp_corridor_1"=>"living_space_corridor_1",
            "liv_sp_corridor_2"=>"living_space_corridor_2",
            "liv_sp_corridor_3"=>"living_space_corridor_3",
            "liv_sp_corridor_4"=>"living_space_corridor_4",
            "liv_sp_corridor_5"=>"living_space_corridor_5",
            "liv_sp_corridor_6"=>"living_space_corridor_6",
            "liv_sp_bathroom_1"=>"living_space_bathroom_1",
            "liv_sp_bathroom_2"=>"living_space_bathroom_2",
            "liv_sp_bathroom_3"=>"living_space_bathroom_3",
            "liv_sp_bathroom_4"=>"living_space_bathroom_4",
            "liv_sp_bathroom_5"=>"living_space_bathroom_5",
            "liv_sp_bathroom_6"=>"living_space_bathroom_6",
            "liv_sp_toilet_1"=>"living_space_toilet_1",
            "liv_sp_toilet_2"=>"living_space_toilet_2",
            "liv_sp_toilet_3"=>"living_space_toilet_3",
            "liv_sp_toilet_4"=>"living_space_toilet_4",
            "liv_sp_toilet_5"=>"living_space_toilet_5",
            "liv_sp_toilet_6"=>"living_space_toilet_6",
            "liv_sp_storeroom_1"=>"living_space_storeroom_1",
            "liv_sp_storeroom_2"=>"living_space_storeroom_2",
            "liv_sp_storeroom_3"=>"living_space_storeroom_3",
            "liv_sp_storeroom_4"=>"living_space_storeroom_4",
            "liv_sp_storeroom_5"=>"living_space_storeroom_5",
            "liv_sp_storeroom_6"=>"living_space_storeroom_6"
        );
        $prop_conf = $this->GetPropInit();


        $fields_val_type = array(
            102 => 1, 402 => 1, 101 => 1, 410 => 1, 107 => 1, 302 => 1,
            103 => 2, 203 => 2, 403 => 2, 703 => 2, 411 => 2, 705 => 2, 502 => 2,
            104 => 3, 404 => 3, 704 => 3, 412 => 3, 305 => 3, 306 => 3,
            105 => 4, 407 => 4,);

        $studio_val_type = array(
            101 => 'Y',107 => 'Y',305 => 'Y',407 => 'Y',410 => 'Y',411 => 'Y',412 => 'Y',703 => 'Y',704 => 'Y',705 => 'Y'
        );

        $format_val_type = array(
            707 => array(107, 705, 502, 305, 306),	//Терраса
            808	=> array(501, 502, 503, 106), //Хайфлет
            909	=> array(), //Двухуровневые квартиры
            404 => array(402, 403, 404, 410, 411, 412)//Эколофт
        );


        $PROP = array();
        $not_prop = array('NAME');
//        if (isset($fields_val_type[$element['type']])) {
//            $element['Rooms'] = $fields_val_type[$element['type']];
//        }
        $status_val = array(


            0=>'st0',
            1=>'st1',
            2=>'st2',



        );

        if (isset($status_val[$element['status']])) {
            $element['status'] = $status_val[$element['status']];
        }
        if (isset($studio_val_type[$element['type']])) {
            $element['studio'] = $studio_val_type[$element['type']];
        }

        $element['format'] = array();
        foreach ($format_val_type as $ind_format => $val_type) {
            if (in_array( $element['type'], $val_type )) {$element['format'][] = $ind_format;}
        }
        if (isset($element['fireplace']) && $element['fireplace'] == 1) {  $element['format'][] = 1011;}
        if (isset($element['cityhouse']) && $element['cityhouse'] == 1) { $element['format'][] = 302;}
        if (isset($element['terrace']) && $element['terrace'] == 1) {$element['format'][] = 707;}
        if (isset($element['lounge']) && $element['lounge'] == 1) {$element['format'][] = 505;}
        if (isset($element['panorama']) && $element['panorama'] == 1) {$element['format'][] = 909;}
        if (!isset($element['format']) || empty($element['format'])) {$element['format'][] = 403;}
        if (isset($element['windows_side']) && !empty($element['windows_side'])) {$element['windows_side'] = 1;}
        if (isset($element['format']) && !empty($element['format'])) {$element['rare_f'] = 'x001';}
        else {$element['rare_f'] = 'x002';}



        if (isset($element['living_space_storeroom_1']) && !empty($element['living_space_storeroom_1'])) {$element['gard'] = '1';}
        // $element['section']=


        $arOptionsBlock = $prop_conf;






        foreach ($compares_array as $field_code => $comp) {


            if (!in_array( $field_code, $not_prop ) && $comp != '') {
                if ($element[$comp] != 'ложь' && isset($arOptionsBlock[$field_code])) {
                    if (!isset($element[$comp])) {
                        $PROP[$field_code] = '';
                    }
                    else {
                        if ($arOptionsBlock[$field_code]['PROPERTY_TYPE'] == 'L') {
                            if (!is_array( $element[$comp] )) {
                                if (isset($arOptionsBlock[$field_code]['VARIANTS'][$element[$comp]])) {
                                    $PROP[$field_code] = $arOptionsBlock[$field_code]['VARIANTS'][$element[$comp]];
                                    $PROP[$field_code]['TYPE'] = $arOptionsBlock[$field_code]['PROPERTY_TYPE'];
                                }
                            }
                            else {
                                if (!isset($PROP[$field_code])) {$PROP[$field_code] = array();}
                                foreach ($element[$comp] as $val) {
                                    $PROP[$field_code][] = $arOptionsBlock[$field_code]['VARIANTS'][$val]['ID'];
                                }
                            }
                        }
                        else {
                            if ($element[$comp] != '') {
                                $PROP[$field_code] = $element[$comp];
                            }
                        }
                    }
                }
            }
        }
        $PROP['BeforeBtiNumber'] = str_replace($PROP['BuildingNumber'].'-', '',$PROP['BeforeBtiNumber']);
        // $PROP['format'] = $element['format'];

        return $PROP;
    }

}