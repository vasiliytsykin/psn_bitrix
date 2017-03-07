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

function getDeclension($value){

    $peopleEndings = array('', 'а');
    $watchEndings = array('ит', 'ят');

    if($value%100>4 && $value%100<20 || $value%10 > 4 || $value%10 == 0 || $value%10 == 1)
        return array($peopleEndings[0], $watchEndings[0]);
    else return array($peopleEndings[1], $watchEndings[1]);


}

function getIcons($arResult){

    $arSelect = array('ID', 'IBLOCK_ID', 'IBLOCK_SECTION_ID', 'DETAIL_PICTURE', 'UF_ICON');
    $arFilter = array('IBLOCK_ID' => $arResult['IBLOCK_ID'],'ID' => $arResult['SECTION']['IBLOCK_SECTION_ID']);
    $icons = array();
    $section = array();
    $rsSection = CIBlockSection::GetList(array(), $arFilter, false, $arSelect);
    if($result = $rsSection->GetNext())
        $section = $result;


    $house = array();
    $arFilter['ID'] = $section['IBLOCK_SECTION_ID'];
    $rsHouse = CIBlockSection::GetList(array(), $arFilter, false, $arSelect);
    if($result = $rsHouse->GetNext())
        $house = $result;

    $icons['section_icon'] = CFile::GetPath($section['UF_ICON']);
    $icons['house_icon'] = CFile::GetPath($house['UF_ICON']);

    return $icons;

}

function getSectionPictures($building, $section, $numOnFloor){

    $pictures = array();
    $arFilter = array("IBLOCK_CODE" => 'sections', "PROPERTY_BuildingNumber" => $building, "PROPERTY_SectionNumber" => $section, "PROPERTY_NumberOnFloor" => $numOnFloor);
    $arSelect = array("ID", "IBLOCK_ID", "DETAIL_PICTURE", "PROPERTY_svg_icon");
    $rsSection = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
    if($result = $rsSection->GetNext())
    {
        $pictures['icon'] = CFile::GetPath($result['PROPERTY_SVG_ICON_VALUE']);
        $pictures['popup'] =  CFile::GetPath($result['DETAIL_PICTURE']);
    }

    return $pictures;

}

$properties = $arResult['DISPLAY_PROPERTIES'];
$roomCount = $properties['Rooms']['VALUE'];
$building = $properties['BuildingNumber']['VALUE'];
$section = $properties['SectionNumber']['VALUE'];
$flatNumber = $properties['BeforeBtiNumber']['VALUE'];
$numberOnFloor = $properties['NumberOnFloor']['VALUE'];
$floor = $properties['Floor']['VALUE'];
$square = $properties['SpaceDesign']['VALUE'];
$furnish = $properties['ApartmentFurnish']['VALUE'];
$statusCode = $properties['StatusCode']['VALUE'];
$typeForSite = $properties['TypeForSite']['VALUE'];
$price = $properties['Price']['VALUE'];
$compass = $arResult['PROPERTIES']['compass']['VALUE'];
$compassActual = !empty($compass) ? CFile::GetPath($compass) : '/bitrix/templates/grinada/img/flat/compass.svg';
$peopleOnline = $arParams["PEOPLE_ONLINE"];
$ending = getDeclension($peopleOnline);

$arPlan = array();

$arSelect = Array(
    "ID",
    "NAME",
    "DETAIL_PAGE_URL",
    "DATE_ACTIVE_FROM",
    'PROPERTY_*');
$arFilter = Array(

    "IBLOCK_ID"=>1,
    "ACTIVE_DATE"=>"Y",
    "ACTIVE"=>"Y",
    'PROPERTY_name_type'=>$typeForSite
);


$res = CIBlockElement::GetList(Array('SORT'=>'ASC'), $arFilter, false, Array("nPageSize"=>1), $arSelect);
if($rsPlan = $res->GetNextElement())
{
    $arPlan = $rsPlan->GetFields();
    $arPlan['prop'] = $rsPlan->GetProperties();

}


function getAreas($arProp){

    $result = array();

    foreach ($arProp as $key => $value){

       if(strpos($key, 'lv_') !== false && !empty($value['VALUE']))
           $result[$key] = array('value' => $value['VALUE'], 'name' => $value['NAME']);

    }

    return $result;

}

$areas = getAreas($arPlan['prop']);
$icons = getIcons($arResult);
$sectionPictures = getSectionPictures($building, $section, $numberOnFloor);

?>

