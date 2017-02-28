$(function () {

    var $sideLabels =$('.sidebar__section__txt');

    $sideLabels.on('mouseenter', function () {

        var $this = $(this),
            houseId = $this.data('house'),
            $house = $('#' + houseId),
            $label = $('.house-marker[for="#'+ houseId +'"]'),
            hover = 'hover';
        $house.addClass(hover);
        $label.addClass(hover);

    }).on('mouseleave', function () {

        var $this = $(this),
            houseId = $this.data('house'),
            $house = $('#' + houseId),
            $label = $('.house-marker[for="#'+ houseId +'"]'),
            hover = 'hover';
        $house.removeClass(hover);
        $label.removeClass(hover);

    });


});