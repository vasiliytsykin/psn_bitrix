<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);


$arSection = array();

$DEPTH_LEVEL_jk = 1;
$DEPTH_LEVEL_house = 2;
$DEPTH_LEVEL_section = 3;

function sclon($str, $count){
	$countCeil = Math.floor($count/10);
	$countL =$count - $countCeil*10;
	if($count==1){
		$str.= 'а';
	}else if($count>20){
		if($countL==1) {
			$str.= 'а';
		}else if($countL > 1 && $countL < 5){
			$str.= 'ы';
		}
	}else if($count>1 && $count<5){
		$str.= 'ы';
	}
	return $str;
}



$rsParSect = CIBlockSection::GetList(
	Array(),
	Array(
		"IBLOCK_ID" => $arParams['IBLOCK_ID'],
		"ID" => $arParams['SECTION_ID']
	), false, Array('UF_SVGPOLY', 'UF_SHOW_ELEMENT'));

$arSection= @$rsParSect->GetNext();
$arSection['PICTURE']= CFile::GetPath($arSection['PICTURE']);
$sPicturePath =	$arSection['PICTURE'];
	$arBlock  = array();
	$res = CIBlock::GetByID( $arParams['IBLOCK_ID']);
	if($arBlock = $res->GetNext()){
		$sTitle = $arBlock['NAME'];
		$arFilterSection =  Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'GLOBAL_ACTIVE'=>'Y');
		$arFilterElements = Array(
			"IBLOCK_ID"=>$arParams['IBLOCK_ID'],
			"ACTIVE"=>"Y"
		);
		$id_sect  = 0;
		$bs = new CIBlockSection;
		$be = new CIBlockElement;
			$id_sect = $arParams['SECTION_ID'];
			$arFilterSection["SECTION_ID"] = $arParams['SECTION_ID'];
			$arFilterElements["SECTION_ID"] = $arParams['SECTION_ID'];
			$rsELCurS = $bs->GetList(Array(), Array("IBLOCK_ID" => $arParams['IBLOCK_ID'], "ID" => $id_sect), false, Array('UF_SVGPOLY', 'UF_SHOW_ELEMENT'));
			if($arSection = $rsELCurS->GetNext()) {
				$arBlock['SELECTED_SECTION']  = $arSection;
				$sTitle.= ': '.$arSection['NAME'];
			}
		if($arBlock['SELECTED_SECTION']['UF_SHOW_ELEMENT']==1){
			$arFilterElements["INCLUDE_SUBSECTIONS"] ='Y';
		}
		$arFilterTree = array('IBLOCK_ID' => $IBLOCK_ID, 'ACTIVE' => 'Y');
		$arSelect =array();
		$arTree =array();
		$rsSectionTree = CIBlockSection::GetTreeList($arFilter, $arSelect);
		while($arSectionTree = $rsSectionTree->Fetch()) {
			$arTree[]=$arSectionTree;
		}
		$rsSection = $bs->GetList(Array(), $arFilterSection, true);
		$rsElement =$be->GetList(array(), $arFilterElements, false);
		$arBlock['ELEMENT_ITEMS'] = array();
		while($arSection = $rsSection->GetNext()) $arBlock['SECTION_ITEMS'][$arSection['ID']] =   $arSection;
		while($arElement = $rsElement->GetNext())   $arBlock['ELEMENT_ITEMS'][$arElement['ID']] = $arElement;
	}
	$arSectionsObj = array();

	if($arBlock['SELECTED_SECTION']['DEPTH_LEVEL']==$DEPTH_LEVEL_jk) {
		foreach ($arBlock['SECTION_ITEMS'] as $ind => $arSect) {
			$activeElements = CIBlockSection::GetSectionElementsCount($arSect['ID'], Array("ACTIVE"=>"Y"));
			$insaleElements = CIBlockSection::GetSectionElementsCount($arSect['ID'], Array(
				"CNT_ACTIVE"=>"Y",
				'PROPERTY'=>array('status'=>8)
			));

			$arSectionsObj['s' . $arSect['ID']] = array(
				'ID' => $arSect['ID'],
				'NAME' => '<div class="flat-info"><div class="flat-info-content"><div class="title">'.$arSect['NAME'].'</div>'.
					'<div class="prop">'.
					'<div class="desc">'.$arSect['DESCRIPTION'].'</div>'.
					'</div></div>'.
					'</div>',
				'coord' => array(),
				'type' => 'polyline',
				'typeo' => 'section',
				'property' => array(
					'url' => $arSect['SECTION_PAGE_URL'],
					'count' => $activeElements,
					'insale'=>$insaleElements,
					'name'=>$arSect['NAME'],
					'class'=>($insaleElements>0?'in-sale':'not-for-sale').' '.$arSect['CODE']
				)
			);
//			<div class="count">'.$insaleElements.'</div>'.
//					'<div class="num-caption">'.sclon('квартир', $insaleElements).'<br>в продаже</div>

		}
		foreach ($arBlock['ELEMENT_ITEMS'] as $ind => $arElement) {
			$arSectionsObj['e' . $arElement['ID']] = array(
				'ID' => $arElement['ID'],
				'NAME' => $arElement['NAME'],
				'coord' => array(),
				'type' => 'polyline',
				'typeo' => 'element',
				'property' => array(
					'url' => $arElement['DETAIL_PAGE_URL'],
				)
			);
		}


	}else if($arBlock['SELECTED_SECTION']['DEPTH_LEVEL']==$DEPTH_LEVEL_kvartal){


		foreach($arBlock['SECTION_ITEMS'] as $ind =>$arSect){
			$activeElements = CIBlockSection::GetSectionElementsCount($arSect['ID'], Array("ACTIVE"=>"Y"));
			$insaleElements = CIBlockSection::GetSectionElementsCount($arSect['ID'], Array(
				"CNT_ACTIVE"=>"Y",
				'PROPERTY'=>array('status'=>8)
			));
			$arSectionsObj['s'.$arSect['ID']] = array(
				'ID'=>$arSect['ID'],
				'NAME'=> '<div class="flat-info"><div class="flat-info-content"><div class="title">'.$arSect['NAME'].'</div>'.
					'<div class="prop"><div class="count">'.$insaleElements.'</div>'.
					'<div class="num-caption">'.sclon('квартир', $insaleElements).' <br>в продаже</div></div></div>'.
					'</div>',
				'coord'=>array(),
				'type'=>'polyline',
				'typeo' =>'section',
				'property'=>array(
					'url'=>$arSect['SECTION_PAGE_URL'],
					'count' => $activeElements,
					'insale'=>$insaleElements,
					'class'=>($insaleElements>0?'in-sale':'not-for-sale')

				)
			);
		}
		foreach($arBlock['ELEMENT_ITEMS'] as $ind =>$arElement){
			$arSectionsObj['e'.$arElement['ID']] = array(
				'ID'=>$arElement['ID'],
				'NAME'=>$arElement['NAME'],
				'coord'=>array(),
				'type'=>'polyline',
				'typeo' =>'element',
				'property'=>array(
					'url'=>$arElement['DETAIL_PAGE_URL'],
				)
			);
		}
	}else if($arBlock['SELECTED_SECTION']['DEPTH_LEVEL']==$DEPTH_LEVEL_house){
		$be = new CIBlockElement;
		foreach($arResult['SECTIONS'] as $indSection => $arItemSect){

			$arSectionElements = array();
			$arFilterElements = Array(
				"IBLOCK_ID"=>$arParams['IBLOCK_ID'],
				"SECTION_ID" => $arItemSect['ID'],
				"INCLUDE_SUBSECTIONS"=>'Y',
				"ACTIVE"=>"Y"
			);
			$rsElement =$be->GetList(array(), $arFilterElements, false, false, array(
				'ID', 'NAME','CODE',
				'PROPERTY_count_flats',
				'PROPERTY_flat_num',
				'PROPERTY_area_full',
				'PROPERTY_format',
				'PROPERTY_studio',
				'DETAIL_PAGE_URL'
			));
			while($arElement = $rsElement->GetNext()){
				//print_r($arElement);

				$sFlatInfo = '
					<div class="flat-info">
					<div class="flat-info-content">
					<div class="flat-info-header"><div class="count-room">'.$arElement['PROPERTY_COUNT_FLATS_VALUE'].'-комнатная</div>';
				if($arElement['PROPERTY_FORMAT_VALUE']!=''){
					$sFlatInfo.= '<div class="format">'.$arElement['PROPERTY_FORMAT_VALUE'].'</div>';
				}
				if($arElement['PROPERTY_STUDIO_VALUE']!=''){
					$sFlatInfo.= '<div class="studio">'.$arElement['PROPERTY_STUDIO_VALUE'].'</div>';
				}
				$sFlatInfo.='</div>';
				$sFlatInfo.='<div class="flat-info-footer">';
				$sFlatInfo.='<div class="flat-info-left">';
				$sFlatInfo.='<div class="flat-info-title">Площадь</div>';
				$sFlatInfo.='<div class="flat-info-value">'.$arElement['PROPERTY_AREA_FULL_VALUE'].'м<sup>2</sup></div>';
				$sFlatInfo.='</div>';
				$sFlatInfo.='<div class="flat-info-right">';
				$sFlatInfo.='<div class="flat-info-title">№ Квартиры</div>';
				$sFlatInfo.='<div class="flat-info-value">'.$arElement['PROPERTY_FLAT_NUM_VALUE'].'</div>';
				$sFlatInfo.='</div>';
				$sFlatInfo.='</div>';
				$sFlatInfo.='<div class="btn-learn-more"><a href="'.$arElement['DETAIL_PAGE_URL'].'" class="btn btn-big btn-default">Посмотреть квартиру</a></div><a class="btn-close"></a></div>';
				$sFlatInfo.='</div>';
				$sFlatInfo.='</div>';

				$arSectionElements['e'.$arElement['ID']] = array(
					'ID'=>$arElement['ID'],
					'NAME'=>$sFlatInfo,
					'coord'=>array(),
					'type'=>'polyline',
					'typeo' =>'element',
					'property'=>array(
						'url'=>$arElement['DETAIL_PAGE_URL'],
						'format_id'=>$arElement['PROPERTY_FORMAT_ENUM_ID'],
						'room_count'=>$arElement['PROPERTY_COUNT_FLATS_VALUE'],
						'studio'=>$arElement['PROPERTY_STUDIO_ENUM_ID'],
						'class'=>'room-'.$arElement['PROPERTY_COUNT_FLATS_VALUE'].($arElement['PROPERTY_STUDIO_ENUM_ID']!=''?'e':'').' '.
							'format-'.$arElement['PROPERTY_FORMAT_ENUM_ID'],
					)
				);
			}
			$arResult['SECTIONS'][$indSection]['flats'] = $arSectionElements;

			$arFilterSection =  Array(
				'IBLOCK_ID'=>$arParams['IBLOCK_ID'],
				'GLOBAL_ACTIVE'=>'Y',
				'SECTION_ID'=> $arBlock['SELECTED_SECTION']['IBLOCK_SECTION_ID']
			);
			$rsHouses = $bs->GetList(Array(), $arFilterSection, true);
			$arHouses = array();
			while($arHouse = $rsHouses->GetNext()) $arHouses[$arHouse['ID']] = array(
				'ID'=>$arHouse['ID'],
				'NAME'=>str_replace('Дом №', '', $arHouse['NAME']),
				'SECTION_PAGE_URL'=>$arHouse['SECTION_PAGE_URL']
			);


		}
	}





