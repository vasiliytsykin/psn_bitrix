$(document).ready(function () {
	
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