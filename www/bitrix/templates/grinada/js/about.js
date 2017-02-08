function openFeature(el) {

    var parent = el.closest('.block-features-item');

    if(!parent.hasClass('on'))
        $('.block-features-item').removeClass('on');

    parent.toggleClass('on');

}

$(function () {

    engageOwlCarousel($('.about-page .gallery__slider'), {

        items: 1,
        loop: true,
        navText: ['', ''],
        responsive: {
            0: {
                nav: false
            },
            1025: {
                nav: true
            }
        }

    });
    

    $('.block-features-open-text').on('click', function () {

        openFeature($(this));
        return false;

    });
    $('.block-features .btn-cross').on('click', function () {

        openFeature($(this));
        return false;

    });

});