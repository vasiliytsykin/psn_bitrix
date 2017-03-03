<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Инфраструктура");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/infrastructure.css');

$arInfra = array(
    'education'=>
        array(
            'name'=> 'Образование',
            'subsection'=>
                array(
                    'kindergarten'=>array(
                        'name'=>'Детский сад',
                        'items'=>array(
                            0=> array('name'=>'Детский сад №2074 ','coord'=>'55.570789, 37.569312'),
                            1=> array('name'=>'Детский сад №2156 ','coord'=>'55.571415, 37.566764'),
                            2=> array('name'=>'Детский сад №2156 ','coord'=>'55.569427, 37.567254'),
                            3=> array('name'=>'Детский сад №2075 ','coord'=>'55.570105, 37.572008'),
                            4=> array('name'=>'Частный детский сад «Надежда» ','coord'=>'55.566341, 37.566326'),
                            5=> array('name'=>'Детский сад №2461 ','coord'=>'55.567446, 37.578285'),
                            6=> array('name'=>'Детский сад №2037 ','coord'=>'55.567631, 37.582957'),
                            7=> array('name'=>'Детский сад №1985 ','coord'=>'55.567211, 37.584738'),
                            8=> array('name'=>'Детский сад №2038 ','coord'=>'55.566790, 37.586350'),
                            9=> array('name'=>'Детский сад №1856 ','coord'=>'55.564492, 37.575863'),
                            10=> array('name'=>'Детский сад Радуга ','coord'=>'55.560401, 37.582382'),
                            11=> array('name'=>'Детский сад №2413 ','coord'=>'55.570800, 37.586414'),
                            12=> array('name'=>'Детский сад №2513 ','coord'=>'55.560423, 37.586345'),
                            13=> array('name'=>'Детский сад № 1681 ','coord'=>'55.566997, 37.563566')
                        )
                    ),
                    'school'=>array(
                        'name'=>'Школы',
                        'items'=>array(
                            99 =>array('name'=>'Школа №1825', 'coord'=>'55.570382, 37.568008'),
                            100 =>array('name'=>'Школа-сад №1825', 'coord'=>'55.570777, 37.566335'),
                            101 =>array('name'=>'Школа №1071', 'coord'=>'55.569545, 37.571515'),
                            102 =>array('name'=>'Школа №2114', 'coord'=>'55.569423, 37.572395'),
                            103 =>array('name'=>'Школа №2114', 'coord'=>'55.568692, 37.569988'),
                            104 =>array('name'=>'Школа №1681', 'coord'=>'55.566150, 37.570308'),
                            105 =>array('name'=>'Школа №1356', 'coord'=>'55.567272, 37.581326'),
                            106 =>array('name'=>'Школа №2006', 'coord'=>'55.566074, 37.582292'),
                            107 =>array('name'=>'Школа №1174', 'coord'=>'55.563517, 37.575530'),
                            108 =>array('name'=>'Школа №1945', 'coord'=>'55.570424, 37.584515')
                        )
                    ),
                    'university'=>array(
                        'name'=>'ВУЗ',
                        'items'=>array(
                            29=>array('name'=>'Русский институт управления', 'coord'=>'55.560886,37.583365')
                        )
                    )
                )
        ),

    'health'=>array(
        'name'=>'Здоровье',
        'subsection'=>
            array(

                'hospital'=>array('name'=>'Поликлиники',
                    'items'=>array(
                        200=>array('name'=>'Детская поликлиника №118', 'coord'=>'55.571799, 37.565272'),
                        201=>array('name'=>'Поликлиника №121 филиал №4', 'coord'=>'55.568182, 37.581341'),
                        202=>array('name'=>'Поликлиника №163', 'coord'=>'55.567972, 37.581218'),
                        203=>array('name'=>'Центр Восстановительной Медицины', 'coord'=>'55.569136, 37.588454'),
                        204=>array('name'=>'Медицинский центр Добромед', 'coord'=>'55.568272, 37.57343')
                    )

                ),
                'pharmacy'=>array('name'=>'Аптеки',
                    'items'=>array(
                        300=>array('name'=>'Аптека А1', 'coord'=>'55.571734, 37.573274'),
                        301=>array('name'=>'Медицинский центр Добромед ', 'coord'=>'55.568183, 37.573354'),
                        302=>array('name'=>'Аптека А5', 'coord'=>'55.564405, 37.574339'),
                        303=>array('name'=>'Аптека Евгеника', 'coord'=>'55.563654, 37.580394'),
                        304=>array('name'=>'Аптека Векфарм1', 'coord'=>'55.562948, 37.582122'),
                    )
                ),
            )
    ),
    'shop'=>array(
        'name'=>'Магазины',
        'subsection'=> array(

            'mall'=>array('name'=>'ТЦ',
                'items'=>array(


                    500=>array('name'=>'ТЦ Вива', 'coord'=>'55.565537, 37.555659'),
                    501=>array('name'=>'ТЦ Персей', 'coord'=>'55.570899, 37.564306'),
                    502=>array('name'=>'ТЦ Клиффстор', 'coord'=>'55.567496, 37.573805'),
                    503=>array('name'=>'ТЦ Круг', 'coord'=>'55.569744, 37.578918'),
                    504=>array('name'=>'ТЦ Квадрат', 'coord'=>'55.570114, 37.580516'),
                    505=>array('name'=>'ТРЦ Вегас', 'coord'=>'55.586600, 37.725040'),
                    506=>array('name'=>'Ашан Вегас', 'coord'=>'55.584753, 37.723667'),
                    507=>array('name'=>'Твой Дом', 'coord'=>'55.585749, 37.720105'),
                    508=>array('name'=>'ТЦ Мега', 'coord'=>'55.603309, 37.491621'),
                    509=>array('name'=>'ТЦ Ашан', 'coord'=>'55.605763, 37.489647')


                )
            ),
            'shops'=>array(
                'name'=>'Продуктовые',
                'items'=>array(

                    550=>array('name'=>'Дикси', 'coord'=>'55.570243, 37.564091'),
                    551=>array('name'=>'Пятерочка', 'coord'=>'55.567499, 37.562015'),
                    552=>array('name'=>'Магнит', 'coord'=>'55.573354, 37.568904'),
                    553=>array('name'=>'Пятерочка', 'coord'=>'55.572582, 37.571704'),
                    554=>array('name'=>'Неринга', 'coord'=>'55.572035, 37.571404'),
                    555=>array('name'=>'Перекресток', 'coord'=>'55.569870, 37.575382'),
                    556=>array('name'=>'Перекресток', 'coord'=>'55.567250, 37.569492'),
                    557=>array('name'=>'Грин', 'coord'=>'55.566864, 37.566508'),
                    558=>array('name'=>'Дикси', 'coord'=>'55.566962, 37.576315'),
                    559=>array('name'=>'Пятерочка', 'coord'=>'55.568552, 37.577501'),
                    560=>array('name'=>'Перекресток', 'coord'=>'55.568589, 37.585329'),
                    561=>array('name'=>'Пятерочка', 'coord'=>'55.564507, 37.574530'),
                    562=>array('name'=>'Дикси', 'coord'=>'55.561623, 37.583162'),

                )
            ),


        )
    ),
    'sport'=>array(
        'name'=>'Спорт',
        'subsection'=> array(
            'pool'=>array('name'=>'Бассейн',
                'items'=>array(
                    350=>array('name'=>'Бассейн Олимп', 'coord'=>'55.565045,37.569708')
                )
            ),
            'sportschool'=>array('name'=>'Спорт. секции',
                'items'=>array(
                    400=>array('name'=>'Спорт Вариант', 'coord'=>'55.566253, 37.569288'),
                    401=>array('name'=>'Спортклуб "Северное Бутово"', 'coord'=>'55.567829, 37.579089'),
                    402=>array('name'=>'Футбольное поле', 'coord'=>'55.571572, 37.586414'),
                    403=>array('name'=>'Горнолыжная база', 'coord'=>'55.571025, 37.583206')
                )
            ),
            'fitness'=>array('name'=>'Фитнес-клуб',
                'items'=>array(
                    450=>array('name'=>'Фитнес-клуб Fresh', 'coord'=>'55.564269,037.586108'),
                    451=>array('name'=>'Фитнес-клуб Спорт Нация', 'coord'=>'55.567344,37.562091'),
                    452=>array('name'=>'Фитнес-клуб Спорт Вариант', 'coord'=>'55.566151,37.569488'),
                )
            ),
        )
    ),
    'park'=>array(
        'name'=>'Парки',
        'subsection'=> array(

            'parks'=>array('name'=>'Парки',
                'items'=>array(
                    600=>array('name'=>'Качаловский парк', 'coord'=>'55.572431, 37.587397'),
                    601=>array('name'=>'Ботанический сад ВИЛАР', 'coord'=>'55.564845, 37.591498'),
                    602=>array('name'=>'Парк при храмовом комплексе Дмитрия Донского', 'coord'=>'55.560534, 37.570238'),
                )
            ),
            'church'=>array('name'=>'Храмы',
                'items'=>array(
                    650=>array('name'=>'Храмовый комплекс Дмитрия Донского', 'coord'=>'55.560576, 37.571853'),
                    651=>array('name'=>'Церковь Параскевы Пятницы', 'coord'=>'55.571505, 37.580758')
                )
            ),
        )
    ),
);
$arMarkers = array();
foreach($arInfra as $codeGroup =>$infraGroup){
    foreach($infraGroup['subsection'] as $codeSection => $arSection){

        if(isset($arSection['items'])){
            foreach($arSection['items'] as $idMarker =>$arMarker){
                $coord = explode(',', $arMarker['coord']);
                $arMarkers['m'.$idMarker] = array(
                    'id' => $idMarker,
                    'name'=>$arMarker['name'],
                    'group'=>$codeSection,
                    'coord'=>array(
                        'lat'=>$coord[0],
                        'lng'=>$coord[1],
                    )
                );

            }}
    }

}

