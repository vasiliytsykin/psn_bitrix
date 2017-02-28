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
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);

$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/poly-view.js');
$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/master_plan_common.js');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/master-plan-common.css');
?>


<?

$rsCurrentSection = CIBlockSection::GetByID($arResult['VARIABLES']['SECTION_ID']);
$currentSection = array();
if($result = $rsCurrentSection->GetNext())
	$currentSection = $result;

$curSectDepth = $currentSection['DEPTH_LEVEL'];


$depthMain = 1;
$depthBuilding = 2;
$depthDetail = 3;


?>

<!--<pre>-->
<!--	--><?//print_r($currentSection)?>
<!--</pre>-->

<?if($curSectDepth == $depthMain)
	$APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"tmp_plan_section",
		array(
			"ADD_SECTIONS_CHAIN" => "Y",
			"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			"CACHE_TIME" =>  $arParams["CACHE_TIME"],
			"CACHE_TYPE" => $arParams["CACHE_TYPE"],
			"COUNT_ELEMENTS" =>$arParams["SECTION_COUNT_ELEMENTS"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"SECTION_ID" => $arResult['VARIABLES']['SECTION_ID'],
			"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
			"SECTION_USER_FIELDS" => array(
				0 => "UF_HOUSE_NUMBER",
				1 => "UF_HOUSE_TYPE",
				2 => "UF_SVGPOLY",
				3 => "",
			),
			"SHOW_PARENT_NAME" => $arParams["SECTIONS_SHOW_PARENT_NAME"],
			"TOP_DEPTH" =>  $arParams["SECTION_TOP_DEPTH"],
			"VIEW_MODE" =>  $arParams["SECTIONS_VIEW_MODE"],
			"COMPONENT_TEMPLATE" => "tmp_plan_section"
		),
		false
	);

else if($curSectDepth == $depthDetail)
	$APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"tmp_section_detail",
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
			"IBLOCK_ID" => "7",
			"IBLOCK_TYPE" => "catalog",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
			"INCLUDE_SUBSECTIONS" => "Y",
			"MESSAGE_404" => "",
			"NEWS_COUNT" => "200",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_SHOW_ALWAYS" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Новости",
			"PARENT_SECTION" => $currentSection['ID'],
			"PARENT_SECTION_CODE" => "",
			"PREVIEW_TRUNCATE_LEN" => "",
			"PROPERTY_CODE" => array("ApartmentFurnish","BeforeBtiNumber","BuildingNumber","Floor","NumberOnFloor","Price","Rooms","SectionNumber","SpaceDesign","StatusCode","TypeForSite","",""),
			"SET_BROWSER_TITLE" => "Y",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "Y",
			"SET_META_KEYWORDS" => "Y",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "Y",
			"SHOW_404" => "N",
			"SORT_BY1" => "PROPERTY_NumberOnFloor",
			"SORT_BY2" => "SORT",
			"SORT_ORDER1" => "ASC",
			"SORT_ORDER2" => "ASC"
		)
	);
else
	LocalRedirect($currentSection['SECTION_PAGE_URL'].'section-1/');

?>


