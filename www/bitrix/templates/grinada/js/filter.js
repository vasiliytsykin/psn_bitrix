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
        hide_from_to: true,
        input_values_separator: '-'
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

    var $allCheckboxes = $('.filter input[type="checkbox"]'),
        $houseCheckboxes = $('.input-group.house input'),
        $houseAll = $('#building-all');

    $houseAll.on('click', function () {
        $houseCheckboxes.not(':disabled').prop('checked', true);

    });

    $houseCheckboxes.not($houseAll).on('click', function () {

        $houseAll.prop('checked', false);

    });

    $('.reset-filter').on('click', function () {

        $allCheckboxes.prop('checked', false);

        $rangeSliders.each(function (index, slider) {

            var sliderInstance = $(slider).data("ionRangeSlider");
            sliderInstance.reset();

        });

    });




});