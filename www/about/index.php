<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О проекте");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/about.css');
?>

	<div class="about-page">
		<div class="pattern big-pattern pattern-6 dark-green anim-pattern" data-pattern="pattern-6"></div>
		<div class="pattern big-pattern pattern-1 light-green anim-pattern" data-pattern="pattern-1"></div>
		<h1 class="dark-green">О жилом квартале</h1>
		<div class="block-features">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"tmp_about",
				Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "Y",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array("",""),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "4",
					"IBLOCK_TYPE" => "visual",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "20",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array("",""),
					"SET_BROWSER_TITLE" => "Y",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "Y",
					"SET_META_KEYWORDS" => "Y",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "Y",
					"SHOW_404" => "N",
					"SORT_BY1" => "SORT",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "ASC"
				)
			);?>
		</div>
		<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
				"AREA_FILE_SHOW" => "file",
				"AREA_FILE_SUFFIX" => "",
				"PATH" => '/bitrix/templates/grinada/include/about_text.php',
				"AREA_FILE_RECURSIVE" => "Y",
				"EDIT_TEMPLATE" => "standard.php"
			)
		);?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:news",
			"tmp_gallery_about",
			Array(
				"ADD_ELEMENT_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "Y",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"BROWSER_TITLE" => "-",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
				"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
				"DETAIL_DISPLAY_TOP_PAGER" => "N",
				"DETAIL_FIELD_CODE" => array("",""),
				"DETAIL_PAGER_SHOW_ALL" => "Y",
				"DETAIL_PAGER_TEMPLATE" => "",
				"DETAIL_PAGER_TITLE" => "Страница",
				"DETAIL_PROPERTY_CODE" => array("",""),
				"DETAIL_SET_CANONICAL_URL" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "13",
				"IBLOCK_TYPE" => "visual",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
				"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
				"LIST_FIELD_CODE" => array("",""),
				"LIST_PROPERTY_CODE" => array("header","sub_header",""),
				"MESSAGE_404" => "",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"NEWS_COUNT" => "100",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PREVIEW_TRUNCATE_LEN" => "",
				"SEF_FOLDER" => "/about/",
				"SEF_MODE" => "Y",
				"SEF_URL_TEMPLATES" => Array("detail"=>"#ELEMENT_ID#/","news"=>"","section"=>""),
				"SET_LAST_MODIFIED" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "Y",
				"SHOW_404" => "N",
				"SORT_BY1" => "NAME",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "ASC",
				"USE_CATEGORIES" => "N",
				"USE_FILTER" => "N",
				"USE_PERMISSIONS" => "N",
				"USE_RATING" => "N",
				"USE_REVIEW" => "N",
				"USE_RSS" => "N",
				"USE_SEARCH" => "N",
				"USE_SHARE" => "N"
			)
		);?>
		<?

		$arFilter = array("ACTIVE" => "Y", "SECTION_GLOBAL_ACTIVE" => "Y");

		$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"tmp_min_prices",
			Array(
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"ADD_SECTIONS_CHAIN" => "Y",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array("",""),
				"FILTER_NAME" => "arFilter",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "7",
				"IBLOCK_TYPE" => "catalog",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "100",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array("Price","Rooms",""),
				"SET_BROWSER_TITLE" => "Y",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "Y",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC"
			)
		);?>
		<div class="contacts">
			<h3>По любым вопросам звоните нам,<br>
				мы расскажем обо всём, что вас интересует
			</h3>
			<div class="phone">+7 495  800 41 48</div>
			<a href="#" class="btn-default btn-medium btn-green feedback-open call">Заказать звонок</a>
		</div>
		<div class="scroll-top "><a href="#">вернуться наверх</a></div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>