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
?>

<div class="plan-filter-detail-page">
	<div class="big-figure circle"></div>
	<div class="wrapper-main">
		<a href="#" class="link--dashed btn-back visible-sm visible-xs"><span>Вернуться назад</span></a>
		<h1 class="dark-green">ТИП <?=$arResult['NAME']?></span></h1>
		<div class="wrapper-outer">
			<div class="filter"  data-ajax-url="/param_filter_ajax.php">
				<input type="hidden" id="type-for-site" value="<?=$arResult['DISPLAY_PROPERTIES']['name_type']['VALUE']?>">
				<a href="#" class="link--dashed btn-back hidden-sm hidden-xs"><span>Вернуться назад</span></a>
				<div class="planoplan-over">
					<div class="h5 dark-green">Предложение по возможной отделке&nbsp;квартиры:</div>
					<div class="planoplan" style="background-image: url(<?=$arResult['DISPLAY_PROPERTIES']['svg']['FILE_VALUE']['SRC']?>);"></div>
				</div>
				<?include $_SERVER['DOCUMENT_ROOT'].'/bitrix/templates/grinada/php/filter-results-table.php';?>
			</div>
		</div>
	</div>
	<div class="scroll-top "><a href="#">вернуться наверх</a></div>
</div>
