<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/404.css');

?>


	<div class="error-page">
		<div class="big-figure circle"></div>
		<div class="big-figure wave horizontal green type-2"></div>
		<div class="pattern big-pattern pattern-1 light-green anim-pattern" data-pattern="pattern-1"></div>
		<div class="pattern big-pattern pattern-2 dark-green anim-pattern" data-pattern="pattern-2"></div>
		<div class="wrapper-main">
			<div class="error-code dark-green">404</div>
			<h2 class="dark-green">Такой страницы не&nbsp;существует</h2>
			<h4>Предлагаем вам ознакомиться <br class="visible-xs">с&nbsp;описанием<br class="hidden-xs">жилого квартала Гринада</h4>
			<a href="/about/" class="btn-default btn-medium btn-green">О проекте</a>
			<div class="scroll-top "><a href="#">вернуться наверх</a></div>
		</div>
	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>