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

<?

$banks = array();
$rsSection = CIBlockSection::GetList(Array(), Array("IBLOCK_ID" => $arParams['IBLOCK_ID']));

while($result = $rsSection->GetNext()) {

	$bank = array();

	$bank['name'] = $result['NAME'];
	$bank['code'] = $result['CODE'];
	$bank['img'] = CFile::GetPath($result['PICTURE']);
	$bank['plans'] = array();

	$banks[$bank['code']] = $bank;


}

foreach($arResult["ITEMS"] as $arItem){

	$rsSection = CIBlockSection::GetList(Array(), Array("IBLOCK_ID" => $arItem['IBLOCK_ID'], "ID" => $arItem["IBLOCK_SECTION_ID"]));
	if($result = $rsSection->GetNext()){
		$code = $result['CODE'];
		$percent = $arItem['DISPLAY_PROPERTIES']['PERCENT']['VALUE'];
		array_push($banks[$code]['plans'], $percent);
	}?>
<?

}?>


<?foreach($banks as $bank){?>
	<div class="option">
		<div class="bank-logo" style="background-image: url(<?=$bank['img']?>);"></div>
		<div class="sub-options">
			<?foreach ($bank['plans'] as $percent){?>
			<div class="sub-option"><?=$percent?>%</div>
			<?}?>
		</div>
	</div>
<?}?>
