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
$rsPlans = CIBlockElement::GetList(array(), array('IBLOCK_CODE' => 'flat_plan', 'ACTIVE' => 'Y'), false, false, array('ID', 'NAME', 'CODE', 'PROPERTY_svg', 'PROPERTY_name_type'));
$plans = array();
while($plan = $rsPlans->GetNext()){

	$plans[$plan['PROPERTY_NAME_TYPE_VALUE']] = array('CODE' => $plan['CODE'], 'NAME' => $plan['NAME'], 'IMG' => CFile::GetPath($plan['PROPERTY_SVG_VALUE']));

}


$pictures = array(
	'/bitrix/templates/grinada/img/main/flat-img.jpg',
	'/bitrix/templates/grinada/img/main/flat-img_2.jpg'
);

$counter = 0;

?>

<?foreach($arResult["ITEMS"] as $arItem){?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

	$flatProps = $arItem['DISPLAY_PROPERTIES'];
	$roomCount = $flatProps['Rooms']['VALUE'];
	$floor = $flatProps['Floor']['VALUE'];
	$square = $flatProps['SpaceDesign']['VALUE'];
	$price = $flatProps['Price']['VALUE'];
	$planUrl = $plans[$flatProps['TypeForSite']['VALUE']]['IMG'];

	?>

	<div class="main-offer__item">
		<div class="main-offer__graphics main-offer__plan" style="background-image: url(<?=$planUrl?>);"></div>
		<div class="main-offer__info">
			<div class="room-count light-green"><?=$roomCount?>-комнатная</div>
			<div class="price">12 460 000 р.</div>
			<div class="params">
				<div class="param">
					<div class="param__name">Этаж</div>
					<div class="param__value"><?=$floor?></div>
				</div>
				<div class="param">
					<div class="param__name">Площадь</div>
					<div class="param__value"><?=$square?> м<sup>2</sup></div>
				</div>
			</div>
			<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="btn-default btn-medium btn-green">Карточка квартиры</a>
		</div>
		<div class="main-offer__graphics main-offer__img" style="background-image: url(<?=$pictures[$counter % 2]?>);"></div>
	</div>

<?

	$counter++;

}?>
