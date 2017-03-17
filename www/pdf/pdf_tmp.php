<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule( "iblock" );


$flatId = $_GET['flat_id'];
$flat = array();
$arSelect = array(
    "ID",
    "IBLOCK_ID",
    "NAME",
    "IBLOCK_SECTION_ID",
    'PROPERTY_*'
);
$rsFlat = CIBlockElement::GetList(array(), array('IBLOCK_CODE' => 'flats', 'ACTIVE' => 'Y', 'ID' => $flatId), false, false, $arSelect);
if($result = $rsFlat->GetNextElement())
{
    $flat = $result->GetFields();
    $flat['PROPERTIES'] = $result->GetProperties();
}

$properties = $flat['PROPERTIES'];
$roomCount = $properties['Rooms']['VALUE'];
$building = $properties['BuildingNumber']['VALUE'];
$section = $properties['SectionNumber']['VALUE'];
$flatNumber = $properties['BeforeBtiNumber']['VALUE'];
$numberOnFloor = $properties['NumberOnFloor']['VALUE'];
$floor = $properties['Floor']['VALUE'];
$price = $properties['Price']['VALUE'];
$square = $properties['SpaceDesign']['VALUE'];
$furnish = $properties['ApartmentFurnish']['VALUE'];
$statusCode = $properties['StatusCode']['VALUE'];
$typeForSite = $properties['TypeForSite']['VALUE'];


$arPlan = array();

$arSelect = Array(
    "ID",
    "NAME",
    "DETAIL_PAGE_URL",
    "DATE_ACTIVE_FROM",
    "PREVIEW_PICTURE",
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

function getIcons($arResult){

    $arSelect = array('ID', 'IBLOCK_ID', 'IBLOCK_SECTION_ID', 'DETAIL_PICTURE', 'UF_ICON');
    $arFilter = array('IBLOCK_ID' => $arResult['IBLOCK_ID'],'ID' => $arResult['IBLOCK_SECTION_ID']);

    $floor = array();
    $rsFloor = CIBlockSection::GetList(array(), $arFilter, false, $arSelect);
    if($result = $rsFloor->GetNext())
        $floor = $result;

    $arFilter['ID'] = $floor['IBLOCK_SECTION_ID'];

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


$areas = getAreas($arPlan['prop']);
$icons = getIcons($flat);
$sectionPictures = getSectionPictures($building, $section, $numberOnFloor);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/pdf/fonts/bwsurco/bwsurco.css">
    <link rel="stylesheet" href="/pdf/fonts/geometria/geometria.css">
    <link rel="stylesheet" href="/pdf/fonts/ALSRublRegular/ALSRublRegular.css">
    <link rel="stylesheet" href="/pdf/flat-pdf.css">
    <style>
        @page {
            margin: 0;
        }
    </style>
    <title>PSN</title>
</head>
<body>
<div class="flat-page--pdf">
    <div class="big-figure circle"></div>
    <div class="header">
        <div class="header__block">
            <div class="header__logo"></div>
            <div class="header__link">гринада.рф</div>
        </div>
        <div class="header__block">
            <div class="contact-block">
                <div class="h4">офис продаж</div>
                <p>г. Москва,<br>ул. Феодосийская, дом 1, корпус 10</p>
            </div>
            <div class="contact-block">
                <div class="phone"><?=(isset($_GET['phone']) ? $_GET['phone'] : '+7 495 800 41 48')?></div>
                <div class="email">sales@jk-grinada.ru</div>
            </div>
        </div>
        <div class="header__block">
            <div class="h4">режим работы</div>
            <p>
                ежедневно<br>
                с 09:00 до 21:00<br>
            </p>
        </div>
    </div>
    <div class="flat-page__content">
        <div class="plans">
            <div class="general-plans">
                <div class="plan" id="general-plan">
                    <a href="#">Генплан</a>
                    <div class="plan__img" style="background-image: url(<?=$icons['house_icon']?>);"></div>
                </div>
                <div class="plan" id="floor-plan">
                    <a href="#">План этажа</a>
                    <div class="plan__img" style="background-image: url(<?=$icons['section_icon']?>);"></div>
                </div>
                <div class="plan" id="section-plan">
                    <a href="#">План секции</a>
                    <div class="plan__img" style="background-image: url(<?=$sectionPictures['icon']?>);"></div>
                </div>
            </div>
            <div class="flat-plan">
                <div class="h3 dark-green">Тип <?=$arPlan['prop']['name_type']['VALUE']?></div>
                <div class="plan__img" style="background-image: url(<?=CFile::GetPath($arPlan['prop']['svg']['VALUE'])?>);"></div>
            </div>
        </div>
        <div class="flat-params">
            <h2 class="dark-green"><?=$roomCount?>-комнатная</h2>
            <h4 class="dark-green">евростандарт <?=$furnish?></h4>
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
                <div class="param">
                    <div class="param__name"><span style="font-family: Arial;">№</span> на секции</div>
                    <div class="param__value"><?=$numberOnFloor?></div>
                </div>
                <div class="param">
                    <div class="param__name">Этаж</div>
                    <div class="param__value"><?=$floor?></div>
                </div>
                <div class="param">
                    <div class="param__name">Площадь, м<sup>2</sup></div>
                    <div class="param__value"><?=$square?></div>
                </div>
            </div>
            <div class="fluid-block">
                <div class="slide-block open">
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
            </div>
        </div>
    </div>
    <div class="footer"></div>
</div>
</body>
</html>