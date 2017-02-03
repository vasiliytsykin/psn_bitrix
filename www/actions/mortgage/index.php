<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ипотека");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/mortgage.css');
?>

    <div class="mortgage-page">
        <div class="big-figure wave-right"></div>
        <div class="big-figure circle"></div>
        <div class="wrapper-main">
            <h1 class="dark-green">Ипотека</h1>
            <div class="top-banner">
                <div class="top-banner__img"></div>
                <div class="top-banner__txt-over">
                    <div class="top-banner__txt">
                        <h2>Для квартиры вашей&nbsp;мечты</h2>
                        <h5>Заполните заявку на ипотеку сейчас и мы подберем самое выгодное предложение для вас!</h5>
                        <div class="btn-default btn-medium btn-white">Отправить заявку</div>
                    </div>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "tmp_bank_list",
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
                    "IBLOCK_ID" => "11",
                    "IBLOCK_TYPE" => "content",
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
                    "PROPERTY_CODE" => array("DEPOSIT","PERCENT","TERM",""),
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
            <div class="wrapper-inner">
                <div class="mortgage-calc-over">
                    <form class="mortgage-calc">
                        <h2>Ипотечный калькулятор</h2>
                        <h5>Заполните форму и узнайте размер вашего месячного платежа</h5>
                        <div class="inputs">
                            <div class="input-group">
                                <label>Стоимость жилья, руб</label>
                                <input type="text" name="price">
                            </div>
                            <div class="input-group">
                                <label>Первоначальный взнос, руб.</label>
                                <input type="text" name="deposit">
                            </div>
                            <div class="input-group">
                                <label>Ставка, %</label>
                                <div class="select-box">
                                    <input type="hidden" name="percent">
                                    <div class="caption"></div>
                                    <div class="options">
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:news.list",
                                            "tmp_calc_options",
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
                                                "IBLOCK_ID" => "11",
                                                "IBLOCK_TYPE" => "content",
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
                                                "PROPERTY_CODE" => array("DEPOSIT","PERCENT","TERM",""),
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
                            </div>
                            <div class="input-group">
                                <label>Срок кредитования, лет</label>
                                <input type="text" name="term">
                            </div>
                            <div class="input-group">
                                <label>Ежемесячный платеж, руб.</label>
                                <div class="result orange"></div>
                            </div>
                            <div class="input-group">
                                <a href="#" class="btn-default btn-medium btn-green">Отправить заявку</a>
                            </div>
                        </div>
                        <div class="notice">
                            Данный расчет является предварительным.<br>
                            Для получения более точной информации обратитесь в отделение банка.
                        </div>
                    </form>
                </div>
            </div>
            <div class="contacts">
                <h3>По любым вопросам звоните нам,<br class="hidden-xs">
                    мы расскажем обо всём, что&nbsp;вас&nbsp;интересует
                </h3>
                <div class="phone">+7 495  800 41 48</div>
                <a href="#" class="btn-default btn-medium btn-green">Заказать звонок</a>
            </div>
            <div class="scroll-top "><a href="#">вернуться наверх</a></div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>