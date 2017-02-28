function engageOwlCarousel(element, settings) {
    
    if(element.hasClass('owl-carousel'))
        destroyOwlCarousel(element);
    element.addClass('owl-carousel').owlCarousel(settings);
    
}

function destroyOwlCarousel(element) {

    if (element.hasClass('owl-carousel'))
    {
        element.trigger('destroy.owl.carousel')
            .removeClass('owl-carousel owl-loaded owl-center');
    }

}

function scrollTop(element, pos){

    element.on('click', function () {
        $('body,html').animate({scrollTop: (pos)}, 600);
        return false;
    });

}

function playMainVideo() {

    var video =  document.getElementById("video-main"),
        $videoContainer = $(video).closest('.video'),
        $slider = $(video).closest('.big-slider'),
        $dots = $slider.find('.owl-dots'),
        hidden = 'hidden';

    $('.btn-video').click(function(){
        video.play();
    });

    $('.btn-stop').click(function(){
        video.pause();
    });

    $(video)
        .on('pause', function (){
            $videoContainer.removeClass('play');
            video.currentTime = 0;
            $dots.removeClass(hidden);
    })
        .on('play',function(){
            $videoContainer.addClass('play');
            $dots.addClass(hidden);
    });

    $('.btn-mute').click(function(){
        if(video.muted==true){
            video.muted=false;
            $videoContainer.removeClass('muted');
        }
        else{
            video.muted=true;
            $videoContainer.addClass('muted');
        }
    });
}

function removeShade() {
    $('.shade').removeClass('on');
    $('.global-menu').removeClass('open')
    $('body').removeClass('global-menu-open');
}

function handleBenefits(width) {

    var benefits = $('.main-page .benefit-list');

    if(width <= 1024)
    {
        var stagePadding = Math.floor(0.15 * width);
        var margin = Math.floor(0.05 * width);
        engageOwlCarousel(benefits, {
            items:1,
            nav: false,
            responsive: {
                0: {
                    margin: 0,
                    stagePadding: 0
                },
                736: {
                    margin: margin,
                    stagePadding: stagePadding
                }
            }
        });
    }
    else
    {
        destroyOwlCarousel(benefits);
    }
}

function getChar(event) {
    if (event.which == null) { // IE
        if (event.keyCode < 32) return null; // спец. символ
        return String.fromCharCode(event.keyCode)
    }

    if (event.which != 0 && event.charCode != 0) { // все кроме IE
        if (event.which < 32) return null; // спец. символ
        return String.fromCharCode(event.which); // остальные
    }

    return null; // спец. символ
}

