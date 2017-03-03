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
$sections = array();

foreach ($arResult['SECTIONS'] as $section){
	$sections[$section['ID']] = $section;
}

foreach ($sections as $id => $section){

	$jsonId = 's'.$id;

	if($section['DEPTH_LEVEL'] - 1 == $arResult['SECTION']['DEPTH_LEVEL']){

		$inSale = CIBlockSection::GetSectionElementsCount($id, array("CNT_ACTIVE" => "Y"));

		$houses[$jsonId] = array(
			'property' => array(
				'house_number' => $section['UF_HOUSE_NUMBER'],
				'house_type' => $section['UF_HOUSE_TYPE'],
				'url' => $section['SECTION_PAGE_URL'],
				'class' => 'house',
				'in_sale' => $inSale
			)

		);
	}

	$houses[$jsonId]['ID'] = $id;
	$houses[$jsonId]['NAME'] = $section['NAME'];
	$houses[$jsonId]['coord'] = array();
	$houses[$jsonId]['type'] = 'polyline';
	$houses[$jsonId]['typeo'] = 'section';
}

?>

<!--<pre>-->
<!--	--><?//print_r($arResult)?>
<!--</pre>-->

<div class="master-plan master-plan--about">
	<div class="wrapper-main">
		<h1 class="dark-green">План жилого квартала</h1>
	</div>
	<ul class="legend">
		<li class="legend__item mono">Монолитные дома</li>
		<li class="legend__item panel">Панельные дома</li>
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
					</div>
				</div>
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
			<div class="sidebar__section">
				<div class="h4">1 очередь</div>
				<div class="sidebar__section__txt" data-house="house-1">
					<h5>корпус 1</h5>
					I кв. 2017 - III кв. 2018
				</div>
				<div class="sidebar__section__txt" data-house="house-2">
					<h5>корпус 2</h5>
					I кв. 2017 - III кв. 2018
				</div>
			</div>
			<div class="sidebar__section">
				<div class="h4">2 очередь</div>
				<div class="sidebar__section__txt">
					<h5>корпус 3</h5>
				</div>
				<div class="sidebar__section__txt">
					<h5>корпус 4</h5>
				</div>
				<div class="sidebar__section__txt">
					<h5>корпус 5</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper-main">
		<div class="info-block">
			<div class="info-block__txt">
				<h2>План и сроки проекта</h2>
				<p>
					Строительство жилого квартала будет организовано в&nbsp;три&nbsp;очереди. Строительные работы ведутся с I кв. 2017 г., а&nbsp;завершение третьей очереди и всего проекта запланировано на III кварталу 2021 г.
				</p>
				<p>
					«Гринада» – это пять домов переменной этажности. В&nbsp;первой очереди представлено два корпуса. Один будет возведен по технологии монолитного строительства, а&nbsp;другой  построен с помощью универсальной строительной системы панельного типа ДОММОС. Оба&nbsp;корпуса первой очереди будут сданы единовременно с&nbsp;благоустроенной дворовой территорией согласно общей концепции ландшафта.
				</p>
			</div>
			<div class="pattern big-pattern pattern-1 dark-green anim-pattern" data-pattern="pattern-1"></div>
		</div>
	</div>
	<div class="big-figure circle"></div>
	<div class="scroll-top "><a href="#">вернуться наверх</a></div>
</div>
