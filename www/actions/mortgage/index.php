<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ипотека");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/mortgage.css');
?>

    <div class="mortgage-page">
        <div class="big-figure wave-right"></div>
        <div class="big-figure circle"></div>
        <div class="wrapper-main">
            <h1 class="dark-green">Ипотека</h1>
            <div class="top-banner">
                <div class="top-banner__img"></div>
                <div class="top-banner__txt-over">
                    <div class="top-banner__txt">
                        <h2>Для квартиры вашей&nbsp;мечты</h2>
                        <h5>Заполните заявку на ипотеку сейчас и мы подберем самое выгодное предложение для вас!</h5>
                        <div class="btn-default btn-medium btn-white">Отправить заявку</div>
                    </div>
                </div>
            </div>
            <div class="bank-table-over">
                <div class="bank-table">
                    <div class="bank-table__row bank-table__head">
                        <div class="cell">Банки</div>
                        <div class="cell">Ставка</div>
                        <div class="cell">Первоначальный <br class="visible-sm">взнос</div>
                        <div class="cell">Срок <br class="visible-sm">кредитования</div>
                    </div>
                    <div class="bank-table__row sbr">
                        <div class="cell bank-logo"></div>
                        <div class="cell"><span class="cell__header visible-xs">Ставка</span>11,5%</div>
                        <div class="cell"><span class="cell__header visible-xs">Первоначальный <br>взнос</span>20%</div>
                        <div class="cell"><span class="cell__header visible-xs">Срок <br>кредитования</span>20 лет</div>
                    </div>
                    <div class="bank-table__row otk">
                        <div class="cell bank-logo"></div>
                        <div class="cell"><span class="cell__header visible-xs">Ставка</span>12,8%</div>
                        <div class="cell"><span class="cell__header visible-xs">Первоначальный <br>взнос</span>20%</div>
                        <div class="cell"><span class="cell__header visible-xs">Срок <br>кредитования</span>20 лет</div>
                    </div>
                    <div class="bank-table__row vtb">
                        <div class="cell bank-logo"></div>
                        <div class="cell"><span class="cell__header visible-xs">Ставка</span>12,8%</div>
                        <div class="cell"><span class="cell__header visible-xs">Первоначальный <br>взнос</span>20%</div>
                        <div class="cell"><span class="cell__header visible-xs">Срок <br>кредитования</span>20 лет</div>
                    </div>
                </div>
            </div>
            <div class="wrapper-inner">
                <div class="mortgage-calc-over">
                    <form class="mortgage-calc">
                        <h2>Ипотечный калькулятор</h2>
                        <h5>Заполните форму и узнайте размер вашего месячного платежа</h5>
                        <div class="inputs">
                            <div class="input-group">
                                <label>Стоимость жилья, руб</label>
                                <input type="text" name="price">
                            </div>
                            <div class="input-group">
                                <label>Первоначальный взнос, руб.</label>
                                <input type="text" name="deposit">
                            </div>
                            <div class="input-group">
                                <label>Ставка, %</label>
                                <div class="select-box">
                                    <input type="hidden" name="percent">
                                    <div class="caption"></div>
                                    <div class="options">
                                        <div class="option">
                                            <div class="bank-logo psb"></div>
                                            <div class="sub-options">
                                                <div class="sub-option">10,75%</div>
                                                <div class="sub-option">9,90%</div>
                                                <div class="sub-option">9,90%</div>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="bank-logo sber"></div>
                                            <div class="sub-options">
                                                <div class="sub-option">11,75%</div>
                                                <div class="sub-option">19,90%</div>
                                                <div class="sub-option">19,90%</div>
                                            </div>
                                        </div>
                                        <div class="option">
                                            <div class="bank-logo otk"></div>
                                            <div class="sub-options">
                                                <div class="sub-option">13,75%</div>
                                                <div class="sub-option">12,90%</div>
                                                <div class="sub-option">12,90%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group">
                                <label>Срок кредитования, лет</label>
                                <input type="text" name="term">
                            </div>
                            <div class="input-group">
                                <label>Ежемесячный платеж, руб.</label>
                                <div class="result orange">20 340</div>
                            </div>
                            <div class="input-group">
                                <a href="#" class="btn-default btn-medium btn-green">Отправить заявку</a>
                            </div>
                        </div>
                        <div class="notice">
                            Данный расчет является предварительным.<br>
                            Для получения более точной информации обратитесь в отделение банка.
                        </div>
                    </form>
                </div>
            </div>
            <div class="contacts">
                <h3>По любым вопросам звоните нам,<br class="hidden-xs">
                    мы расскажем обо всём, что&nbsp;вас&nbsp;интересует
                </h3>
                <div class="phone">+7 495  800 41 48</div>
                <a href="#" class="btn-default btn-medium btn-green">Заказать звонок</a>
            </div>
            <div class="scroll-top "><a href="#">вернуться наверх</a></div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>