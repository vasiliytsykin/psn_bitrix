is_mobile = false;
if (navigator.userAgent.match(/iphone|ipad|windows phone|android/ig)) {
	is_mobile = true;
}

var up_legend = function (formats) {
	var arFormats = JSON.parse(formats);


	//$.each(variant_count_room, function(ind, el){
	//    $('.map-legend').append('<div>' + el + '</div>');
	//});
	$('.map-legend .room').hide();
	$.each(arFormats, function (ind, el) {
		$('.map-legend .room.room-' + el).show();

	});

};
$(document).ready(function () {
	function adjustPoints(map_o) {
		map_o.elemenst.map_area.find('.point').each(function (ind, el) {
			var $el = $(el), $poly = $($el.attr('for')),
				pos = {
					left: $poly.offset().left - $('.map-overlay').offset().left,
					top: $poly.offset().top - $('.map-overlay').offset().top,
					width: $poly[0].getBoundingClientRect().width,
					height: $poly[0].getBoundingClientRect().height,
				};
			$el.css({
				left: pos.left + pos.width / 2,
				top: pos.top + pos.height / 2,
			});
		});
	}

	function adjust_plan_image() {
		new_height = $(window).height() - $(".map-area").offset().top;
		if (typeof $(".js_plan_img").get(0) == 'undefined')
			setTimeout(function () {
				adjust_plan_image()
			}, 100);
		else {
			real_height = $(".js_plan_img").get(0).naturalHeight;
			console.log('new_height', new_height);
			console.log('real_height', real_height);
			plan_ratio = 1;
			if (new_height < real_height) {
				$(".js_plan_img").css({
					'height': new_height + 'px',
					'margin': '0 auto'
				});

				plan_ratio = new_height / real_height;
			}
			setTimeout(function () {
				if (genplan_points.length > 0 && $(window).width() > 1024) {
					delta = $("#img").offset().left - $(".map-area").offset().left;
					console.log(delta);
					for (var i = 0; i < genplan_points.length; i++) {
						point = $("<a href=\"#\" class='genplan_point js_genplan_point'><img src='" + genplan_points[i]['image'] + "' /></a>");
						point.data('hint_id', 'genplan_point_hint' + i);
						point.css({
							'position': 'absolute',
							'z-index': '3',
							'top': genplan_points[i]['y'] * plan_ratio - 45 + 'px',
							'left': genplan_points[i]['x'] * plan_ratio - 17 + delta + 'px',
						});


						point.on('click', function () {
							$(".svg-layer").removeClass('show');
							$("#" + $(this).data('hint_id'))
								.css({
									'position': 'fixed',
									'top': '19%',
									'left': $("#img").offset().left + $("#img").width() + 50 + 'px'
								})
								.addClass('show');

							return false;
						});

						point.appendTo($(".map-area"));

						point_hint = $(
							'<div id="genplan_point_hint' + i + '" class="svg-layer genplan_point_hint">' +
							'<div class="layer-title">' +
							'<div class="flat-info">' +
							'<div class="flat-info-content clearfix">' +
							'<div class="title">' +
							'<img src="' + genplan_points[i]['hint_image'] + '" />' +
							'<span class="point_name">' + genplan_points[i]['title'] + '</span>' +
							'</div>' +
							'<div class="prop">' +
							'<div class="desc"></div>' +
							'</div>' +
							'<a class="btn-close"></a>' +
							'</div>' +
							'</div>' +
							'</div>' +
							'</div>')
						point_hint.appendTo($("#map-genplan"));
					}
				}

				$(".js_plan_preloading").hide();
			}, 300);
		}
	}

	if ($('.gen-plan-map').length) {
		var map_ob = new SVGM();
		map_ob.functions.init({
			type_watch: 0,
			fn: {
				click_layer: function (data) {
					// console.log(data);
					if ($(window).width() <= 800) {


						// alert('click');
					} else {

						location.href = data.property.url;
					}


				}
			},
			onInit: function (map_o) {
				//console.log(map_o.value);
				put_quarter_labels = function () {
					map_o.elemenst.block.find('polyline').each(function (ind, el) {
						var id_val = $('.svg-layer[nodeid="' + $(el).attr('id') + '"').attr('id').replace('layer-', '');

						// console.log(map_o.value[id_val]);
						var name = map_o.value[id_val].property.name;

						//put labels just on genplan. temporary remove flat formats
						map_o.elemenst.map_area.append([
							'<div for="#' + $(el).attr('id') + '" class="point ' + $(el).attr('class') + '">',
							name,
							'</div>'].join(''));
					});

					adjustPoints(map_o);
				};

				$("#img").on('load', function () {
					setTimeout(put_quarter_labels, 50);
				});

				$(window).resize(function () {
					setTimeout(function () {
						adjustPoints(map_o)
					}, 50);
				});

				$(function () {
					if (!$("polyline .svg-layyer[nodeid]").length) {
						put_quarter_labels();
					}
					adjustPoints(map_o);
				});
			}
		});
	}
	else if ($('.kvartal-map').length) {
		var map_ob = new SVGM();
		map_ob.functions.init({
			type_watch: 0,
			fn: {
				click_layer: function (data) {
					console.log(data);
					if ($(window).width() > 800)
						location.href = data.property.url;
				}
			}
		});
	}
	else {

		var maps = [];
		var fn_changed = function () {

			var $actItem = $($owl_floors[0]).find('.owl-item.active').find('.floor-plans-item');
			$('.floor-item a').removeClass('active');
			$('.floor-item a[href="#' + $actItem.data('hash') + '"]').addClass('active');

		}, fn_lazyLoaded = function () {
			var $actItem = $($owl_floors[0]).find('.owl-item.active').find('.floor-plans-item');
			if (!$actItem.hasClass('svg-load')) {
				var map_svg = $actItem.find('.map-object').get(0);
				maps.push(new SVGM());
				maps[maps.length - 1].functions.init({
					name_elemenst: {
						block: '#' + map_svg.id,
						config_map: '.config-map',
						img: '.img',
						area: '.svg-area',
						map_area: '.map-area',
						layers_panel: 'layers-panel',
						layers_conf: 'layers-conf',
						layers_list: 'layers-list',
						layer: 'svg-layer',
						info_t: 'poly-information-text',
						orientir: '.floor-plans-list'
					},
					type_watch: 0,
					fn: {
						click_layer: function (data) {
							//console.log(data);
							if ($(window).width() > 800) location.href = data.property.url;
						}
					},
					onInit: function (map_o) {
						console.log(map_o.elemenst.block);
						var variant_count_room = {};
						$.each(map_o.value, function (ind, el) {
							if (el.property.studio != null) {
								variant_count_room[el.property.room_count + 'e'] = (el.property.room_count + 'e');
							} else {
								variant_count_room[el.property.room_count] = (el.property.room_count);
							}
						});


						var sVar = JSON.stringify(variant_count_room);
						map_o.elemenst.block.attr('formats', sVar);
						up_legend(sVar);
						map_o.elemenst.block.find('polyline').each(function (ind, el) {
							map_o.elemenst.map_area.append('<div for="#' + $(el).attr('id') + '" style="display:none;" class="point ' + $(el).attr('class') + '"></div>');
						});

						if (!is_mobile) {
							map_o.elemenst.block.find('polyline')
								.mousemove(function (e) {
									var offset = map_o.elemenst.orientir.offset();
									var relativeY = (e.pageY - offset.top) + 10;
									var relativeX = (e.pageX - offset.left) + 10;

									var id = $(this).attr('id'); //.attr('for').replace('#', '');
									console.log('mouse move', '.svg-layer[nodeid="' + id + '"]');
									console.log('mouse move', $(e.targetElement).attr('id'));

									var $el = $('.svg-layer[nodeid="' + id + '"]');

									console.log('width + left: ', map_o.elemenst.orientir.width());
									console.log('relativeX', relativeX);
									console.log('relativeX + el width', relativeX + $(".flat-info-content", $el).width());
									relativeX = (relativeX + $(".flat-info-content", $el).width() + 60 > map_o.elemenst.orientir.width()) ? (relativeX - ( $(".flat-info-content", $el).width() + 60)) : relativeX;

									relativeY = (relativeY + $(".flat-info-content", $el).height() + 60 > map_o.elemenst.orientir.height()) ? (relativeY - ($(".flat-info-content", $el).height() + 60)) : relativeY;

									// var id = $(this).attr('for').replace('#', '');
									$el.css({
										top: relativeY,
										left: relativeX
									});
								})
								.mouseover(function (e) {
									console.log('mouseover', $(e.targetElement).attr('id'));
									// var id = $(this).attr('for').replace('#', '');
									var id = $(this).attr('id'); //.attr('for').replace('#', '');
									var $el = $('.svg-layer[nodeid="' + id + '"]');
									$el.addClass('show');
								})
								.mouseout(function (e) {
									// var id = $(this).attr('for').replace('#', '');
									var id = $(this).attr('id'); //.attr('for').replace('#', '');
									var $el = $('.svg-layer[nodeid="' + id + '"]');
									$el.removeClass('show');
								});
						}
						else if (is_mobile) {
							map_o.elemenst.block.find('polyline')
								.click(function (e) {
									var offset = map_o.elemenst.orientir.offset();
									var relativeY = (e.pageY - offset.top) + 10;
									var relativeX = (e.pageX - offset.left) + 10;

									var id = $(this).attr('id'); //.attr('for').replace('#', '');
									console.log('mouse move', '.svg-layer[nodeid="' + id + '"]');
									console.log('mouse move', $(e.targetElement).attr('id'));

									var $el = $('.svg-layer[nodeid="' + id + '"]');

									console.log('width + left: ', map_o.elemenst.orientir.width());
									console.log('relativeX', relativeX);
									console.log('relativeX + el width', relativeX + $(".flat-info-content", $el).width());
									relativeX = (relativeX + $(".flat-info-content", $el).width() + 60 > map_o.elemenst.orientir.width()) ? (relativeX - ( $(".flat-info-content", $el).width() + 60)) : relativeX;

									relativeY = (relativeY + $(".flat-info-content", $el).height() + 60 > map_o.elemenst.orientir.height()) ? (relativeY - ($(".flat-info-content", $el).height() + 60)) : relativeY;

									// var id = $(this).attr('for').replace('#', '');
									$el.css({
										top: relativeY,
										left: relativeX
									});

									$(".svg-layer[nodeid]").removeClass('show');
									$el.addClass('show');
								});
						}

						$(window).resize(function () {
							setTimeout(function () {
								map_o.elemenst.map_area.find('.point').each(function (ind, el) {
									var $el = $(el), $poly = $($el.attr('for')),
										pos = {
											left: $poly.offset().left - $('.floor-plans-area').offset().left,
											top: $poly.offset().top - $('.floor-plans-area').offset().top,
											width: $poly[0].getBoundingClientRect().width,
											height: $poly[0].getBoundingClientRect().height,
										};
									$el.css({
										left: pos.left + pos.width / 2,
										top: pos.top + pos.height / 2,
									});
								});
							}, 200);
						}).resize();


					}
				});
				$actItem.addClass('svg-load');
			}

		};
		var $owl_floors = $('.floor-plans-list').owlCarousel({
			items: 1,
			lazyLoad: true,
			// loop:true,
			//margin: 10,
			URLhashListener: true,
			// autoplayHoverPause:true,
			callbacks: true,
			startPosition: 'URLHash',
			onChanged: function (data) {
				setTimeout(function () {
					fn_changed();
					var $mapO = $($owl_floors[0]).find('.owl-item.active').find('.floor-plans-item').find('.map-object');
					if ($mapO.attr('formats') != undefined) {

						up_legend($mapO.attr('formats'));
					} else {

						//console.log('no set formats');

					}
					$(window).resize();
				}, 10);
			},
			onLoadedLazy: function () {
				setTimeout(function () {
					fn_lazyLoaded();
				}, 10);
			}

		});
		var dbFlat = {};
		$('.config-map-bd').each(function (ind, el) {
			dbFlat[ind] = JSON.parse($(el).val());

		});
		// console.log(dbFlat);
		$('.house-list .value').change(function () {
			location.href = this.value;
			// alert(this.value);
		});

	}

	setTimeout(function () {

		var $ua = navigator.userAgent;
		var $event = ($ua.match(/(iPod|iPhone|iPad)/i)) ? "touchstart" : "click";

		$(document).on($event, '.btn-close', function () {
			$('.btn-close').closest('.svg-layer').removeClass('show');
		})

	}, 500);


	$(window).resize(function () {

		var width = $(this).width();
		var btn = $('.house-card-map .btn-learn-more .btn');
		if (width <= 800 && width > 660) {
			if (!btn.hasClass('btn-special'))
				btn.addClass('btn-special');
		}
		else {
			if (btn.hasClass('btn-special'))
				btn.removeClass('btn-special');
		}

	}).resize();

	$(".map-area").on('click', '.point.in-sale', function () {
		target = $(this).attr('for');
		$(target).click();
	})

	if (!navigator.userAgent.match(/iphone|ipad/i)) {
		$('.js_plan_img').ready(function () {
			adjust_plan_image();
		});
	}
	else {
		$('.js_plan_img').load(function () {
			adjust_plan_image();
		});
	}
});