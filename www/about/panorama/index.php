<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Панорама");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/panorama.css');

?>
    <div class="panorama-page">
        <div class="big-figure circle green"></div>
        <div class="big-figure wave-yellow"></div>
        <h1 class="dark-green">Окружение</h1>
        <div class="gallery">
            <div class="gallery__tab tab-1 active">
                <div class="wrapper-main">
                    <div class="tab-header">
                        <div class="h1 dark-green">Панорама</div>
                        <h5>Наведите на фото и используйте мышку, чтобы вращать камеру или поменять угол обзора</h5>
                    </div>
                </div>
                <div class="panorama-over">
                    <div class="developer-logo"></div>
                    <div class="panorama__txt">очень<br>зеленый<br>район</div>
                    <div class="map-handle"><div class="arrow"></div></div>
                    <div class="panorama" id="pano"></div>
                </div>
            </div>
            <div class="gallery__tab tab-2">
                <div class="wrapper-main">
                    <div class="tab-header">
                        <div class="h1 dark-green">Видеоролик о&nbsp;проекте</div>
                    </div>
                </div>
                <div class="video muted">
                    <div class="video-wrapper"><video src="/video/video-main.mp4" id="video-main" muted></video></div>
                    <div class="btn-video"><div class="btn-video-icon"></div><div class="btn-video-title">Посмотреть видео</div></div>
                    <div class="btn-stop"></div>
                    <div class="btn-mute"></div>
                </div>
            </div>
            <div class="gallery__tab tab-3">
                <div class="wrapper-main">
                    <div class="tab-header">
                        <div class="h1 dark-green">Фотографии района</div>
                    </div>
                </div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "tmp_slider_photo",
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
                        "IBLOCK_ID" => "3",
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
            <div class="gallery__switch-over">
                <div class="gallery__switch">
                    <div class="switch__tab tab-1 active" data-tab="tab-1">панорама</div>
                    <div class="switch__tab tab-2" data-tab="tab-2"><span class="hidden-xs">посмотреть&nbsp;</span>видео</div>
                    <div class="switch__tab tab-3" data-tab="tab-3">фото<span class="hidden-xs">&nbsp;района</span></div>
                </div>
            </div>
        </div>
<!--        <div class="photos">-->
<!--            <div class="h1 dark-green">Фотографии района</div>-->
<!--            -->
<!--        </div>-->
        <div class="scroll-top "><a href="#">вернуться наверх</a></div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>