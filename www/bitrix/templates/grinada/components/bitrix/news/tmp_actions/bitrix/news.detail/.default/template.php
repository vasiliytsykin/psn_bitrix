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
$next_name ="Следующая акция";
$pre_name ="Предыдущая акция";

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

?>
<div class="action-detail-page">
	<div class="wrapper-inner">
		<div class="action-detail">
			<div class="main-block">
				<div class="action-detail__nav action-detail__nav--small">
					<a href="/actions/" class="control all"><span>Все акции</span></a>
					<?if($next_url != ''){?>
						<a href="<?=$next_url?>" class="control next"><span>Следующая</span></a>
					<?}?>
					<?if($pre_url != ''){?>
						<a href="<?=$pre_url?>" class="control prev"><span>Предыдущая</span></a>
					<?}?>
				</div>
				<h2><?=$itemProps['HEADER']['VALUE']['TEXT']?></h2>
				<h5><?=$arResult['PREVIEW_TEXT']?></h5>
			</div>
			<div class="main-block">
				<div class="action-detail__img" style="background-image: url(<?=$arResult['DETAIL_PICTURE']['SRC']?>);">
					<div class="pattern carrot orange anim-pattern" data-pattern="carrot"></div>
				</div>
				<?=htmlspecialchars_decode($itemProps['TOP_TEXT']['VALUE']['TEXT'])?>
				<div class="notice">
					<?=htmlspecialchars_decode($itemProps['HIGHLIGHT_TEXT']['VALUE']['TEXT'])?>
					<div class="pattern shower light-green anim-pattern" data-pattern="shower"></div>
				</div>
				<?=htmlspecialchars_decode($itemProps['BOTTOM_TEXT']['VALUE']['TEXT'])?>
			</div>
			<div class="side-block">
				<div class="hot-action box-shadow">
					<div class="big-figure circle"></div>
					<div class="pattern buggy dark-green anim-pattern" data-pattern="buggy"></div>
					<div class="hot-action__txt dark-green">
						<div class="top-line">-20%</div>
						<div class="bottom-line">Скидка на 2 этаж</div>
					</div>
					<div class="hot-action__timer">
						<div class="timer__txt">до конца акции</div>
						<div class="timer__board">
							<div class="timer-section" id="days">
								<div class="timer-section__digits">12</div>
								<div class="timer-section__txt">дней</div>
							</div>
							<div class="dots">:</div>
							<div class="timer-section" id="hours">
								<div class="timer-section__digits">23</div>
								<div class="timer-section__txt">часов</div>
							</div>
							<div class="dots">:</div>
							<div class="timer-section" id="minutes">
								<div class="timer-section__digits">14</div>
								<div class="timer-section__txt">минут</div>
							</div>
						</div>
					</div>
				</div>
				<div class="action-detail__nav action-detail__nav--big">
					<div class="pattern flower light-green anim-pattern" data-pattern="flower"></div>
					<?if($next_url != ''){?>
						<a href="<?=$next_url?>" class="control next">
							<span>Следующая акция</span>
							<div class="action-detail__nav__txt dark-green">
								<?=$next_name?>
							</div>
						</a>
					<?}?>
					<?if($pre_url != ''){?>
						<a href="<?=$pre_url?>" class="control prev">
							<span>Предыдущая акция</span>
							<div class="action-detail__nav__txt dark-green">
								<?=$pre_name?>
							</div>
						</a>
					<?}?>
				</div>
			</div>
		</div>
		<div class="contacts">
			<div class="big-figure wave-yellow"></div>
			<div class="pattern bird dark-green anim-pattern" data-pattern="bird"></div>
			<h3>По любым вопросам звоните нам,<br class="hidden-xs">
				мы расскажем обо всём, что&nbsp;вас&nbsp;интересует
			</h3>
			<div class="phone">+7 495  800 41 48</div>
			<a href="#" class="btn-default btn-medium btn-green">Заказать звонок</a>
		</div>
		<div class="scroll-top "><a href="#">вернуться наверх</a></div>
	</div>
</div>