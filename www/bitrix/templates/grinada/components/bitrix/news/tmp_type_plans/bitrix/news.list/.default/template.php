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
?>
<?foreach($arResult["ITEMS"] as $arItem){?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


	$id_plan = $arItem["DISPLAY_PROPERTIES"]['name_type']['VALUE'];
	$q  = 'SELECT IBLOCK_ELEMENT_ID, VALUE BuildingNumber FROM b_iblock_element_property WHERE IBLOCK_ELEMENT_ID IN (
	SELECT IBLOCK_ELEMENT_ID FROM b_iblock_element_property
	WHERE IBLOCK_PROPERTY_ID = 12 AND VALUE LIKE "'.$id_plan.'") AND IBLOCK_PROPERTY_ID = 8 GROUP BY VALUE';
$arInHouses =array();
	$resHouses = $DB->Query($q, false, $err_mess.__LINE__);
	while ($arHouses = $resHouses->Fetch()){
		//print_r($arHouses);
		$arInHouses[] = '№'.$arHouses['BuildingNumber'];
	}

	$ar_Filter = array(
		"IBLOCK_ID" =>7,
		'PROPERTY' =>array('TypeForSite' => $arItem["DISPLAY_PROPERTIES"]['name_type']['VALUE']),
		"ACTIVE"=>"Y"
	);
	$activeElements =  CIBlockSection::GetSectionElementsCount(7, $ar_Filter);
		$iMininmal = 0;
	if($activeElements>0){
		$arFilter =array(
			"IBLOCK_ID" =>7,
			"ACTIVE"=>"Y",
			'PROPERTY_TypeForSite' => $arItem["DISPLAY_PROPERTIES"]['name_type']['VALUE']
		);
		$res = CIBlockElement::GetList(array("PROPERTY_Price"=>"ASC"), $arFilter, false, Array("nPageSize"=>50), array('PROPERTY_Price'));
		if($arMininmal = $res->GetNext()){
			$iMininmal = $arMininmal['PROPERTY_PRICE_VALUE'];
		}
	}
	?>
	<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<? if(isset($arItem["DISPLAY_PROPERTIES"]['svg'])){?>
			<div class="item__img" style="background-image: url(<?=($arItem["DISPLAY_PROPERTIES"]['svg']['FILE_VALUE']['SRC']);?>);"></div>
			<? unset($arItem["DISPLAY_PROPERTIES"]['svg']);?>
		<?}?>
		<div class="item__desc">
			<div class="plan-type h4 dark-green">планировка<br><?=$arItem["NAME"]?></div>

			<div class="h4">доступна в&nbsp;корпусах:<div class="value"><?=implode(', ', $arInHouses);?></div></div>
			<div class="h4">стоимость<div class="value price">от <?=$iMininmal;?> <span class="ruble">a</span></div></div>
			<div class="h4">Площадь<div class="value"><?=$arItem["DISPLAY_PROPERTIES"]['square']['VALUE']?> м<sup>2</sup></div></div>
		</div>
		<div class="hover-block">
			<div class="h4">Доступно предложений:</div>
			<div class="h1"><?=$activeElements;?></div>
		</div>
	</a>
<?}?>
