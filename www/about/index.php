<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О проекте");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/about.css');
?>

	<div class="about-page">
		<div class="pattern big-pattern pattern-6 dark-green anim-pattern" data-pattern="pattern-6"></div>
		<div class="pattern big-pattern pattern-1 light-green anim-pattern" data-pattern="pattern-1"></div>
		<h1 class="dark-green">О жилом квартале</h1>
		<div class="block-features">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.list",
				"tmp_about",
				Array(
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"ADD_SECTIONS_CHAIN" => "Y",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"CHECK_DATES" => "Y",
					"DETAIL_URL" => "",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"DISPLAY_DATE" => "Y",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "Y",
					"DISPLAY_PREVIEW_TEXT" => "Y",
					"DISPLAY_TOP_PAGER" => "N",
					"FIELD_CODE" => array("",""),
					"FILTER_NAME" => "",
					"HIDE_LINK_WHEN_NO_DETAIL" => "N",
					"IBLOCK_ID" => "4",
					"IBLOCK_TYPE" => "visual",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
					"INCLUDE_SUBSECTIONS" => "Y",
					"MESSAGE_404" => "",
					"NEWS_COUNT" => "20",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_TEMPLATE" => ".default",
					"PAGER_TITLE" => "Новости",
					"PARENT_SECTION" => "",
					"PARENT_SECTION_CODE" => "",
					"PREVIEW_TRUNCATE_LEN" => "",
					"PROPERTY_CODE" => array("",""),
					"SET_BROWSER_TITLE" => "Y",
					"SET_LAST_MODIFIED" => "N",
					"SET_META_DESCRIPTION" => "Y",
					"SET_META_KEYWORDS" => "Y",
					"SET_STATUS_404" => "N",
					"SET_TITLE" => "Y",
					"SHOW_404" => "N",
					"SORT_BY1" => "SORT",
					"SORT_BY2" => "SORT",
					"SORT_ORDER1" => "ASC",
					"SORT_ORDER2" => "ASC"
				)
			);?>
		</div>
		<div class="info-block">
			<div class="info-block__txt">
				<h2>О проекте</h2>
				<h5>Жилой квартал «Гринада»</h5>
				<p>
					Мы спроектировали квартал, который будет сочетать в себе все преимущества
					экологии этого района: транспортную доступность, органичность архитектуры
					с ландшафтом и высокие стандарты строительства.
				</p>
				<p>
					«Гринада» - это гармоничное сочетание невероятных возможностей большого города и природы.
					Мы стремимся выразить в проекте совершенно новый взгляд на базовые потребности
					современного человека – человека активного, спортивного, делового и семейного одновременно.
				</p>
			</div>
		</div>
		<div class="gallery">
			<div class="gallery__tab tab-1 active">
				<div class="gallery__slider big-slider">
					<div class="gallery__slide" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/main-slider-render-1.jpg);">
						<div class="gallery__slide__txt">
							<div class="h1">Корпус 1</div>
							<h5>Общий вид</h5>
						</div>
					</div>
					<div class="gallery__slide" style="background-image: url(<?=SITE_TEMPLATE_PATH?>/img/main-slider-render-2.jpg);">
						<div class="gallery__slide__txt">
							<div class="h1">Корпус 2</div>
							<h5>Общий вид</h5>
						</div>
					</div>
				</div>
			</div>
			<!--                    <div class="gallery__tab tab-2">-->
			<!--                        <div class="gallery__slider big-slider">-->
			<!--                            <div class="gallery__slide" style="background-image: url(img/main-slider-render-2.jpg);">-->
			<!--                                <div class="gallery__slide__txt">-->
			<!--                                    <div class="h1">Корпус 2</div>-->
			<!--                                    <h5>Общий вид</h5>-->
			<!--                                </div>-->
			<!--                            </div>-->
			<!--                            <div class="gallery__slide" style="background-image: url(img/main-slider-render-1.jpg);">-->
			<!--                                <div class="gallery__slide__txt">-->
			<!--                                    <div class="h1">Корпус 1</div>-->
			<!--                                    <h5>Общий вид</h5>-->
			<!--                                </div>-->
			<!--                            </div>-->
			<!--                        </div>-->
			<!--                    </div>-->
			<!--                    <div class="gallery__switch">-->
			<!--                        <div class="switch__tab tab-1 active" data-tab="tab-1">-->
			<!--                            Архитектура-->
			<!--                        </div>-->
			<!--                        <div class="switch__tab tab-2" data-tab="tab-2">-->
			<!--                            Подъезды-->
			<!--                        </div>-->
			<!--                    </div>-->
			<div class="big-figure circle static"></div>
			<div class="big-figure wave-right"></div>
		</div>
		<div class="block-prices">
			<h2 class="dark-green">Стоимость квартир</h2>
			<div class="params">
				<div class="param">
					<div class="param__name">студия</div>
					<div class="param__value">от 2,5 млн руб.</div>
				</div>
				<div class="param">
					<div class="param__name">1-комнатная</div>
					<div class="param__value">от 4 млн руб.</div>
				</div>
				<div class="param">
					<div class="param__name">2-комнатная</div>
					<div class="param__value">от 5 млн руб.</div>
				</div>
				<div class="param">
					<div class="param__name">3-комнатная</div>
					<div class="param__value">от 6 млн руб.</div>
				</div>
			</div>
		</div>
		<div class="contacts">
			<h3>По любым вопросам звоните нам,<br>
				мы расскажем обо всём, что вас интересует
			</h3>
			<div class="phone">+7 495  800 41 48</div>
			<a href="#" class="btn-default btn-medium btn-green feedback-open call">Заказать звонок</a>
		</div>
		<div class="scroll-top "><a href="#">вернуться наверх</a></div>
	</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>