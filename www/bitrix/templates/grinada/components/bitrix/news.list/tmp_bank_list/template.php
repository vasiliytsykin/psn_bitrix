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

	$banks[$bank['code']] = $bank;


}

foreach($arResult["ITEMS"] as $arItem){

	$rsSection = CIBlockSection::GetList(Array(), Array("IBLOCK_ID" => $arItem['IBLOCK_ID'], "ID" => $arItem["IBLOCK_SECTION_ID"]));
	if($result = $rsSection->GetNext()){

		$code = $result['CODE'];
		$plan = array();
		$plan['percent'] = $arItem['DISPLAY_PROPERTIES']['PERCENT']['VALUE'];
		$plan['term'] = $arItem['DISPLAY_PROPERTIES']['TERM']['VALUE'];
		$plan['deposit'] = $arItem['DISPLAY_PROPERTIES']['DEPOSIT']['VALUE'];

		if(!isset($banks[$code]['plan']) || $plan['percent'] < $banks[$code]['plan']['percent'])
			$banks[$code]['plan'] = $plan;


	}?>
<?

}?>

<div class="bank-table-over">
	<div class="bank-table">
		<div class="bank-table__row bank-table__head">
			<div class="cell">Банки</div>
			<div class="cell">Ставка</div>
			<div class="cell">Первоначальный <br class="visible-sm">взнос</div>
			<div class="cell">Срок <br class="visible-sm">кредитования</div>
		</div>
		<?foreach($banks as $bank){?>

			<div class="bank-table__row">
				<div class="cell bank-logo" style="background-image: url(<?=$bank['img']?>);"></div>
				<div class="cell"><span class="cell__header visible-xs">Ставка</span><?=$bank['plan']['percent']?>%</div>
				<div class="cell"><span class="cell__header visible-xs">Первоначальный <br>взнос</span><?=$bank['plan']['term']?>%</div>
				<div class="cell"><span class="cell__header visible-xs">Срок <br>кредитования</span><?=$bank['plan']['deposit']?> лет</div>
			</div>
		<?}?>
	</div>
</div>
