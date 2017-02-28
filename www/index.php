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
                        <div class="green-bar__pattern pattern static yellow anim-pattern" data-pattern="adv-bird"></div>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "tmp_actions_main",
                            Array(
                                "ACTIVE_DATE_FORMAT" => "d.m.y G:i",
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
                                "FIELD_CODE" => array("DATE_ACTIVE_TO",""),
                                "FILTER_NAME" => "",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "IBLOCK_ID" => "8",
                                "IBLOCK_TYPE" => "-",
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
                                "PARENT_SECTION_CODE" => "",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "PROPERTY_CODE" => array("TOP_LINE","BOTTOM_LINE",""),
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
                </div>
                <div class="wrapper-inner">
                    <div class="sign-in">
                        <a href="#" class="dark-green">Подписаться на новости и акции</a><span class="envelope"></span>
                    </div>
                    <div class="info-block info-block--main">
                        <h2 class="dark-green">Гринада – новый жилой квартал комфорткласса</h2>
                        <div class="info-block__img" style="background-image: url(/bitrix/templates/grinada/img/main/family-circle.png);"></div>
                        <div class="info-block__txt">
                            <p>Жилой квартал «Гринада» расположен в&nbsp;10 минутах пешком от станции метро "Бульвар Дмитрия Донского" и&nbsp;непосредственно на границе Бутовского лесопарка.</p>
                            <p>На участке площадью 6,65 га, в одном из&nbsp;самых зеленых районов Москвы, строится жилой квартал комфорткласса площадью 170 тыс. м2, состоящий из 5 домов переменной этажности, а также детским садом и школой на 780 мест.</p>
                        </div>
                        <div class="big-figure wave-left static"></div>
                    </div>
                    <div class="benefits">
                        <div class="pattern big-pattern pattern-1 dark-green anim-pattern" data-pattern="pattern-1"></div>
                        <div class="pattern big-pattern pattern-4 light-green anim-pattern" data-pattern="pattern-4"></div>
                        <div class="big-figures">
                            <div class="big-figure circle"></div>
                            <div class="big-figure circle"></div>
                            <div class="big-figure wave-right"></div>
                        </div>
                        <div class="info-list benefit-list">
                            <div class="info-block">
                                <div class="info-block__content">
                                    <div class="info-block__txt-over">
                                        <div class="info-block__txt">
                                            <h2>Транспортная доступность</h2>
                                            <h5>10 минут пешком до метро</h5>
                                            <p>
                                                10 пешком от станции метро «Бульвар Дмитрия Донского»,
                                                2 км от МКАД и два шоссе ведущих в&nbsp;центр, все это дает
                                                отличную возможность жить в&nbsp;городе и прогнозировать свое время.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info-block__img" style="background-image: url(/bitrix/templates/grinada/img/main/sreda.jpg);"></div>
                                </div>
                            </div>
                            <div class="info-block">
                                <div class="info-block__content">
                                    <div class="info-block__txt-over">
                                        <div class="info-block__txt">
                                            <h2>Инфраструктура</h2>
                                            <h5>Все необходимое — рядом</h5>
                                            <p>
                                                Северное Бутово — молодой и уже обжитой район с&nbsp;развитой инфраструктурой.
                                                Сегодня в нем есть все самое необходимое в шаговой доступности: магазины,
                                                аптеки, салоны красоты и спортивные студии для детей и взрослых.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info-block__img" style="background-image: url(/bitrix/templates/grinada/img/main/infrastructura.jpg);"></div>
                                </div>
                            </div>
                            <div class="info-block">
                                <div class="info-block__content">
                                    <div class="info-block__txt-over">
                                        <div class="info-block__txt">
                                            <h2>Безопасность</h2>
                                            <h5>Закрытая территория и дворы без машин</h5>
                                            <p>
                                                Жилой квартал «Гринада» спроектирован по принципу «двор без машин» и с закрытой территорией,
                                                которая будет оборудована самой современной системой контроля доступа и видеонаблюдения.
                                                Парковка будет вынесена на отдельную часть территории.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info-block__img" style="background-image: url(/bitrix/templates/grinada/img/main/home.jpg);"></div>
                                </div>
                            </div>
                            <div class="info-block">
                                <div class="info-block__content">
                                    <div class="info-block__txt-over">
                                        <div class="info-block__txt">
                                            <h2>Экология</h2>
                                            <h5>Рядом сой лес</h5>
                                            <p>
                                                Район Северное Бутово по праву считается одним из самых экологически чистых районов Москвы,
                                                так&nbsp;как расположен на самой высокой её точке. Район наполнен свежим и чистым воздухом, который
                                                вдохновляет на новые открытия и его хочется вдохнуть полной грудью, выйдя ранним утром на&nbsp;балкон.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info-block__img" style="background-image: url(/bitrix/templates/grinada/img/main/family.jpg);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="show-more">
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