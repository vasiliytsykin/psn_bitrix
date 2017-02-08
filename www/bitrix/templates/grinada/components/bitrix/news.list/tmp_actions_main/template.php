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

$patterns = array('adv-flower', 'adv-wave', 'adv-fish');
$patternIndex = 0;

?>

<?foreach($arResult["ITEMS"] as $arItem){?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	
		$dateActiveTo = FormatDate('d.m.y', MakeTimeStamp($arItem['FIELDS']['DATE_ACTIVE_TO']));
		$props = $arItem['DISPLAY_PROPERTIES'];
	
	?>

	<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="action green-bar__action">
		<div class="action__date">до <?=$dateActiveTo?></div>
		<div class="action__main-line"><?=$props['TOP_LINE']['VALUE']['TEXT']?></div>
		<div class="action__extra-line"><?=$props['BOTTOM_LINE']['VALUE']['TEXT']?></div>
	</a>
	<div class="green-bar__pattern pattern static yellow anim-pattern" data-pattern="<?=$patterns[$patternIndex]?>"></div>
<?

	$patternIndex++;

}?>

