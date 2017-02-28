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
require_once($_SERVER['DOCUMENT_ROOT'].'/include/section_nav.php');
?>

<?


$arFloors = array();
$flats = array();

foreach ($arResult['ITEMS'] as $flat){

	$flatId = $flat['ID'];
	$floor = $flat['DISPLAY_PROPERTIES']['Floor']['VALUE'];
	if(!is_array($arFloors[$floor]))
		$arFloors[$floor] = array($flatId);
	else
		$arFloors[$floor][] = $flatId;

	$flats[$flatId] = $flat;
}

$maxFloor = max(array_keys($arFloors));
$minFloor = min(array_keys($arFloors));


$rsPlans = CIBlockElement::GetList(array(), array('IBLOCK_CODE' => 'flat_plan', 'ACTIVE' => 'Y'), false, false, array('ID', 'NAME', 'CODE', 'PROPERTY_svg', 'PROPERTY_name_type'));
$plans = array();
while($plan = $rsPlans->GetNext()){

	$plans[$plan['PROPERTY_NAME_TYPE_VALUE']] = array('CODE' => $plan['CODE'], 'NAME' => $plan['NAME'], 'IMG' => CFile::GetPath($plan['PROPERTY_SVG_VALUE']));

}

$sections = array();
$rsSections  = CIBlockSection::GetTreeList(array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y', 'GLOBAL_ACTIVE' => 'Y'), array('ID', 'IBLOCK_ID', 'DEPTH_LEVEL', 'IBLOCK_SECTION_ID', 'UF_ICON', 'UF_HOUSE_TYPE'));
while($result = $rsSections->GetNext()){
	if($result['DEPTH_LEVEL'] > 1 && $result['DEPTH_LEVEL'] < 4)
		$sections[$result['ID']] = array(

			'id' => $result['ID'],
			'parent' => $result['IBLOCK_SECTION_ID'],
			'img' => CFile::GetPath($result['UF_ICON']),
			'houseType' => $result['UF_HOUSE_TYPE']

		);
}


$currentSectionId = $arParams['PARENT_SECTION'];
$currentSection = $sections[$currentSectionId];
$currentHouse = $sections[$currentSection['parent']];

$sectionNav = new SectionLister();

$sectionSiblings = @$sectionNav->getSiblings($currentSection['id'], $currentSection['parent'], $arParams['IBLOCK_ID']);
$sectionPrevUrl = @$sectionSiblings['prev']['SECTION_PAGE_URL'];
$sectionNextUrl = @$sectionSiblings['next']['SECTION_PAGE_URL'];
$currentSectionNum = $sectionSiblings['prev']['num'] + 1;

$houseSiblings = @$sectionNav->getSiblings($currentHouse['id'], $currentHouse['parent'] , $arParams['IBLOCK_ID']);
$housePrevUrl = @$houseSiblings['prev']['SECTION_PAGE_URL'];
$houseNextUrl = @$houseSiblings['next']['SECTION_PAGE_URL'];
$currentHouseNum = $houseSiblings['prev']['num'] + 1;


$furnish = $arResult['ITEMS'][0]['DISPLAY_PROPERTIES']['ApartmentFurnish']['VALUE'];

?>


<!--<pre>-->
<!--	--><?//print_r($currentSection)?>
<!--</pre>-->


<div class="house-plan-page">
	<div class="big-figure circle"></div>
	<div class="big-figure wave-right"></div>
	<div class="pattern big-pattern pattern-3 dark-green anim-pattern" data-pattern="pattern-3"></div>
	<div class="wrapper-main">
		<div class="wrapper-outer">
			<a href="#" class="link--dashed"><span>Вернуться назад</span></a>
			<div class="content-wrapper">
				<div class="section-plan-wrapper">
					<div class="bird"></div>
					<div class="floor-list-over">
						<div class="floor-list">
							<h2>этаж</h2>
							<?for ($i = $maxFloor; $i >= $minFloor; $i--){?>
								<div class="floor-list__item floor-<?=$i?>"><?=$i?></div>
							<?}?>
						</div>
					</div>
					<div class="section-plan-over">
						<div class="section-plan">
							<?
							for ($i = $maxFloor; $i >= $minFloor; $i--){

									$flatsOnFloor = count($arFloors[$i]);

								?>
								<div class="floor-row" data-floor="<?=$i?>">
									<?for ($j = 0; $j < $flatsOnFloor; $j++){

										$flatId = $arFloors[$i][$j];
										$flat = $flats[$flatId];
										$flatProps = $flat['DISPLAY_PROPERTIES'];

										?>
										<a href="<?=$flat['DETAIL_PAGE_URL']?>" class="flat">
											<span class="room-count"><?=$flatProps['Rooms']['VALUE']?></span>
											<div class="flat-info">
												<div class="flat-info__params">
													<!--                                                <div class="param type">-->
													<!--                                                    <div class="name">Тип</div>-->
													<!--                                                    <div class="value">1.2 М</div>-->
													<!--                                                </div>-->
													<div class="param">
														<div class="name">Комнат</div>
														<div class="value"><?=$flatProps['Rooms']['VALUE']?></div>
													</div>
													<!--                                                <div class="param">-->
													<!--                                                    <div class="name">Квартира</div>-->
													<!--                                                    <div class="value">№547</div>-->
													<!--                                                </div>-->
													<div class="param">
														<div class="name">Площадь</div>
														<div class="value"><?=$flatProps['SpaceDesign']['VALUE']?> м<sup>2</sup></div>
													</div>
													<div class="param">
														<div class="name">Отделка</div>
														<div class="value"><?=$flatProps['ApartmentFurnish']['VALUE']?></div>
													</div>
													<div class="param price">
														<div class="name">Стоимость</div>
														<div class="value">12 560 000 <span class="ruble">a</span></div>
													</div>
													<div class="param price">
														<div class="name">По акции</div>
														<div class="value">11 560 000 <span class="ruble">a</span></div>
													</div>
												</div>
												<div class="flat-info__img" style="background-image: url(<?=$plans[$flatProps['TypeForSite']['VALUE']]['IMG']?>);"></div>
												<div class="flat-info__compass"></div>
											</div>
										</a>
									<?}?>
								</div>
							<?}?>
						</div>
					</div>
				</div>
				<div class="navigation-block">
					<div class="nav house-nav">
						<div class="nav-controls-over">
							<h4>корпус</h4>
							<div class="nav-controls">
								<a href="<?=$housePrevUrl?>" class="arrow arrow-prev <?= $housePrevUrl == '' ? 'disabled': '';?>"></a>
								<div class="caption"><?=$currentHouseNum?></div>
								<a href="<?=$houseNextUrl?>" class="arrow arrow-next <?= $houseNextUrl == '' ? 'disabled': '';?>"></a>
							</div>
						</div>
						<div class="nav-img-over">
							<div class="nav-img" style="background-image: url(<?=$currentHouse['img']?>);"></div>
						</div>
					</div>
					<div class="nav section-nav">
						<div class="nav-controls-over">
							<h4>секция</h4>
							<div class="nav-controls">
								<a href="<?=$sectionPrevUrl?>" class="arrow arrow-prev <?= $sectionPrevUrl == '' ? 'disabled': '';?>"></a>
								<div class="caption"><?=$currentSectionNum?></div>
								<a href="<?=$sectionNextUrl?>" class="arrow arrow-next <?= $sectionNextUrl == '' ? 'disabled': '';?>"></a>
							</div>
						</div>
						<div class="nav-img" style="background-image: url(<?=$currentSection['img']?>);"></div>
						<?if($furnish == 'С отделкой'){?>
							<div class="h5 finish">Секция с отделкой</div>
						<?}?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll-top "><a href="#">вернуться наверх</a></div>
</div>
