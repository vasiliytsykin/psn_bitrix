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

foreach ($arResult['SECTIONS'] as $section){

	$jsonId = 's'.$section['ID'];

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

		$arExpSectionNum = explode('', $section['NAME']);
		$sectionNumber = $arExpSectionNum[1];

		$houses[$jsonId] = array(
			'property' => array(
				'section_number' => $sectionNumber,
				'url' => $section['SECTION_PAGE_URL'],
				'class' => 'section'
			)

		);
	}

	$houses[$jsonId]['ID'] = $section['ID'];
	$houses[$jsonId]['NAME'] = $section['NAME'];
	$houses[$jsonId]['coord'] = array();
	$houses[$jsonId]['type'] = 'polyline';
	$houses[$jsonId]['typeo'] = 'section';
}



?>



<pre>
	<?print_r($arSVGPolyMasterPlan)?>
	<?print_r($arSVGPolyHouse)?>
</pre>


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
				<div class="main-plan__map map-area">
					<img data-src="<?=CFile::GetPath($arResult['SECTION']['PICTURE'])?>" id="img" alt="main-plan">
					<svg id="svg-area" class="svg-area" width="100%" height="100%"></svg>
					<div class="markers">
						<div class="extra-marker build-line first">1 очередь</div>
						<div class="extra-marker build-line second">2 очередь</div>
						<div class="streets">
							<div class="extra-marker">Феодосийская улица</div>
							<div class="extra-marker">Новобутовская улица</div>
							<div class="extra-marker">Бутовский лесопарк</div>
							<div class="extra-marker"><span>Бульвар Д. Донского</span></div>
						</div>
						<div class="bubbles">
							<div class="bubble mono section-7">7</div>
							<div class="bubble finish">
								<div class="tooltip">
									<div class="h4">335</div>
									квартир с&nbsp;отделкой
								</div>
							</div>
						</div>
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
				<a href="panorama.php" class="panorama">
					<div class="icon"></div>
					<div class="h5">Панорама</div>
				</a>
			</div>
		</div>
		<div class="main-plan__sidebar">
			<div class="h4">Форматы квартир</div>
			<a href="#" class="sidebar__section">
				<div class="h4">Студии <sup>96</sup></div>
			</a>
			<a href="#" class="sidebar__section">
				<div class="h4">1-комнатные <sup>96</sup></div>
			</a>
			<a href="#" class="sidebar__section">
				<div class="h4">2-комнатные <sup>96</sup></div>
			</a>
			<a href="#" class="sidebar__section">
				<div class="h4">3-комнатные <sup>96</sup></div>
			</a>
			<a href="#" class="sidebar__section">
				<div class="h4">4-комнатные <sup>96</sup></div>
			</a>
		</div>
	</div>
	<div class="wrapper-main">
		<div class="info-block">
			<div class="info-block__txt">
				<h2>Описание</h2>
				<h5>Первая очередь</h5>
				<p>
					Корпус №1 возводится с помощью универсальной строительной системы панельного типа ДОММОС.
					Готовность квартир предполагает: наличие перегородок, стяжку полов, разводку инженерных
					систем до оконечных устройств, а потолки и стены готовы под финишную отделку.
				</p>
				<p>
					Корпус №2 возводится по технологии монолитного строительства.
					В квартирах будет выполнена трассировка внутренних перегородок в один кирпич,
					гидроизоляция мокрых зон и разводка инженерных систем до стояка.
				</p>
				<p>
					Каждый из корпусов имеет секцию с готовой отделкой, где&nbsp;квартиры будут полностью готовы к тому,
					чтобы только завести мебель.
				</p>
			</div>
			<div class="pattern big-pattern pattern-4 dark-green anim-pattern" data-pattern="pattern-4"></div>
		</div>
	</div>
	<div class="big-figure circle"></div>
	<div class="scroll-top "><a href="#">вернуться наверх</a></div>
</div>