?>
<? if($arBlock['SELECTED_SECTION']['DEPTH_LEVEL']==$DEPTH_LEVEL_jk){?>
<div class="wrapper-outer ">
	<div class="wrapper-inner house-card gen-plan-map">
		<h1>Схема города</h1>
	<div id="map-genplan" class="map-object">
		<div class="map-overlay clearfix">
			<div  class="map-area fl-left">
				<img src="<?=$sPicturePath;?>" id="img">
				<svg id="svg-area" class="svg-area" width="100%" height="100%"></svg>
			</div>
		</div>
		<input type="hidden" value='<?=$arBlock['SELECTED_SECTION']['UF_SVGPOLY']?>' class="config-map">
			<input  type="hidden" value='<?=json_encode($arSectionsObj);?>' class="config-map-bd">
	</div>
		</div>
</div>
<?}else if($arBlock['SELECTED_SECTION']['DEPTH_LEVEL']==$DEPTH_LEVEL_section){?>

	<div class="wrapper-outer">
		<div class="wrapper-inner house-card kvartal-map">
			<h1>Секция <?=$arResult['NAME'];?></h1>


		</div>
	</div>

<?}else if($arBlock['SELECTED_SECTION']['DEPTH_LEVEL']==$DEPTH_LEVEL_house){
	?>



	<div class="wrapper-middle">
		<div class="wrapper-inner house-card house-card-map">
			<h1>Дом</h1>
	<!-- @todo:переадресовать на секцию	-->
		</div>
	</div>
	

<?}else{?>
	<div id="map-genplan" class="map-object">
		<div class="map-overlay">
			<div  class="map-area">
				<img src="<?=$sPicturePath;?>" id="img">
				<svg id="svg-area" class="svg-area" width="100%" height="100%"></svg>
			</div>
		</div>
		<input type="hidden" value='<?=$arBlock['SELECTED_SECTION']['UF_SVGPOLY']?>' class="config-map">
		<input  type="hidden" value='<?=json_encode($arSectionsObj);?>' class="config-map-bd">
	</div>

<?}?>

<pre>
<?


//print_r($arBlock);

?>

</pre>
