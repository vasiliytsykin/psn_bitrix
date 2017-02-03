<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Каталог");

$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/filter.css');
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/param-filter.css');
LocalRedirect("/catalog/flats/");

?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>