<? include 'include/header.php';

$photoText = array(

    'Качаловские<br>пруды',
    'Храм<br>Дмитрия Донского',
    'Парк у Храма<br>Дмитрия Донского',
    'Бутовский лесопарк',
    'Бутовский лесопарк',
    'Бутовский лесопарк',
    'Панорама района',
    'Панорама района',
    'Яблоневые сады<br>на территории участка',
    'Качаловский парк'

)

?>
    <div class="panorama-page">
        <div class="big-figure circle green"></div>
        <div class="big-figure wave-yellow"></div>
        <div class="wrapper-outer">
            <h1 class="dark-green">Панорама</h1>
            <h5>Наведите на фото и используйте мышку, чтобы вращать камеру или поменять угол обзора</h5>
            <div class="panorama-over">
                <div class="developer-logo"></div>
                <div class="panorama" id="pano"></div>
            </div>
        </div>
        <div class="photos">
            <div class="h1 dark-green">Фотографии района</div>
            <div class="photos__slider big-slider">
                <?for ($i = 0; $i < 10; $i++){?>
                    <div class="slide" style="background-image: url(img/panorama/photo-<?=$i + 1?>.jpg);">
                        <div class="slide__txt">
                            <div class="h1"><?=$photoText[$i]?></div>
<!--                            <div class="h5">5 минут пешком</div>-->
                        </div>
                    </div>
                <?}?>
            </div>
        </div>
        <div class="scroll-top "><a href="#">вернуться наверх</a></div>
    </div>
<? include 'include/footer.php'?>
