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

<div class="history-page">
	<div class="big-figure circle"></div>
	<div class="big-figure circle green"></div>
	<div class="big-figure wave-left"></div>
	<div class="pattern shower light-green anim-pattern" data-pattern="shower"></div>
	<div class="pattern buggy dark-green anim-pattern" data-pattern="buggy"></div>
	<div class="pattern bird dark-green anim-pattern" data-pattern="bird"></div>
	<div class="pattern carrot light-green anim-pattern" data-pattern="carrot"></div>
	<div class="wrapper-main">
		<h1 class="dark-green">История района</h1>
		<div class="top-banner"></div>
		<div class="wrapper-inner">
			<div class="event-list">
				<?foreach ($arResult["ITEMS"] as $arItem){
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

					$date = $arItem['CODE'];
					?>
					<div class="event" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="event__img-over">
							<div class="event__date"><?=$date?></div>
							<div class="event__img" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);"></div>
						</div>
						<div class="event__txt">
							<h2><?=$arItem['NAME']?><br><span class="h5 dark-green"><?
									echo (isset($arItem["DISPLAY_PROPERTIES"]['address'])?
										$arItem["DISPLAY_PROPERTIES"]['address']['VALUE']:''
									);?></span></h2>
							<div class="txt-trigger">Описание</div>
							<div class="desc"><?=$arItem['PREVIEW_TEXT']?></div>
						</div>
						<div class="icon" style="background-image: url(/bitrix/templates/grinada/img/history/<?=$date?>.svg);"></div>
					</div>
				<?}?>
			</div>
		</div>
	</div>
	<div class="scroll-top "><a href="#">вернуться наверх</a></div>
</div>