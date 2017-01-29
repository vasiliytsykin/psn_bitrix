<? include 'include/header.php'?>
    <div class="plan-filter-page">
        <div class="big-figure circle"></div>
        <div class="pattern carrot dark-green anim-pattern" data-pattern="carrot"></div>
        <div class="pattern bird light-green anim-pattern" data-pattern="bird"></div>
        <div class="pattern trees light-green anim-pattern" data-pattern="trees"></div>
        <div class="pattern bee light-green anim-pattern" data-pattern="bee"></div>
        <div class="wrapper-main">
            <h1 class="dark-green">Выбор по типам планировок</h1>
            <h5>Представлено более 100 вариантов различных планировок</h5>
            <div class="filter-over">
            <div class="filter">
                <div class="filter__params">
                    <div class="input-group house">
                        <div class="input-group__name">корпус</div>
                        <ul class="inputs">
                            <li class="special">
                                <input type="checkbox" id="house-all">
                                <label for="house-all">все</label>
                            </li>
                            <ul class="inputs inputs--special panel">
                                <li class="house-type">панельные</li>
                                <li>
                                    <input type="checkbox" id="house-1">
                                    <label for="house-1">1</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="house-3" disabled>
                                    <label for="house-3">3</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="house-4" disabled>
                                    <label for="house-4">4</label>
                                </li>
                            </ul>
                            <ul class="inputs inputs--special mono">
                                <li class="house-type">монолитные</li>
                                <li>
                                    <input type="checkbox" id="house-2">
                                    <label for="house-2">2</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="house-5" disabled>
                                    <label for="house-5">5</label>
                                </li>
                                <li>
                                    <input type="checkbox" id="house-6" disabled>
                                    <label for="house-6">6</label>
                                </li>
                            </ul>
                        </ul>
                    </div>
                    <div class="input-group room">
                        <div class="input-group__name">комнат</div>
                        <ul class="inputs">
                            <li>
                                <input type="checkbox" id="room-all">
                                <label for="room-all">все</label>
                            </li>
                            <li>
                                <input type="checkbox" id="studio">
                                <label for="studio">ст.</label>
                            </li>
                            <li>
                                <input type="checkbox" id="room-1">
                                <label for="room-1">1 к.</label>
                            </li>
                            <li>
                                <input type="checkbox" id="room-2">
                                <label for="room-2">2 к.</label>
                            </li>
                            <li>
                                <input type="checkbox" id="room-3">
                                <label for="room-3">3 к.</label>
                            </li>
                            <li>
                                <input type="checkbox" id="room-4">
                                <label for="room-4">4 к.</label>
                            </li>
                        </ul>
                    </div>
                    <div class="input-group finish">
                        <div class="input-group__name">отделка</div>
                        <ul class="inputs">
                            <li>
                                <input type="checkbox" id="no-finish">
                                <label for="no-finish">без отделки</label>
                            </li>
                            <li>
                                <input type="checkbox" id="finish">
                                <label for="finish">с отделкой</label>
                            </li>
                        </ul>
                        <a href="javascript:window.location.reload(true)" class="link--dashed reset-filter visible-md visible-lg"><span>Сбросить параметры</span></a>
                    </div>
                    <a href="javascript:window.location.reload(true)" class="link--dashed reset-filter visible-sm visible-xs"><span>Сбросить параметры</span></a>
                </div>
                <div class="filter__results-over">
                    <div class="filter__results">
                        <a href="plan-filter-detail.php" class="item">
                            <div class="item__img" style="background-image: url(/img/plan-filter/plan_1.svg);"></div>
                            <div class="item__desc">
                                <div class="plan-type h4 dark-green">планировка<br>1М.4.а</div>
                                <div class="h4">доступна в&nbsp;корпусах:<div class="value">№1, №2</div></div>
                                <div class="h4">стоимость<div class="value price">от 12 460 000 <span class="ruble">a</span></div></div>
                                <div class="h4">Площадь<div class="value">40,67 м<sup>2</sup></div></div>
                            </div>
                            <div class="hover-block">
                                <div class="h4">Доступно предложений:</div>
                                <div class="h1">3</div>
                            </div>
                        </a>
                        <a href="plan-filter-detail.php" class="item">
                            <div class="item__img" style="background-image: url(/img/plan-filter/plan_2.svg);"></div>
                            <div class="item__desc">
                                <div class="plan-type h4 dark-green">планировка<br>1М.3.а</div>
                                <div class="h4">доступна в&nbsp;корпусах:<div class="value">№3, №4</div></div>
                                <div class="h4">стоимость<div class="value price">от 10 460 000 <span class="ruble">a</span></div></div>
                                <div class="h4">Площадь<div class="value">50,6 м<sup>2</sup></div></div>
                            </div>
                            <div class="hover-block">
                                <div class="h4">Доступно предложений:</div>
                                <div class="h1">5</div>
                            </div>
                        </a>
                        <a href="plan-filter-detail.php" class="item">
                            <div class="item__img" style="background-image: url(/img/plan-filter/plan_3.svg);"></div>
                            <div class="item__desc">
                                <div class="plan-type h4 dark-green">планировка<br>1М.4.а</div>
                                <div class="h4">доступна в&nbsp;корпусах:<div class="value">№1, №2</div></div>
                                <div class="h4">стоимость<div class="value price">от 12 460 000 <span class="ruble">a</span></div></div>
                                <div class="h4">Площадь<div class="value">40,67 м<sup>2</sup></div></div>
                            </div>
                            <div class="hover-block">
                                <div class="h4">Доступно предложений:</div>
                                <div class="h1">3</div>
                            </div>
                        </a>
                        <a href="plan-filter-detail.php" class="item">
                            <div class="item__img" style="background-image: url(/img/plan-filter/plan_4.svg);"></div>
                            <div class="item__desc">
                                <div class="plan-type h4 dark-green">планировка<br>1М.3.а</div>
                                <div class="h4">доступна в&nbsp;корпусах:<div class="value">№3, №4</div></div>
                                <div class="h4">стоимость<div class="value price">от 10 460 000 <span class="ruble">a</span></div></div>
                                <div class="h4">Площадь<div class="value">50,6 м<sup>2</sup></div></div>
                            </div>
                            <div class="hover-block">
                                <div class="h4">Доступно предложений:</div>
                                <div class="h1">5</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                <div class="show-all"><a href="#" class="btn-default btn-medium btn-green">Показать все</a></div>
            </div>
            <div class="scroll-top "><a href="#">вернуться наверх</a></div>
        </div>
    </div>
<? include 'include/footer.php'?>
