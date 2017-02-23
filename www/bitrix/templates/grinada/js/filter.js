function engageRangeSlider(element) {

    var min = element.data('min'),
        max = element.data('max'),
        from = min,
        to = max,
        step = element.data('step'),
        arValue = element.val() ? element.val().split('-') : [];

    if(arValue.length > 1){
        from = arValue[0];
        to = arValue[1];
    }


    element.ionRangeSlider({
        type: 'double',
        min: min,
        max: max,
        from: from,
        to: to,
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

    var $rangeSliders = $('.filter .range-slider');

    $rangeSliders.each(function (ind, el) {

        engageRangeSlider($(el));

    });

    var $allCheckboxes = $('.filter input[type="checkbox"]'),
        $checkAll = $('.check-all');

    $checkAll.on('click', function () {

        var $this = $(this),
            $checkboxes = $this.closest('.input-group').find('input[type="checkbox"]');

        $checkboxes.not(':disabled').prop('checked', true);

    });

    $allCheckboxes.not($checkAll).on('click', function () {

        var $this = $(this),
            $checkAll = $this.closest('.input-group').find('.check-all');

        $checkAll.prop('checked', false);

    });

    $('.reset-filter').on('click', function () {

        $allCheckboxes.prop('checked', false);

        $rangeSliders.each(function (index, slider) {

            var $slider = $(slider),
                sliderInstance = $slider.data("ionRangeSlider");
            sliderInstance.update({
                from: $slider.data('min'),
                to: $slider.data('max')
            });

        });

    });




});