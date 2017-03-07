<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О застройщике");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/developer.css');
?>

    <div class="developer-page">
        <h1 class="dark-green">О застройщике</h1>
        <div class="developer-page__content">
            <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "",
                    "PATH" => '/bitrix/templates/grinada/include/developer_text.php',
                    "AREA_FILE_RECURSIVE" => "Y",
                    "EDIT_TEMPLATE" => "standard.php"
                )
            );?>
            <div class="other-projects">
                <h2>Другие проекты девелопера</h2>
                <div class="gallery">
                    <div class="gallery__switch-over">
                        <div class="gallery__switch">
                            <div class="switch__tab tab-1 active" data-tab="tab-1">комфорткласс</div>
                            <div class="switch__tab tab-2" data-tab="tab-2">элитный класс</div>
                        </div>
                    </div>
                    <div class="gallery__tab tab-1 active">
                        <div class="gallery__slider big-slider">
                            <div class="gallery__slide dom" style="background-image: url(/img/developer/projects/dom.jpg);">
                                <div class="gallery__slide__txt">
                                    <div class="logo" style="background-image: url(/img/developer/projects/dom_logo.png)"></div>
                                    <div class="h2">Микрорайон Домашний</div>
                                    <div class="h5">Донецкая.,30</div>
                                    <div class="h5">Площадь квартир и апартаментов: 27-102 м²</div>
                                    <a href="http://домашний.рф" target="_blank" class="link">домашний.рф</a>
                                </div>
                                <div class="awards">
                                    <div class="award" style="background-image: url(/img/developer/awards/domashnii_1.png);"></div>
                                    <div class="award" style="background-image: url(/img/developer/awards/domashnii_2.png);"></div>
                                    <div class="award" style="background-image: url(/img/developer/awards/domashnii_3.png);"></div>
                                    <div class="award" style="background-image: url(/img/developer/awards/domashnii_4.png);"></div>
                                </div>
                            </div>
                            <div class="gallery__slide sreda" style="background-image: url(/img/developer/projects/sreda.jpg);">
                                <div class="gallery__slide__txt">
                                    <div class="logo" style="background-image: url(/img/developer/projects/sreda_logo.png);"></div>
                                    <div class="h2">Жилой квартал SREDA</div>
                                    <div class="h5">Рязанский проспект, 2</div>
                                    <div class="h5">Площадь квартир и апартаментов: 23-104 м²</div>
                                    <a href="http://sreda-kvartal.ru" target="_blank" class="link">sreda-kvartal.ru</a>
                                </div>
                                <div class="awards">
                                    <div class="award" style="background-image: url(/img/developer/awards/sreda_1.png);"></div>
                                    <div class="award" style="background-image: url(/img/developer/awards/sreda_2.png);"></div>
                                    <div class="award" style="background-image: url(/img/developer/awards/sreda_3.png);"></div>
                                    <div class="award" style="background-image: url(/img/developer/awards/sreda_4.png);"></div>
                                    <div class="award" style="background-image: url(/img/developer/awards/sreda_5.png);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery__tab tab-2">
                        <div class="gallery__slider big-slider">
                            <div class="gallery__slide im" style="background-image: url(/img/developer/projects/im.jpg);">
                                <div class="gallery__slide__txt">
                                    <div class="logo" style="background-image: url(/img/developer/projects/im_logo.png)"></div>
                                    <div class="h2">Жилой квартал I’M</div>
                                    <div class="h5">Кожевнический проезд, владение 4</div>
                                    <div class="h5">Площадь квартир и апартаментов: 37-138 м²</div>
                                    <a href="http://im-moscow.ru" target="_blank" class="link">IM-Moscow.ru</a>
                                </div>
                                <div class="awards">
                                    <div class="award" style="background-image: url(/img/developer/awards/im.png);"></div>
                                </div>
                            </div>
                            <div class="gallery__slide pol" style="background-image: url(/img/developer/projects/pol.jpg);">
                                <div class="gallery__slide__txt">
                                    <div class="logo" style="background-image: url(/img/developer/projects/pol_logo.png);"></div>
                                    <div class="h2">Комплекс «Полянка/44»</div>
                                    <div class="h5">Большая Полянка, 44/2</div>
                                    <div class="h5">Площадь квартир и апартаментов: 48-241 м²</div>
                                    <a href="http://polyanka44.com" target="_blank" class="link">polyanka44.com</a>
                                </div>
                                <div class="awards">
                                    <div class="award" style="background-image: url(/img/developer/awards/polyanka_1.png);"></div>
                                    <div class="award" style="background-image: url(/img/developer/awards/polyanka_2.png);"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-top "><a href="#">вернуться наверх</a></div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>