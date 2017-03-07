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
require_once($_SERVER['DOCUMENT_ROOT'].'/include/section_nav.php');
?>

<?
$arMainOffers = array();

foreach ($arResult["ITEMS"] as $arItem){

	$roomCount = $arItem['DISPLAY_PROPERTIES']['Rooms']['VALUE'];
	if(isset($arMainOffers[$roomCount])){
		$price = $arItem['DISPLAY_PROPERTIES']['Price']['VALUE'];
		$minPrice = $arMainOffers[$roomCount]['DISPLAY_PROPERTIES']['Price']['VALUE'];
		if($price < $minPrice)
			$arMainOffers[$roomCount] = $arItem;

	}
	else $arMainOffers[$roomCount] = $arItem;

}

ksort($arMainOffers);

?>



<div class="block-prices">
	<h2 class="dark-green">Стоимость квартир</h2>
	<div class="params">
		<?foreach($arMainOffers as $arItem){?>
			<?
			$flatProps = $arItem['DISPLAY_PROPERTIES'];
			$roomCount = $flatProps['Rooms']['VALUE'];
			$price = round($flatProps['Price']['VALUE'] / 1000000, 1);
			?>
				<div class="param">
					<div class="param__name"><?=($roomCount > 0 ? $roomCount.'-комнатная' : 'студия')?></div>
					<div class="param__value">от <?=$price?> млн руб.</div>
				</div>
			<?}?>
	</div>
</div>
