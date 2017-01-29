<? include 'include/header.php'?>
    <div class="flat-page">
        <div class="big-figure circle"></div>
        <div class="flat-page__content">
            <div class="plans">
                <a href="#" class="btn-back hidden-sm hidden-xs">Вернуться назад</a>
                <div class="general-plans">
                    <div class="plan" id="general-plan">
                        <a href="master-plan-filter.php">Генплан</a>
                        <div class="plan__img" style="background-image: url(/img/flat/genplan-map.svg);"></div>
                    </div>
                    <div class="plan" id="floor-plan">
                        <a href="house-plan.php">План этажа</a>
                        <div class="plan__img" style="background-image: url(/img/flat/floor-plan.svg);"></div>
                    </div>
                    <div class="plan" id="section-plan">
                        <a href="#section-popup" class="open-popup">План секции</a>
                        <div class="plan__img" style="background-image: url(/img/flat/section-plan.svg);"></div>
                        <div id="section-popup" class="popup mfp-hide">
                            <h2>План секции</h2>
                            <div class="popup__img" style="background-image: url(/img/flat/section-popup.jpg);"></div>
                        </div>
                    </div>
                </div>
                <div class="flat-plan">
                    <div class="h5 dark-green">Предложение по возможной отделке&nbsp;квартиры:</div>
                    <div class="plan__img" style="background-image: url(/img/flat/flat-plan.jpg);"></div>
                </div>
                <div class="extra-info">
                    <div class="finish">
                        <div class="finish__icon"></div>
                        <div class="finish__txt">Квартира с&nbsp;готовым ремонтом</div>
                    </div>
                    <div class="compass"></div>
                    <div class="notice box-shadow">
                        В данный момент
                        эту&nbsp;квартиру смотрят
                        <span>еще 4 человека</span>
                        <div class="btn-close"></div>
                    </div>
                </div>
                <div class="fluid-block visible-sm visible-xs">
                    <div class="slide-block">
                        <div class="slide-block__header"><span class="h4">Площади комнат<span class="star"> *</span></span></div>
                        <div class="param-list slide-block__content">
                            <div class="param">
                                <div class="param__name">Кухня</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Прихожая</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Ванная</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Туалет</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Гостиная</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Спальня</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Лоджия</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="notice">* Указанная площадь квартир является проектируемой и может незначительно отличатся по фактическим обмерам.</div>
                        </div>
                    </div>
                    <div class="slide-block">
                        <div class="slide-block__header"><span class="h4">Ипотечный калькулятор</span></div>
                        <div class="param-list slide-block__content">
                            <form class="mortgage-calc">
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
                                <div class="notice">
                                    Данный расчет является предварительным.<br>
                                    Для получения более точной информации обратитесь в отделение банка.
                                </div>
<!--                                <a href="#" class="btn-default btn-medium btn-green">Отправить заявку</a>-->
                            </form>
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn-default btn-medium btn-green">Заказать звонок</a>
                        <a href="#" class="btn-default btn-medium btn-green">Оставить заявку</a>
                    </div>
                    <div class="links">
                        <a href="#" class="btn-pdf">Сохранить<br>планировку</a>
                        <a href="#" class="btn-email">Отправить<br>по e-mail</a>
                    </div>
                </div>
            </div>
            <div class="flat-params">
                <a href="#" class="btn-back visible-sm-inline-block visible-xs-inline-block">Вернуться назад</a>
                <h2 class="dark-green">1-комнатная</h2>
                <h4 class="dark-green">евростандарт с отделкой</h4>
                <div class="price orange"><span class="price__value">12 460 000</span> <span class="ruble">a</span></div>
                <div class="param-list param-list--main">
                    <div class="param">
                        <div class="param__name">Корпус</div>
                        <div class="param__value">1</div>
                    </div>
                    <div class="param">
                        <div class="param__name">Квартира</div>
                        <div class="param__value">1045</div>
                    </div>
                    <div class="param">
                        <div class="param__name">Секция</div>
                        <div class="param__value">2</div>
                    </div>
                    <div class="param">
                        <div class="param__name">№ на секции</div>
                        <div class="param__value">3</div>
                    </div>
                    <div class="param">
                        <div class="param__name">Этаж</div>
                        <div class="param__value">8</div>
                    </div>
                    <div class="param">
                        <div class="param__name">Площадь, м<sup>2</sup></div>
                        <div class="param__value">40,67</div>
                    </div>
                </div>
                <div class="fluid-block hidden-sm hidden-xs">
                    <div class="slide-block">
                        <div class="slide-block__header"><span class="h4">Площади комнат<span class="star"> *</span></span></div>
                        <div class="param-list slide-block__content">
                            <div class="param">
                                <div class="param__name">Кухня</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Прихожая</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Ванная</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Туалет</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Гостиная</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Спальня</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="param">
                                <div class="param__name">Лоджия</div>
                                <div class="param__value">12,45</div>
                            </div>
                            <div class="notice">* Указанная площадь квартир является проектируемой и может незначительно отличатся по фактическим обмерам.</div>
                        </div>
                    </div>
                    <div class="slide-block">
                        <div class="slide-block__header"><span class="h4">Ипотечный калькулятор</span></div>
                        <div class="param-list slide-block__content">
                            <form class="mortgage-calc">
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
                                <div class="notice">
                                    Данный расчет является предварительным.<br>
                                    Для получения более точной информации обратитесь в отделение банка.
                                </div>
<!--                                <a href="#" class="btn-default btn-medium btn-green">Отправить заявку</a>-->
                            </form>
                        </div>
                    </div>
                    <div class="buttons">
                        <a href="#" class="btn-default btn-medium btn-green">Заказать звонок</a>
                        <a href="#" class="btn-default btn-medium btn-green">Оставить заявку</a>
                    </div>
                    <div class="links">
                        <a href="#" class="btn-pdf">Сохранить<br>планировку</a>
                        <a href="#" class="btn-email">Отправить<br>по e-mail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-top "><a href="#">вернуться наверх</a></div>
    </div>
<? include 'include/footer.php'?>
