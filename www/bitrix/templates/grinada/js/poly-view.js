/**
	* Created by Валерий on 21.06.2016.
	*/
var SVGM = function () {


	var map_c = {

		conf: {
			name_elemenst: {
				block: '.map-object',
				config_map: '.config-map',
				img: '.img',
				area: '.svg-area',
				map_area: '.map-area',
				layers_panel: 'layers-panel',
				layers_conf: 'layers-conf',
				layers_list: 'layers-list',
				layer: 'svg-layer',
				info_t: 'poly-information-text',
				orientir: '.map-overlay',

			},
			type_watch: 0,
			layers: {},
			property: ['name', 'text'],
			fn: {
				click_layer: function () {
					alert('click layer');
				}
			},
			onInit: function () {
				//alert('map init old')
			}
		}
		, elemenst: {
			config_map: false,
			img: false,
			area: false,
			block: false,
			map_area: false,
			info_t: false,
			draw: false,
			orientir: false
		}, type_figure: {
			cursor: 'cursor',
			point: 'point',
			poly: 'polyline',
			//loadimage:'loadimage',
			clear: 'clear'
		},
		messages: {
			m0: '',
			m1: 'Выделите объект списке, для редактирования полигона.',
			m2: 'Карта сохраняется',
			m3: 'Карта сохранена',
			m4: 'Ошибка сохранения координат',
		},
		$layers: false,
		layers_list: false,
		layers_conf: false,
		value: [],
		action: '',
		poly: [],
		shifted: false,
		poly_obj: false,
		current_layer: -1,
		current_point: -1,
		current_pid: '',
		layer_ind: 0,
		pos: {x: 0, y: 0},
		functions: {
			init: function (conf) {
				$.extend(map_c.conf, conf);

				map_c.elemenst.block = $(map_c.conf.name_elemenst.block);
				var $b = map_c.elemenst.block;
				map_c.elemenst.config_map = $b.find(map_c.conf.name_elemenst.config_map);
				map_c.elemenst.img = $b.find(map_c.conf.name_elemenst.img);
				map_c.elemenst.area = $b.find(map_c.conf.name_elemenst.area);
				map_c.elemenst.map_area = $b.find(map_c.conf.name_elemenst.map_area);
				map_c.elemenst.info_t = $b.find('.' + map_c.conf.name_elemenst.info_t);
				map_c.elemenst.orientir = $b.find(map_c.conf.name_elemenst.orientir);
				//  console.log(map_c.elemenst.orientir);
				if (!map_c.elemenst.orientir.length) {
					map_c.elemenst.orientir = $(map_c.conf.name_elemenst.orientir);
				}

				map_c.functions.resize_map();


				map_c.elemenst.draw = SVG(map_c.elemenst.area.attr('id'));


				var map_img = new Image();
				map_img.onload = function () {

					//console.log(this);
					map_c.elemenst.draw.viewbox({
						x: 0,
						y: 0,
						width: this.width,
						height: this.height
					})
				};
				map_img.src = map_c.elemenst.block.find('img').attr('src');


				map_c.elemenst.draw.viewbox({x: 0, y: 0, width: 297, height: 210})

				// console.log(map_c.elemenst.map_area.attr('id'));
				if (map_c.conf.type_watch == 0) {
					map_c.elemenst.block.addClass('view');
					map_c.layers_conf = $('<div class="' + map_c.conf.name_elemenst.layers_conf + '"></div>');
					map_c.layers_list = $('<div class="' + map_c.conf.name_elemenst.layers_list + '"></div>');
					map_c.$layers = $('<div class="' + map_c.conf.name_elemenst.layers_panel + '"></div>');
					map_c.$layers.append(map_c.layers_list);
					map_c.elemenst.block.append(map_c.$layers);
					$('.btn-map-editor').click(function () {
						map_c.functions.offpoly();
						var typeaction = $(this).data('typeaction');
						if (typeaction in map_c.functions) {
							map_c.functions[typeaction]();
						} else {
							alert('unknow action');
						}
						return false;
					});


					var old_val = JSON.parse((
						map_c.elemenst.config_map.val() != '' ?
							map_c.elemenst.config_map.val() :
							'{}'
					));
					var eldb = JSON.parse((
						map_c.elemenst.block.find('.config-map-bd').val() != '' ?
							map_c.elemenst.block.find('.config-map-bd').val() :
							'{}'
					));
					$.each(eldb, function (ind, el) {
						if (ind in old_val) {
							eldb[ind].coord = old_val[ind].coord;
						}
					});
					map_c.value = eldb;
					$.each(map_c.value, function (ind, el) {
						map_c.layer_ind = ind;
						if (el.type == 'polyline') {
							map_c.functions.loadPoly(el);
						} else if (el.type == 'point') {
							map_c.functions.loadPoint(el.coord, el.property);
						}
					});
					map_c.elemenst.block.find('polyline').click(function () {

						var $el = $('.svg-layer[nodeid="' + this.id + '"]');
						var ind = $el.data('layerid');
						map_c.conf.fn.click_layer(map_c.value[ind]);

//console.log(this);

						if ($(window).width() < 800) {

							if ($('.svg-layer.show').length) {

								$('.svg-layer').removeClass('show');

							}
							$el.addClass('show');

						}


					});

					$(document)
					/*		.on('mousemove', 'polyline', function (e) {

						var offset = map_c.elemenst.orientir.offset();

						//  console.log(map_c.elemenst.orientir);

						var relativeY = (e.pageY - offset.top);
						var relativeX = (e.pageX - offset.left);

						var pos = {
						x: relativeX + 5,
						y: relativeY + 5,
						classY: 'top-info',
						classX: 'right-info',
						};

						var $el = $('.svg-layer.show'),
						$info = $el.find('.flat-info');
						$el.removeClass('bottom-info').removeClass('top-info').removeClass('right-info').removeClass('left-info');

						if (e.clientY - $info.height() - $(".header-over").height() < 0) {
						pos['classY'] = 'bottom-info';
						pos.y = relativeY - 5;
						}
						if (relativeX - $info.width() < 0) {
						pos['classX'] = 'left-info';
						pos.x = relativeX - 5;
						}

						//console.log($info);
						//console.log($info.height());
						//console.log($info.width());
						$el.addClass(pos['classX']).addClass(pos['classY']).css({
						top: pos.y,
						left: pos.x
						});


						}) */
						.on('mouseover ', 'polyline', function (e) {
							if ($("#map-genplan").length) {
								var $el = $('.svg-layer[nodeid="' + this.id + '"]');
								$('#map-genplan .svg-layer').removeClass('show');
								$el
									.css({
										'position': 'fixed',
										'top': ' 19%',
										'left': $("#img").offset().left + $("#img").width() + 50 + 'px'
									})
									.addClass('show');
							}
						})
						.on('mouseout', 'polyline', function (e) {
							if ($("#map-genplan").length) {
								if ($(window).width() > 800) {
									var $el = $('.svg-layer[nodeid="' + this.id + '"]');
									// $el.removeClass('show');
								}
							}
							return false;
						});
				}
				else {
				}

				//map_c.functions.upValueInput();
				setTimeout(function () {
					map_c.elemenst.info_t.html(map_c.messages.m1);
				}, 1000);
				map_c.layer_ind++;

				//$(window).resize(function(){
				//    map_c.elemenst.draw.scale(0.5,0.5);
				//}).resize();
				//SVG.on(window, 'resize', function() {
				//map_c.elemenst.draw.spof()
				//});
				$(document).on('scroll', function () {
					el = $('.svg-layer.show');
					if (el.length && $(window).width() > 1024) {
						doc_scroll_top = $(document).scrollTop()
						el_top = el.offset().top - doc_scroll_top;
						el_bottom = el_top + $(".flat-info-content", el).outerHeight();
						el_height = $(".flat-info-content", el).outerHeight();
						foot_top = $("footer").offset().top - doc_scroll_top;
						head_bottom = $("header").height();

						mtop = 0;
						mbot = 0;
						if (el_bottom + 30 >= foot_top) {
							mtop = (foot_top - el_height - 10 > head_bottom) ? (foot_top - el_height - 30) : (head_bottom + 10);
							mtop += 'px';
							pos = 'absolute';
						}
						else {
							win_free = parseInt(foot_top - el_height);
							top19 = parseInt($(window).height() * 0.19);
							console.log('win_free', win_free);
							console.log('top19', top19);
							console.log('top19 +20', top19 + 20);
							if (win_free > top19 + 20) {
								mtop = '19%';
								pos = 'fixed';
							}
							else {
								mtop = el_top + 'px';
								pos = 'absolute';
							}
						}

						el.css({
							'posiion': pos,
							'top': mtop
						});
					}
				});

				map_c.conf.onInit(map_c);
			},
			addpointpoly: function (x, y) {
				if (map_c.poly.length <= 0) {
					map_c.poly = [[x, y]];
					map_c.poly_obj = map_c.elemenst.draw.polyline(map_c.poly);

				} else {
					if (map_c.poly.length > 1) {
						var end_poly = false;
						if (
							map_c.poly[0][0] - 10 <= x &&
							map_c.poly[0][0] + 10 >= x &&
							map_c.poly[0][1] - 10 <= y &&
							map_c.poly[0][1] + 10 >= y
						) {
							x = map_c.poly[0][0];
							y = map_c.poly[0][1];
							end_poly = true;
						} else {
						}
					}
					map_c.poly.push([x, y]);
					map_c.poly_obj.plot(map_c.poly);
					if (end_poly == true) {
						map_c.functions.endpoly();
					} else {
					}
				}
			},
			endpoly: function () {
				map_c.functions.addLayer({
					type: 'polyline',
					coord: map_c.poly
				}, map_c.poly_obj.node.id);
				map_c.poly_obj = false;
				map_c.action = '';
				map_c.poly = [];
				var $Lob = $('#layer-' + map_c.layer_ind);
				$Lob.removeClass('active');
				$Lob.click();
			},
			offpoly: function () {
				if (!!(map_c.poly_obj) && map_c.action != 'editpoly') {
				}
				$('.pointer').removeClass('active');
				$('.edpoint').remove();
				map_c.poly_obj = false;
				map_c.action = '';
				map_c.poly = [];
			},
			addpoint: function (x, y) {
				var rect = map_c.elemenst.draw.rect(10, 10).attr({class: "helper pointer"}).move(x, y);
				map_c.functions.addLayer({type: 'point', coord: [[x, y]]}, rect.node.id);
			},
			addLayer: function (obj, nodeid) {
				obj['property'] = {};
				$.each(map_c.conf.property, function (ind, el) {
					obj['property'][el] = '';
				});
				if (!(map_c.layer_ind in map_c.value)) {
					map_c.functions.addLayreList(obj, nodeid);
					map_c.value.push(obj);
					map_c.layer_ind = map_c.value.length;
				} else {
					map_c.value[map_c.layer_ind].coord = obj.coord;
					$('#layer-' + map_c.layer_ind).attr('nodeid', map_c.poly_obj.node.id);
				}
				// map_c.functions.upValueInput();
			},
			addLayreList: function (obj, nodeid) {
				var el_list = $(['<div id="layer-', map_c.layer_ind, '" ',
					'nodeid="', nodeid, '"',
					' data-layerid="', map_c.layer_ind,
					'" class="' + map_c.conf.name_elemenst.layer + '">',
					'<div class="layer-title">', obj.NAME, '</div>',
					'</div>'].join(''));
				//map_c.layers_list.append(el_list);

				// $('.map-overlay').append(el_list);
				if ($('#map-genplan').length)
					$('#map-genplan').append(el_list);
				else if ($(".floor-plans-area")) {
					$(".floor-plans-area").append(el_list);
				}

			},
			upValueInput: function () {
			},
			loadPoint: function (coord, prop) {
				var rect = map_c.elemenst.draw.rect(10, 10).attr({
					class: "helper pointer"
				}).move(coord[0][0], coord[0][1]);
				map_c.functions.addLayreList({
					type: 'point',
					coord: coord,
					property: prop
				}, rect.node.id);
			},
			loadPoly: function (obj, prop) {
				if (obj.coord.length) {
					var group = map_c.elemenst.draw.group();
					map_c.poly_obj = map_c.elemenst.draw.polyline(obj.coord).addClass(obj.property.class);
					group.add(map_c.poly_obj);
					group.addClass(obj.property.class);
					map_c.functions.addLayreList(obj, (typeof  map_c.poly_obj.node != 'undefined' ? map_c.poly_obj.node.id : 'undefined' ));
				}
			},
			polyline: function () {
				if (map_c.action != 'polyline') {
					map_c.action = 'polyline';
					map_c.poly = [];
				} else {
					map_c.action = '';
				}
			},
			point: function () {
				if (map_c.action != 'point') {
					map_c.action = 'point';
				} else {
					map_c.action = '';
				}
			},
			cursor: function () {
				map_c.action = '';
			},
			clear: function () {
				map_c.elemenst.area.find('*').remove();
			},
			loadimage: function () {
				return false;
			},
			resize_map: function () {
				map_c.elemenst.map_area.css({
					height: map_c.elemenst.img.height(),
					width: map_c.elemenst.img.width()
				});
				return false;
			}
		}
	};

	return map_c;


};




