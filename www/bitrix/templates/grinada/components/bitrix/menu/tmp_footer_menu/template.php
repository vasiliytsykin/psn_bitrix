<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>

<div class="footer__menu">
    <?
    $previousLevel = 0;
    foreach($arResult as $arItem){
    ?>
    <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel && $arItem["LINK"] != '/news/'){?>
        <?=str_repeat("</ul>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    <?}?>

    <?if ($arItem["IS_PARENT"]){?>
    <ul>
        <li class="top-level"><a href="<?=$arItem["LINK"]?>" class="nested"><?=$arItem["TEXT"]?></a></li>

            <?} else if($arItem["DEPTH_LEVEL"] == 1 && $arItem["LINK"] != '/contacts/' && $arItem["LINK"] != '/news/') {?>
                <li class="top-level">
                    <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                </li>

            <?}


            else if($arItem["DEPTH_LEVEL"] == 1 && $arItem["LINK"] == '/news/'){?>
                <li class="sub-level">
                    <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                </li>
                </ul>
            <?}

            else if($arItem["DEPTH_LEVEL"] == 1 && $arItem["LINK"] == '/contacts/'){?>
                <ul>
                    <li class="top-level"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                    <li class="sub-level">Москва, Феодосийская ул., вл. 1/9</li>
                    <li class="phone">
                        <span class="code">+7 (495) </span>
                        <span class="number">800 41 48</span>
                    </li>
                    <li><a href="#" class="btn-default btn-green feedback-open call">Заказать звонок</a></li>
                </ul>
            <?}

            else if($arItem["DEPTH_LEVEL"] == 2){?>
                <li class="sub-level">
                    <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                </li>
            <?}?>



            <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

            <?}?>
</div>
<?}?>