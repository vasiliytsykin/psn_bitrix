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
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/master-plan-common.css');
//$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/poly-view.css');
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

<?if($curSectDepth == $depthMain)?>
	<?$APPLICATION->IncludeComponent(
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
	);?>


