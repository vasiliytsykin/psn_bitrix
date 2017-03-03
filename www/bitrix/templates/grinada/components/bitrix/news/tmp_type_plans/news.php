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
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/filter.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/plan-filter.css');
?>


<div class="plan-filter-page">
	<input type="hidden" class="ajax-url" value="/plan_filter_ajax.php">
	<div class="big-figure circle"></div>
	<div class="pattern carrot dark-green anim-pattern" data-pattern="carrot"></div>
	<div class="pattern bird light-green anim-pattern" data-pattern="bird"></div>
	<div class="pattern trees light-green anim-pattern" data-pattern="trees"></div>
	<div class="pattern bee light-green anim-pattern" data-pattern="bee"></div>
	<div class="wrapper-main block-main">
		<h1 class="dark-green">Выбор по типам планировок</h1>
		<h5>Представлено более 100 вариантов различных планировок</h5>
		<div class="filter-over">
			<div class="filter">
				<div class="filter__params">
					<div class="input-group house">
						<div class="input-group__name">корпус</div>
						<ul class="inputs">
							<li class="special">
								<input type="checkbox" id="building-all" class="check-all">
								<label for="building-all">все</label>
							</li>
							<ul class="inputs inputs--special panel">
								<li class="house-type">панельные</li>
								<li>
									<input type="checkbox" id="building-number-1">
									<label for="building-number-1">1</label>
								</li>
								<li>
									<input type="checkbox" id="building-number-3" disabled>
									<label for="building-number-3">3</label>
								</li>
							</ul>
							<ul class="inputs inputs--special mono">
								<li class="house-type">монолитные</li>
								<li>
									<input type="checkbox" id="building-number-2" disabled>
									<label for="building-number-2">2</label>
								</li>
								<li>
									<input type="checkbox" id="building-number-4" disabled>
									<label for="building-number-4">4</label>
								</li>
								<li>
									<input type="checkbox" id="building-number-5" disabled>
									<label for="building-number-5">5</label>
								</li>
							</ul>
						</ul>
					</div>
					<div class="input-group room">
						<div class="input-group__name">комнат</div>
						<ul class="inputs">
							<li>
								<input type="checkbox" id="rooms-all" class="check-all">
								<label for="rooms-all">все</label>
							</li>
							<li>
								<input type="checkbox" id="studio">
								<label for="studio">ст.</label>
							</li>
							<li>
								<input type="checkbox" id="rooms-1">
								<label for="rooms-1">1 к.</label>
							</li>
							<li>
								<input type="checkbox" id="rooms-2">
								<label for="rooms-2">2 к.</label>
							</li>
							<li>
								<input type="checkbox" id="rooms-3">
								<label for="rooms-3">3 к.</label>
							</li>
							<li>
								<input type="checkbox" id="rooms-4">
								<label for="rooms-4">4 к.</label>
							</li>
						</ul>
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
						<a href="#" class="link--dashed reset-filter visible-md visible-lg"><span>Сбросить параметры</span></a>
					</div>
					<a href="#" class="link--dashed reset-filter visible-sm visible-xs"><span>Сбросить параметры</span></a>
				</div>
				<div class="filter__results-over">
					<div class="filter__results result-items"></div>
				</div>
			</div>
		</div>
		<div class="scroll-top "><a href="#">вернуться наверх</a></div>
	</div>
</div>


