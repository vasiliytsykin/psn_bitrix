function getOffsetRect(elem) {

    var box = elem.getBoundingClientRect();
    var body = document.body;
    var docElem = document.documentElement;
    var scrollTop = window.pageYOffset || docElem.scrollTop || body.scrollTop;
    var scrollLeft = window.pageXOffset || docElem.scrollLeft || body.scrollLeft;
    var clientTop = docElem.clientTop || body.clientTop || 0;
    var clientLeft = docElem.clientLeft || body.clientLeft || 0;
    var top  = box.top +  scrollTop - clientTop;
    var left = box.left + scrollLeft - clientLeft;
    return {
        top: Math.round(top),
        left: Math.round(left),
        width: box.width,
        height: box.height
    }
}



// function adjustLabels(map_o) {
//
//     var $labels = $('.house-marker, .bubble');
//
//     map_o.$map.find($labels).each(function (ind, el) {
//
//         var $el = $(el),
//             $poly = $($el.attr('for')),
//             pos = {
//                 left: $poly.offset().left - map_o.$map.offset().left,
//                 top: $poly.offset().top - map_o.$map.offset().top,
//                 width: $poly[0].getBoundingClientRect().width,
//                 height: $poly[0].getBoundingClientRect().height
//             };
//
//         $el.css({
//             left: pos.left + pos.width / 2,
//             top: pos.top + pos.height / 2
//         });
//     });
// }


function adjustLabels(map_o) {

    var $labels = $('.house-marker, .bubble');

    map_o.$map.find($labels).each(function (ind, el) {

        var $el = $(el),
            $poly = $($el.attr('for')),
            polyBox = getOffsetRect($poly[0]),
            mapBox = getOffsetRect(map_o.$map[0]);

        $el.css({
            left: polyBox.left - mapBox.left + polyBox.width / 2,
            top: polyBox.top - mapBox.top + polyBox.height / 2
        });
    });
}

function putLabels(map_ob) {

    map_ob.$svg.find('polyline').each(function (ind, el) {

        var $el = $(el),
            id = $el.data('json-id'),
            elData = map_ob.config[id],
            houseType = elData.property.house_type == 'mono' ? 'Монолитный': 'Панельный';

        if(elData.property.class == 'house'){
            map_ob.$markers.append([
                '<div for="#' + $el.attr('id') + '" class="house-marker ' + elData.property.house_type + '">',
                'Корпус ' + elData.property.house_number,
                '<div class="house-type">' + houseType + '</div>',
                '</div>'].join(''));
        }
        if(elData.property.class == 'section'){

            var labelHtml = '';

            if(elData.property.furnish)
                labelHtml = ['<div for="#' + $el.attr('id') + '" class="bubble finish">',
                    '<div class="tooltip">',
                    '<div class="h4">'+ elData.property.flatCount +'</div>',
                    'квартир с&nbsp;отделкой',
                    '</div></div>'].join('');
            else
                labelHtml = ['<div for="#' + $el.attr('id') + '" class="bubble ' + elData.property.house_type + '">',
                    elData.property.section_number,
                    '</div>'].join('');



            map_ob.$markers.append(labelHtml);

        }


    });

    adjustLabels(map_ob);

}

$(function () {

    var $masterPlan = $('.master-plan');
    
    if ($masterPlan.length) {

        var svgs = $('.single-svg'),
            svgConsolidated = {};
        svgs.each(function (ind, svg) {
            var svgObj = JSON.parse($(svg).val());
            $.extend(svgConsolidated, svgObj);
        });

        var map_ob = new MySVG();
        if(!$.isEmptyObject(svgConsolidated)){
            map_ob.$svgConfig.val(JSON.stringify(svgConsolidated));
        }
        map_ob.init();
        putLabels(map_ob);

        var $polylines = $masterPlan.find('polyline'),
            $houses = $masterPlan.find('polyline.house'),
            $sections = $masterPlan.find('polyline.section'),
            $bubles = $masterPlan.find('.bubble');

        $polylines.on('click', function () {

            var jsonId = $(this).data('json-id'),
                inSale = map_ob.config[jsonId]['property']['in_sale'],
                url = map_ob.config[jsonId]['property']['url'];

            if(inSale > 0)
                location.href = url;

        });

        $houses.on('mouseenter', function () {

            var $house = $(this),
                houseId = $house.attr('id'),
                $label = $('.house-marker[for="#'+ houseId +'"]'),
                hover = 'hover';
            $house.addClass(hover);
            $label.addClass(hover);

        }).on('mouseleave', function () {

            var $house = $(this),
                houseId = $house.attr('id'),
                $label = $('.house-marker[for="#'+ houseId +'"]'),
                hover = 'hover';
            $house.removeClass(hover);
            $label.removeClass(hover);

        });
        
        $sections.on('mouseenter', function () {

            var $section = $(this),
                sectionId = $section.attr('id'),
                $label = $('.bubble[for="#'+ sectionId +'"]'),
                hover = 'hover';
            $section.addClass(hover);
            $label.addClass(hover);

        }).on('mouseleave', function () {

            var $section = $(this),
                sectionId = $section.attr('id'),
                $label = $('.bubble[for="#'+ sectionId +'"]'),
                hover = 'hover';

            setTimeout(function () {

                $section.removeClass(hover);
                $label.removeClass(hover);

            },50);


        });

        // $bubles.on('mouseenter', function () {
        //
        //     var $bubble = $(this),
        //         sectionId = $bubble.attr('for'),
        //         $section = $(sectionId),
        //         hover = 'hover';
        //
        //     console.log(sectionId);
        //
        //     $section.addClass(hover);
        //
        // });
        //     .on('mouseleave', function () {
        //
        //     var $bubble = $(this),
        //         sectionId = $bubble.attr('for'),
        //         $section = $('sectionId'),
        //         hover = 'hover';
        //     $section.removeClass(hover);
        //
        // });

    }

});