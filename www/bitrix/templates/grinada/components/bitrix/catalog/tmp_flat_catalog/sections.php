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


$rangeProperties = array(

	'Floor' => array('code' => 9),
	'SpaceDesign' => array('code' => 13),
	'Rooms' => array('code' => 20),
	'Price' => array('code' => 17)
);

foreach ($rangeProperties as $name => $props){

	$queryMin = 'SELECT  MIN(CAST(VALUE as DECIMAL(10,1))) as min FROM b_iblock_element_property WHERE IBLOCK_PROPERTY_ID = '.$props['code'];
	$queryMax = 'SELECT  MAX(CAST(VALUE as DECIMAL(10,1))) as max FROM b_iblock_element_property WHERE IBLOCK_PROPERTY_ID = '.$props['code'];
	$resMin = $DB->Query($queryMin, false, $err_mess.__LINE__);
	$resMax = $DB->Query($queryMax, false, $err_mess.__LINE__);
	if($min = $resMin->Fetch()){
		$rangeProperties[$name]['min'] = $min['min'];
	}
	if($max = $resMax->Fetch()){
		$rangeProperties[$name]['max'] = $max['max'];
	}
}

$buildings = isset($_GET['BuildingNumber']) ? explode(',', $_GET['BuildingNumber']) : null;
$furnish = isset($_GET['ApartmentFurnish']) ? $_GET['ApartmentFurnish'] : null;

$rootSection = array();
$rsRootSection = CIBlockSection::GetList(array(), array("IBLOCK_ID" => $arParams["IBLOCK_ID"],"DEPTH_LEVEL" => 1), false, array("ID", "IBLOCK_ID", "UF_SHOW_SALE_PRICE"));
if($result = $rsRootSection->GetNext())
	$rootSection = $result;

$showSalePrice = $rootSection["UF_SHOW_SALE_PRICE"] == 1 ? true : false;

?>

<!--<pre>-->
<!--	--><?//print_r($rootSection)?>
<!--</pre>-->


<div class="param-filter-page">
	<input type="hidden" class="ajax-url" value="/param_filter_ajax.php">
	<div class="pattern carrot dark-green anim-pattern" data-pattern="carrot"></div>
	<div class="pattern bird light-green anim-pattern" data-pattern="bird"></div>
	<div class="wrapper-main">
		<h1 class="dark-green">Выбор по&nbsp;параметрам</h1>
		<div class="wrapper-outer">
			<div class="filter">
				<div class="wrapper-inner">
					<div class="filter__params">
						<div class="input-group house">
							<div class="input-group__name">корпус</div>
							<ul class="inputs">
								<li class="special">
									<input type="checkbox" id="building-all" class="check-all">
									<label for="building-all">все</label>
								</li>
								<ul class="inputs inputs--special panel">
									<li class="house-type">панельные</li>
									<li>
										<input type="checkbox" id="building-number-1" <?=(in_array(1, $buildings) ? 'checked' : '')?>>
										<label for="building-number-1">1</label>
									</li>
									<li>
										<input type="checkbox" id="building-number-3" <?=(in_array(3, $buildings) ? 'checked' : '')?> disabled>
										<label for="building-number-3">3</label>
									</li>
								</ul>
								<ul class="inputs inputs--special mono">
									<li class="house-type">монолитные</li>
									<li>
										<input type="checkbox" id="building-number-2" <?=(in_array(2, $buildings) ? 'checked' : '')?> disabled>
										<label for="building-number-2">2</label>
									</li>
									<li>
										<input type="checkbox" id="building-number-4" <?=(in_array(4, $buildings) ? 'checked' : '')?> disabled>
										<label for="building-number-4">4</label>
									</li>
									<li>
										<input type="checkbox" id="building-number-5" <?=(in_array(5, $buildings) ? 'checked' : '')?> disabled>
										<label for="building-number-5">5</label>
									</li>
								</ul>
							</ul>
						</div>
						<div class="input-group">
							<div class="input-group">
								<div class="input-group__name">этаж</div>
								<div class="caption-over">
									<div class="caption min"></div>
									<div class="caption max"></div>
								</div>
								<input type="text" id="floor" class="range-slider" <?if($_GET['Floor']){?>value="<?=$_GET['Floor']?>"<?}?> data-min="<?=$rangeProperties['Floor']['min']?>" data-max="<?=$rangeProperties['Floor']['max']?>" data-step="1"/>
							</div>
							<div class="input-group">
								<div class="input-group__name">комнат</div>
								<div class="caption-over">
									<div class="caption min"></div>
									<div class="caption max"></div>
								</div>
								<input type="text" id="rooms" class="range-slider" <?if($_GET['Rooms']){?>value="<?=$_GET['Rooms']?>"<?}?> data-min="<?=$rangeProperties['Rooms']['min']?>" data-max="<?=$rangeProperties['Rooms']['max']?>" data-step="1"/>
							</div>
						</div>
						<div class="input-group">
							<div class="input-group">
								<div class="input-group__name">площадь, <span>м<sup>2</sup></span></div>
								<div class="caption-over">
									<div class="caption min"></div>
									<div class="caption max"></div>
								</div>
								<input type="text" id="space-design" class="range-slider" <?if($_GET['SpaceDesign']){?>value="<?=$_GET['SpaceDesign']?>"<?}?> data-min="<?=$rangeProperties['SpaceDesign']['min']?>" data-max="<?=$rangeProperties['SpaceDesign']['max']?>" data-step="1"/>
							</div>
							<div class="input-group">
								<div class="input-group__name">Цена, <span>млн</span></div>
								<div class="caption-over">
									<div class="caption min"></div>
									<div class="caption max"></div>
								</div>
								<input type="text" id="price" class="range-slider" <?if($_GET['Price']){?>value="<?=$_GET['Price']?>"<?}?> data-min="<?=$rangeProperties['Price']['min']?>" data-max="<?=$rangeProperties['Price']['max']?>" data-step="0.1"/>
							</div>
						</div>
						<div class="input-group finish">
							<div class="input-group__name">отделка</div>
							<ul class="inputs">
								<li>
									<input type="checkbox" id="no-apartment-furnish" <?=($furnish == 'N' ? 'checked' : '')?>>
									<label for="no-apartment-furnish">без отделки</label>
								</li>
								<li>
									<input type="checkbox" id="apartment-furnish" <?=($furnish == 'Y' ? 'checked' : '')?>>
									<label for="apartment-furnish">с отделкой</label>
								</li>
							</ul>
							<a href="/" class="link--dashed reset-filter visible-xs visible-md visible-lg"><span>Сбросить параметры</span></a>
						</div>
						<a href="#" class="link--dashed reset-filter visible-sm"><span>Сбросить параметры</span></a>
					</div>
					<?include $_SERVER['DOCUMENT_ROOT'].'/bitrix/templates/grinada/php/filter-results-table.php';?>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll-top "><a href="#">вернуться наверх</a></div>
</div>