$(function () {

    $('.burger-btn').on('click', function () {

        $('.global-menu').toggleClass('open');
        $('.shade').toggleClass('on');
        $('body').toggleClass('global-menu-open');
        $('.top-level').removeClass('open');

    });

    $('.shade').on('click', function () {
        $('.burger-btn').click();
    });

    $('.global-menu .nested').on('click', function () {

        $(this).closest('.top-level').toggleClass('open');
        return false;

    });
    
    $('.actions-modal__content').slick({

        slidesToShow: 4,
        slidesToScroll: 1,
        vertical: true,
        verticalSwiping: true,
        appendArrows: '.actions-modal__controls .arrows',
        prevArrow: '<div class="arrow prev"></div>',
        nextArrow: '<div class="arrow next"></div>'

    });

    $('.actions-modal__tip').on('click', function () {

        $(this).closest('.actions-modal').addClass('open');

    });
    
    $('.actions-modal__controls .btn-close').on('click', function () {

        $(this).closest('.actions-modal').removeClass('open');

    });

    $(window).on('resize', function () {

        var width = $(window).width();
        if(width > 1340)
            removeShade();

    }).resize();

    scrollTop($('.scroll-top a'), 0);
    
    $('.gallery__switch .switch__tab').on('click', function () {

        var tabActive = $(this).data('tab'),
            active = 'active';

        $('.gallery__tab').removeClass(active);
        $('.gallery__switch .switch__tab').removeClass(active);

        $('.' + tabActive).addClass(active);


    });

    $('.footer__policy').magnificPopup({

        type: 'inline',
        mainClass: 'policy-popup'

    });
    
    (function () {

        var lastScrollTop = 0,
            $subMenuMain = $('.sub-menu--main'),
            dismiss = 'dismiss';

        $(window).on('scroll', function() {
            var st = $(this).scrollTop();
            if(st < lastScrollTop) {

                $subMenuMain.removeClass(dismiss);
            }
            else {

                $subMenuMain.addClass(dismiss);

            }
            lastScrollTop = st;
        });


    }());


    $('a.disabled').on('click', function () {
        return false;
    });


    /*------------INDEX---------------*/

    engageOwlCarousel($('.main-slider'), {
        items: 1,
        loop: true,
        navText: ['', ''],
        responsive: {
            0: {
                nav: false
            },
            768: {
                nav: true
            }
        }
    });

    $(window).on('resize', function () {

        var width = $(window).width();
        handleBenefits(width);

        var el = $('.benefits .circle:nth-child(1)');
        if(width <= 736)
            freeze(el);
        else
            unfreeze(el);

    }).resize();

    engageOwlCarousel($('.main-offer__content'), {

        items: 1,
        loop: true,
        nav: false,
        mouseDrag: false,
        animateOut: 'fadeOut'
    });

    playMainVideo();

    /*------------END INDEX------------*/


    /*-------------DEVELOPER---------*/

    engageOwlCarousel($('.developer-page .gallery__slider'), {

        items: 1,
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut'

    });

    /*---------END DEVELOPER---------*/

    /*----------PANORAMA-------------*/

    engageOwlCarousel($('.panorama-page .photos__slider'), {

        items: 1,
        loop: true,
        navText: ['', ''],
        autoplay: true,
        autoplayTimeout: 7000,
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        responsive: {
            0: {
                nav: false
            },
            1025: {
                nav: true
            }
        }

    });

    if($('#pano').length){
        embedpano({
            swf:"/pano/tour.swf",
            xml:"/pano/tour.xml",
            target:"pano",
            html5:"prefer",
            basepath: "/pano/",
            passQueryParameters:true
        });
    }

    /*-------END PANORAMA-------------*/

    /*---------MAIN PLAN-------------*/


    var mainMap = $('.main-plan__map');

    if(mainMap.length)
    {
        console.log('ok');

        mainMap.addClass('handle');
        mainMap.parent().addClass('dragdealer');

        var canvas = new Dragdealer('main-map-over', {
            x: 0.7,
            y: 1,
            speed: 0.2,
            requestAnimationFrame: true
        });
    }
    
    
    $('.master-plan--about .sidebar__section__txt').on('mouseenter', function () {

        var house = $(this).data('house');
        $('.' + house).addClass('show');


    }).on('mouseleave', function () {

        var house = $(this).data('house');
        $('.' + house).removeClass('show');


    });

    /*-----END MAIN PLAN-------------*/

    /*----------------INFRA------------*/


    (function initInfraMap() {

        if($('#infra-map').length)
        {
            Markers['ind1000'] = {'id': 'psn','name':'ЖК', 'group':'main', 'coord':{lat:55.560989, lng:37.576975}};
            gMap.markers = Markers;
            gMap.init('moscow', 'white');

            var $group = $('.infra-group__title a'),
                $subGroup = $('.infra-subsection-title a'),
                $item = $('.infra-list__item');

            $group.click(function(){
                var group_show={};
                $(this).closest('.infra-group').find('.infra-subsection-title a').each(function(ind, el){
                    var  group_code = $(el).attr('href').replace('#','');
                    group_show[group_code]=group_code;
                });
                $('.infra-subsection-title, .infra-group').removeClass('active');
                $(this).parent().parent().addClass('active');
                gMap.filterByGroup(group_show);
                return false;
            });
            $subGroup.click(function(){
                $('.infra-subsection-title, .infra-group').removeClass('active');
                $(this).parent().addClass('active');
                var group_show={};
                var  group_code = $(this).attr('href').replace('#','');
                group_show[group_code]=group_code;
                gMap.filterByGroup(group_show);
                return false;
            });
            $item.on('click', function () {

                var id = $(this).data('id');
                gMap.filterByItem(id);

            });

            scrollTop($group, 180);
            scrollTop($subGroup, 180);
            scrollTop($item, 180);


            (function setIcons(pathPrefix) {

                var groups = gMap.groups;

                groups.forEach(function (group) {

                    var iconPath = pathPrefix + group + '.svg';
                    var element = $('.' + group);

                    element.find('.icon').css({
                        'background-image': 'url(' + iconPath + ')'
                    });
                });

            })('/img/infra/icon-');


            $('.infra-nav__handle').on('click', function () {

                $('.infra-nav').toggleClass('closed');

            });

        }

    }());



    /*-------------END INFRA------------*/

    
    
        $('.slide-block__header').on('click', function () {

            var slideBlock = $(this).closest('.slide-block'),
                content = slideBlock.children('.slide-block__content'),
                open = 'open';

            slideBlock.toggleClass(open);

            if(slideBlock.hasClass(open))
                content.slideDown();
            else
                content.slideUp();
        });


    /*------------PARTNERS--------------*/
    
    
    (function () {
        
        
        var tabs = $('.partners-page .gallery__tab'),
            slideClass = 'slide-block main';
        
        $(window).on('resize', function () {
            
            if($(this).width() <= 1024)
                tabs.addClass(slideClass);
            else
                tabs.removeClass(slideClass);
        }).resize();

        $('.slide-block.main .slide-block__header').on('click', function () {

            var slideBlock = $(this).closest('.slide-block'),
                subBlock = slideBlock.find('.slide-block'),
                content = slideBlock.find('.slide-block__content'),
                open = 'open';

            if(!slideBlock.hasClass(open))
            {
                subBlock.removeClass(open);
                content.slideUp();
            }
        });
        
    }());

    /*--------END PARTNERS--------------*/

    /*------------HOUSE PLAN------------*/
    
    (function () {

        var $housePlanPage = $('.house-plan-page');

        if($housePlanPage.length){

            var $flats = $housePlanPage.find('.flat'),
                $floors = $housePlanPage.find('.floor-list__item'),
                $flatInfo = $housePlanPage.find('.flat-info'),
                $navBlock = $housePlanPage.find('.navigation-block'),
                headerHeight = $('.header').outerHeight(),
                menuHeight = $('.sub-menu--main').outerHeight(),
                lastScroll = 0;

            $(window).on('resize', function () {

                var width = $(window).width();

                if(width > 1024)
                {
                    $flats.on('mouseenter', function () {

                        var $self = $(this),
                            floorNum = $self.closest('.floor-row').data('floor');

                        $flatInfo.removeClass('show');
                        $self.find('.flat-info').addClass('show');

                        $floors.removeClass('hover');
                        $('.floor-' + floorNum).addClass('hover');

                    }).on('mouseleave', function () {
                        $floors.removeClass('hover');
                        $flatInfo.removeClass('show');
                    });
                }

            }).resize();

            $(window).on('scroll resize', function () {

                var scrollTop = $(window).scrollTop(),
                    topOffset = $navBlock.offset().top,
                    top = 0;

                if(scrollTop > lastScroll)
                    top = headerHeight;
                else
                    top = headerHeight + menuHeight;

                var breakPoint = topOffset - top;
                lastScroll = scrollTop;

                if(scrollTop >= breakPoint){
                    var left = $navBlock.offset().left;
                    $flatInfo.css({
                        position: 'fixed',
                        top: top,
                        left: left
                    });

                }
                else $flatInfo.css({
                    position: 'absolute',
                    top: 0,
                    left: '100%'
                });

            })

        }

        
    }());
    
    /*--------END HOUSE PLAN------------*/

    /*--------------HISTORY------------*/
    
    
    (function () {
        
        
        $('.history-page .txt-trigger').on('click', function () {
            
            var $self = $(this),
                $parent = $self.closest('.event__txt');
            
            $parent.toggleClass('open');
            
            $parent.find('.desc').slideToggle();
            
        })
        
        
    }());
    
    
    /*----------END HISTORY------------*/


    /*----------------LOG---------------*/

    (function () {


        var $items = $('.log-page .gallery__item');

        $items.each(function (ind, item) {

            var $item = $(item),
                $percent = $item.find('.percent'),
                id = '#' + $item.find('.progress-bar').attr('id'),
                progress = $item.data('progress') / 100;

            var bar = new ProgressBar.Circle(id, {
                strokeWidth: 1,
                duration: 1400,
                color: '#fff',
                trailColor: 'transparent',
                trailWidth: 1,
                svgStyle: null,
                step: function(state, circle) {
                    
                    var value = Math.round(circle.value() * 100);
                    $percent.html(value + '%')

                }
            });
            bar.animate(progress);
        });


        var $previews = $('.log-page .preview__items'),
            $preview = $('.log-page .preview__item');

        $previews.each(function (ind, el) {

            var $self = $(el),
                $preview = $self.find('.preview__item');


            $preview.first().addClass('hover');

            $preview.on('mouseenter', function () {

                $preview.removeClass('hover');
                $(this).addClass('hover');

            });

        });


        $previews.slick({
            dots: false,
            infinite: false,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            swipeToSlide: true
        });


        $preview.on('click', function () {

            var $self = $(this),
                $items = $self.find('.popup__items'),
                $popup = $self.find('.log-gallery__popup');

            $.magnificPopup.open({
                items: {
                    src: $popup,
                    type: 'inline'
                },
                mainClass: 'log-gallery-mfp',
                callbacks: {
                    open: function() {

                        engageOwlCarousel($items, {

                            items: 1,
                            loop: true,
                            stagePadding: 250,
                            autoWidth: true,
                            // lazyLoad: true,
                            navText: ['', ''],
                            center: true,
                            responsive: {

                                0: {
                                    nav: false
                                },

                                1025: {
                                    nav: true
                                }

                            }

                        });

                    },
                    close: function() {

                        destroyOwlCarousel($items);

                    }
                }
            });
            
            return false;

        });

    }());

    /*------------END LOG---------------*/


    /*----------FEEDBACK MODAL-------------*/


    (function () {


        var $feedModal = $('.feedback-modal'),
            $feedTabs = $feedModal.find('.tab'),
            $feedSwitch = $feedModal.find('.switch'),
            $feedSwitchTab = $feedModal.find('.switch__tab'),
            $phoneInput = $feedModal.find('input[name="phone"]'),
            $nameInput = $feedModal.find('input[name="name"]'),
            $emailInput = $feedModal.find('input[name="email"]'),
            active = 'active',
            hidden = 'hidden',
            email = 'email',
            call = 'call',
            layout = 'layout',
            invalid = 'invalid';

        function isValidName(name) {

            var nameRegEx = new RegExp("^(?:[A-Za-zА-Яа-я]{2,20}\\s?){1,3}$");
            return nameRegEx.test(name);

        }

        function isValidEmail(email) {

            var emailRegEx = new RegExp("^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\\.[a-zA-Z0-9-]+)*$");
            return emailRegEx.test(email);

        }

        function validate($input, isValid) {

            var value = $input.val();
            if(value.length > 0 && !isValid(value))
                $input.addClass(invalid);
            else $input.removeClass(invalid);

        }

        $nameInput.on('blur keyup change', function () {

            var $this = $(this);
            validate($this, isValidName);

        }).on('keypress', function (event) {

            var keyChar = getChar(event);
            if(keyChar == null || !keyChar.match(/[a-zа-я ]/i))
                return false;

        });

        $emailInput.on('blur keyup change', function () {

            var $this = $(this);
            validate($this, isValidEmail);

        });


        $phoneInput.inputmask("+7(999)-999-99-99");
        engageRangeSlider($('#time'));

        $feedSwitchTab.on('click', function () {

            $feedTabs.not('.layout').toggleClass(active);
            $feedSwitchTab.toggleClass(active);

        });

        $('.feedback-open').on('click', function () {

            var $self = $(this);

            $feedTabs.removeClass(active);
            $feedSwitch.removeClass(hidden);
            $feedSwitchTab.removeClass(active);

            if($self.hasClass(email))
                $feedModal.find('.' + email).addClass(active);

            if($self.hasClass(call))
                $feedModal.find('.' + call).addClass(active);

            if($self.hasClass(layout)){
                $feedModal.find('.' + layout).addClass(active);
                $feedSwitch.addClass(hidden);
            }

            $.magnificPopup.open({
                items: {
                    src: '#feedback-modal',
                    type: 'inline'
                },
                mainClass: 'feedback-mfp'
            });

            return false;

        });

        $('a.submit').on('click', function () {

            var $this = $(this),
                $form = $this.closest('.form-container').find('form');
            $form.submit();


        });

        (function setupCalendar() {

            var calLabel = document.getElementById("feedback-call__label"),
                open = 'open',
                $calendar = $('.calendar'),
                $calLabel = $calendar.find('label'),
                $calInput = $('#feedback-call__date'),
                today = new Date(),
                dd = today.getDate(),
                ddFormated = dd > 9 ? dd : '0' + dd,
                mm = today.getMonth() + 1,
                mmFormated = mm > 9 ? mm : '0' + mm,
                yy = today.getFullYear(),
                todayStr = ddFormated + '-' + mmFormated + '-' + yy;


            $calInput.val(todayStr);


            pickmeup.defaults.locales['ru'] = {
                days: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
                daysShort: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                daysMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
                months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                monthsShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек']
            };

            pickmeup(calLabel, {

                hide_on_select: true,
                class_name: 'popup-datepicker',
                locale: 'ru'

            });

            calLabel.addEventListener('pickmeup-change', function (e) {

                var formatedDate = e.detail.formatted_date;

                if(formatedDate != todayStr)
                {
                    $calLabel.html(e.detail.formatted_date);
                    $calInput.val(e.detail.formatted_date);
                }
                else
                {
                    $calLabel.html('Сегодня');
                    $calInput.val(todayStr);
                }

                $calendar.removeClass(open);

            });

            calLabel.addEventListener('pickmeup-hide', function (e) {

                $calendar.removeClass(open);

            });

            $calLabel.on('click', function () {

                $calendar.toggleClass(open);

                if(!$calendar.hasClass(open))
                    pickmeup(calLabel).hide();

            });


        }());


    }());


    /*------END FEEDBACK MODAL-------------*/



    /*-------------AJAX-----------------*/


    (function () {

        var $filter = $('.filter'),
            $resultContainer = $('.result-items'),
            $checkboxes = $filter.find('input[type="checkbox"]'),
            $sliders = $filter.find('.range-slider'),
            ajaxUrl = $('.ajax-url').val(),
            filterUrl = '/catalog/flats/',
            data = gatherData();

        String.prototype.toCamelCase = function () {

            return this.split('-').map(function (el) {

                return el.charAt(0).toUpperCase() + el.slice(1);

            }).join('');

        };

        function gatherData() {

            return $.extend({}, gatherCheckboxData(), gatherSliderData());
        }

        function gatherCheckboxData() {

            var data = {},
                furnish = {};
            furnish.count = 0;

            $checkboxes.each(function (index, input) {

                var $input = $(input),
                    inputId = $input.attr('id');

                if($input.prop('checked')){

                    if(inputId.indexOf('furnish') != -1)
                    {
                        furnish[inputId] = true;
                        furnish.count++;
                    }

                    else if(!$input.hasClass('check-all'))
                        data[inputId] =  true;
                }

            });

            if(furnish.count == 1 && furnish['apartment-furnish'])
                data['apartment-furnish'] = 'Y';
            else if(furnish.count == 1 && furnish['no-apartment-furnish'])
                data['apartment-furnish'] = 'N';

            return data;
        }

        function gatherSliderData() {

            var data = {};

            $sliders.each(function (index, slider) {

                var $slider = $(slider),
                    id = $slider.attr('id'),
                    val = $slider.val();
                data[id] = val;

            });

            return data;
        }

        function formatData(data) {

            var formattedData = {};

            for(var id in data){

                if(!data.hasOwnProperty(id)) continue;

                var arId = id.split('-'),
                    paramNumber = parseInt(arId[arId.length - 1], 10);

                if(!isNaN(paramNumber)){
                    var key = arId.slice(0, arId.length - 1).join('-').toCamelCase();
                    if(!formattedData.hasOwnProperty(key))
                        formattedData[key] = [paramNumber];
                    else formattedData[key].push(paramNumber);
                }
                else
                    formattedData[id.toCamelCase()] = data[id];
            }
            return formattedData;

        }

        function sendRequest(url, data, callback, container) {

            console.log(data);

            var dataToSend = {};
            dataToSend['filter'] = data;
            
            $.ajax({
                url: url,
                data: dataToSend,
                type: "POST",
                success: function(response){

                    callback(response, container);
                }
            });
        }

        function loadMore(pageNumber, pagination, container) {

            var url = ajaxUrl + '?PAGEN_' + pagination + '=' + pageNumber;
            sendRequest(url, formatData(data), appendResult, container);
        }

        function refresh(data, container) {
            container.empty();
            container.append(data);
        }

        function appendResult(data, container) {
            container.find('.show-more').remove();
            container.append(data);
        }

        function sendRequestOnChange() {
            data = formatData(gatherData());
            var urlArray = createUrl(data),
                url = filterUrl + '?' + urlArray.join('&');
            history.pushState(urlArray, null, url);
            console.log(url);
            sendRequest(ajaxUrl, data, refresh, $resultContainer);
        }

        function handleShowMoreBtn() {

            var $this = $(this),
                $tab = $this.closest('.gallery__tab'),
                $container = $this.closest('.result-items'),
                pageNumber = $this.data('current') + 1,
                pagination = $this.data('pagination');

            if($tab.length)
            {
                data.section = $tab.data('tab');
                data.page = pageNumber;
            }

            loadMore(pageNumber, pagination, $container);

            return false;

        }

        function createUrl(data) {
            
            var urlArray = [];
            
            $.each(data, function (name, value) {

                var newValue = value;

                if(Array.isArray(value)){
                    newValue = value.join(',');
                }

                urlArray.push(name + '=' + newValue);

            });

            return urlArray;
            
        }
        
        $checkboxes.on('change', function () {

            sendRequestOnChange();

        });

        $sliders.each(function (index, slider) {

            var $slider = $(slider),
                sliderInstance = $slider.data("ionRangeSlider");

            sliderInstance.update({

                onFinish: function () {
                    sendRequestOnChange();
                }

            });

        });

        $('.reset-filter').on('click', function () {
            history.pushState([], null, filterUrl);
            sendRequest(ajaxUrl, {}, refresh, $resultContainer);
            return false;
        });

        $('.show-more a').on('click', handleShowMoreBtn);

        $(document).ajaxComplete(function () {
            var $showMoreBtn = $('.show-more a');
            $showMoreBtn.off('click', handleShowMoreBtn);
            $showMoreBtn.on('click', handleShowMoreBtn);

        });

        if($filter.length)
        {
            var $typeForSite = $('#type-for-site');
            if($typeForSite.length)
                data['type-for-site'] = $typeForSite.val();

            sendRequest(ajaxUrl, formatData(data), refresh, $resultContainer);
        }

    }());

    /*-------------END AJAX--------------*/
    
    /*---------HOT ACTION TIMER----------*/

    function getTimeLeft(deadLine) {

        var deadLineInMilliseconds = deadLine.getTime();

        var dayInMilliseconds = 24 * 3600 * 1000;
        var currentTime = new Date().getTime();

        var timeInterval = deadLineInMilliseconds - currentTime;
        var daysCount = Math.floor(timeInterval / dayInMilliseconds);
        var hoursCount = Math.floor(timeInterval / (3600 * 1000));
        var minsCount = Math.floor(timeInterval / (60 * 1000));
        var hoursLeft = hoursCount - daysCount * 24;
        var minsLeft = minsCount - hoursCount * 60;

        var result = {
            days: daysCount,
            hours: hoursLeft,
            minutes: minsLeft
        };
        
        return result;
    }

    function parseDate(dateInput) {

        var arDateHour = dateInput.split(' '),
            arDat = arDateHour[0].split('.'),
            arHourMin = arDateHour[1].split(':');

        return new Date(arDat[2], arDat[1] - 1, arDat[0], arHourMin[0], arHourMin[1]);
    }

    function printTimer(timeLeft) {

        function printTimerSection(container, childName, value) {

            var $digits = container.find('.' + childName),
                oldValue = $digits.html();

            if(oldValue == '' || oldValue != value)
            {
                value = value < 10 ? '0' + value : value;
                $digits.trigger('digitChanged', [value]);
            }
        }


        for(var prop in timeLeft){
            if(!timeLeft.hasOwnProperty(prop)) continue;
            var containerName = $('#' + prop);
            printTimerSection(containerName, 'timer-section__digits', timeLeft[prop]);
        }



    }

    function engageTimer(deadline) {
        var timeLeft = getTimeLeft(deadline);
        printTimer(timeLeft);
    }
    
    var $deadline = $('#action-end-time');
    
    if($deadline.length)
    {
        var deadlineStr = $deadline.val();
        var deadline = parseDate(deadlineStr);
        var timerDigit = $('.timer-section__digits');
        timerDigit.on('digitChanged', function (event, val) {
            var el = $(this);
            el.html(val);
        });
        setInterval(function () {
            var colon = $('.dots');
            colon.addClass('tick');
            setTimeout(function () {
                colon.removeClass('tick');
            }, 500);
        }, 1000);
        engageTimer(deadline);
        setInterval(function () {
            engageTimer(deadline);
        }, 500 * 60);
    }
    
    /*-----END HOT ACTION TIMER----------*/
    
});




