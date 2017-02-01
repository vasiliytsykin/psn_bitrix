<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);

?>


<div class="param-filter-page">
	<div class="pattern carrot dark-green anim-pattern" data-pattern="carrot"></div>
	<div class="pattern bird light-green anim-pattern" data-pattern="bird"></div>
	<div class="wrapper-main">
		<h1 class="dark-green">Выбор по&nbsp;параметрам</h1>
		<div class="wrapper-outer">
			<div class="filter">
				<div class="wrapper-inner">
					<div class="filter__params">
						<div class="input-group house">
							<div class="input-group__name">корпус</div>
							<ul class="inputs">
								<li class="special">
									<input type="checkbox" id="building-all">
									<label for="building-all">все</label>
								</li>
								<ul class="inputs inputs--special panel">
									<li class="house-type">панельные</li>
									<li>
										<input type="checkbox" id="building-1">
										<label for="building-1">1</label>
									</li>
									<li>
										<input type="checkbox" id="building-3" disabled>
										<label for="building-3">3</label>
									</li>
									<li>
										<input type="checkbox" id="building-4" disabled>
										<label for="building-4">4</label>
									</li>
								</ul>
								<ul class="inputs inputs--special mono">
									<li class="house-type">монолитные</li>
									<li>
										<input type="checkbox" id="building-2">
										<label for="building-2">2</label>
									</li>
									<li>
										<input type="checkbox" id="building-5" disabled>
										<label for="building-5">5</label>
									</li>
									<li>
										<input type="checkbox" id="building-6" disabled>
										<label for="building-6">6</label>
									</li>
								</ul>
							</ul>
						</div>
						<div class="input-group">
							<div class="input-group">
								<div class="input-group__name">этаж</div>
								<div class="caption-over">
									<div class="caption min"></div>
									<div class="caption max"></div>
								</div>
								<input type="text" id="floor" class="range-slider" data-from="1" data-to="12" data-step="1"/>
							</div>
							<div class="input-group">
								<div class="input-group__name">комнат</div>
								<div class="caption-over">
									<div class="caption min"></div>
									<div class="caption max"></div>
								</div>
								<input type="text" id="rooms" class="range-slider" data-from="1" data-to="4" data-step="1"/>
							</div>
						</div>
						<div class="input-group">
							<div class="input-group">
								<div class="input-group__name">площадь, <span>м<sup>2</sup></span></div>
								<div class="caption-over">
									<div class="caption min"></div>
									<div class="caption max"></div>
								</div>
								<input type="text" id="space-design" class="range-slider" data-from="32" data-to="72" data-step="1"/>
							</div>
							<div class="input-group">
								<div class="input-group__name">Цена, <span>млн</span></div>
								<div class="caption-over">
									<div class="caption min"></div>
									<div class="caption max"></div>
								</div>
								<input type="text" id="price" class="range-slider" data-from="2.4" data-to="12.6" data-step="0.1"/>
							</div>
						</div>
						<div class="input-group finish">
							<div class="input-group__name">отделка</div>
							<ul class="inputs">
								<li>
									<input type="checkbox" id="no-apartment-furnish">
									<label for="no-apartment-furnish">без отделки</label>
								</li>
								<li>
									<input type="checkbox" id="apartment-furnish">
									<label for="apartment-furnish">с отделкой</label>
								</li>
							</ul>
							<a href="/" class="link--dashed reset-filter visible-xs visible-md visible-lg"><span>Сбросить параметры</span></a>
						</div>
						<a href="#" class="link--dashed reset-filter visible-sm"><span>Сбросить параметры</span></a>
					</div>
					<?include $_SERVER['DOCUMENT_ROOT'].'/bitrix/templates/grinada/php/filter-results-table.php';?>
				</div>
			</div>
		</div>
	</div>
	<div class="scroll-top "><a href="#">вернуться наверх</a></div>
</div>