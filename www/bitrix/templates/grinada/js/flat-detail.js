$(function () {

    var $calc = $('.mortgage-calc'),
        $inputs = $calc.find('input'),
        $textInputs = $calc.find('input[type="text"]'),
        $result = $calc.find('.result');

    $('.mortgage-calc .select-box .caption').on('click', function () {

        $(this).closest('.select-box').toggleClass('open');

    });

    String.prototype.insertAt = function(index, string) {
        return this.substr(0, index) + string + this.substr(index);
    };


    (function formatInput() {

        $textInputs.on('blur', function () {

            var $input = $(this),
                inputVal = $input.val(),
                inputValStr = inputVal.toString().replace(/ /g, ''),
                inputLen = inputValStr.length,
                chunks = Math.floor(inputLen / 3),
                chunksCorrected = inputLen % 3 == 0 ? chunks -1 : chunks;

            console.log(inputVal);
            console.log(inputValStr);

            for(var i = 1; i <= chunksCorrected; i++){
                inputValStr = inputValStr.insertAt(inputLen - i*3, ' ');
            }
            $input.val(inputValStr);
            console.log(inputValStr);
        });
    }());


    function gatherData($form) {

        var data = {};
        data.count = 0;

        $form.find('input').each(function (index, input) {

            var $input = $(input),
                inputName = $input.attr('name'),
                inputVal = parseFloat($input.val().replace(/[^\d\.]/g, ''));
            if(inputVal > 0)
            {
                data[inputName] = inputVal;
                data.count++;
            }
        });

        console.log(data);
        return data;

    }

    function calculatePayment(price, deposit, percent, term) {

        return Math.round(((price - deposit) * percent / (100 * 12)) /
            (1 - Math.pow(( 1 + percent / (100 * 12)), -term * 12)));

    }

    function calculate($form) {

        var data = gatherData($form);
        if(data.count == 4)
           return calculatePayment(data.price, data.deposit, data.percent, data.term);
        else return '';



    }

    $inputs.on('change keyup blur', function () {

        var $form = $(this).closest('.mortgage-calc');
        $result.html(calculate($form));

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

    $(window).on('resize', function () {

        if($(window).width() >= 768)
        {
            setTimeout(function () {

                $notice.addClass('show');

            }, 4000);
        }
        else $notice.removeClass('show');

    }).resize();

    
    $btnClose.on('click', function () {
        
        $notice.removeClass('show');

        setTimeout(function () {

            $notice.addClass('show');

        }, 10000);
        
    });

});