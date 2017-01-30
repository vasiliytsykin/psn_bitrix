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

global $arFilter;
$lineLevel = 1;
$houseLevel = 2;
$arSections = array();

if(CModule::IncludeModule('iblock')){

	$rsSection = CIBlockSection::GetList(Array("SORT"=>"ASC"), Array("IBLOCK_ID" => $arParams["IBLOCK_ID"]), false, Array("UF_*"));
	while($arSection = $rsSection->GetNext()) {

		$depthLevel = $arSection["DEPTH_LEVEL"];
		$sectionId = $arSection['ID'];

		if($depthLevel == $lineLevel)
			$arSections[$sectionId] = $arSection;
		if($depthLevel == $houseLevel)
		{
			$parentSectionId = $arSection["IBLOCK_SECTION_ID"];
			$arSections[$parentSectionId]["SUB_SECTIONS"][$sectionId] = $arSection;
		}

	}

}

?>

<div class="gallery">
	<div class="gallery__switch-over">
		<div class="gallery__switch">
			<? foreach($arSections as $arSection){
				$active = $arSection['CODE'] == 'line_1' ? 'active': '';
				?>
				<div class="switch__tab tab-<?=$arSection['ID']?> <?=$active?>" data-tab="tab-<?=$arSection['ID']?>"></div>
			<?}?>
		</div>
	</div>
	<div class="wrapper-main">
		<div class="wrapper-outer">
			<div class="gallery__tabs">
				<a href="#" class="camera"></a>
				<? foreach($arSections as $arSection){
					$active = $arSection['CODE'] == 'line_1' ? 'active': '';
					?>
					<div class="gallery__tab <?=$arSection['ID']?> <?=$active?>">
						<?foreach ($arSection["SUB_SECTIONS"] as $subSection){

							$imgUrl = CFile::GetPath($subSection["PICTURE"]);
							$desc = htmlspecialchars_decode($subSection["DESCRIPTION"]);
							$rsHouseType = CUserFieldEnum::GetList(array(), array("ID" => $subSection['UF_HOUSE_TYPE'],"USER_FIELD_ID" => 10))->GetNext();
							$houseType = $rsHouseType['VALUE'];
							$arFilter = array('SECTION_ID' => $subSection['ID']);

							?>

							<div class="gallery__item" data-progress="<?=$subSection['UF_READY']?>">
								<div class="item__info">
									<div class="visible-xs">
										<h2><?=$subSection['NAME']?></h2>
										<h5>Июнь 2016</h5>
									</div>
									<div class="item__graphics">
										<div class="item__graphics-inner" style="background-image: url(<?=$imgUrl?>);">
											<div class="progress <?=$houseType?>">
												<h4>Готовность</h4>
												<div class="percent">0%</div>
											</div>
											<div class="progress-bar" id="p-bar-<?=$arSection['ID']?>-<?=$subSection['ID']?>"></div>
										</div>
									</div>
									<div class="item__txt">
										<div class="item__txt-inner">
											<div class="hidden-xs">
												<h2><?=$subSection['NAME']?></h2>
												<h5>Июнь 2016</h5>
											</div>
											<p><?=$desc?></p>
										</div>
									</div>
								</div>
								<div class="item__gallery">
									<h4 class="from"><?=$subSection['UF_START']?></h4>
									<h4 class="to"><?=$subSection['UF_END']?></h4>
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.list",
										"",
										Array(
											"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
											"IBLOCK_ID" => $arParams["IBLOCK_ID"],
											"NEWS_COUNT" => $arParams["NEWS_COUNT"],
											"SORT_BY1" => $arParams["SORT_BY1"],
											"SORT_ORDER1" => $arParams["SORT_ORDER1"],
											"SORT_BY2" => $arParams["SORT_BY2"],
											"SORT_ORDER2" => $arParams["SORT_ORDER2"],
											"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
											"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
											"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
											"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
											"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
											"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
											"SET_TITLE" => $arParams["SET_TITLE"],
											"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
											"MESSAGE_404" => $arParams["MESSAGE_404"],
											"SET_STATUS_404" => $arParams["SET_STATUS_404"],
											"SHOW_404" => $arParams["SHOW_404"],
											"FILE_404" => $arParams["FILE_404"],
											"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
											"CACHE_TYPE" => $arParams["CACHE_TYPE"],
											"CACHE_TIME" => $arParams["CACHE_TIME"],
											"CACHE_FILTER" => $arParams["CACHE_FILTER"],
											"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
											"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
											"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
											"PAGER_TITLE" => $arParams["PAGER_TITLE"],
											"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
											"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
											"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
											"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
											"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
											"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
											"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
											"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
											"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
											"DISPLAY_NAME" => "Y",
											"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
											"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
											"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
											"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
											"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
											"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
											"FILTER_NAME" => 'arFilter',
											"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
											"CHECK_DATES" => $arParams["CHECK_DATES"],
										),
										$component
									);?>
								</div>
							</div>

							
<!--							<pre>-->
<!--								--><?//print_r($subSection)?>
<!--							</pre>-->
							
						<?}?>
					</div>
				<?}?>
				<div class="pattern big-pattern pattern-2 dark-green anim-pattern" data-pattern="pattern-2"></div>
			</div>
		</div>
	</div>
</div>
