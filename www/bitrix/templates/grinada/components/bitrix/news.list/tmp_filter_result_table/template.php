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

$curPage = $arResult["NAV_RESULT"]->NavPageNomer;
$totalPages = $arResult["NAV_RESULT"]->NavPageCount;
$navNum = $arResult["NAV_RESULT"]->NavNum;

?>


<?foreach($arResult["ITEMS"] as $arItem){?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<?
	$properties = $arItem['DISPLAY_PROPERTIES'];
	$roomCount = $properties['Rooms']['VALUE'];
	$building = $properties['BuildingNumber']['VALUE'];
	$section = $properties['SectionNumber']['VALUE'];
	$flatNumber = $properties['BeforeBtiNumber']['VALUE'];
	$floor = $properties['Floor']['VALUE'];
	$square = $properties['SpaceDesign']['VALUE'];
	$furnish = $properties['ApartmentFurnish']['VALUE'] != false ? 'Да' : 'Нет';
	?>
	<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="item">
		<div class="h3 dark-green visible-sm visible-xs"><?=$roomCount?>-комнатная евроформат</div>
		<div class="general-params">
			<div class="param">
				<div class="param__name">Корпус</div>
				<div class="param__value"><?=$building?></div>
			</div>
			<div class="param">
				<div class="param__name">Секция</div>
				<div class="param__value"><?=$section?></div>
			</div>
			<div class="param">
				<div class="param__name">Этаж</div>
				<div class="param__value"><?=$floor?></div>
			</div>
			<div class="param">
				<div class="param__name">№ кв.</div>
				<div class="param__value"><?=$flatNumber?></div>
			</div>
			<div class="param room">
				<div class="param__name">Комнат</div>
				<div class="param__value"><?=$roomCount?></div>
			</div>
			<div class="param">
				<div class="param__name">Площадь, м<sup>2</sup></div>
				<div class="param__value"><?=$square?></div>
			</div>
			<div class="param">
				<div class="param__name">С отделкой</div>
				<div class="param__value"><?=$furnish?></div>
			</div>
		</div>
		<div class="prices">
			<div class="param">
				<div class="param__name">Цена, <span class="ruble">a</span></div>
				<div class="param__value">12 300 450</div>
			</div>
			<div class="param">
				<div class="param__name">По акции, <span class="ruble">a</span></div>
				<div class="param__value">11 300 450</div>
			</div>
			<div class="param">
				<div class="param__name">Выгода, <span class="ruble">a</span></div>
				<div class="param__value">1 000 000</div>
			</div>
		</div>
		<div class="tooltip box-shadow">
			<h4>корпус <?=$building?></h4>
			<h6>Панельный дом</h6>
			<img src="/img/flat/floor-plan-green.svg" alt="floor-plan">
			<img src="/img/flat/genplan-map-green.svg" alt="genplan">
		</div>
	</a>
<?}?>

<?if($curPage < $totalPages){?>
	
	<div class="show-more">
		<a href="#" class="btn-default btn-medium btn-green" data-current="<?=$curPage;?>" data-total="<?=$totalPages;?>" data-pagination="<?=$navNum?>">Показать еще</a>
	</div>

<?}?>
		
