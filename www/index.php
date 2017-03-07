<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/index.css');
?>

            <div class="main-page">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "tmp_main_slider",
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
                        "IBLOCK_ID" => "2",
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
                        "SORT_BY1" => "NAME",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "ASC",
                        "SORT_ORDER2" => "ASC"
                    )
                );?>
                <div class="green-bar">
                    <div class="green-bar__content">
                        <div class="green-bar__pattern pattern static yellow _anim-pattern" data-pattern="adv-bird">
                            <div id="Stage-main_bird" class="main_bird"></div>
                        </div>
                        <div class="action green-bar__action">
                            <div class="action__main-line">ВЕРЕВОЧНЫЙ ПАРК</div>
                            <div class="action__extra-line">для детей и взрослых</div>
                        </div>
                        <div class="green-bar__pattern pattern static yellow _anim-pattern" data-pattern="adv-flower">
                            <div id="Stage-main_flower" class="main_flower"></div>
                        </div>
                        <div class="action green-bar__action">
                            <div class="action__main-line">10 МИНУТ</div>
                            <div class="action__extra-line">пешком до метро</div>
                        </div>
                        <div class="green-bar__pattern pattern static yellow _anim-pattern" data-pattern="adv-wave">
                            <div id="Stage-main_wave" class="main_wave"></div>
                        </div>
                        <div class="action green-bar__action">
                            <div class="action__main-line">ЛЕТНЯЯ ОРАНЖЕРЕЯ</div>
                            <div class="action__extra-line">для будущего урожая</div>
                        </div>
                        <div class="green-bar__pattern pattern static yellow _anim-pattern" data-pattern="adv-fish">
                            <div id="Stage-main_fish" class="main_fish"></div>
                        </div>
<!--                        --><?//$APPLICATION->IncludeComponent(
//                            "bitrix:news.list",
//                            "tmp_actions_main",
//                            Array(
//                                "ACTIVE_DATE_FORMAT" => "d.m.y G:i",
//                                "ADD_SECTIONS_CHAIN" => "Y",
//                                "AJAX_MODE" => "N",
//                                "AJAX_OPTION_ADDITIONAL" => "",
//                                "AJAX_OPTION_HISTORY" => "N",
//                                "AJAX_OPTION_JUMP" => "N",
//                                "AJAX_OPTION_STYLE" => "Y",
//                                "CACHE_FILTER" => "N",
//                                "CACHE_GROUPS" => "Y",
//                                "CACHE_TIME" => "36000000",
//                                "CACHE_TYPE" => "A",
//                                "CHECK_DATES" => "Y",
//                                "DETAIL_URL" => "",
//                                "DISPLAY_BOTTOM_PAGER" => "Y",
//                                "DISPLAY_DATE" => "Y",
//                                "DISPLAY_NAME" => "Y",
//                                "DISPLAY_PICTURE" => "Y",
//                                "DISPLAY_PREVIEW_TEXT" => "Y",
//                                "DISPLAY_TOP_PAGER" => "N",
//                                "FIELD_CODE" => array("DATE_ACTIVE_TO",""),
//                                "FILTER_NAME" => "",
//                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
//                                "IBLOCK_ID" => "8",
//                                "IBLOCK_TYPE" => "-",
//                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
//                                "INCLUDE_SUBSECTIONS" => "Y",
//                                "MESSAGE_404" => "",
//                                "NEWS_COUNT" => "3",
//                                "PAGER_BASE_LINK_ENABLE" => "N",
//                                "PAGER_DESC_NUMBERING" => "N",
//                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//                                "PAGER_SHOW_ALL" => "N",
//                                "PAGER_SHOW_ALWAYS" => "N",
//                                "PAGER_TEMPLATE" => ".default",
//                                "PAGER_TITLE" => "Новости",
//                                "PARENT_SECTION" => "",
//                                "PARENT_SECTION_CODE" => "",
//                                "PREVIEW_TRUNCATE_LEN" => "",
//                                "PROPERTY_CODE" => array("TOP_LINE","BOTTOM_LINE",""),
//                                "SET_BROWSER_TITLE" => "Y",
//                                "SET_LAST_MODIFIED" => "N",
//                                "SET_META_DESCRIPTION" => "Y",
//                                "SET_META_KEYWORDS" => "Y",
//                                "SET_STATUS_404" => "N",
//                                "SET_TITLE" => "Y",
//                                "SHOW_404" => "N",
//                                "SORT_BY1" => "ACTIVE_FROM",
//                                "SORT_BY2" => "SORT",
//                                "SORT_ORDER1" => "DESC",
//                                "SORT_ORDER2" => "ASC"
//                            )
//                        );?>
                    </div>
                </div>
                <div class="wrapper-inner">
                    <div class="sign-in">
                        <a href="#" class="dark-green">Подписаться на новости и акции</a><span class="envelope"></span>
                    </div>
                    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "",
                            "PATH" => '/bitrix/templates/grinada/include/main_page_lead_text.php',
                            "AREA_FILE_RECURSIVE" => "Y",
                            "EDIT_TEMPLATE" => "standard.php"
                        )
                    );?>
                    <div class="benefits">
                        <div class="pattern big-pattern pattern-1 dark-green anim-pattern" data-pattern="pattern-1"></div>
                        <div class="pattern big-pattern pattern-4 light-green anim-pattern" data-pattern="pattern-4"></div>
                        <div class="big-figures">
                            <div class="big-figure circle"></div>
                            <div class="big-figure circle"></div>
                            <div class="big-figure wave-right"></div>
                        </div>
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "",
                                "PATH" => '/bitrix/templates/grinada/include/main_page_benefits.php',
                                "AREA_FILE_RECURSIVE" => "Y",
                                "EDIT_TEMPLATE" => "standard.php"
                            )
                        );?>
                    </div>
                    <div class="show-more--main">
                        <a href="/about/" class="btn-default btn-medium btn-green">Показать еще</a>
                    </div>
                </div>
                <div class="main-offer">
                    <h2>Предложение дня</h2>
                    <div class="main-offer__content">
                        <?

                        $arFilter = array("ACTIVE" => "Y", "SECTION_GLOBAL_ACTIVE" => "Y");

                        $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "tmp_main_offer",
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
                                "PROPERTY_CODE" => array("Floor","Price","Rooms","SpaceDesign","TypeForSite","main_offer",""),
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
                    </div>
                    <div class="show-all"><a href="/catalog/" class="dark-green">Показать все</a></div>
                </div>
                <div class="scroll-top "><a href="#">вернуться наверх</a></div>
            </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>