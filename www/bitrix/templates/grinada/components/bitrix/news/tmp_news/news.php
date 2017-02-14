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

global $arFilter;
$arSections = array();
$rsSection = CIBlockSection::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID" => $arParams["IBLOCK_ID"]), false);
while($arSection = $rsSection->GetNext()) {
	$arSections[$arSection['ID']] = $arSection;
}?>

<div class="news-page">
	<input type="hidden" class="ajax-url" value="/news_ajax.php">
	<div class="big-figure circle"></div>
	<div class="big-figure wave-right"></div>
	<h1 class="dark-green">Новости</h1>
	<div class="gallery">
		<div class="gallery__switch-over">
			<div class="gallery__switch">
				<? foreach($arSections as $arSection){
					$active = $arSection['ID'] == 2 ? 'active': '';
					?>
					<div class="switch__tab tab-<?=$arSection['ID']?> <?=$active?>" data-tab="tab-<?=$arSection['ID']?>">
						<span class="hidden-sm hidden-xs"><?=$arSection['NAME'];?></span>
						<span class="visible-sm-inline visible-xs-inline"><?=$arSection['NAME'];?></span>
					</div>
				<?}?>
			</div>
		</div>
		<div class="wrapper-main">
			<div class="wrapper-inner">
				<?foreach($arSections as $arSection){
					$active = $arSection['ID'] == 2 ? 'active': '';
					$arFilter = array('SECTION_ID' => $arSection['ID']);?>
					<div class="gallery__tab tab-<?=$arSection['ID']?> <?=$active?>" data-tab="<?=$arSection['ID']?>">
						<div class="news-list result-items">
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"",
								Array(
									"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
									"IBLOCK_ID" => $arParams["IBLOCK_ID"],
									"NEWS_COUNT" => $arParams["NEWS_COUNT"],
									"SORT_BY1" => $arParams["SORT_BY1"],
									"SORT_ORDER1" => $arParams["SORT_ORDER1"],
									"SORT_BY2" => $arParams["SORT_BY2"],
									"SORT_ORDER2" => $arParams["SORT_ORDER2"],
									"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
									"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
									"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
									"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
									"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
									"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
									"SET_TITLE" => $arParams["SET_TITLE"],
									"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
									"MESSAGE_404" => $arParams["MESSAGE_404"],
									"SET_STATUS_404" => $arParams["SET_STATUS_404"],
									"SHOW_404" => $arParams["SHOW_404"],
									"FILE_404" => $arParams["FILE_404"],
									"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
									"CACHE_TYPE" => $arParams["CACHE_TYPE"],
									"CACHE_TIME" => $arParams["CACHE_TIME"],
									"CACHE_FILTER" => $arParams["CACHE_FILTER"],
									"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
									"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
									"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
									"PAGER_TITLE" => $arParams["PAGER_TITLE"],
									"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
									"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
									"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
									"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
									"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
									"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
									"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
									"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
									"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
									"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
									"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
									"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
									"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
									"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
									"FILTER_NAME" => 'arFilter',
									"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
									"CHECK_DATES" => $arParams["CHECK_DATES"],
								),
								$component
							);?>
						</div>
					</div>
				<?}?>
			</div>
		</div>
	</div>
	<div class="sign-in">
		<h3>Подпишитесь на нашу рассылку, чтобы&nbsp;быть&nbsp;в&nbsp;курсе последних новостей и акций</h3>
		<form action="#" class="sign-in__form">
			<input type="email" name="e-mail" placeholder="E-mail">
			<input type="checkbox" id="agreement">
			<label for="agreement">Я согласен на <span class="terms">условия по получению email-рассылки</span></label>
			<input type="submit" value="Подписаться на рассылку" class="btn-default btn-medium btn-green">
		</form>
	</div>
	<div class="scroll-top "><a href="#">вернуться наверх</a></div>
</div>

