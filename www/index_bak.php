<?php
include __DIR__.'/php/init.php';
include __DIR__.'/php/text_content.php';
include __DIR__.'/tmp/header.php';
?>





    <div class="content">

        <div class="slider-over">
            <div class="main-slider">
                <div class="main-slider-item" style="background-image: url(/img/jpg/top_slider_1.jpg);"></div>
                <div class="main-slider-item" style="background-image: url(/img/jpg/top_slider_2.jpg);"></div>
                <div class="main-slider-item" style="background-image: url(/img/jpg/top_slider_3.jpg);"></div>
            </div>
            <div class="scroll-down"><span>проскрольте вниз</span></div>
        </div>

        <div class="green-bar">
            <ul>
                <li class="green-bar-item">
                    <div class="green-bar-item-img" style="background-image: url(/img/preimuschestva_1.svg);"></div>
                </li>
                <li class="green-bar-item">
                    <div class="green-bar-item-txt">
                        <span>веревочный парк</span>
                        для детей и взрослых
                    </div>
                    <div class="green-bar-item-img" style="background-image: url(/img/preimuschestva_2.svg);"></div>
                </li>
                <li class="green-bar-item">
                    <div class="green-bar-item-txt">
                        <span>10 минут</span>
                        пешком до метро
                    </div>
                    <div class="green-bar-item-img" style="background-image: url(/img/preimuschestva_3.svg);"></div>
                </li>
                <li class="green-bar-item">
                    <div class="green-bar-item-txt">
                        <span>летняя оранжерея</span>
                        для будущего урожая
                    </div>
                    <div class="green-bar-item-img" style="background-image: url(/img/preimuschestva_4.svg);"></div>
                </li>
            </ul>
        </div>

        <div class="wrapper-outer">
            <div class="block-about">
                <div class="wrapper-inner clearfix">
                    <div class="block-txt">
                        <h2>О проекте</h2>
                        <p>Девелопер проекта PSN Group приступил к разработке нового амбициозного проекта
                            в районе Северное Бутово и в ближайшие несколько месяцев представит Жилой Квартал
                            комфорткласса на Феодосийской улице.
                            Жилой квартал расположен в 10 минутах от метро Бульвар Дмитрия Донского
                            и прямо на границе Бутовского Лесопарка.
                        </p>
                        <p>
                            На участке площадью 6,65 га в одном из самых зеленых районов Москвы
                            будут построены 5 жилых домов переменной этажности с общей площадью застройки 
                            в 170 тыс. м², а также детским садом и школой на 770 мест.
                        </p>
                        <p>
                            Жилой квартал будет соответствовать всем принципам жилья уровня комфорткласс.
                            Проект будет сочетать в себе все преимущества экологии этого района,
                            транспортную доступность, органичность архитектуры и ландшафта, 
                            а также высокие стандарты организации строительного процесса и его качества.
                        </p>
                    </div>
                    <div class="block-about-slider-over">
                        <div class="block-about-slider">
                            <div class="flat-plan">
                                <div class="flat-type green">
                                    1-комнатная<br>
                                    квартира
                                </div>
                                <div class="square">Площадь</div>
                                <div class="square-value">41,79 м<sup>2</sup></div>
                                <div class="flat-plan-img" style="background-image: url(/img/jpg/1_komn_plan.jpg);"></div>
                            </div>
                            <div class="flat-plan">
                                <div class="flat-type green">
                                    2-комнатная<br>
                                    квартира
                                </div>
                                <div class="square">Площадь</div>
                                <div class="square-value">41,79 м<sup>2</sup></div>
                                <div class="flat-plan-img" style="background-image: url(/img/jpg/2_komn_plan.jpg);"></div>
                            </div>
                            <div class="flat-plan">
                                <div class="flat-type green">
                                    3-комнатная<br>
                                    квартира
                                </div>
                                <div class="square">Площадь</div>
                                <div class="square-value">41,79 м<sup>2</sup></div>
                                <div class="flat-plan-img" style="background-image: url(/img/jpg/3_komn_plan.jpg);"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-features">
            <? for($i = 0; $i < 3; $i++) {?>
                <div class="block-features-row">
                    <div class="wrapper-outer">
                        <? for($j = 0; $j < 3; $j++) {

                            $feature = $features[$i*3 + $j];
                            ?>
                            <div class="block-features-item">
                                <div class="block-features-item-inner">
                                    <h2><?=$feature['h2']?></h2>
                                    <?if(!empty($feature['shortDesc'])) {?>
                                        <div class="short-desc"><?=$feature['shortDesc']?></div>
                                    <?}?>
                                </div>
                                <div class="detail-desc-over">
                                    <div class="btn-cross"></div>
                                    <div class="detail-desc">
                                        <?if(!empty($feature['shortDesc'])) {?>
                                            <div class="detail-desc-h"><?=$feature['shortDesc']?></div>
                                        <?}?>
                                        <p>
                                            <?=$feature['detailTxt']?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        <?}?>
                    </div>
                </div>
            <?}?>
        </div>

        <div class="wrapper-outer">

            <div class="block-location">
                <div class="wrapper-inner clearfix">
                    <div class="popup-map">
                        <h2>Расположение</h2>
                        <div class="popup-map-img" style="background-image: url(/img/jpg/raspolozhenie.jpg);">
                            <div class="dt">
                                <div class="dtc">
                                    <a href="img/jpg/raspolozhenie_zoom.jpg" class="btn-zoom"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="moscow-map">
                        <div class="moscow-map-img" style="background-image: url(/img/jpg/moscow_map.jpg);"></div>
                        <h2>
                            Москва<br>
                            Феодосийская, 1
                        </h2>
                    </div>
                </div>
            </div>

            <div class="project-plan">
                <div class="wrapper-inner clearfix">
                    <div class="block-txt">
                        <div class="block-txt-inner">
                            <h2>План проекта</h2>
                            <p>Строительство Жилого Квартала будет организовано в три очереди.
                                Начало работ запланировано на конец 2016, а завершение третьей
                                очереди и всего проекта к 3-му кварталу 2021 г.
                            </p>
                            <p>
                                Отделка квартир будет полностью подготовлена к ремонту: выполнены все работы по разводке инженерных систем,
                                подготовлены стены, полы, потолки, что даст возможность реализовать любые варианты собственного дизайна.
                            </p>
                        </div>
                    </div>
                    <div class="build-term">
                        <h2 class="green">Сроки строительства</h2>
                        <h4>I очередь</h4>
                        <div class="build-term-data clearfix">
                            <div class="props">
                                <h5>Начало строительства</h5>
                                <h5>Завершение строительства</h5>
                            </div>
                            <div class="values">
                                <span>IV кв. 2016</span>
                                <span>III кв. 2018 г.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-map-over">
                <div class="space-map" style="background-image: url(/img/jpg/space-map.jpg);">
                </div>
            </div>

            <div class="block-infra">
                <div class="wrapper-inner clearfix">
                    <div class="block-txt">
                        <div class="block-txt-inner">
                            <h2>Инфраструктура</h2>
                            <p>
                                Северное Бутово - молодой район с&nbsp;развитой инфраструктурой,
                                который строился по принципу планирования территории,
                                что оправдывает его продуманную структуру транспортных потоков
                                и пеших маршрутов, а также большое количество парков и прудов.
                                Сегодня в этом районе большое количество магазинов, аптек, салонов 
                                и&nbsp;спортивных студий, которые располагаются в шаговой доступности,
                                а крупные ТЦ Мега Теплый Стан и ТЦ Vegas всего в 25 минутах.
                            </p>
                        </div>
                    </div>



                    <div class="infra-img" style="background-image: url(/img/jpg/infrastructura.jpg);"></div>
                </div>
            </div>

        </div>

        <div class="infra-wrapper">
            <div class="infra" id="map-object"></div>

            <div class="infra-nav">
                <div class="infra-nav-wrapper">
                    <div class="colarea">
                        <script>
                            var Markers= <?=json_encode($arMarkers);?>;
                        </script>
                        <? foreach($arInfra as $codeGroup =>$infraGroup){?>
                            <div class="infra-group col5 <?=$codeGroup?> ">
                                <div class="infra-group-title"><a href="#<?=$codeGroup?>"><?=$infraGroup['name']?></a></div>
                                <? foreach($infraGroup['subsection'] as $codeSection => $arSection){?>
                                    <div class="<?=$codeSection?>">
                                        <div class="infra-subsection-title"><a href="#<?=$codeSection?>"><?=$arSection['name']?></a></div>
                                    </div>
                                <?}?>
                            </div>
                        <?} ?>
                    </div></div></div>
        </div>

        <!--    <div class="hood-map" style="background-image: url(/img/jpg/hood-map.jpg);">-->
        <!--        <div class="wrapper-outer hood-map-menu-over">-->
        <!--            <div class="hood-map-menu">-->
        <!--                -->
        <!--                -->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->

        <div class="block-panorama">
            <h2>Панорама</h2>
            <div class="slider-over">
                <div class="panorama-slider">
                    <div class="panorama-slider-item" style="background-image: url(/img/jpg/foto_ra_1.jpg);"></div>
                    <div class="panorama-slider-item" style="background-image: url(/img/jpg/foto_ra_2.jpg);"></div>
                    <div class="panorama-slider-item" style="background-image: url(/img/jpg/foto_ra_3.jpg);"></div>
                    <div class="panorama-slider-item" style="background-image: url(/img/jpg/foto_ra_4.jpg);"></div>
                </div>
                <div class="panorama-switch">
                    <div class="photo-tab">
                        <div class="dt">
                            <div class="dtc">
                                <span>фото района</span>
                            </div>
                        </div>
                    </div>
                    <div class="pan-tab">
                        <div class="pan-tab-txt">
                            <div class="dt">
                                <div class="dtc">
                                    <span>панорама</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="wrapper-outer">
            <div class="block-developer">
                <div class="wrapper-inner clearfix">
                    <h2>Девелопер проекта</h2>
                    <div class="developer-info">
                        <div class="block-txt-inner">
                            <div class="developer-logo"></div>
                            <p class="green">
                                «Группа ПСН» более 15 лет работает на рынке недвижимости
                                и является одной из самых крупных частных компаний в России
                            </p>
                            <a href="#" class="link green">www.psngroup.ru</a>
                        </div>
                    </div>
                    <div class="developer-txt">
                        <p>
                            Компания специализируется на девелопменте и управлении коммерческой и жилой недвижимостью.
                            В 2016 году «Группа ПСН» вошла в ТОП-5 девелоперов «Старой Москвы» по объемам строительства.
                            В каждом проекте «Группы ПСН» создается качественное, удобное и красивое пространство для жизни и работы.
                            Строя востребованные сейчас и через поколения объекты недвижимости, компания стремится раскрывать
                            заложенный в них потенциал.
                        </p>
                        <p>
                            В активной стадии строительства «Группы ПСН» находятся еще четыре крупных проекта жилой недвижимости –
                            жилой квартал «SREDA», микрорайон «Домашний», комплекс элитных особняков «Полянка/44»и элитный жилой квартал I’M.
                            Также «Группа ПСН» управляет земельными активами общей площадью более 40 000 га,
                            которые расположены в направлении основных автомагистралей Московской области.
                        </p>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <footer class="footer">

    </footer>


<? include __DIR__.'/tmp/footer.php';