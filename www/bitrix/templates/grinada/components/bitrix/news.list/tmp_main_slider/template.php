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
<div class="slider-over">
	<div class="main-slider">

<?

$n=0;

$firstIMG = '';
foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

	<div class="main-slider-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);">
		<? if($n==0){

			$firstIMG = $arItem["PREVIEW_PICTURE"]["SRC"];
			?>
		<div class="video">
			<div class="video-wrapper"><video src="/bitrix/templates/grinada/video/video_2.mp4" id="video2"></video></div>
			<div class="btn-video"><a href="#"><div class="btn-video-icon"></div><div class="btn-video-title">Посмотреть видео</div></a></div>
			<div class="btn-stop"><a href="#"></a></div>
			<div class="btn-mute"><a href="#"></a></div>
		</div>
		<?}?>
	</div>
	<? $n++;?>
<?endforeach;?>

	</div>
	<div class="scroll-down"><span>проскрольте вниз</span></div>

	<div class="g-intro">
		<div class="g-intro-wrapper">
			<div class="g-intro-area">
				<div class="intro-pattern wave-1">
					<svg width="310" height="700" id="pattern-intro-svg" viewBox="0 0 310 700" xmlns="http://www.w3.org/2000/svg">
						<g id="XMLID_181_">
							<path id="XMLID_209_" class="wave" d="M304.5,349.9c0,0.3,0,0.6,0,0.9c-0.3,109.1-64.9,165.1-116.8,210.1
		c-23.1,20-44.9,38.9-59.9,60.7c-15.2,21.9-22.3,45.5-22.4,74.2l-100-0.3c0.3-109.1,64.9-165.1,116.8-210.1
		c23.1-20,44.9-38.9,59.9-60.7c15.2-21.9,22.3-45.5,22.4-74.2c0.1-28.7-6.9-52.3-21.9-74.4c-14.9-21.9-36.6-40.9-59.5-61.1
		C71.6,169.8,7.6,113.6,7.6,5c0-0.3,0-0.6,0-0.9l100,0.3c0,0.2,0,0.4,0,0.6c0,28.5,7,51.9,21.9,73.8c14.9,21.9,36.6,40.9,59.5,61.1
		C240.5,185.1,304.5,241.3,304.5,349.9z"/>
						</g>
					</svg>
				</div>
				<div class="intro-pattern wave-2">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 900 200" style="enable-background:new 0 0 900 200;" xml:space="preserve">
                <path id="XMLID_47_" class="wave" d="M890,22.6c-66.8,0-103.1,20.4-132.3,36.1C732.9,72,713.2,83.5,670,83.5c0,0-0.1,0-0.1,0
        c-43.1,0-62.8-10.5-87.7-23.9c-29.1-15.6-65.4-35.1-132.2-35.1c0,0-0.1,0-0.1,0c-66.8,0-103.1,19.4-132.3,35.1
        C292.8,73,273.2,83.5,230,83.5c0,0-0.1,0-0.1,0c-43.1,0-62.8-10.5-87.7-23.9C113.1,43.9,76.8,24.5,10,24.5c0,0-0.1,0-0.1,0l0,94
        c0,0,0.1,0,0.1,0c43.1,0,62.8,10.5,87.7,23.9c29.1,15.6,65.4,35.1,132.2,35.1c0,0,0.1,0,0.1,0c66.8,0,103.1-19.4,132.3-35.1
        c24.9-13.4,44.6-23.9,87.8-23.9c0,0,0.1,0,0.1,0c43.1,0,62.8,10.5,87.7,23.9c29.1,15.6,65.4,35.1,132.2,35.1c0,0,0.1,0,0.1,0
        c66.8,0,103.1-20.4,132.3-36c24.9-13.4,44.6-24.4,87.8-24.4L890,22.6z"/>
        </svg>
				</div>
				<div class="intro-pattern icons-pattern">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 viewBox="0 0 1920 840" style="enable-background:new 0 0 1920 840;" xml:space="preserve">

        <g id="XMLID_44_">
			<g id="XMLID_220_">
				<g id="XMLID_324_">
					<circle id="XMLID_329_" class="icons-main" cx="1700.6" cy="839.4" r="12.5"/>
					<circle id="XMLID_328_" class="icons-main" cx="1620.2" cy="839.4" r="12.5"/>
					<polyline id="XMLID_327_" class="icons-main" points="1629.1,807.6 1659.1,837.7 1684.8,812 			"/>
					<line id="XMLID_326_" class="icons-main" x1="1620.2" y1="807.7" x2="1644.5" y2="807.7"/>
					<polyline id="XMLID_325_" class="icons-main" points="1700.6,826.9 1700.6,786.6 1737.8,786.6 			"/>
				</g>
				<g id="XMLID_316_">
					<line id="XMLID_323_" class="icons-main" x1="1528.2" y1="546.4" x2="1528.2" y2="514"/>
					<line id="XMLID_322_" class="icons-main" x1="1528.2" y1="615.3" x2="1528.2" y2="603.9"/>
					<g id="XMLID_319_">
						<line id="XMLID_321_" class="icons-main" x1="1500" y1="613.6" x2="1508.1" y2="605.6"/>
						<line id="XMLID_320_" class="icons-main" x1="1556.4" y1="613.5" x2="1548.4" y2="605.5"/>
					</g>
					<path id="XMLID_318_" class="icons-main" d="M1563.1,585.7c0-0.7,0.1-1.3,0.1-2c0-19.3-15.7-35-35-35c-19.3,0-35,15.7-35,35
				c0,0.7,0.1,1.3,0.1,2H1563.1z"/>
				</g>
				<polygon id="XMLID_315_" class="icons-main" points="1839.5,182.4 1798,223.9 1756.6,182.4 1756.6,182.4 1777.8,161.3 1798,181.5
			1818.3,161.3 		"/>
				<g id="XMLID_304_">
					<polyline id="XMLID_314_" class="icons-main" points="578.9,852.4 597.8,880.5 564.7,880.5 			"/>
					<circle id="XMLID_313_" class="icons-main" cx="542" cy="836" r="16.8"/>
					<line id="XMLID_312_" class="icons-main" x1="538.2" y1="819.2" x2="538.2" y2="782.3"/>
					<line id="XMLID_311_" class="icons-main" x1="545.7" y1="880.5" x2="545.7" y2="855.6"/>
					<line id="XMLID_310_" class="icons-main" x1="530.6" y1="880.5" x2="544" y2="880.5"/>
					<line id="XMLID_309_" class="icons-main" x1="553.2" y1="823" x2="553.2" y2="786"/>
					<line id="XMLID_308_" class="icons-main" x1="583.1" y1="854.9" x2="591.3" y2="848.8"/>
					<line id="XMLID_305_" class="icons-main" x1="536.5" y1="834" x2="536.5" y2="834"/>
				</g>
				<g id="XMLID_300_">
					<line id="XMLID_303_" class="icons-main" x1="410.5" y1="609.9" x2="418.7" y2="603.8"/>
					<path id="XMLID_302_" class="icons-main" d="M418.6,635.5c0-0.6,0.1-1.3,0.1-1.9c0-18.7-15.2-33.9-33.9-33.9
				c-18.7,0-33.9,15.2-33.9,33.9c0,0.6,0.1,1.3,0.1,1.9H418.6z"/>
					<path id="XMLID_301_" class="icons-main" d="M409.5,585.9c-6.2-6.4-14.8-10.3-24.4-10.3c-8.7,0-16.5,3.2-22.6,8.5"/>
				</g>
				<g id="XMLID_296_">
					<polyline id="XMLID_299_" class="icons-main" points="145.6,523.3 126.4,541.4 107.2,523.3 			"/>
					<polyline id="XMLID_298_" class="icons-main" points="145.6,544.7 126.4,562.8 107.2,544.7 			"/>
					<polygon id="XMLID_297_" class="icons-main" points="126.4,627.9 113.7,578.5 140.4,578.5 			"/>
				</g>
				<g id="XMLID_292_">
					<circle id="XMLID_295_" class="icons-main" cx="273.7" cy="295.8" r="12.7"/>
					<circle id="XMLID_294_" class="icons-main" cx="330.2" cy="295.8" r="12.7"/>
					<path id="XMLID_293_" class="icons-main" d="M300.3,198.8v35.1h-35.1c0,19.4,15.7,35.1,35.1,35.1c19.4,0,35.1-15.7,35.1-35.1
				S319.7,198.8,300.3,198.8z"/>
				</g>
				<g id="XMLID_282_">
					<circle id="XMLID_291_" class="icons-main" cx="138.6" cy="825.8" r="17.9"/>
					<path id="XMLID_290_" class="icons-main" d="M134.7,878.9h15.4v-22.2h67.2c9.1,0,16.5-7.4,16.5-16.5s-7.4-16.5-16.5-16.5h-46.4"/>
					<polyline id="XMLID_289_" class="icons-main" points="197.1,878.9 212.5,878.9 212.5,856.7 			"/>
					<line id="XMLID_288_" class="icons-main" x1="233.3" y1="835.9" x2="265.4" y2="812.1"/>
					<line id="XMLID_287_" class="icons-main" x1="122.2" y1="793.2" x2="113" y2="800"/>
					<line id="XMLID_286_" class="icons-main" x1="154.9" y1="793.2" x2="164.1" y2="800"/>
					<g id="XMLID_283_">
						<path id="XMLID_11_" class="icons-main-st1" d="M138.6,823.1c-2.1,0-3.8,1.7-3.8,3.8c0,2.1,1.7,3.8,3.8,3.8s3.8-1.7,3.8-3.8
					C142.4,824.9,140.7,823.1,138.6,823.1L138.6,823.1z"/>
					</g>
				</g>
				<g id="XMLID_230_">
					<g id="XMLID_279_">
						<path id="XMLID_281_" class="icons-main" d="M1398.6,756.4c-6.8,0-10.3,2.9-10.3,10.7c0,10,5.9,24.5,10.3,24.5
					c5.2,0,10.3-14.4,10.3-24.5C1408.9,759.3,1405.3,756.4,1398.6,756.4z"/>
						<path id="XMLID_280_" class="icons-main" d="M1398.6,843.5c6.8,0,10.3-2.9,10.3-10.7c0-10-5.9-24.5-10.3-24.5
					c-5.2,0-10.3,14.4-10.3,24.5C1388.3,840.6,1391.8,843.5,1398.6,843.5z"/>
					</g>
					<g id="XMLID_231_">
						<path id="XMLID_277_" class="icons-main" d="M1442.1,800c0-6.8-2.9-10.3-10.7-10.3c-10,0-24.5,5.9-24.5,10.3c0,5.2,14.4,10.3,24.5,10.3
					C1439.2,810.3,1442.1,806.7,1442.1,800z"/>
						<path id="XMLID_274_" class="icons-main" d="M1355,800c0,6.8,2.9,10.3,10.7,10.3c10,0,24.5-5.9,24.5-10.3c0-5.2-14.4-10.3-24.5-10.3
					C1357.9,789.7,1355,793.2,1355,800z"/>
					</g>
				</g>
				<g id="XMLID_226_">
					<polyline id="XMLID_228_" class="icons-main" points="1387.9,166.9 1364.2,190.7 1339.3,165.9 1314.4,190.7 1289.6,165.9 			"/>
					<polyline id="XMLID_227_" class="icons-main" points="1387.9,198.9 1364.2,222.6 1339.3,197.8 1314.4,222.6 1289.6,197.8 			"/>
				</g>
				<g id="XMLID_221_">
					<polyline id="XMLID_225_" class="icons-main" points="1708.2,351.9 1685.2,374.9 1661.3,350.9 			"/>
					<polyline id="XMLID_224_" class="icons-main" points="1696.7,398.3 1685,410 1672.8,397.8 			"/>
					<circle id="XMLID_223_" class="icons-main" cx="1717.5" cy="378.5" r="10.7"/>
					<circle id="XMLID_222_" class="icons-main" cx="1653.7" cy="378.5" r="10.7"/>
				</g>
			</g>
		</g>
</svg>
				</div>
				<svg width="1920" height="966" id="intro-svg" viewBox="0 0 1920 966" xmlns="http://www.w3.org/2000/svg">
					<foreignObject clip-path="url(#myclipPath)" width="100%" height="100%">
						<div class="intro-conteiner">
							<div class="img" style="background-image: url(<?=$firstIMG;?>);"></div>
						</div>
					</foreignObject>
					<foreignObject width="100%" height="100%">
						<div class="intro-title-ov">
							<div class="intro-title">
								<div class="dt"><div class="dtc">
										Новый<br>жилой проект в&nbsp;Северном Бутово
									</div></div>
							</div>
						</div>
					</foreignObject>
					<defs>
						<clipPath id="myclipPath">
							<ellipse id="ellipse-img" rx="350" ry="350" cx="960" cy="483"></ellipse>
						</clipPath>
					</defs>
				</svg>
			</div>
		</div>
	</div>
</div>



