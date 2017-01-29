function initMap() {

    google.maps.event.addDomListener(window, 'load', init);

    function init() {

        var psn = new google.maps.LatLng(55.55935,37.5773),
            subway = new google.maps.LatLng(55.569497,37.5765),
            center = new google.maps.LatLng(55.564624,37.5753931);

        var psnIcon = {
            url: '/img/contacts/psn-pin.png',
            size: new google.maps.Size(75, 105),
            anchor: new google.maps.Point(37, 105)
        },

            subwayIcon = {
            url: '/img/contacts/subway-pin.png',
            size: new google.maps.Size(215, 115),
            anchor: new google.maps.Point(107, 105)
        },

            psnPin = new google.maps.Marker({
            icon: psnIcon,
            position: psn,
            zIndex: 999
            }),

            subwayPin = new google.maps.Marker({
                icon: subwayIcon,
                position: subway,
                zIndex: 999
            });

        mapProp = {
            center: center,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            scrollwheel: false,
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            },
            streetViewControl: true,
            streetViewControlOptions: {
                position: google.maps.ControlPosition.LEFT_BOTTOM
            }
        };

        var map = new google.maps.Map(document.getElementById("map"), mapProp);

        var customMapType = new google.maps.StyledMapType([
            {
                featureType: 'all',
                stylers: [
                    {hue: '#c7d3da'},
                    {saturation: -80}
                ]
            }

        ], {
            name: 'Custom Style'
        });
        var customMapTypeId = 'custom_style';
        map.mapTypes.set(customMapTypeId, customMapType);
        map.setMapTypeId(customMapTypeId);

        //центрирование при изменении размера карты
        google.maps.event.addDomListener(window, "resize", function () {
            google.maps.event.trigger(map, "resize");
            map.setCenter(psn);
        });

        psnPin.setMap(map);
        subwayPin.setMap(map);


        var directionsService = new google.maps.DirectionsService,
            directionsDisplay = new google.maps.DirectionsRenderer({preserveViewport: true});

        google.maps.event.addListener(map, 'click', function (event) {
            var request = {
                origin: event.latLng,
                destination: psn,
                travelMode: google.maps.TravelMode.DRIVING
            };

            directionsService.route(request, function (response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                }
            });

            directionsDisplay.setMap(null);

            directionsDisplay.setDirections({routes: [], preserveViewport: true});
            directionsDisplay.setOptions({
                polylineOptions: {
                    strokeColor: '#f5a600',
                    strokeWeight: 4
                }
            });

            directionsDisplay.setMap(map);
        });
        
    }
}

$(function () {

    if($('.contact-page #map').length)
        initMap();


    function toggleShowTooltip() {

        var tooltip = $('.map__tooltip');
        var btnClose = tooltip.find('.btn-close');
        var hidden = 'hidden';

        btnClose.on('click', function () {

            tooltip.addClass(hidden);

            setTimeout(function () {
                tooltip.removeClass(hidden);
            }, 5000)

        });



    }

    toggleShowTooltip();

    $('.route-guide .switch-tab').on('click', function () {

        if(!$(this).hasClass('active')){
            $('.gallery__tab').toggleClass('active');
            $('.switch-tab').toggleClass('active');
        }
    });

    engageOwlCarousel($('.route-guide .big-slider'), {

        items: 1,
        loop: true,
        navText: ['', ''],
        responsive: {

            0: {
                nav: false
            },
            736: {
                nav: true
            }

        }

    })
    
});