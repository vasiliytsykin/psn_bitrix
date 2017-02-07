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

    var video =  document.getElementById("video-main");
    var $videoContainer = $(video).closest('.video');

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
    })
        .on('play',function(){
            $videoContainer.addClass('play');
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


    /*------------INDEX---------------*/

    engageOwlCarousel($('.main-slider'), {
        items: 1,
        loop: false,
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

        var $flats = $('.house-plan-page .flat'),
            $floors = $('.floor-list__item'),
            $flatInfo = $('.flat-info');

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
            active = 'active',
            email = 'email',
            call = 'call';

        $feedSwitchTab.on('click', function () {

            $feedTabs.toggleClass(active);
            $feedSwitchTab.toggleClass(active);

        });

        $('.feedback-open').on('click', function () {

            var $self = $(this);

            $feedTabs.removeClass(active);
            $feedSwitchTab.removeClass(active);

            if($self.hasClass(email))
                $feedModal.find('.' + email).addClass(active);

            if($self.hasClass(call))
                $feedModal.find('.' + call).addClass(active);

            $.magnificPopup.open({
                items: {
                    src: '#feedback-modal',
                    type: 'inline'
                },
                mainClass: 'feedback-mfp'
            });


            return false;

        });



        (function setupCalendar() {

            var calLalel = document.getElementById("feedback-call__label"),
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

            pickmeup(calLalel, {

                hide_on_select: true,
                class_name: 'popup-datepicker',
                locale: 'ru'

            });

            calLalel.addEventListener('pickmeup-change', function (e) {

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

            calLalel.addEventListener('pickmeup-hide', function (e) {

                $calendar.removeClass(open);

            });

            $calLabel.on('click', function () {

                $calendar.toggleClass(open);

                if(!$calendar.hasClass(open))
                    pickmeup(calLalel).hide();

            });


        }());


    }());


    /*------END FEEDBACK MODAL-------------*/


    /*------------PARAM FILTER----------*/
    
    (function () {
        
        var $filter = $('.filter'),
            $filterResult = $filter.find('.result-items'),
            $checkboxes = $filter.find('input[type="checkbox"]'),
            $sliders = $filter.find('.range-slider'),
            ajaxUrl = $filter.data('ajax-url'),
            data = {};

        String.prototype.toCamelCase = function () {

            return this.split('-').map(function (el) {

                return el.charAt(0).toUpperCase() + el.slice(1);

            }).join('');

        };

        var $typeForSite = $('#type-for-site');
        
        if($typeForSite.length){
            data['type-for-site'] = $typeForSite.val();
            sendData(data, ajaxUrl, false);
        }
        else
            sendData(data, ajaxUrl);

        $checkboxes.on('change', function () {

            var furnish = {};
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
                else
                    delete data[inputId];

            });
            
            if(furnish.count == 1 && furnish['apartment-furnish'])
                data['apartment-furnish'] = 'Y';
            else if(furnish.count == 1 && furnish['no-apartment-furnish'])
                data['apartment-furnish'] = 'N';
            else delete data['apartment-furnish'];

            sendData(data, ajaxUrl, false);

        });

        $sliders.each(function (index, slider) {

            var $slider = $(slider),
                id = $slider.attr('id'),
                sliderInstance = $slider.data("ionRangeSlider");

            sliderInstance.update({

                onFinish: function () {

                    data[id] = $slider.val();
                    sendData(data, ajaxUrl, false);

                }

            });

        });

        $('.reset-filter').on('click', function () {

            data = {};
            sendData(data, ajaxUrl);

            return false;

        });

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

        function sendData(data, url, loadMore) {

            var dataToSend = {};
                dataToSend['filter'] = formatData(data);

            console.log(dataToSend);

            $.ajax({
                url: url,
                data: dataToSend,
                type: "POST",
                success: function(data){

                    if(loadMore)
                        $('.show-more').remove();
                    else
                        $filterResult.empty();

                    $filterResult.append(data);
                }
            });

        }

        function showMore(pageNumber, pagination) {

            var url = ajaxUrl + '?PAGEN_' + pagination + '=' + pageNumber;
            sendData(data, url, true);

        }

        $(document).ajaxComplete(function () {

            $('.show-more a').on('click', function () {

                var $this = $(this),
                    pageNumber = $this.data('current') + 1,
                    pagination = $this.data('pagination');

                showMore(pageNumber, pagination);

                return false;

            });

        });

        
    }());
    
    /*--------END PARAM FILTER----------*/

});




