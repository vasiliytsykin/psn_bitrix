<? include 'include/header.php'?>

    <div class="news-page">
        <div class="big-figure circle"></div>
        <div class="big-figure wave-right"></div>
        <h1 class="dark-green">Новости</h1>
        <div class="gallery">
            <div class="gallery__switch-over">
                <div class="gallery__switch">
                    <div class="switch__tab tab-1" data-tab="tab-1">
                        <span class="hidden-sm hidden-xs">новости проекта</span>
                        <span class="visible-sm-inline visible-xs-inline">о проекте</span>
                    </div>
                    <div class="switch__tab tab-2 active" data-tab="tab-2">
                        <span class="hidden-sm hidden-xs">новости компании</span>
                        <span class="visible-sm-inline visible-xs-inline">о компании</span>
                    </div>
                </div>
            </div>
            <div class="wrapper-main">
                <div class="wrapper-inner">
                    <div class="gallery__tab tab-1">
                        <div class="news-list"></div>
                    </div>
                    <div class="gallery__tab tab-2 active">
                        <div class="news-list">
                            <a href="news-detail.php" class="info-block">
                                <div class="info-block__img-over">
                                    <div class="info-block__date-over">
                                        <div class="info-block__date">
                                            <div class="top-line">
                                                <div class="day">26</div>
                                                <div class="month">сентября</div>
                                            </div>
                                            <div class="year">‘16</div>
                                        </div>
                                    </div>
                                    <div class="info-block__img" style="background-image: url(/img/news/news_1.jpg);"></div>
                                </div>
                                <div class="info-block__txt">
                                    <h3>Дополнительная скидка 1% для&nbsp;посетителей выставки «Недвижимость от лидеров»</h3>
                                    <p>С 29 сентября по 2 октября ГК ПИК участвует в&nbsp;ведущей московской выставке-ярмарке «Недвижимость от лидеров» в ЦДХ ...</p>
                                </div>
                            </a>
                            <a href="news-detail.php" class="info-block">
                                <div class="info-block__img-over">
                                    <div class="info-block__date-over">
                                        <div class="info-block__date">
                                            <div class="top-line">
                                                <div class="day">13</div>
                                                <div class="month">сентября</div>
                                            </div>
                                            <div class="year">‘16</div>
                                        </div>
                                    </div>
                                    <div class="info-block__img" style="background-image: url(/img/news/news_2.jpg);"></div>
                                </div>
                                <div class="info-block__txt">
                                    <h3>Ипотека с первоначальным взносом 5% – новые возможности для клиентов</h3>
                                    <p>
                                        Банк «Возрождение» снизил размер первоначального взноса по ипотечным  кредитам до 5% для клиентов Группы PSN.
                                    </p>
                                </div>
                            </a>
                            <a href="news-detail.php" class="info-block">
                                <div class="info-block__img-over">
                                    <div class="info-block__date-over">
                                        <div class="info-block__date">
                                            <div class="top-line">
                                                <div class="day">30</div>
                                                <div class="month">августа</div>
                                            </div>
                                            <div class="year">‘16</div>
                                        </div>
                                    </div>
                                    <div class="info-block__img" style="background-image: url(/img/news/news_3.jpg);"></div>
                                </div>
                                <div class="info-block__txt">
                                    <h3>Выгодные цены на старте продаж&nbsp;в&nbsp;корпусе №1 района «Северное&nbsp;Бутово»</h3>
                                    <p>
                                        Комплексная застройка района включает развитие полноценной социальной и&nbsp;коммерческой инфраструктуры.
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="show-more">
                            <a href="#" class="btn-default btn-medium btn-green">Показать еще</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sign-in">
            <h3>Подпишитесь на нашу рассылку, чтобы&nbsp;быть&nbsp;в&nbsp;курсе последних новостей и акций</h3>
            <form action="#" class="sign-in__form">
                <input type="email" name="e-mail" placeholder="E-mail">
                <input type="checkbox" id="agreement">
                <label for="agreement">Я согласен на <span class="terms">условия по получению email-рассылки</span></label>
                <input type="submit" value="Подписаться на рассылку" class="btn-default btn-medium btn-green">
            </form>
        </div>
        <div class="scroll-top "><a href="#">вернуться наверх</a></div>
    </div>


<? include 'include/footer.php'?>