<div class="flat-page">
    <div class="big-figure circle"></div>
    <div class="flat-page__content">
        <div class="plans">
            <a href="#" class="btn-back hidden-sm hidden-xs">Вернуться назад</a>
            <div class="general-plans">
                <div class="plan" id="general-plan">
                    <a href="/catalog/flats/zhk-grinada/">Генплан</a>
                    <div class="plan__img" style="background-image: url(<?=$icons['house_icon']?>);"></div>
                </div>
                <div class="plan" id="floor-plan">
                    <a href="/catalog/flats/zhk-grinada/building-<?=$building?>/section-<?=$section?>/">План этажа</a>
                    <div class="plan__img" style="background-image: url(<?=$icons['section_icon']?>);"></div>
                </div>
                <div class="plan" id="section-plan">
                    <a href="#section-popup" class="open-popup">План секции</a>
                    <div class="plan__img" style="background-image: url(<?=$sectionPictures['icon']?>);"></div>
                    <div id="section-popup" class="popup mfp-hide">
                        <h2>План секции</h2>
                        <div class="popup__img" style="background-image: url(<?=$sectionPictures['popup']?>);"></div>
                    </div>
                </div>
            </div>
            <div class="flat-plan">
                <div class="h3 dark-green">Тип <?=$arPlan['prop']['name_type']['VALUE']?></div>
                <div class="plan__img" style="background-image: url(<?=CFile::GetPath($arPlan['prop']['svg']['VALUE'])?>);"></div>
            </div>
            <div class="extra-info">
                <?if($furnish != false){?>
                <div class="finish">
                    <div class="finish__icon"></div>
                    <div class="finish__txt">Квартира с&nbsp;готовым ремонтом</div>
                </div><?}?>
                <div class="compass" style="background-image: url(<?=$compassActual?>);"></div>
                <div class="notice box-shadow">
                    В данный момент
                    эту&nbsp;квартиру смотр<?=$ending[1]?>
                    <span>еще <?=$peopleOnline?> человек<?=$ending[0]?></span>
                    <div class="btn-close"></div>
                </div>
            </div>
            <div class="fluid-block visible-sm visible-xs">
                <div class="slide-block">
                    <div class="slide-block__header"><span class="h4">Площади комнат<span class="star"> *</span></span></div>
                    <div class="param-list slide-block__content">
                        <?foreach ($areas as $param){?>
                        <div class="param">
                            <div class="param__name"><?=$param['name']?></div>
                            <div class="param__value"><?=$param['value']?></div>
                        </div>
                        <?}?>
                        <div class="notice">* Указанная площадь квартир является проектируемой и может незначительно отличатся по фактическим обмерам.</div>
                    </div>
                </div>
