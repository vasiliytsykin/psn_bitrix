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

	<div class="slide-block sub">
		<div class="slide-block__header">
			<div class="trigger"><span class="name h2"><?=$arItem['NAME']?></span></div>
		</div>
		<div class="slide-block__content partner-info">
			<div class="wrapper-main">
				<div class="info-block">
					<div class="info-block__img">
						<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="ahr">
					</div>
					<div class="info-block__txt">
						<p>
							<?=$arItem['PREVIEW_TEXT']?>
						</p>
						<?$link = $arItem['PROPERTIES']['LINK']['VALUE'];?>
						<a href="http://<?=$link?>" target="_blank" class="dark-green"><?=$link?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?}?>