function MySVG(params) {
	if(params) this.settings = $.extend({}, this.defaults, params);
	else this.settings = this.defaults;
	var settings = this.settings;
	for(var name in settings){
		if(!settings.hasOwnProperty(name)) continue;
		this['$' + name] = $('.' + settings[name]);
	}
	this.draw = new SVG(this.$svg.attr('id'));
}
MySVG.prototype = {
	defaults: {
		mapContainer: 'main-plan__map-over',
		map: 'main-plan__map',
		svg: 'svg-area',
		markers: 'markers',
		svgConfig: 'config-map',
		dbConfig: 'config-map-bd'
	},
	init: function () {

		var self = this,
			svgConfig = JSON.parse(this.$svgConfig.val()),
			dbConfig = JSON.parse(this.$dbConfig.val());
		$.each(dbConfig, function (name, el) {
			if(name in svgConfig)
				dbConfig[name].coord = svgConfig[name].coord;
		});
		
		self.config = dbConfig;
		console.log(self.config);
		$.each(dbConfig, function (name, el) {
			if(el.type == 'polyline')
				self.addPolyline(el, name);
		});
	},
	addPolyline: function (polyObj, id) {
		if(!polyObj.coord.length) return;
		var polylineClass = polyObj.property.class,
			polylineType = polyObj.property.house_type,
			polylineNumber = polyObj.property[polylineClass + '_number'],
			polylineId = polylineClass == 'section' ? polylineClass + '-' + polyObj.property['house_number'] + '-' + polylineNumber: polylineClass + '-' + polylineNumber,
			polyline = this.draw.polyline(polyObj.coord).attr({
				'class': polylineClass + ' ' + polylineType,
				id: polylineId,
				'data-json-id': id

			});
	}
};