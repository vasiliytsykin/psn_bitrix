
var intro_showing = false;
function freeze(el) {
    el.addClass('static');
    el.css({
        'transform': 'translate(0,0)'
    });
}

function unfreeze(el) {
    el.removeClass('static');
}

function animateBigFigure() {

    $('.big-figure:not(.static)').each(function(ind, el){

        var windowHeight = $(window).height();
        var scrolled = $(window).scrollTop() + windowHeight;
        var elOffset = $(el).offset().top;

        if(scrolled  > elOffset){
            var top_pos = -200 * ((scrolled - elOffset) / windowHeight);
            $(el).css({
                transform: ' translateY(' +  top_pos + 'px)'
            });
        }

    });

}

$(document).ready(function(){
   // patternizer.init();
   // patternizer.animate();
    $(window).scroll(function(){
        animateBigFigure();
    });
    setInterval(function(){
        $('.btn-cross').toggleClass('anim');
    }, 1000);
    (function () {
        var intro = $('.g-intro');
        if($(window).width() > 1024 && intro.length != 0){
            setTimeout(function(){
                if(!intro_showing){
                    start_intro();
                    intro_showing = true;
                }
            },3000);
        }else{
            intro.hide();
        }
        function start_intro(){
            var draw = SVG('intro-svg');
            console.log(draw);
            var sub = draw.get(2),
                video =  document.getElementById("video-main");
            console.log(sub);
            var circle = sub.get(0).get(0);
            circle.animate(1000).radius(1800);

            setTimeout(function(){
                $('.g-intro').animate({opacity:0},500,function(){
                    $('.g-intro').hide();
                    video.play();
                });
            },1000);
        }
    }());


});