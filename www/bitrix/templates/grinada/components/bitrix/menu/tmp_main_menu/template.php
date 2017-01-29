<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
	<ul class="top-menu">
		<?foreach($arResult as $arItem){
		    $nested = $arItem["IS_PARENT"] ? 'nested' : '';
		    if($arItem["DEPTH_LEVEL"] == 1){
		    ?>
			<li class="top-level"><a href="<?=$arItem["LINK"]?>" class="<?=$nested?>"><?=$arItem["TEXT"]?></a></li>
		<?}}?>
	</ul>
<?}?>



