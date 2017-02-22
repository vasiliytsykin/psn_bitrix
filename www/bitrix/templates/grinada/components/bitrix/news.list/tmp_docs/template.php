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

<div class="docs-list">
<?foreach($arResult["ITEMS"] as $arItem){?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    
    <? if(isset($arItem["DISPLAY_PROPERTIES"]['DOC'])){

        $docProps = $arItem["DISPLAY_PROPERTIES"]['DOC'];
        $href = $docProps['FILE_VALUE']['SRC'];
        $docExt = array_pop(explode('.',$docProps['FILE_VALUE']['ORIGINAL_NAME']));
        $docSizeMB = round($docProps['FILE_VALUE']['FILE_SIZE'] / (1024*1024), 1);

        ?>

        <a href="<?=$href?>" class="doc" target="_blank">
            <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]){?>
                <div class="h4"><?echo $arItem["NAME"]?></div><?}?>
            <div class="doc__size light-green">
                <?=strtoupper($docExt)?>, <?=$docSizeMB?>мб, <?=FormatDate('d.m.y',MakeTimeStamp($arItem['ACTIVE_FROM']))?>
            </div>
        </a>

<?}}?>
</div>