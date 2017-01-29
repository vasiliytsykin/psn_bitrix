<? include 'include/header.php'?>
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
                                <?for ($i = 9; $i > 0; $i--){?>
                                    <div class="floor-list__item floor-<?=$i?>"><?=$i?></div>
                                <?}?>
                            </div>
                        </div>
                        <div class="section-plan-over">
                            <div class="section-plan">
                                <?
                                $flats = array(1,1,2,3,2,1);
                                for ($i = 9; $i > 0; $i--){?>
                                <div class="floor-row" data-floor="<?=$i?>">
                                    <?for ($j = 0; $j < 6; $j++){?>
                                    <a href="#" class="flat">
                                        <span class="room-count"><?=$flats[$j]?></span>
                                        <div class="flat-info">
                                            <div class="flat-info__params">
<!--                                                <div class="param type">-->
<!--                                                    <div class="name">Тип</div>-->
<!--                                                    <div class="value">1.2 М</div>-->
<!--                                                </div>-->
                                                <div class="param">
                                                    <div class="name">Комнат</div>
                                                    <div class="value"><?=$flats[$j]?></div>
                                                </div>
<!--                                                <div class="param">-->
<!--                                                    <div class="name">Квартира</div>-->
<!--                                                    <div class="value">№547</div>-->
<!--                                                </div>-->
                                                <div class="param">
                                                    <div class="name">Площадь</div>
                                                    <div class="value">40 м<sup>2</sup></div>
                                                </div>
                                                <div class="param">
                                                    <div class="name">Отделка</div>
                                                    <div class="value">с отделкой</div>
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
                                            <div class="flat-info__img"></div>
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
                                    <a href="#" class="arrow arrow-prev"></a>
                                    <div class="caption">1</div>
                                    <a href="#" class="arrow arrow-next"></a>
                                </div>
                            </div>
                            <div class="nav-img-over">
                                <div class="nav-img" style="background-image: url(/img/house-plan/general_plan.svg);"></div>
                            </div>
                        </div>
                        <div class="nav section-nav">
                            <div class="nav-controls-over">
                                <h4>секция</h4>
                                <div class="nav-controls">
                                    <a href="#" class="arrow arrow-prev"></a>
                                    <div class="caption">6</div>
                                    <a href="#" class="arrow arrow-next"></a>
                                </div>
                            </div>
                            <div class="nav-img" style="background-image: url(/img/house-plan/floor_plan.svg);"></div>
                            <div class="h5 finish">Секция с отделкой</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-top "><a href="#">вернуться наверх</a></div>
    </div>
<? include 'include/footer.php'?>
