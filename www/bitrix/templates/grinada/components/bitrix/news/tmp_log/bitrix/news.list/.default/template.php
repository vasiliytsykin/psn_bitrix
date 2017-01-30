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

<div class="preview">
	<div class="preview__items">
		<? foreach($arResult["ITEMS"] as $arItem){

			$arDateTime = explode(' ', $arItem['ACTIVE_FROM']);
			$date = $arDateTime[0];
			$arPhotos = $arItem['PROPERTIES']['PHOTOS']['VALUE'];
			$arPhotosUrls = array();
			foreach ($arPhotos as $photoId)
				array_push($arPhotosUrls, CFile::GetPath($photoId));

			?>
			<a href="#log-popup<?=$arItem['ID']?>" class="preview__item" style="background-image: url(<?=$arPhotosUrls[0]?>);">
				<div class="mask"></div>
				<div class="date"><?=$date?></div>
				<div class="log-gallery__popup mfp-hide" id="log-popup<?=$arItem['ID']?>">
					<div class="big-slider popup__items">
						<?foreach ($arPhotosUrls as $photoUrl){?>
							<div class="popup__item"><img src="<?=$photoUrl?>"></div>
						<?}?>
					</div>
					<div class="date"><?=$date?></div>
					<div class="desc"><?=$arItem['NAME']?></div>
				</div>
			</a>

<!--			<pre>-->
<!--				--><?//print_r($arItem)?>
<!--			</pre>-->

		<?}?>
	</div>
</div>