<!--                <div class="slide-block">-->
<!--                    <div class="slide-block__header"><span class="h4">Ипотечный калькулятор</span></div>-->
<!--                    <div class="param-list slide-block__content">-->
<!--                        <form class="mortgage-calc">-->
<!--                            <div class="input-group">-->
<!--                                <label>Стоимость жилья, руб</label>-->
<!--                                <input type="text" name="price">-->
<!--                            </div>-->
<!--                            <div class="input-group">-->
<!--                                <label>Первоначальный взнос, руб.</label>-->
<!--                                <input type="text" name="deposit">-->
<!--                            </div>-->
<!--                            <div class="input-group">-->
<!--                                <label>Ставка, %</label>-->
<!--                                <div class="select-box">-->
<!--                                    <input type="hidden" name="percent">-->
<!--                                    <div class="caption"></div>-->
<!--                                    <div class="options">-->
<!--                                        --><?//$APPLICATION->IncludeComponent(
//                                            "bitrix:news.list",
//                                            "tmp_calc_options",
//                                            Array(
//                                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
//                                                "ADD_SECTIONS_CHAIN" => "Y",
//                                                "AJAX_MODE" => "N",
//                                                "AJAX_OPTION_ADDITIONAL" => "",
//                                                "AJAX_OPTION_HISTORY" => "N",
//                                                "AJAX_OPTION_JUMP" => "N",
//                                                "AJAX_OPTION_STYLE" => "Y",
//                                                "CACHE_FILTER" => "N",
//                                                "CACHE_GROUPS" => "Y",
//                                                "CACHE_TIME" => "36000000",
//                                                "CACHE_TYPE" => "A",
//                                                "CHECK_DATES" => "Y",
//                                                "DETAIL_URL" => "",
//                                                "DISPLAY_BOTTOM_PAGER" => "Y",
//                                                "DISPLAY_DATE" => "Y",
//                                                "DISPLAY_NAME" => "Y",
//                                                "DISPLAY_PICTURE" => "Y",
//                                                "DISPLAY_PREVIEW_TEXT" => "Y",
//                                                "DISPLAY_TOP_PAGER" => "N",
//                                                "FIELD_CODE" => array("",""),
//                                                "FILTER_NAME" => "",
//                                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
//                                                "IBLOCK_ID" => "11",
//                                                "IBLOCK_TYPE" => "content",
//                                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
//                                                "INCLUDE_SUBSECTIONS" => "Y",
//                                                "MESSAGE_404" => "",
//                                                "NEWS_COUNT" => "20",
//                                                "PAGER_BASE_LINK_ENABLE" => "N",
//                                                "PAGER_DESC_NUMBERING" => "N",
//                                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//                                                "PAGER_SHOW_ALL" => "N",
//                                                "PAGER_SHOW_ALWAYS" => "N",
//                                                "PAGER_TEMPLATE" => ".default",
//                                                "PAGER_TITLE" => "Новости",
//                                                "PARENT_SECTION" => "",
//                                                "PARENT_SECTION_CODE" => "",
//                                                "PREVIEW_TRUNCATE_LEN" => "",
//                                                "PROPERTY_CODE" => array("DEPOSIT","PERCENT","TERM",""),
//                                                "SET_BROWSER_TITLE" => "Y",
//                                                "SET_LAST_MODIFIED" => "N",
//                                                "SET_META_DESCRIPTION" => "Y",
//                                                "SET_META_KEYWORDS" => "Y",
//                                                "SET_STATUS_404" => "N",
//                                                "SET_TITLE" => "Y",
//                                                "SHOW_404" => "N",
//                                                "SORT_BY1" => "ACTIVE_FROM",
//                                                "SORT_BY2" => "SORT",
//                                                "SORT_ORDER1" => "DESC",
//                                                "SORT_ORDER2" => "ASC"
//                                            )
//                                        );?>
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="input-group">-->
<!--                                <label>Срок кредитования, лет</label>-->
<!--                                <input type="text" name="term">-->
<!--                            </div>-->
<!--                            <div class="input-group">-->
<!--                                <label>Ежемесячный платеж, руб.</label>-->
<!--                                <div class="result orange"></div>-->
<!--                            </div>-->
<!--                            <div class="notice">-->
<!--                                Данный расчет является предварительным.<br>-->
<!--                                Для получения более точной информации обратитесь в отделение банка.-->
<!--                            </div>-->
<!--                            <a href="#" class="btn-default btn-medium btn-green">Отправить заявку</a>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="buttons">
                    <a href="#" class="btn-default btn-medium btn-green feedback-open call">Заказать звонок</a>
                    <a href="#" class="btn-default btn-medium btn-green">Оставить заявку</a>
                </div>
                <div class="links">
                    <a href="#" class="btn-pdf">Сохранить<br>планировку</a>
                    <a href="#" class="btn-email">Отправить<br>по e-mail</a>
                </div>
            </div>
        </div>
        <div class="flat-params">
            <a href="#" class="btn-back visible-sm-inline-block visible-xs-inline-block">Вернуться назад</a>
            <h2 class="dark-green"><?=$roomCount?>-комнатная</h2>
<!--            <h4 class="dark-green">евростандарт --><?//=$furnish?><!--</h4>-->
            <div class="price orange"><span class="price__value"><?=$price?></span> <span class="ruble">a</span></div>
            <div class="param-list param-list--main">
                <div class="param">
                    <div class="param__name">Корпус</div>
                    <div class="param__value"><?=$building?></div>
                </div>
                <div class="param">
                    <div class="param__name">Квартира</div>
                    <div class="param__value"><?=$flatNumber?></div>
                </div>
                <div class="param">
                    <div class="param__name">Секция</div>
                    <div class="param__value"><?=$section?></div>
                </div>
<!--                <div class="param">-->
<!--                    <div class="param__name">№ на секции</div>-->
<!--                    <div class="param__value">--><?//=$numberOnFloor?><!--</div>-->
<!--                </div>-->
                <div class="param">
                    <div class="param__name">Площадь, м<sup>2</sup></div>
                    <div class="param__value"><?=$square?></div>
                </div>
                <div class="param">
                    <div class="param__name">Этаж</div>
                    <div class="param__value"><?=$floor?></div>
                </div>
            </div>
            <div class="fluid-block hidden-sm hidden-xs">
                <div class="slide-block">
                    <div class="slide-block__header"><span class="h4">Площади комнат<span class="star"> *</span></span></div>
                    <div class="param-list slide-block__content">
                        <?foreach ($areas as $param){?>
                            <div class="param">
                                <div class="param__name"><?=$param['name']?></div>
                                <div class="param__value"><?=$param['value']?></div>
                            </div>
                        <?}?>
                        <div class="notice">* Указанная площадь квартир является проектируемой и может незначительно отличатся по фактическим обмерам.</div>
                    </div>
                </div>
