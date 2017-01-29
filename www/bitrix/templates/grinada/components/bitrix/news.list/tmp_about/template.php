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

$features = array();
foreach($arResult["ITEMS"] as $arItem){


	$features[] = $arItem;
}
?>


<? for($i = 0; $i < 3; $i++) {?>
	<div class="block-features-row">
		<div class="wrapper-outer">
			<? for($j = 0; $j < 3; $j++) {

				$feature = $features[$i*3 + $j];
				$this->AddEditAction($feature['ID'], $feature['EDIT_LINK'], CIBlock::GetArrayByID($feature["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($feature['ID'], $feature['DELETE_LINK'], CIBlock::GetArrayByID($feature["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));


				?>
				<div class="block-features-item" id="<?=$this->GetEditAreaId($feature['ID']);?>">
					<a href="#" class="block-features-open-text"></a>
					<div class="block-features-item-inner">
						<h2><?=$feature['NAME']?></h2>
						<?if(!empty($feature['PREVIEW_TEXT'])) {?>
							<div class="short-desc"><?=$feature['PREVIEW_TEXT']?></div>
						<?}?>
					</div>

					<div class="detail-desc-over">
						<div class="btn-cross"></div>
						<div class="detail-desc">
							<?if(!empty($feature['PREVIEW_TEXT'])) {?>
								<div class="detail-desc-h"><?=$feature['PREVIEW_TEXT']?></div>
							<?}?>
							<p>
								<?=$feature['DETAIL_TEXT']?>
							</p>
						</div>
					</div>
				</div>
			<?}?>
		</div>
	</div>
<?}?>