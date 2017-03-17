<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Офис продаж");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/contacts.css', true);

?><? $routeGuide = array(

        'transport' => array(

            array(
                    'img' => '/img/contacts/transport-1.jpg',
                    'txt' => 'Первый вагон станции метро «Бульвар Дмитрия Донского». Из стеклянных дверей налево и выход на&nbsp;улицу по лестнице справой стороны.'
            ),
            array(
                'img' => '/img/contacts/transport-2.jpg',
                'txt' => 'Далее прямо до первого перекрестка улицы Грина и&nbsp;Бульвара Дмитрия Донского, где нужно повернуть направо.'
            ),
            array(
                'img' => '/img/contacts/transport-3.jpg',
                'txt' => 'По улице Грина спускаться около 700 метров и&nbsp;повернуть направо после остановки. Ориентиром является дом справой стороны с рисунком сюжета Алых&nbsp;Парусов.'
            ),
            array(
                'img' => '/img/contacts/transport-4.jpg',
                'txt' => 'Далее прямо до зеленого здания НИИ Радиосвязи с&nbsp;фактическим адресом Феодосийская ул. дом 1. За&nbsp;шлагбаумом Вас будет ожидать шаттл, который провезет Вас по территории строительной площадки и&nbsp;доставит до офиса продаж.'
            )

        ),
        'car' => array(

            array(
                'img' => '/img/contacts/car-1.jpg',
                'txt' => 'Съезд на Варшавское шоссе и 33 км МКАДа в&nbsp;сторону области.'
            ),
            array(
                'img' => '/img/contacts/car-2.jpg',
                'txt' => 'Продолжать движение по Варшавскому шоссе и съехать направо.'
            ),
            array(
                'img' => '/img/contacts/car-3.jpg',
                'txt' => 'На пересечении Варшавского шоссе и улицы Коктебельской продолжать движения прямо.'
            ),
            array(
                'img' => '/img/contacts/car-4.jpg',
                'txt' => 'Съезд с Варшавского шоссе на Новобутовскую улицу.'
            ),
            array(
                'img' => '/img/contacts/car-5.jpg',
                'txt' => 'Далее повернуть налево на Новобутовскую улицу и проехать прямо до пункта назначения около 350 метров.'
            ),
            array(
                'img' => '/img/contacts/car-6.jpg',
                'txt' => 'Справой стороны за шлагбаумом Вы можете припарковать свой автомобиль и пройти к офису продаж.'
            ),

        ),
)

?>

    <div class="contact-page">
        <div class="pattern big-pattern pattern-1 dark-green anim-pattern" data-pattern="pattern-1"></div>
        <h1 class="dark-green">Офис продаж</h1>
        <div class="main-info">
            <div class="big-figure circle"></div>
            <div class="wrapper-inner">
                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "",
                        "PATH" => '/bitrix/templates/grinada/include/contacts_text.php',
                        "AREA_FILE_RECURSIVE" => "Y",
                        "EDIT_TEMPLATE" => "standard.php"
                    )
                );?>
            </div>
        </div>
        <div class="map-wrapper">
            <div class="map" id="map"></div>
            <div class="map__tooltip">
                Выберите точку на карте<br>для построения маршрута
                <div class="btn-close"></div>
            </div>
        </div>
        <div class="route-guide">
            <div class="big-figure wave-left"></div>
            <div class="wrapper-main">
            <div class="wrapper-outer">
                <div class="route-guide__slider-over">
                    <div class="route-guide__controls">
                        <h2>Подробное описание<br>схемы проезда</h2>
                        <div class="switch">
<!--                            <div class="switch-tab btn-default btn-medium btn-dark-green active">Транспорт</div>-->
                            <div class="switch-tab btn-default btn-medium btn-dark-green active">Машина</div>
                        </div>
                    </div>
                    <!--<div class="big-slider gallery__tab active" id="transport">
                        <?/*foreach ($routeGuide['transport'] as $item){*/?>
                            <div class="slider__item">
                                <div class="slider__item__txt">
                                    <?/*=$item['txt']*/?>
                                </div>
                                <div class="slider__item__img" style="background-image: url(/bitrix/templates/grinada<?/*=$item['img']*/?>);"></div>
                            </div>
                        <?/*}*/?>
                    </div>-->
                    <div class="big-slider gallery__tab active" id="car">
                        <?foreach ($routeGuide['car'] as $item){?>
                            <div class="slider__item">
                                <div class="slider__item__txt">
                                    <?=$item['txt']?>
                                </div>
                                <div class="slider__item__img" style="background-image: url(/bitrix/templates/grinada<?=$item['img']?>);"></div>
                            </div>
                        <?}?>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="wrapper-main" style="visibility: hidden;">
            <div class="main-info bottom">
                <div class="main-info__content">
                    <div class="main-info__txt-block">
                        <h4>Мы рады вашим отзывам!</h4>
                        <div class="h4">для прессы</div>
                        <p>
                            Чернавская Ольга, менеджер проекта
                        </p>
                        <div class="email dark-green">sales@jk-grinada.ru</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper-inner" style="display: none;">
            <div class="contacts">
                <h3>По любым вопросам звоните нам,<br class="hidden-xs">
                    мы расскажем обо всём, что&nbsp;вас&nbsp;интересует
                </h3>
                <div class="phone dark-green"><span class="number">+7 495  800 41 48</span></div>
                <a href="#" class="btn-default btn-medium btn-green feedback-open call">Заказать звонок</a>
            </div>
            <div class="scroll-top "><a href="#">вернуться наверх</a></div>
        </div>
    </div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>