$(document).ready(function () {

	// function adjustPoints(map_o, callback) {
	// 	map_o.elemenst.map_area.find('.house-marker').each(function (ind, el) {
    //
    //
    //
	// 		var $el = $(el), $poly = $($el.attr('for')),
	// 			pos = {
	// 				left: $poly.offset().left - $('.map-area').offset().left,
	// 				top: $poly.offset().top - $('.map-area').offset().top,
	// 				width: $poly[0].getBoundingClientRect().width,
	// 				height: $poly[0].getBoundingClientRect().height,
	// 			};
    //
    //
	// 		console.log(pos);
	// 		console.log($('.map-area').offset());
	// 		console.log($poly.offset());
    //
    //
	// 		$el.css({
	// 			left: pos.left + pos.width / 2,
	// 			top: pos.top + pos.height / 2
	// 		});
	// 	});
    //
	// 	callback();
	// }
//
// 	if ($('.master-plan').length) {
//
//
// 		var map_ob = new SVGM();
// 		var svgs = $('.single-svg'),
// 			svgConsolidated = {};
// 			svgs.each(function(ind, svg){
//
// 				var svgObj = JSON.parse($(svg).val());
// 				$.extend(svgConsolidated, svgObj);
//
// 			});
//
//
// 		console.log(svgConsolidated);
//
// 		var $confMap = $( map_ob.conf.name_elemenst.config_map);
//
// 		$confMap.val(JSON.stringify(svgConsolidated));
//
// 		$("#img").on('load', function () {
// 			map_ob.functions.init({
// 				type_watch: 0,
// 				fn: {
// 					click_layer: function (data) {
//
// 						if ($(window).width() <= 800) {
// 						} else {
//
// 							location.href = data.property.url;
// 						}
// 					}
// 				},
// 				onInit: function (map_o) {
// 					put_labels = function (callback) {
//
// 						map_o.elemenst.block.find('polyline').each(function (ind, el) {
//
// 							var $el = $(el),
// 								id_val = $('.svg-layer[nodeid="' + $(el).attr('id') + '"').attr('id').replace('layer-', ''),
// 								houseData = map_o.value[id_val],
// 								$markers = $('.markers');
//
// 							$markers.append([
// 								'<div for="#' + $el.attr('id') + '" class="house-marker ' + houseData.property.house_type + '">',
// 								'Корпус',
// 								'<div class="house-number">' + houseData.property.house_number + '</div>',
// 								'</div>'].join(''));
// 						});
// setTimeout(function(){
//
//
// 	adjustPoints(map_o, callback);
// },1000)
//
//
// 						//callback();
// 					};
//
// 					//put_labels();
//
// 					//
//
//
// 					var mainMap = $('.main-plan__map');
//
// 					if(mainMap.length)
// 					{
// 						console.log('ok');
//
// 						mainMap.addClass('handle');
// 						mainMap.parent().addClass('dragdealer');
//
// 						var canvas = new Dragdealer('main-map-over', {
// 							x: 0.7,
// 							y: 1,
// 							speed: 0.2,
// 							requestAnimationFrame: true
// 						});
// 					}
//
//
// 						setTimeout(put_labels(function(){
//
//
//
// 						}), 1000);
// 					//
// 				}
// 			});
//
//
//
//
// 		});
// 		$("#img").attr('src',$("#img").data('src'));
// 	}
//
//
// 	$(".map-area").on('click', '.point.in-sale', function () {
// 		target = $(this).attr('for');
// 		$(target).click();
// 	})


	function adjustLabels(map_o) {

		var $labels = $('.house-marker, .bubble');

		map_o.$map.find($labels).each(function (ind, el) {
			
			var $el = $(el), $poly = $($el.attr('for')),
				pos = {
					left: $poly.offset().left - map_o.$map.offset().left,
					top: $poly.offset().top - map_o.$map.offset().top,
					width: $poly[0].getBoundingClientRect().width,
					height: $poly[0].getBoundingClientRect().height
				};
			
			$el.css({
				left: pos.left + pos.width / 2,
				top: pos.top + pos.height / 2
			});
		});
	}

	var $masterPlan = $('.master-plan');


	if ($masterPlan.length) {

		var svgs = $('.single-svg'),
			svgConsolidated = {};
		svgs.each(function (ind, svg) {
			var svgObj = JSON.parse($(svg).val());
			$.extend(svgConsolidated, svgObj);
		});

		var map_ob = new MySVG();
		map_ob.$svgConfig.val(JSON.stringify(svgConsolidated));
		map_ob.init();
		
		(function putLabels(map_ob) {

			map_ob.$svg.find('polyline').each(function (ind, el) {

				var $el = $(el),
					id = $el.data('json-id'),
					elData = map_ob.config[id];

				if(elData.property.class == 'house'){
					map_ob.$markers.append([
						'<div for="#' + $el.attr('id') + '" class="house-marker ' + elData.property.house_type + '">',
						'Корпус',
						'<div class="house-number">' + elData.property.house_number + '</div>',
						'</div>'].join(''));
				}
				if(elData.property.class == 'section'){

					map_ob.$markers.append([
						'<div for="#' + $el.attr('id') + '" class="bubble ' + elData.property.house_type + '">',
						elData.property.section_number,
						'</div>'].join(''));
					
				}
				
				
			});
			
			adjustLabels(map_ob);
			
		}(map_ob));

		var $polylines = $masterPlan.find('polyline'),
			$sections = $masterPlan.find('polyline.section');

		$polylines.on('click', function () {

			var jsonId = $(this).data('json-id'),
				url = map_ob.config[jsonId]['property']['url'];

			location.href = url;

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
			$section.removeClass(hover);
			$label.removeClass(hover);

		});
		
	}

});