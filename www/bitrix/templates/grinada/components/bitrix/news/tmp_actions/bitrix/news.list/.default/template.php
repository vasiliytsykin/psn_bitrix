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
	?>
	<?
		$dateFrom = FormatDate('j F', MakeTimeStamp($arItem['FIELDS']['DATE_ACTIVE_FROM']));
		$dateTo = FormatDate('j F', MakeTimeStamp($arItem['FIELDS']['DATE_ACTIVE_TO']));
	?>
	<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="info-block">
		<div class="info-block__content">
			<div class="info-block__txt-over">
				<div class="info-block__txt">
					<h2><?=$arItem['PROPERTIES']['HEADER']['VALUE']['TEXT']?></h2>
					<h5>С <?=$dateFrom?> по <?=$dateTo?></h5>
					<p>
						<?=htmlspecialchars_decode($arItem['PREVIEW_TEXT'])?>
					</p>
				</div>
			</div>
			<div class="info-block__img" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);"></div>
		</div>
	</a>

<?}?>
