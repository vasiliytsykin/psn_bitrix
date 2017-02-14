<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

$filter = $_REQUEST['filter'];
$parentSection = $filter['section'];
$newsPerPage = 4;
$totalNews = CIBlockSection::GetSectionElementsCount($parentSection, array('CNT_ACTIVE' => 'Y'));
$totalPages = ceil($totalNews / $newsPerPage);
$curPage = $filter['page'];
$news = array();
$arSelect = array(

    'ID', 'IBLOCK_ID', 'ACTIVE_FROM', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL', 'PREVIEW_TEXT', 'PROPERTY_HEADER'

);
$rsNews = CIBlockElement::GetList(array('active_from' => 'DESC'), array('SECTION_ID' => $parentSection, 'ACTIVE' => 'Y'), false, array('nPageSize' => 4, 'iNumPage' => $curPage), $arSelect);
while ($result = $rsNews->GetNext())
    $news[] = $result;


foreach($news as $arItem){?>
    <?
    $date = explode(' ', FormatDate('j F y', MakeTimeStamp($arItem["ACTIVE_FROM"])));
    $img = $arItem['PREVIEW_PICTURE'];
    $imgUrl = !empty($img) ? CFile::GetPath($img) : '/bitrix/templates/grinada/img/news/news_stab.jpg' ;
    ?>
    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="info-block">
        <div class="info-block__img-over">
            <div class="info-block__date-over">
                <div class="info-block__date">
                    <div class="top-line">
                        <div class="day"><?=$date[0]?></div>
                        <div class="month"><?=$date[1]?></div>
                    </div>
                    <div class="year">‘<?=$date[2]?></div>
                </div>
            </div>
            <div class="info-block__img" style="background-image: url(<?=$imgUrl?>);"></div>
        </div>
        <div class="info-block__txt">
            <h3><?=$arItem['PROPERTY_HEADER_VALUE']['TEXT']?></h3>
            <p><?=$arItem['PREVIEW_TEXT']?></p>
        </div>
    </a>
<?}?>

<?if($curPage < $totalPages){?>

    <div class="show-more">
        <a href="#" class="btn-default btn-medium btn-green" data-current="<?=$curPage;?>" data-total="<?=$totalPages;?>">Показать еще</a>
    </div>

<?}?>
