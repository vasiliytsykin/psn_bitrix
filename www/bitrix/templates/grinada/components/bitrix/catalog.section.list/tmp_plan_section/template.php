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


$houses = array();
$arSVGPolyHouse = array();
$arSVGPolyHouse[] = $arResult['SECTION']['UF_SVGPOLY'];
$sections = array();
$sectionFlats = array();

foreach ($arResult['SECTIONS'] as $section){
	$sections[$section['ID']] = $section;
}

foreach ($sections as $id => $section){

	$jsonId = 's'.$id;
	$inSale = CIBlockSection::GetSectionElementsCount($id, array("CNT_ACTIVE" => "Y"));

	if($section['DEPTH_LEVEL'] - 1 == $arResult['SECTION']['DEPTH_LEVEL']){

		$houses[$jsonId] = array(
			'property' => array(
				'house_number' => $section['UF_HOUSE_NUMBER'],
				'house_type' => $section['UF_HOUSE_TYPE'],
				'url' => $section['SECTION_PAGE_URL'],
				'class' => 'house'
			)

		);
		if($section['UF_SVGPOLY'] != '')
			$arSVGPolyHouse[] = $section['UF_SVGPOLY'];


	}
	if($section['DEPTH_LEVEL'] - 2 == $arResult['SECTION']['DEPTH_LEVEL']){

		$arExpSectionNum = explode(' ', $section['NAME']);
		$sectionNumber = $arExpSectionNum[1];
		$parentSection = $sections[$section['IBLOCK_SECTION_ID']];

		$furnish = false;
		$flatCount = 0;
		$flat = array();
		$rsFlat = CIBlockElement::GetList(array (), array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y', 'SECTION_ID' => $id, 'INCLUDE_SUBSECTIONS' => 'Y'), false, false, array('ID', 'IBLOCK_ID', 'PROPERTY_ApartmentFurnish'));
		if($result = $rsFlat->GetNextElement())
			$flat = $result->GetProperties();
		
		$furnish = $flat['ApartmentFurnish']['VALUE'] == 'С отделкой' ? true : false;

		if($furnish == true)
			$flatCount = CIBlockSection::GetSectionElementsCount($id, array('CNT_ACTIVE' => 'Y'));

		$houses[$jsonId] = array(
			'property' => array(
				'house_number' => $parentSection['UF_HOUSE_NUMBER'],
				'house_type' => $parentSection['UF_HOUSE_TYPE'],
				'section_number' => $sectionNumber,
				'url' => $section['SECTION_PAGE_URL'],
				'class' => 'section',
				'furnish' => $furnish,
				'flatCount' => $flatCount
			)

		);
	}

	$houses[$jsonId]['ID'] = $id;
	$houses[$jsonId]['NAME'] = $section['NAME'];
	$houses[$jsonId]['coord'] = array();
	$houses[$jsonId]['type'] = 'polyline';
	$houses[$jsonId]['typeo'] = 'section';
	$houses[$jsonId]['property']['in_sale'] = $inSale;
}

$flatTypes = array(0,0,0,0,0);
$rsFlats = CIBlockElement::GetList(array (), array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y'), false, false, array('PROPERTY_Rooms'));
$flats = array();
while ($flat = $rsFlats->GetNext()){
	$roomCount = $flat['PROPERTY_ROOMS_VALUE'];
	$flatTypes[$roomCount]++;

}

?>

<div class="master-plan master-plan--filter">
	<h1 class="dark-green">Выберите дом</h1>
	<ul class="legend">
		<li class="legend__item mono">Монолитные дома</li>
		<li class="legend__item panel">Панельные дома</li>
		<li class="legend__item finish">Секции с отделкой</li>
	</ul>
	<div class="main-plan">
		<div class="map-object" id="map-genplan">
			<div class="main-plan__map-over map-overlay" id="main-map-over">
				<div class="main-plan__map map-area" id="main-plan__map">
					<img src="<?=CFile::GetPath($arResult['SECTION']['PICTURE'])?>" data-src="<?=CFile::GetPath($arResult['SECTION']['PICTURE'])?>" id="img" alt="main-plan">
					<svg id="svg-area" class="svg-area" width="100%" height="100%"></svg>
					<div class="markers">
						<div class="extra-marker build-line first">1 очередь</div>
						<div class="extra-marker build-line second">2 очередь</div>
						<div class="extra-marker build-line third">3 очередь</div>
						<div class="streets">
							<div class="extra-marker">Феодосийская улица</div>
							<div class="extra-marker">Новобутовская улица</div>
							<div class="extra-marker">Бутовский лесопарк</div>
							<div class="extra-marker">10 мин. пешком<br><span>Бульвар Дмитрия Донского</span></div>
						</div>
						<div class="infra-markers">
							<div class="infra-marker kindergarten">
								<div class="extra-marker infra-marker__txt">Детский сад</div>
							</div>
							<div class="infra-marker school">
								<div class="extra-marker infra-marker__txt">Школа</div>
							</div>
							<div class="infra-marker garden">
								<div class="extra-marker infra-marker__txt">Летняя оранжерея</div>
							</div>
							<div class="infra-marker park">
								<div class="extra-marker infra-marker__txt">Веревочный парк</div>
							</div>
							<div class="infra-marker shop shop-1">
								<div class="extra-marker infra-marker__txt">Магазин</div>
							</div>
							<div class="infra-marker shop shop-2">
								<div class="extra-marker infra-marker__txt">Магазин</div>
							</div>
							<div class="infra-marker playground playground-1">
								<div class="extra-marker infra-marker__txt">Детская площадка</div>
							</div>
							<div class="infra-marker playground playground-2">
								<div class="extra-marker infra-marker__txt">Детская площадка</div>
							</div>
							<div class="infra-marker playground playground-3">
								<div class="extra-marker infra-marker__txt">Детская площадка</div>
							</div>
							<div class="infra-marker playground playground-4">
								<div class="extra-marker infra-marker__txt">Детская площадка</div>
							</div>
							<div class="infra-marker sports-ground">
								<div class="extra-marker infra-marker__txt">Спортивная площадка</div>
							</div>
							<div class="infra-marker parking">
								<div class="extra-marker infra-marker__txt">Парковка</div>
							</div>
							<div class="infra-marker spruce">
								<div class="extra-marker infra-marker__txt">Новогодняя ель<br>в каждом дворе</div>
							</div>
							<div class="infra-marker sales-office">
								<div class="extra-marker infra-marker__txt">Офис продаж</div>
							</div>
						</div>
<!--						<div class="bubbles">-->
<!--							<div class="bubble mono section-7">7</div>-->
<!--							<div class="bubble finish">-->
<!--								<div class="tooltip">-->
<!--									<div class="h4">335</div>-->
<!--									квартир с&nbsp;отделкой-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
					</div>
				</div>
				<?foreach ($arSVGPolyHouse as $svg){?>
					<input type="hidden" class="single-svg" value="<?=$svg?>">
				<?}?>
				<input type="hidden" value='<?=$arResult['SECTION']['UF_SVGPOLY']?>' class="config-map">
				<input  type="hidden" value='<?=json_encode($houses);?>' class="config-map-bd">
				<div class="compass"></div>
				<a href="#" class="camera">
					<div class="icon"></div>
					<div class="h5">On-line камера</div>
				</a>
				<a href="/about/panorama/" class="panorama">
					<div class="icon"></div>
					<div class="h5">Панорама</div>
				</a>
			</div>
		</div>
		<div class="main-plan__sidebar">
			<div class="h4">Форматы квартир</div>
			<?foreach ($flatTypes as $rooms => $count){?>

				<a href="/catalog/flats/?Rooms=<?=$rooms?>-<?=$rooms?>" class="sidebar__section">
					<?if($rooms > 0){?>
						<div class="h4"><?=$rooms?>-комнатные <sup><?=$count?></sup></div>
					<?}
					else{?>
						<div class="h4">Студии <sup><?=$count?></sup></div>
					<?}?>
				</a>

			<?}?>
<!--			<a href="#" class="sidebar__section">-->
<!--				<div class="h4">Студии <sup>--><?//=$flatTypes[0]?><!--</sup></div>-->
<!--			</a>-->
<!--			<a href="#" class="sidebar__section">-->
<!--				<div class="h4">1-комнатные <sup>--><?//=$flatTypes[1]?><!--</sup></div>-->
<!--			</a>-->
<!--			<a href="#" class="sidebar__section">-->
<!--				<div class="h4">2-комнатные <sup>--><?//=$flatTypes[2]?><!--</sup></div>-->
<!--			</a>-->
<!--			<a href="#" class="sidebar__section">-->
<!--				<div class="h4">3-комнатные <sup>--><?//=$flatTypes[3]?><!--</sup></div>-->
<!--			</a>-->
<!--			<a href="#" class="sidebar__section">-->
<!--				<div class="h4">4-комнатные <sup>--><?//=$flatTypes[4]?><!--</sup></div>-->
<!--			</a>-->
		</div>
	</div>
	<div class="wrapper-main">
		<div class="info-block">
			<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
					"AREA_FILE_SHOW" => "file",
					"AREA_FILE_SUFFIX" => "",
					"PATH" => '/bitrix/templates/grinada/include/catalog_plan_text.php',
					"AREA_FILE_RECURSIVE" => "Y",
					"EDIT_TEMPLATE" => "standard.php"
				)
			);?>
			<div class="pattern big-pattern pattern-4 dark-green anim-pattern" data-pattern="pattern-4"></div>
		</div>
	</div>
	<div class="big-figure circle"></div>
	<div class="scroll-top "><a href="#">вернуться наверх</a></div>
</div>
