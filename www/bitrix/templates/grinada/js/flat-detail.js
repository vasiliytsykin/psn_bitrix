$(function () {
    

    $('.mortgage-calc .select-box .caption').on('click', function () {

        $(this).closest('.select-box').toggleClass('open');

    });

    (function initCalc() {

        var selectBox = $('.mortgage-calc .select-box'),
            caption = selectBox.find('.caption'),
            bank = selectBox.find('.bank-logo'),
            option = selectBox.find('.sub-option'),
            input = selectBox.find('input');


        bank.on('click', function () {

            var $self = $(this);
            $self.closest('.option').find('.sub-option').first().click();

        });

        option.on('click', function () {

            var textValue = $(this).html(),
                value = textValue.replace('%', '').replace(',', '.');
            caption.html(textValue);
            input.val(value);

            selectBox.removeClass('open');

        });

        var price = $('.price__value').html();

        $('.mortgage-calc input[name="price"]').val(price);

    }());

    $('.flat-page .open-popup').magnificPopup({

        type:'inline',
        mainClass: 'flat-popup'

    });
    
    var $notice = $('.flat-page .extra-info .notice'),
        $btnClose = $notice.find('.btn-close'),
        show = 'show';
    
    setTimeout(function () {
        
        $notice.addClass('show');
        
    }, 4000);
    
    $btnClose.on('click', function () {
        
        $notice.removeClass('show');

        setTimeout(function () {

            $notice.addClass('show');

        }, 10000);
        
    });

});