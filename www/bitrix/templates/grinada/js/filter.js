function engageRangeSlider(element) {

    var min = element.data('from'),
        max = element.data('to'),
        step = element.data('step');

    element.ionRangeSlider({
        type: 'double',
        min: min,
        max: max,
        step: step,
        hide_min_max: true,
        hide_from_to: true
    });

    element.on('change', function () {

        var $this = $(this),
            from = $this.data('from'),
            to = $this.data('to');

        var $inputGroup = $this.closest('.input-group');
        var $min = $inputGroup.find('.min');
        var $max = $inputGroup.find('.max');

        $min.html(from);
        $max.html(to);

    }).change();

}


$(function () {

    var $rangeSliders = $('.range-slider');

    $rangeSliders.each(function (ind, el) {

        engageRangeSlider($(el));

    });

});