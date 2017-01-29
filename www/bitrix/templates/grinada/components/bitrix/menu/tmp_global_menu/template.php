<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>

    <ul class="top-menu">
    <?
    $previousLevel = 0;
    foreach($arResult as $arItem){
    ?>
    	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel){?>
    		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    	<?}?>

    	<?if ($arItem["IS_PARENT"]){?>
            <li class="top-level">
                <a href="<?=$arItem["LINK"]?>" class="nested"><?=$arItem["TEXT"]?></a>
                <ul class="sub-menu">

    	<?} else if($arItem["DEPTH_LEVEL"] == 1) {?>
                 <li class="top-level">
                     <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                 </li>

    	<?} else {?>

            <li class="sub-level">
                <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            </li>

    	<?}?>

    	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

    <?}?>

    <?if ($previousLevel > 1){?>
    	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
    <?}?>

    </ul>
<?}?>