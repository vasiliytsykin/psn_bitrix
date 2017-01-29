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
<div class="block-about-slider">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="flat-plan" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

		<a href="#flat-id<?=$arItem['ID']?>">
			<div class="square">пример</div>
			<div class="flat-type green">
				<?=htmlspecialchars_decode($arItem["NAME"]);?>
			</div>
			<?if(isset($arItem["DISPLAY_PROPERTIES"]['square'])){?>
			<div class="square">Площадь</div>
			<div class="square-value"><?=$arItem["DISPLAY_PROPERTIES"]['square']['VALUE']?> м<sup>2</sup></div>
			<?}?>
			<div class="flat-plan-img" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>
	
		</a>
	</div>
<?endforeach;?>
</div>

<div style="display:none;">
<?foreach($arResult["ITEMS"] as $arItem){?>
<div id="flat-id<?=$arItem['ID']?>" class="flat-window">

<div class="square">пример</div>
			<div class="flat-type green">
				<?=htmlspecialchars_decode($arItem["NAME"]);?>
			</div>
			<?if(isset($arItem["DISPLAY_PROPERTIES"]['square'])){?>
			<div class="square">Площадь</div>
			<div class="square-value"><?=$arItem["DISPLAY_PROPERTIES"]['square']['VALUE']?> м<sup>2</sup></div>
			<?}?>
			<div class="flat-plan-img" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>
</div>

<?}?>
</div>