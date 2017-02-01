<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule( "iblock" );


$flatFilter = $_REQUEST['filter'];

foreach ($flatFilter as $key => $value) {
    $newKey = '';
    $newValue = $value;
    if(strpos($key, 'Furnish') !== false ){
        if($value == 'Y')
            $newKey = '!'.$newKey;
        $newValue = false;
    }
    else if ($key != 'BuildingNumber') {
        $newValue = explode('-', $value);
        $newKey = $newKey . '><';
    }
    $newKey = $newKey . 'PROPERTY_' . $key;
    $flatFilter[$newKey] = $newValue;
    unset($flatFilter[$key]);
}

?>


<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "tmp_filter_result_table",
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
        "FILTER_NAME" => "flatFilter",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "7",
        "IBLOCK_TYPE" => "catalog",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "3",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "zhk-grinada",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("ApartmentFurnish","BeforeBtiNumber","BuildingNumber","Floor","Rooms","SectionNumber","SpaceDesign",""),
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