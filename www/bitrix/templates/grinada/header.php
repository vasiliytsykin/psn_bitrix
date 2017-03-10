<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();


include __DIR__.'/php/init.php';


foreach($arCSS as $CSS){
	$APPLICATION->SetAdditionalCSS($CSS);
}
foreach($asrScripts as $JS){
	$APPLICATION->AddHeadScript($JS);
}

function getHost($url){

	$urlParts = parse_url($url);
	return $urlParts['host'];
}

function setUTM(){

	$currentUtmSource = (isset($_COOKIE['utm_source']) ? $_COOKIE['utm_source'] : '');
	if($currentUtmSource !== '') return;

	$newUtmSource = '';

	if(isset($_GET['utm_source']))
		$newUtmSource = $_GET['utm_source'];
	else if(isset($_SERVER['HTTP_REFERER']))
		$newUtmSource = getHost($_SERVER['HTTP_REFERER']);

	if($newUtmSource !== '')
		setcookie('utm_source', $newUtmSource, time()+86400);

	if(isset($_GET['utm_campaign']))
		setcookie('utm_campaign', $_GET['utm_campaign'], time()+86400);

}

setUTM();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, minimum-scale=0.65, maximum-scale=1.0 user-scalable=yes">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="MobileOptimized" content="480">
		<meta name="format-detection" content="telephone=no">
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
		<!-- Yandex.Metrika counter --> <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter39885230 = new Ya.Metrika({ id:39885230, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/39885230" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
		<script type="text/javascript">
			var __cs = __cs || [];
			__cs.push(["setCsAccount", "Mf83mECSICyfzOB0H9ZUbdkXB6Rm366P"]);
			__cs.push(["setCsHost", "//server.comagic.ru/comagic"]);
		</script>
		<script type="text/javascript" async src="//app.comagic.ru/static/cs.min.js"></script>
	</head>
	<body>
		<div class="bitrix-panel"><?$APPLICATION->ShowPanel()?></div>
		<div class="shade"></div>
		<header class="header">
			<div class="header__top-line">
				<div class="header__extra-links">
					<a href="http://www.psngroup.ru" target="_blank" class="psn">PSN GROUP</a>
					<a href="#" class="online-camera">on-line камера</a>
				</div>
			</div>
			<div class="header__bottom-line">
				<a href="/" class="header__logo"></a>
				<div class="header__nav">
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu",
						"tmp_main_menu",
						Array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "top",
							"DELAY" => "N",
							"MAX_LEVEL" => "1",
							"MENU_CACHE_GET_VARS" => array(""),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "N",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "top",
							"USE_EXT" => "N"
						)
					);?>
				</div>
				<div class="header__contact">
					<div class="phone dark-green">
<!--						<span class="code"> </span>-->
						<span class="number">+7 (495) 800 41 48</span>
					</div>
					<a href="#" class="btn-default btn-green feedback-open call">Заказать звонок</a>
					<a href="#" class="feedback-open email"></a>
				</div>
			</div>
		</header>
		<div class="global-menu">
			<div class="global-menu__control"><div class="burger-btn"><span></span></div></div>
			<div class="global-menu__content">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "tmp_global_menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "sub",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>
				<div class="global-menu__contact">
					<div class="address">
						Москва,<br>
						Феодосийская ул., вл. 1/9
					</div>
					<div class="phone dark-green">
						<span class="code">+7 (495) </span>
						<span class="number">800 41 48</span>
					</div>
					<a href="#" class="btn-default btn-medium btn-green feedback-open call">Заказать звонок</a>
					<div class="socials">
						<div class="social socials--fb"></div>
						<div class="social socials--vk"></div>
						<div class="social socials--ok"></div>
						<div class="social socials--ins"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="sub-menu--main">
			<div class="wrapper-main">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"tmp_sub_menu",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "sub",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(""),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "sub",
						"USE_EXT" => "N"
					)
				);?>
			</div>
		</div>
		<?
			$currentPage = pathinfo($_SERVER['REQUEST_URI'], PATHINFO_DIRNAME);
			$isMain = $currentPage == '/' ? 'main' : '';
		?>
		<div class="content <?=$isMain?>">