<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
	<ul class="sub-menu__items">
		<?foreach($arResult as $arItem){
			$active = $arItem["SELECTED"] ? 'active' : '';
			?>
			<li class="sub-level <?=$active?>"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
		<?}?>
	</ul>
<?}?>
