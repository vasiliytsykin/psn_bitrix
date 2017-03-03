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

<div class="gallery__slider big-slider">
	<?foreach($arResult["ITEMS"] as $arItem){?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<?

			$props = $arItem['DISPLAY_PROPERTIES'];
			$header = $props['header']['VALUE'];
			$subHeader = $props['subHeader']['VALUE'];
			$imgUrl = $arItem['PREVIEW_PICTURE']['SRC'];

		?>
		<div class="gallery__slide slide" style="background-image: url(<?=$imgUrl?>);">
			<div class="gallery__slide__txt">
				<div class="h1"><?=$header?></div>
				<h5><?=$subHeader?></h5>
			</div>
		</div>
	<?}?>
</div>