<!--                <div class="slide-block">-->
<!--                    <div class="slide-block__header"><span class="h4">Ипотечный калькулятор</span></div>-->
<!--                    <div class="param-list slide-block__content">-->
<!--                        <form class="mortgage-calc">-->
<!--                            <div class="input-group">-->
<!--                                <label>Стоимость жилья, руб</label>-->
<!--                                <input type="text" name="price">-->
<!--                            </div>-->
<!--                            <div class="input-group">-->
<!--                                <label>Первоначальный взнос, руб.</label>-->
<!--                                <input type="text" name="deposit">-->
<!--                            </div>-->
<!--                            <div class="input-group">-->
<!--                                <label>Ставка, %</label>-->
<!--                                <div class="select-box">-->
<!--                                    <input type="hidden" name="percent">-->
<!--                                    <div class="caption"></div>-->
<!--                                    <div class="options">-->
<!--                                        --><?//$APPLICATION->IncludeComponent(
//                                            "bitrix:news.list",
//                                            "tmp_calc_options",
//                                            Array(
//                                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
//                                                "ADD_SECTIONS_CHAIN" => "Y",
//                                                "AJAX_MODE" => "N",
//                                                "AJAX_OPTION_ADDITIONAL" => "",
//                                                "AJAX_OPTION_HISTORY" => "N",
//                                                "AJAX_OPTION_JUMP" => "N",
//                                                "AJAX_OPTION_STYLE" => "Y",
//                                                "CACHE_FILTER" => "N",
//                                                "CACHE_GROUPS" => "Y",
//                                                "CACHE_TIME" => "36000000",
//                                                "CACHE_TYPE" => "A",
//                                                "CHECK_DATES" => "Y",
//                                                "DETAIL_URL" => "",
//                                                "DISPLAY_BOTTOM_PAGER" => "Y",
//                                                "DISPLAY_DATE" => "Y",
//                                                "DISPLAY_NAME" => "Y",
//                                                "DISPLAY_PICTURE" => "Y",
//                                                "DISPLAY_PREVIEW_TEXT" => "Y",
//                                                "DISPLAY_TOP_PAGER" => "N",
//                                                "FIELD_CODE" => array("",""),
//                                                "FILTER_NAME" => "",
//                                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
//                                                "IBLOCK_ID" => "11",
//                                                "IBLOCK_TYPE" => "content",
//                                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
//                                                "INCLUDE_SUBSECTIONS" => "Y",
//                                                "MESSAGE_404" => "",
//                                                "NEWS_COUNT" => "20",
//                                                "PAGER_BASE_LINK_ENABLE" => "N",
//                                                "PAGER_DESC_NUMBERING" => "N",
//                                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
//                                                "PAGER_SHOW_ALL" => "N",
//                                                "PAGER_SHOW_ALWAYS" => "N",
//                                                "PAGER_TEMPLATE" => ".default",
//                                                "PAGER_TITLE" => "Новости",
//                                                "PARENT_SECTION" => "",
//                                                "PARENT_SECTION_CODE" => "",
//                                                "PREVIEW_TRUNCATE_LEN" => "",
//                                                "PROPERTY_CODE" => array("DEPOSIT","PERCENT","TERM",""),
//                                                "SET_BROWSER_TITLE" => "Y",
//                                                "SET_LAST_MODIFIED" => "N",
//                                                "SET_META_DESCRIPTION" => "Y",
//                                                "SET_META_KEYWORDS" => "Y",
//                                                "SET_STATUS_404" => "N",
//                                                "SET_TITLE" => "Y",
//                                                "SHOW_404" => "N",
//                                                "SORT_BY1" => "ACTIVE_FROM",
//                                                "SORT_BY2" => "SORT",
//                                                "SORT_ORDER1" => "DESC",
//                                                "SORT_ORDER2" => "ASC"
//                                            )
//                                        );?>
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="input-group">-->
<!--                                <label>Срок кредитования, лет</label>-->
<!--                                <input type="text" name="term">-->
<!--                            </div>-->
<!--                            <div class="input-group">-->
<!--                                <label>Ежемесячный платеж, руб.</label>-->
<!--                                <div class="result orange"></div>-->
<!--                            </div>-->
<!--                            <div class="notice">-->
<!--                                Данный расчет является предварительным.<br>-->
<!--                                Для получения более точной информации обратитесь в отделение банка.-->
<!--                            </div>-->
<!--                            <a href="#" class="btn-default btn-medium btn-green">Отправить заявку</a>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
                <div class="buttons">
                    <a href="#" class="btn-default btn-medium btn-green feedback-open call">Заказать звонок</a>
                    <a href="#" class="btn-default btn-medium btn-green feedback-open booking">Оставить заявку</a>
                </div>
                <div class="links">
                    <a href="/pdf/flat-<?=$arResult['ID']?>.pdf" target="_blank" class="btn-pdf">Сохранить<br>планировку</a>
                    <a href="#" class="btn-email feedback-open layout">Отправить<br>по e-mail</a>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-top "><a href="#">вернуться наверх</a></div>
</div>
