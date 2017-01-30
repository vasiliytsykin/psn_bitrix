/* ---------------- Google карты -------------------*/
var gMap = {
    map :false,
    markers : {},
    polygons:{
        0:{
            coord:[
                {lat: 55.562445, lng: 37.578381},
                {lat:  55.562108, lng: 37.575068},
                {lat: 55.561660, lng: 37.576396},
                {lat:55.561000, lng:37.575634},
                {lat:55.559623, lng:37.574194},
                {lat: 55.558207, lng: 37.576834},
                {lat: 55.557995, lng: 37.578888},
                {lat: 55.558614, lng: 37.577699},
                {lat: 55.561509, lng: 37.581923}
            ],
            polygon:false
        }
    },
    groups: ['kindergarten', 'school', 'university', 'hospital', 'pharmacy', 'pool', 'sportschool', 'fitness', 'mall', 'shops', 'parks', 'church'],
    marker_img:{
        kindergarten:"/img/infra/pin-kindergarten.png",
        school:"/img/infra/pin-school.png",
        university:"/img/infra/pin-university.png",
        hospital:"/img/infra/pin-hospital.png",
        pharmacy:"/img/infra/pin-pharmacy.png",
        pool:"/img/infra/pin-pool.png",
        sportschool:"/img/infra/pin-sportschool.png",
        fitness:"/img/infra/pin-fitness.png",
        mall:"/img/infra/pin-mall.png",
        shops:"/img/infra/pin-shop.png",
        parks:"/img/infra/pin-park.png",
        church:"/img/infra/pin-church.png",
        main:'/img/infra/pin-main.png'
    },
    styles : {
        'withe':[{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#dadada"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#00a8ff"}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#ff0000"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]}], 'black':[
            {
                "stylers": [
                    { "invert_lightness": true },
                    { "hue": "#ff6e00" },
                    { "saturation": -82 },
                    { "lightness": 23 }
                ]
            },{
                "featureType": "water",
                "stylers": [
                    { "hue": "#00bbff" },
                    { "saturation": 32 },
                    { "lightness": 43 }
                ]
            }
        ]},
    map_center : {
        'moscow':{coord:{'lat':55.565174, 'lng': 37.578681}},
    },
    init: function(id, type) {
        /* id- ид объекта в html и в объекте map_center*/

        var styles = gMap.styles[type],
            mapCenter = gMap.map_center[id].coord,

            styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"}),
            mapOptions = {
                zoom:15,
                center: new google.maps.LatLng(mapCenter['lat'],mapCenter['lng']),
                scrollwheel:false,
                mapTypeControl: false,
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_canvas']
                },
                panControl: false,
                scaleControl: false,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.SMALL
                },
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, id]
                }
            };
        gMap.map = new google.maps.Map(document.getElementById('infra-map'), mapOptions);

        $.each(gMap.markers, function(ind, el){
            var coord = new google.maps.LatLng(el.coord.lat,el.coord.lng),
                image='';
            if(el.group in gMap.marker_img){
                image =  gMap.marker_img[el.group];
            }

            gMap.markers[ind]['window'] =  new google.maps.InfoWindow({
                content: el.name
            });
            gMap.markers[ind]['marker'] = new google.maps.Marker({
                map: gMap.map,
                animation: google.maps.Animation.DROP,
                position: coord,
                title:el.name,
                icon: image
            });
            gMap.markers[ind]['marker'].addListener('click', function() {

                $.each(gMap.markers, function(ind, el){

                    el.window.close();

                });

                gMap.markers[ind]['window'].open(gMap.map, gMap.markers[ind]['marker']);
            });


        });

        $.each(gMap.polygons, function(ind, el){

            gMap.polygons[ind].polygon = new google.maps.Polygon({
                paths: el.coord,
                strokeColor: '#95d600',
                strokeOpacity: 0.8,
                strokeWeight: 2,
                fillColor: '#95d600',
                fillOpacity: 0.35
            });
            gMap.polygons[ind].polygon.setMap(gMap.map);
        });

        gMap.map.mapTypes.set(id, styledMap);
        gMap.map.setMapTypeId(id);
    },
    setPoint : function(image, lat, lng,  id, title){
        var point =  new google.maps.LatLng(lat,lng);
        gMap.markers[id]['point']  = new google.maps.Marker({
            map: gMap.map,
            animation: google.maps.Animation.DROP,
            position: point,
            icon: image,
            title:title,
            latln:{

                lat:lat,
                lng:lng
            }
        });
    },
    centerMap : function(markers){


        // Область показа маркеров
        var markersBounds = new google.maps.LatLngBounds();
        $.each(gMap.markers, function(ind, el){
            el.window.close();
        });
        $.each(markers, function(i, el){
            var markerPosition = new google.maps.LatLng(el.coord['lat'], el.coord['lng']);
            // Добавляем координаты маркера в область
            markersBounds.extend(markerPosition);
        });

        $.each(gMap.polygons, function(pind, pel){

            $.each(pel.coord, function(pi, point){

                var markerPosition = new google.maps.LatLng(point['lat'], point['lng']);
                markersBounds.extend(markerPosition);
            });


        });
        gMap.map.setCenter(markersBounds.getCenter(), gMap.map.fitBounds(markersBounds));

    },filterByGroup:function(groups){
        groups['main']='main';
        console.log(gMap.markers);
        var markersToCenter = {};
        $.each(gMap.markers, function(ind, el){
            if(el.group in groups){
                el.marker.setVisible(true);
                markersToCenter[ind] = el;
            }else{
                el.marker.setVisible(false);
            }
        });
        gMap.centerMap(markersToCenter);
    },
    filterByItem: function (itemId) {

        var markersToCenter = {};
        $.each(gMap.markers, function(ind, el){
            if(el.id == itemId || el.id == 'psn'){
                el.marker.setVisible(true);
                markersToCenter[ind] = el;
            }else{
                el.marker.setVisible(false);
            }
        });
        gMap.centerMap(markersToCenter);
        
    }
};