?>


    <div class="infra-page">
        <div class="big-figure circle"></div>
        <div class="big-figure wave-green"></div>
        <h1 class="dark-green">Инфраструктура</h1>
        <div class="map-wrapper">
            <script>
                var Markers= <?=json_encode($arMarkers);?>;
            </script>
            <div class="map" id="infra-map"></div>
            <div class="infra-nav">
                <div class="wrapper-outer">
                    <div class="infra-nav__handle"><div class="arrow"></div></div>
                    <div class="infra-nav-wrapper">
                        <? foreach($arInfra as $codeGroup =>$infraGroup){?>
                            <div class="infra-group <?=$codeGroup?> ">
                                <div class="infra-group__title"><a href="#<?=$codeGroup?>"><?=$infraGroup['name']?></a></div>
                                <? foreach($infraGroup['subsection'] as $codeSection => $arSection){?>
                                    <div class="<?=$codeSection?> infra-subsection-title">
                                        <a href="#<?=$codeSection?>"><span class="icon"></span><?=$arSection['name']?></a>
                                    </div>
                                <?}?>
                            </div>
                        <?}?>
                    </div>
                </div>
            </div>
        </div>
        <div class="infra-list-over">
            <div class="wrapper-main">
                <div class="wrapper-inner">
                    <div class="infra-list clearfix">
                        <? foreach($arInfra as $codeGroup =>$infraGroup){?>
                            <div class="infra-group <?=$codeGroup?>">
                                <div class="infra-group__title"><a href="#<?=$codeGroup?>"><?=$infraGroup['name']?></a></div>
                                <? foreach($infraGroup['subsection'] as $codeSection => $arSection){?>
                                    <div class="<?=$codeSection?> infra-subsection-title">
                                        <a href="#<?=$codeSection?>"><span class="icon"></span><?=$arSection['name']?></a>
                                    </div>
                                    <?foreach ($arSection['items'] as $id => $item){?>

                                        <div class="infra-list__item" data-id="<?=$id?>" data-coord="<?=$item['coord']?>"><?=$item['name']?></div>

                                    <?}?>
                                <?}?>
                            </div>
                        <?}?>
                    </div>
                </div>
            </div>
        </div>
        <div class="info-block">
            <div class="wrapper-inner">
                <div class="info-block__txt">
                    <h2>Район</h2>
                    <h5>Северное Бутово</h5>
                    <p>
                        Живя рядом с лесом и наслаждаясь идеальной экологией,
                        приятно осознавать, что все городские преимущества находятся в шаговой доступности.<br>
                        Летняя оранжерея, веревочный парк для активных
                        и любознательных маленьких жителей, уютное семейное кафе
                        и сезонная ярмарка фермерских продуктов прямо на территории ЖК  – все это «Гринада».
                    </p>
                </div>
            </div>
        </div>
        <div class="pattern big-pattern pattern-1 dark-green anim-pattern" data-pattern="pattern-1"></div>
        <div class="scroll-top "><a href="#">вернуться наверх</a></div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>