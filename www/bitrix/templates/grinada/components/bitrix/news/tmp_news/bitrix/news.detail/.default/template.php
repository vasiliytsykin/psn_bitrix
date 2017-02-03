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


require_once($_SERVER['DOCUMENT_ROOT'].'/include/list_arrows.php');
$port = new Lister;
$next_url='';
$pre_url='';
$next_name ="Следующая новость";
$pre_name ="Предыдущая новость";

$slide = @$port->getList($arResult['ID'], $arResult['IBLOCK_SECTION_ID'], $arParams["IBLOCK_ID"]);

if(!empty($slide['next'])){
	$next_url = @$slide['next']['DETAIL_PAGE_URL'];
	$next_name = @$slide['next']['NAME'];
	$next_count = @$slide['next']['NEXT_NUM_POS'];
	$next_section = @$slide['next']['IBLOCK_SECTION_ID'] ;
}
if(!empty($slide['pre'])){
	$pre_url = @$slide['pre']['DETAIL_PAGE_URL'];
	$pre_name = @$slide['pre']['NAME'];
	$pre_count = @$slide['pre']['PRE_NUM_POS'] ;
	$pre_section = @$slide['pre']['IBLOCK_SECTION_ID'] ;
}

$itemProps = $arResult['PROPERTIES'];
$img = $arItem['DETAIL_PICTURE'];
$imgUrl = is_array($img) ? $img['SRC'] : '/bitrix/templates/grinada/img/news/news_stab.jpg' ;

?>


	<div class="news-detail-page">
		<div class="big-figure circle"></div>
		<div class="wrapper-inner">
			<div class="action-detail">
				<div class="main-block">
					<div class="action-detail__nav action-detail__nav--small">
						<a href="/news/" class="control all"><span>Все новости</span></a>
						<?if($next_url != ''){?>
							<a href="<?=$next_url?>" class="control next"><span>Следующая</span></a>
						<?}?>
						<?if($pre_url != ''){?>
							<a href="<?=$pre_url?>" class="control prev"><span>Предыдущая</span></a>
						<?}?>
						<div class="pattern buggy dark-green anim-pattern" data-pattern="buggy"></div>
					</div>
					<h2><?=$itemProps['HEADER']['VALUE']['TEXT']?></h2>
					<?if(isset($itemProps['SUB_HEADER']['VALUE']['TEXT'])){?>
					<h5>
						<?=$itemProps['SUB_HEADER']['VALUE']['TEXT']?>
					</h5>
					<?}?>
				</div>
				<div class="main-block">
					<div class="action-detail__img" style="background-image: url(<?=$imgUrl?>);">
						<div class="pattern carrot orange anim-pattern" data-pattern="carrot"></div>
						<div class="pattern bird light-green anim-pattern" data-pattern="bird"></div>
					</div>
					<?=htmlspecialchars_decode($itemProps['TOP_TEXT']['VALUE']['TEXT'])?>
					<div class="notice">
						<?=htmlspecialchars_decode($itemProps['HIGHLIGHT_TEXT']['VALUE']['TEXT'])?>
						<div class="pattern shower light-green anim-pattern" data-pattern="shower"></div>
					</div>
					<?=htmlspecialchars_decode($itemProps['BOTTOM_TEXT']['VALUE']['TEXT'])?>
				</div>
				<div class="side-block">
					<div class="action-detail__nav action-detail__nav--big">
						<div class="pattern flower light-green anim-pattern" data-pattern="flower"></div>
						<?if($next_url != ''){?>
							<a href="<?=$next_url?>" class="control next">
								<span>Следующая новость</span>
								<div class="action-detail__nav__txt dark-green">
									<?=$next_name?>
								</div>
							</a>
						<?}?>
						<?if($pre_url != ''){?>
							<a href="<?=$pre_url?>" class="control prev">
								<span>Предыдущая новость</span>
								<div class="action-detail__nav__txt dark-green">
									<?=$pre_name?>
								</div>
							</a>
						<?}?>
					</div>
				</div>
			</div>
			<div class="contacts">
				<div class="big-figure wave-vertical green"></div>
				<h3>По любым вопросам звоните нам,<br class="hidden-xs">
					мы расскажем обо всём, что&nbsp;вас&nbsp;интересует
				</h3>
				<div class="phone">+7 495  800 41 48</div>
				<a href="#" class="btn-default btn-medium btn-green open-feedback call">Заказать звонок</a>
			</div>
			<div class="scroll-top "><a href="#">вернуться наверх</a></div>
		</div>
	</div>
<!--<pre>-->
<!--	--><?//print_r($slide)?>
<!--</pre>-->
<!---->
<!--<pre>-->
<!--	--><?//print_r($arResult)?>
<!--</pre>-->