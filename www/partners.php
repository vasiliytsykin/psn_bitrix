<?
    include 'include/header.php';
    include 'include/partners-data.php';
?>
    <div class="partners-page">
        <div class="big-figure circle"></div>
        <div class="big-figure wave-yellow"></div>
        <h1 class="dark-green">Участники проекта</h1>
        <div class="banner-over">
            <div class="banner"></div>
        </div>
        <div class="wrapper-main">
            <div class="info-block info-block--main">
                <div class="info-block__txt">
                    <h2>Только профессионалы</h2>
                    <p>
                        Мы собрали отличную команду, чтобы сделать этот проект особенным.
                        Европейских архитекторов, которые с большим вниманием относятся
                        к окружающей среде, строительные компании, что построили колоссальное
                        количество объектов и уже проверенны годами. И пригласили лучшие риэлторские
                        агентства и банки, которые точно знают, как сделать финансовые условия
                        и ипотечные программы максимально выгодными для наших будущих жильцов.
                    </p>
                </div>
                <div class="pattern big-pattern pattern-5 dark-green anim-pattern" data-pattern="pattern-5"></div>
            </div>
        </div>
        <div class="gallery">
            <div class="gallery__switch-over hidden-sm hidden-xs">
                <div class="gallery__switch">
                    <div class="switch__tab tab-1 active" data-tab="tab-1">архитекторы</div>
                    <div class="switch__tab tab-2" data-tab="tab-2">строительные компании</div>
                    <div class="switch__tab tab-3" data-tab="tab-3">брокерские агентства</div>
                    <div class="switch__tab tab-4" data-tab="tab-4">финансовые партнеры</div>
                </div>
            </div>
            <div class="gallery__tabs">

                <?foreach ($partners as $ind => $group){

                    $active = $ind == 0 ? 'active' : '';

                    ?>

                <div class="gallery__tab tab-<?=$ind + 1?> <?=$active?>">
                    <div class="slide-block__header visible-sm visible-xs">
                        <div class="trigger"><span class="name"><?=$group['group']?></span></div>
                    </div>
                    <div class="slide-block__content">

                        <?foreach ($group['members'] as $member){?>

                        <div class="slide-block sub">
                            <div class="slide-block__header">
                                <div class="trigger"><span class="name h2"><?=$member['name']?></span></div>
                            </div>
                            <div class="slide-block__content partner-info">
                                <div class="wrapper-main">
                                    <div class="info-block">
                                        <div class="info-block__img">
                                            <img src="<?=$member['img']?>" alt="ahr">
                                        </div>
                                        <div class="info-block__txt">
                                            <p>
                                                <?=$member['info']?>
                                            </p>
                                            <a href="http://<?=$member['link']?>" target="_blank" class="dark-green"><?=$member['link']?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?}?>

                    </div>
                </div>

                <?}?>

            </div>
        </div>
        <div class="scroll-top "><a href="#">вернуться наверх</a></div>
    </div>
<? include 'include/footer.php'?>
