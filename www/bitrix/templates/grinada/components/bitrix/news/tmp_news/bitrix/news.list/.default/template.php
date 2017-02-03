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
$this->setFrameMode(true);?>




<?foreach($arResult["ITEMS"] as $arItem){?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<?
		$date = explode(' ', $arItem['DISPLAY_ACTIVE_FROM']);
		$img = $arItem['PREVIEW_PICTURE'];
		$imgUrl = is_array($img) ? $img['SRC'] : '/bitrix/templates/grinada/img/news/news_stab.jpg' ;
	?>
	<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="info-block">
		<div class="info-block__img-over">
			<div class="info-block__date-over">
				<div class="info-block__date">
					<div class="top-line">
						<div class="day"><?=$date[0]?></div>
						<div class="month"><?=$date[1]?></div>
					</div>
					<div class="year">‘<?=substr($date[2], 2)?></div>
				</div>
			</div>
			<div class="info-block__img" style="background-image: url(<?=$imgUrl?>);"></div>
		</div>
		<div class="info-block__txt">
			<h3><?=$arItem['PROPERTIES']['HEADER']['VALUE']['TEXT']?></h3>
			<p><?=$arItem['PREVIEW_TEXT']?></p>
		</div>
	</a>
<?}?>
