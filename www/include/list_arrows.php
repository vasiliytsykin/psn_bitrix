<?php

class Lister{
    public static function getList($itemId, $sectionId, $block)
    {
        $prep_count = 0;
        $prevItem = array();
        $nextItem =array();
        require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_before.php");

        if(CModule::IncludeModule("iblock")){

            $dbResult = CIBlockElement::GetList(array('active_from'=>'ASC'), Array(
                "IBLOCK_ID" => $block,
                "ACTIVE"=>"Y",
                "GLOBAL_ACTIVE"=>"Y",
                'SECTION_ID' => $sectionId,
            ), false, false, array('ID','DETAIL_PAGE_URL', 'NAME','SECTION_ID'));



            $count = $dbResult->SelectedRowsCount();


            while($currentItem = $dbResult->GetNext()){
                if($currentItem['ID'] == $itemId)
                    break;
                else{
                    $prevItem = $currentItem;
                    $prep_count++;
                }
            }
            if($currentItem = $dbResult->GetNext()){
                $nextItem = $currentItem;
            }
        }
        $prevItem['PRE_NUM_POS'] = $prep_count;
        $nextItem['NEXT_NUM_POS'] = $count - ($prep_count + 1);
        return array('next'=>$nextItem, 'pre'=>$prevItem);
    }

}