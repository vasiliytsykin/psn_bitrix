<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, minimum-scale=0.65, maximum-scale=1.0 user-scalable=yes">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="MobileOptimized" content="480">
        <meta name="format-detection" content="telephone=no">
        <link rel="stylesheet" href="lib/bootstrap-grid.css">
        <link rel="stylesheet" href="fonts/bwsurco/bwsurco.css">
        <link rel="stylesheet" href="fonts/geometria/geometria.css">
        <link rel="stylesheet" href="fonts/ALSRublRegular/ALSRublRegular.css">
        <link rel="stylesheet" href="lib/owl.carousel/dist/assets/owl.carousel.css">
        <link rel="stylesheet" href="lib/slick-carousel/slick/slick.css">
        <link rel="stylesheet" href="lib/ion.rangeSlider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="css/rangeSlider.css">
        <link rel="stylesheet" href="lib/pickmeup/css/pickmeup.css">
        <link rel="stylesheet" href="lib/dragdealer/dragdealer.css">
        <link rel="stylesheet" href="lib/magnific-popup/dist/magnific-popup.css">
        <link rel="stylesheet" href="css/style.css">
        <title>PSN</title>
    </head>
    <body>
        <?include 'menu.php'?>
        <div class="shade"></div>
        <header class="header">
            <div class="header__top-line">
                <div class="header__extra-links">
                    <a href="#" class="psn">PSN GROUP</a>
                    <a href="#" class="online-camera">on-line камера</a>
                </div>
            </div>
            <div class="header__bottom-line">
                <a href="/" class="header__logo"></a>
                <div class="header__nav">
                    <ul class="top-menu">
                        <?foreach ($menu as $name => $topLevelItem){
                            $nested = count($topLevelItem['items']) != 0 ? 'nested' : ''; ?>
                            <li class="top-level"><a href="<?=$topLevelItem['url']?>" class="<?=$nested?>"><?=$topLevelItem['name']?></a></li>
                        <?}?>
                    </ul>
                </div>
                <div class="header__contact">
                    <div class="phone dark-green">
                        <span class="code">+7 (495) </span>
                        <span class="number">800 41 48</span>
                    </div>
                    <a href="#" class="btn-default btn-green feedback-open">Заказать звонок</a>
                    <a href="#" class="email"></a>
                </div>
            </div>
        </header>
        <div class="global-menu">
            <div class="global-menu__control"><div class="burger-btn"><span></span></div></div>
            <div class="global-menu__content">
                <ul class="top-menu">
                    <?foreach ($menu as $name => $topLevelItem){
                        $nested = count($topLevelItem['items']) != 0 ? 'nested' : ''; ?>
                        <li class="top-level">
                            <a href="<?=$topLevelItem['url']?>" class="<?=$nested?>"><?=$topLevelItem['name']?></a>
                            <ul class="sub-menu">
                                <?foreach ($topLevelItem['items'] as $subItem){?>
                                    <li class="sub-level"><a href="<?=$subItem['url']?>"><?=$subItem['name']?></a></li>
                                <?}?>
                            </ul>
                        </li>
                    <?}?>
                </ul>
                <div class="global-menu__contact">
                    <div class="address">
                        Москва,<br>
                        Феодосийская ул., вл. 1/9
                    </div>
                    <div class="phone dark-green">
                        <span class="code">+7 (495) </span>
                        <span class="number">800 41 48</span>
                    </div>
                    <a href="#" class="btn-default btn-medium btn-green">Заказать звонок</a>
                    <div class="socials">
                        <div class="social socials--fb"></div>
                        <div class="social socials--vk"></div>
                        <div class="social socials--ok"></div>
                        <div class="social socials--ins"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sub-menu--main">
            <div class="wrapper-main">
                <?
                $currentPage = str_replace(array('/', '.php'), '', $_SERVER['REQUEST_URI']);
                if($currentPage != ''){
                    ?>
                    <ul class="sub-menu__items">
                        <?
                        if(isset($itemsToMenu[$currentPage])){
                            $subMenu = $menu[$itemsToMenu[$currentPage]];
                            foreach ($subMenu['items'] as $subItem){

                                $active = strpos($subItem['url'], $currentPage) === 0 ? 'active' : '';
                                ?>
                            <li class="sub-level <?=$active?>"><a href="<?=$subItem['url']?>"><?=$subItem['name']?></a></li><?}}?>
                    </ul>
                <?}?>
            </div>
        </div>
        <div class="content <?if($currentPage == '') echo 'main'?>">

