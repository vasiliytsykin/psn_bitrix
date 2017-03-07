/**
 * Created by Валерий on 27.02.2017.
 */
var patternizer = (function () {
    function Patternizer() {
        var self = this;
        this.directory_path = '/animate/';
        //-----------------------------------------patterns------------------------------------------------------------
        this.EDGEloadComp = function(name, dom_element, params, dir){

            var link = self.directory_path + (dir!=''?dir:(name+ '/')) + name;
            var defaults = { scaleToFit: "none", centerStage: "none", minW: "0px", maxW: "undefined", width: "550px", height: "400px"};
            var options = $.extend({}, defaults, options, params);
            AdobeEdge.loadComposition(link, dom_element, options, {dom: [ ]}, {dom: [ ]});
        };

        this.setDir  = function(path, _d){
            var return_path = '';
            if(path in self.edges){
                return_path = self.directory_path +   self.edges[path].name + '/';
            }

            if(_d==1){


                var img_dir = '/images/';
                if('color' in self.edges[path].config){
                    if(self.edges[path].config.color=='dark-green'){
                        //return_path+='dark/';
                        img_dir = '/_d_images/';
                    }else{
                       // img_dir = '/_d_images/';
                    }
                }else{

                }
                return_path+=img_dir;


            }
            return return_path;
        };
        this.patterns = {
            'pattern-1': {
                name: 'pattern-1',
                svg: ['<svg id="pattern-1" class="pattern-svg" width="520" height="280"><foreignObject width="100%" height="100%"><div class="list-animate-edge"><div class="item-animate-edge"><div id="Stage-0" class="EDGE-7487529"></div></div><div class="item-animate-edge"><div id="Stage" class="EDGE-5037815"></div></div><div class="item-animate-edge"><div id="Stage-1" class="EDGE-242351"></div></div><div class="item-animate-edge"><div id="Stage-2" class="EDGE-6851151"></div></div></div></foreignObject><g class="rabbit-opacity"><path class="stroke" d="M360.8,248.5L376.6,271.9L349,271.9" ></path><path class="stroke" d="M316.1,234.8A14,14 0,1,1 344.1,234.8A14,14 0,1,1 316.1,234.8" ></path><path class="stroke" d="M326.9,220.8L326.9,190"></path><path class="stroke" d="M333.2,271.9L333.2,251.1" ></path><path class="stroke" d="M320.6,271.9L331.7,271.9"></path><path class="stroke" d="M339.4,223.9L339.4,193.2"></path><path class="stroke" d="M364.3,250.6L371.1,245.5" ></path></g><path class="stroke" d="M326.2 229.7L326.2 229.8z" ></path><path class="stroke" d="M491.6,9.1L469.5,31.2L446.4,8.1" ></path><path class="stroke" d="M480.5,53.8L469.2,65.1L457.5,53.3"></path><path class="stroke" d="M490.2,34.7A10.3,10.3 0,1,1 510.8,34.7A10.3,10.3 0,1,1 490.2,34.7"></path><path class="stroke" d="M428.8,34.7A10.3,10.3 0,1,1 449.40000000000003,34.7A10.3,10.3 0,1,1 428.8,34.7"></path><path class="stroke" d="M288,173.8L288,154.6" ></path><path class="stroke" d="M304.4,173.8L304.4,154.6"></path><path class="stroke" d="M342.5 106.9h-19.4c-0.3-0.4-0.5-0.8-0.8-1.2 -3.4-4.5-8-8.1-13.3-10.2l-6.6 9.4 -35.3 49.7v0h30.7c15.6 0 28.5-11.7 30.4-26.8L342.5 106.9z"></path><path class="stroke" d="M308.3 114.8L308.3 114.9z"></path><path class="stroke" d="M473.5 200.8c0 0-31.1-53.1-101.7-44.3"></path><path class="stroke" d="M358.2 159.4c0 0-60.9 8.5-79.7 77.2"></path>',
                '<path style="transform: scale(-1, 1)" class="stroke" d="M-119.8,226.2c61.4,36.1,111-0.3,111-0.3"/><g class="bee-opacity"><path class="stroke" d="M132.7,123.5A15.5,15.5 0,1,1 163.7,123.5A15.5,15.5 0,1,1 132.7,123.5"></path><path class="stroke" d="M180.7 108c4.3 0 7.7 6.9 7.7 15.5 0 8.6-3.5 15.5-7.7 15.5"></path><path class="stroke" d="M197.1 107.6c4.3 0 7.7 7 7.7 15.7 0 8.7-3.5 15.7-7.7 15.7"></path><path class="stroke" d="M200.4 139h-17.3c-8.6 0-15.7-7.1-15.7-15.7l0 0c0-8.6 7.1-15.7 15.7-15.7h17.3c8.6 0 15.7 7.1 15.7 15.7l0 0C216.1 131.9 209.1 139 200.4 139z"></path><path class="stroke" d="M182.1,106.2L211.7,84.8" ></path><path class="stroke" d="M132.7,123.5L123.4,123.1" ></path><path class="stroke" d="M143 119L143 119.1z" ></path></g></svg>'].join(''),
                animation: {
                    speed: 'slow',
                    repeat: true
                },
                fn:{
                    start_animation: function(color){
                        setTimeout(function(){self.edges['EDGE-7487529'].Play(color);}, 2500);
                        self.edges['EDGE-242351'].Play(color);
                    },
                    end_animate: function(color){
                        self.edges['EDGE-5037815'].Play(color);
                        self.edges['EDGE-6851151'].Play(color);
                    }
                }
            },
            'pattern-2': {
                name: 'pattern-2',
                svg: ['<svg id="pattern-2" class="pattern-svg" width="800" height="240">',
                    '<foreignObject width="100%" height="100%">',
                        '<div class="list-animate-edge">',
                            '<div class="item-animate-edge"><div id="Stage-bird-ili-2" class="EDGE-20496424"></div></div>',
                            '<div class="item-animate-edge"><div id="Stage-pine-ili-2" class="EDGE-74875291"></div></div>',
                            '<div class="item-animate-edge"><div id="Stage-velik_ill_2" class="EDGE-204964241"></div></div>',
                            '<div class="item-animate-edge"><div id="Stage-rabbit_ill_2" class="EDGE-68511511"></div></div>',
                        '</div>',
                    '</foreignObject>',
                    '<g id="XMLID_2_"><g id="XMLID_31_"><circle id="XMLID_34_" class="stroke" cx="500.4" cy="100.3" r="11.9"/><circle id="XMLID_33_" class="stroke" cx="553.5" cy="100.3" r="11.9"/><path id="XMLID_32_" class="stroke" d="M525.5,9.1V42h-32.9c0,18.2,14.7,32.9,32.9,32.9s32.9-14.7,32.9-32.9S543.6,9.1,525.5,9.1z"/></g><g id="XMLID_27_"><polyline id="XMLID_30_" class="stroke" points="788.6,90.9 768,110.4 747.4,90.9"/><polyline id="XMLID_29_" class="stroke" points="788.6,113.9 768,133.4 747.4,113.9"/><polygon id="XMLID_28_" class="stroke" points="768,203.2 754.3,150.2 783,150.2"/></g><g class="birdi-i-2" id="XMLID_18_"><line id="XMLID_26_" class="stroke" x1="45.6" y1="142.9" x2="45.6" y2="123.7"/><line id="XMLID_25_" class="stroke" x1="62" y1="142.9" x2="62" y2="123.7"/><path id="XMLID_24_" class="stroke" d="M100.1,76H80.7c-0.3-0.4-0.5-0.8-0.8-1.2c-3.4-4.5-8-8.1-13.3-10.2L60,74l-35.3,49.7l0,0h30.7	c15.6,0,28.5-11.7,30.4-26.8L100.1,76z"/><g id="XMLID_19_"><path class="fill" d="M65.6,83.9c-0.9,0-1.8,0.3-2.5,1c-0.6,0.7-1,1.5-1,2.5c0,0.9,0.4,1.8,1.1,2.5c0.6,0.6,1.5,1,2.5,1 c0.9,0,1.8-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5s-0.4-1.8-1-2.5C67.5,84.3,66.6,83.9,65.6,83.9L65.6,83.9z"/>	</g></g><g id="XMLID_13_"><g id="XMLID_15_"><circle id="XMLID_17_" class="stroke" cx="34.4" cy="199.4" r="10.4"/><circle id="XMLID_16_" class="stroke" cx="80.9" cy="199.4" r="10.4"/></g><line id="XMLID_14_" class="stroke" x1="103.9" y1="189" x2="11.4" y2="189"/></g><g class="velick-i-2" id="XMLID_7_"><circle id="XMLID_12_" class="stroke" cx="315.3" cy="81.8" r="10.4"/><circle id="XMLID_11_" class="stroke" cx="248.3" cy="81.8" r="10.4"/><polyline id="XMLID_10_" class="stroke" points="255.7,55.4 280.7,80.4 302.2,59"/><line id="XMLID_9_" class="stroke" x1="248.3" y1="55.4" x2="268.6" y2="55.4"/><polyline id="XMLID_8_" class="stroke" points="315.3,71.4 315.3,37.8 346.3,37.8"/></g><line class="stroke" x1="492.4" y1="124.2" x2="605.7" y2="124.2"/><polyline class="stroke" points="14.5,144.3 159.1,144.3 199.6,99.1 360.4,99.1"/>',
                    '<g class="rabbit-ill-2" ><path class="stroke" d="M448.6,137.8l15.8,23.4h-27.6"/><path class="stroke" d="M403.9,124.1c0-7.7,6.3-14,14-14c7.7,0,14,6.3,14,14l0,0c0,7.7-6.3,14-14,14 C410.2,138.1,403.9,131.8,403.9,124.1L403.9,124.1"/><path class="stroke" d="M414.7,110.1V79.3"/><path class="stroke" d="M421,161.2v-20.8"/><path class="stroke" d="M408.4,161.2h11.1"/><path class="stroke" d="M427.2,113.2V82.5"/><path class="stroke" d="M452.1,139.9l6.8-5.1"/></g>',
                    '<path class="stroke" d="M414,119v0.1V119z"/>',
                    '</g>',
                    '</svg>'].join(''),
                animation: {
                    speed: 'slow',
                    repeat: true
                },
                fn:{
                    start_animation: function(color){
                       // setTimeout(function(){self.edges['EDGE-7487529'].Play();}, 2500);
                        self.edges['EDGE-74875291'].Play(color);



                    },
                    end_animate: function(color){
                        self.edges['EDGE-20496424'].Play(color);
                        self.edges['EDGE-204964241'].Play(color);
                        self.edges['EDGE-68511511'].Play(color);
                      //  self.edges['EDGE-5037815'].Play();
                       // self.edges['EDGE-6851151'].Play();
                    }
                }
            },
             'pattern-3': {
                 name: 'pattern-3',
                svg: ['<svg id="pattern-3" class="pattern-svg" width="580" height="250">',
                    '<foreignObject width="100%" height="100%">',
                        '<div class="list-animate-edge">',
                            '<div class="item-animate-edge"><div id="Stage-pine-32" class="EDGE-74875292"></div></div>',
                            '<div class="item-animate-edge" style="margin-left: 290px;"><div id="Stage-flower-32" class="EDGE-2423511"></div></div>',
                            '<div class="item-animate-edge"><div id="Stage-3_bird" class="pattern3_bird"></div></div>',

                        '</div>',
                    '</foreignObject>',
                    '<g class="_3_bird-opacity" id="XMLID_242_"> <line id="XMLID_245_" class="stroke" x1="204.7" y1="157" x2="204.7" y2="137.8"/> <line id="XMLID_244_" class="stroke" x1="221.1" y1="157" x2="221.1" y2="137.8"/> <path id="XMLID_243_" class="stroke" d="M259.2,90.1h-19.4c-0.3-0.4-0.5-0.8-0.8-1.2c-3.4-4.5-8-8.1-13.3-10.2l-6.6,9.4l-35.3,49.7    l0,0h30.7c15.6,0,28.5-11.7,30.4-26.8L259.2,90.1z"/> <path id="XMLID_1_" class="fill" d="M224.7,98c-0.9,0-1.8,0.3-2.5,1c-0.6,0.7-1,1.5-1,2.5c0,0.9,0.4,1.8,1.1,2.5           c0.6,0.6,1.5,1,2.5,1c0.9,0,1.8-0.4,2.5-1c0.7-0.7,1-1.6,1-2.5s-0.4-1.8-1-2.5C226.6,98.4,225.7,98,224.7,98L224.7,98z"/> </g>',
                    '<g id="XMLID_2234_"><polyline id="XMLID_2154_" class="stroke" points="545.8,107.9 526,127.7 505.3,107 484.6,127.7 463.9,107 "/><polyline id="XMLID_2153_" class="stroke" points="545.8,134.5 526,154.3 505.3,133.6 484.6,154.3 463.9,133.6 "/><g id="XMLID_2160_"><polyline id="XMLID_2232_" class="stroke" points="109.5,37 87.4,59.1 64.4,36"/><polyline id="XMLID_2163_" class="stroke" points="98.5,81.7 87.2,93 75.4,81.2"/><circle id="XMLID_2162_" class="stroke" cx="118.5" cy="62.6" r="10.3"/><circle id="XMLID_2161_" class="stroke" cx="57.1" cy="62.6" r="10.3"/></g>',
                   // '<g id="XMLID_2047_"><polyline id="XMLID_2148_" class="stroke" points="99.2,125.6 121.3,103.5 144.3,126.6"/><polyline id="XMLID_2147_" class="stroke" points="99.2,149.7 121.3,127.6 144.3,150.7"/><polyline id="XMLID_2048_" class="stroke" points="99.2,173.8 121.3,151.7 144.3,174.7"/></g>',
                    //'<g id="XMLID_2149_"><polyline id="XMLID_2152_" class="stroke" points="419.2,165.6 441.3,143.5 464.3,166.6"/><polyline id="XMLID_2151_" class="stroke" points="419.2,189.7 441.3,167.6 464.3,190.7"/><polyline id="XMLID_2150_" class="stroke" points="419.2,213.8 441.3,191.7 464.3,214.7"/></g>',
                    //'<g id="XMLID_390_"><polyline id="XMLID_393_" class="stroke" points="357.1,165.6 379.2,143.5 402.2,166.6"/><polyline id="XMLID_392_" class="stroke" points="357.1,189.7 379.2,167.6 402.2,190.7"/><polyline id="XMLID_391_" class="stroke" points="357.1,213.8 379.2,191.7 402.2,214.7"/></g>',

                    '<path id="XMLID_2233_" class="stroke" d="M160.4,173c0,0,49.6-36.4,111-0.3"/></g>',
                    '<path id="XMLID_1749_"  class="stroke" d="M421.4,53.3c0,0,50.9-34.6,110.9,3.7"/>',
                    //'<g id="XMLID_1739_">',
                    //    '<g id="XMLID_1743_"><path id="XMLID_1747_" class="stroke" d="M394,35.3c-6.6,0-10.1,2.8-10.1,10.5c0,9.9,5.8,24,10.1,24c5.1,0,10.1-14.2,10.1-24C404.1,38.1,400.6,35.3,394,35.3z"/><path id="XMLID_1746_" class="stroke" d="M394,120.8c6.6,0,10.1-2.8,10.1-10.5c0-9.9-5.8-24-10.1-24c-5.1,0-10.1,14.2-10.1,24C383.9,117.9,387.3,120.8,394,120.8z"/></g>',
                    //    '<g id="XMLID_1740_"><path id="XMLID_1742_" class="stroke" d="M436.7,78c0-6.6-2.8-10.1-10.5-10.1c-9.9,0-24,5.8-24,10.1c0,5.1,14.2,10.1,24,10.1C433.9,88.1,436.7,84.7,436.7,78z"/><path id="XMLID_1741_" class="stroke" d="M351.2,78c0,6.6,2.8,10.1,10.5,10.1c9.9,0,24-5.8,24-10.1c0-5.1-14.2-10.1-24-10.1C354.1,67.9,351.2,71.4,351.2,78z"/></g>',
                    //'</g>',
                    '<g id="XMLID_1726_"><polyline id="XMLID_1729_" class="stroke" points="289.8,157.6 311.9,135.5 335,158.6 "/><polyline id="XMLID_1728_" class="stroke" points="303.6,171.2 334.8,171.2 334.8,203.9 "/><polyline id="XMLID_1727_" class="stroke" points="321.5,214.6 290.3,214.6 290.3,182 "/></g>',
                    '</svg>'].join(''),
                animation: {
                    speed: 'slow',
                    repeat: true
                },
                fn:{
                    start_animation: function(color){
                       // setTimeout(function(){self.edges['EDGE-7487529'].Play();}, 2500);
                        self.edges['EDGE-74875292'].Play(color);
                        self.edges['EDGE-2423511'].Play(color);

                    },
                    end_animate: function(color){
                        self.edges['pattern3_bird'].Play(color);
                       // self.edges['EDGE-20496424'].Play();
                       // self.edges['EDGE-204964241'].Play();
                      //  self.edges['EDGE-68511511'].Play();
                      //  self.edges['EDGE-5037815'].Play();
                       // self.edges['EDGE-6851151'].Play();
                    }
                }
            },
             'pattern-4': {
                 name: 'pattern-4',
                svg: ['<svg id="pattern-4" class="pattern-svg" width="520" height="220">',
                    '<foreignObject width="100%" height="100%">',
                        '<div class="list-animate-edge">',
                            '<div class="item-animate-edge"><div id="Stage-4_flower" class="EDGE-2423512"></div></div>',
                            '<div class="item-animate-edge"><div id="Stage-4_teapot_big" class="EDGE-28079208"></div></div>',
                            '<div class="item-animate-edge"><div id="Stage-4_teapot_cup" class="EDGE-280792081"></div></div>',

                        '</div>',
                    '</foreignObject>',
                    '<g id="XMLID_1907_"><polyline id="XMLID_1909_" class="stroke" points="460.2,4.9 488,4.9 488,17.9 "/>',
                    '<path id="XMLID_1908_" class="stroke" d="M488,55.4V28.7h-28.2c-15.6,0-28.3,12.7-28.3,28.3c0,0.5,0.1,1.1,0.1,1.6h28.2H488c0-0.5,0.1-1.1,0.1-1.6C488,56.5,488,55.9,488,55.4z"/></g><g id="XMLID_1903_">',
                    '<line id="XMLID_1906_" class="stroke" x1="451.2" y1="182.5" x2="458" y2="177.4"/><path id="XMLID_1905_" class="stroke" d="M458,203.8c0-0.5,0.1-1.1,0.1-1.6c0-15.6-12.7-28.3-28.3-28.3s-28.3,12.7-28.3,28.3c0,0.5,0.1,1.1,0.1,1.6H458z"/><path id="XMLID_1904_" class="stroke" d="M450.5,162.5c-5.2-5.3-12.4-8.6-20.4-8.6c-7.2,0-13.8,2.7-18.8,7.1"/></g><path id="XMLID_417_" class="stroke" d="M514.5,91c0,0-48.7-37.6-110.9-3"/>',
                    '<path id="XMLID_1748_" style="transform: scale(-1, 1)" class="stroke" d="M282.7,165.2c0,0,48.7,37.6,110.9,3"/>',
                    '<g id="XMLID_410_"><g id="XMLID_414_"><path id="XMLID_416_" class="stroke" d="M346.2,69.9c-6.6,0-10.1,2.8-10.1,10.5c0,9.9,5.8,24,10.1,24c5.1,0,10.1-14.2,10.1-24C356.2,72.8,352.8,69.9,346.2,69.9z"/><path id="XMLID_415_" class="stroke" d="M346.2,155.4c6.6,0,10.1-2.8,10.1-10.5c0-9.9-5.8-24-10.1-24c-5.1,0-10.1,14.2-10.1,24C336,152.6,339.5,155.4,346.2,155.4z"/></g><g id="XMLID_411_"><path id="XMLID_413_" class="stroke" d="M388.8,112.7c0-6.6-2.8-10.1-10.5-10.1c-9.9,0-24,5.8-24,10.1c0,5.1,14.2,10.1,24,10.1C386,122.8,388.8,119.3,388.8,112.7z"/><path id="XMLID_412_" class="stroke" d="M303.2,112.7c0,6.6,2.8,10.1,10.5,10.1c9.9,0,24-5.8,24-10.1c0-5.1-14.2-10.1-24-10.1C306.2,102.6,303.2,106,303.2,112.7z"/></g></g><polyline id="XMLID_1731_" class="stroke" points="256.5,66.8 278.7,44.7 301.8,67.8 "/><g id="XMLID_395_"><polyline id="XMLID_1730_" class="stroke" points="225,129.6 247,107.5 270.2,130.6 "/><polyline id="XMLID_409_" class="stroke" points="225,158.1 247,136 270.2,159.1 "/><polyline id="XMLID_408_" class="stroke" points="238.7,171.7 270,171.7 270,204.4 "/><polyline id="XMLID_407_" class="stroke" points="256.7,215.1 225.5,215.1 225.5,182.5 "/></g>',

                    '<path id="XMLID_1724_" class="stroke" d="M211.4,156.5c0,0-22.8-57.2-93.9-59.1"/>',
                    '<path id="XMLID_1725_" class="stroke" d="M99.5,97.4c0,0-61.4-4.2-93.9,59.1"/>',

                    '<g class="_4_teapot_cup_opacity"><g id="XMLID_1715_"><polyline id="XMLID_1720_" class="stroke" points="71.8,63.3 72,47.5 89.5,47.5 "/><circle id="XMLID_1719_" class="stroke" cx="109.8" cy="56" r="19.9"/><line id="XMLID_1718_" class="stroke" x1="129.5" y1="47.7" x2="145" y2="36.1"/><line id="XMLID_1717_" class="stroke" x1="109.8" y1="36.1" x2="109.8" y2="29.4"/></g><g id="XMLID_1721_"><polyline id="XMLID_1723_" class="stroke" points="146.8,87.1 146.8,78.4 161.8,78.4 "/><path id="XMLID_1722_" class="stroke" d="M163.8,70.5c0,0.2,0,0.5,0,0.7c0,13.2,10.7,23.9,23.9,23.9s23.9-10.7,23.9-23.9c0-0.2,0-0.5,0-0.7L163.8,70.5L163.8,70.5z"/></g><circle id="XMLID_1714_" class="stroke" cx="186.2" cy="43" r="10.4"/></g>',
                    '</svg>'].join(''),
                animation: {
                    speed: 'slow',
                    repeat: true
                },
                fn:{
                    start_animation: function(color){
                       // setTimeout(function(){self.edges['EDGE-7487529'].Play();}, 2500);
                        self.edges['EDGE-2423512'].Play(color);
                    },
                    end_animate: function(color){
                        self.edges['EDGE-28079208'].Play(color);
                        setTimeout(function(){
                            self.edges['EDGE-280792081'].Play(color);
                        },1125);
                    }
                }
            },
            'pattern-5': {
                 name: 'pattern-5',
                svg: ['<svg id="pattern-5" class="pattern-svg" width="550" height="250">',
                    '<foreignObject width="100%" height="100%">',
                        '<div class="list-animate-edge">',
                            '<div class="item-animate-edge"><div id="Stage-5_pine" class="EDGE-74875293"></div></div>',
                            '<div class="item-animate-edge"><div id="Stage-5_flower" class="EDGE-2423513"></div></div>',
                            '<div class="item-animate-edge"><div id="Stage-5_teapot_cup" class="EDGE-280792082"></div></div>',
                        '</div>',
                    '</foreignObject>',
                    '<g id="XMLID_516_"><polyline id="XMLID_3362_" class="stroke" points="432.9,138.8 280.5,138.8 250.9,179.8 114.4,179.8 "/><g id="XMLID_1721_"><polyline id="XMLID_1723_" class="stroke" points="172.6,153.2 172.6,144.5 187.6,144.5"/><path id="XMLID_1722_" class="stroke" d="M189.7,136.6c0,0.2,0,0.5,0,0.7c0,13.2,10.7,23.9,23.9,23.9s23.9-10.7,23.9-23.9c0-0.2,0-0.5,0-0.7H189.7z"/></g><g id="XMLID_3354_"><polyline id="XMLID_3357_" class="stroke" points="385.8,67.2 407.9,45.1 430.9,68.2"/><polyline id="XMLID_3356_" class="stroke" points="399.5,80.9 430.7,80.9 430.7,113.5"/><polyline id="XMLID_3355_" class="stroke" points="417.5,124.3 386.3,124.3 386.3,91.7"/></g>',
                    '<g class="_5_teapot_cup-opacity" id="XMLID_3349_"><polyline id="XMLID_3353_" class="stroke" points="317.2,93.7 334.5,93.7 334.9,109.5"/><circle id="XMLID_3352_" class="stroke" cx="297" cy="102.2" r="19.9"/><line id="XMLID_3351_" class="stroke" x1="261.7" y1="82.3" x2="277.1" y2="93.9"/><line id="XMLID_3350_" class="stroke" x1="297" y1="75.5" x2="297" y2="82.3"/></g>',
                    //'<g id="XMLID_3339_"><g id="XMLID_3343_"><path id="XMLID_3348_" class="stroke" d="M134.1,65.3c5.6,0,8.6,2.4,8.6,8.9c0,8.4-4.9,20.4-8.6,20.4c-4.3,0-8.6-12-8.6-20.4C125.5,67.7,128.4,65.3,134.1,65.3z"/><path id="XMLID_3347_" class="stroke" d="M134.1,137.9c-5.6,0-8.6-2.4-8.6-8.9c0-8.4,4.9-20.4,8.6-20.4c4.3,0,8.6,12,8.6,20.4C142.6,135.5,139.7,137.9,134.1,137.9z"/></g><g id="XMLID_3340_"><path id="XMLID_3342_" class="stroke" d="M97.8,101.6c0-5.6,2.4-8.6,8.9-8.6c8.4,0,20.4,4.9,20.4,8.6c0,4.3-12,8.6-20.4,8.6C100.2,110.2,97.8,107.2,97.8,101.6z"/><path id="XMLID_3341_" class="stroke" d="M170.4,101.6c0,5.6-2.4,8.6-8.9,8.6c-8.4,0-20.4-4.9-20.4-8.6c0-4.3,12-8.6,20.4-8.6C167.9,93,170.4,96,170.4,101.6z"/></g></g>',
                    '<g id="XMLID_3371_"><polyline id="XMLID_3373_" class="stroke" points="351,156.6 370.8,176.4 391.4,155.7 412.2,176.4 432.9,155.7"/><polyline id="XMLID_3372_" class="stroke" points="351,183.2 370.8,203 391.4,182.3 412.2,203 432.9,182.3"/></g>',
                    //'<g id="XMLID_3367_"><polyline id="XMLID_3370_" class="stroke" points="95.4,155.7 73.3,133.6 50.2,156.7"/><polyline id="XMLID_3369_" class="stroke" points="95.4,179.8 73.3,157.7 50.2,180.8"/><polyline id="XMLID_3368_" class="stroke" points="95.4,203.9 73.3,181.8 50.2,204.9"/></g>',
                    //'<g id="XMLID_3363_"><polyline id="XMLID_3366_" class="stroke" points="499.8,111.5 477.7,89.5 454.6,112.5"/><polyline id="XMLID_3365_" class="stroke" points="499.8,135.6 477.7,113.5 454.6,136.6"/><polyline id="XMLID_3364_" class="stroke" points="499.8,159.7 477.7,137.6 454.6,160.7"/></g>',
                    '</g>',
                    '</svg>'].join(''),
                animation: {
                    speed: 'slow',
                    repeat: true
                },
                fn:{
                    start_animation: function(color){
                       // setTimeout(function(){self.edges['EDGE-7487529'].Play();}, 2500);
                       self.edges['EDGE-74875293'].Play(color);
                       self.edges['EDGE-2423513'].Play(color);
                    },
                    end_animate: function(color){
                        self.edges['EDGE-280792082'].Play(color);
                        //setTimeout(function(){
                        //    self.edges['EDGE-280792081'].Play();
                        //},1125);
                    }
                }
            },
            'pattern-6': {
                name: 'pattern-6',
                svg: ['<svg id="pattern-6" class="pattern-svg" width="530" height="310">',
                    '<foreignObject width="100%" height="100%">',
                        '<div class="list-animate-edge">',
                            '<div class="item-animate-edge"><div id="Stage-6-bee" class="EDGE-5037815_"></div></div>',
                            '<div class="item-animate-edge"><div id="Stage-6-pine" class="EDGE-7487529_6"></div></div>',
                            '<div class="item-animate-edge"><div id="Stage-6-teapot_cup" class="EDGE-28079208_6"></div></div>',
                            '<div class="item-animate-edge"><div id="Stage-6-flower" class="EDGE-2423513_6"></div></div>',
                        '</div>',
                    '</foreignObject>',
                    '<g id="XMLID_3376_"><polyline id="XMLID_3281_" class="stroke" points="53.1,141.6 205.5,141.6 235.1,182.5 371.6,182.5 426.6,94.8 491.3,94.8 "/><polyline id="XMLID_2355_" class="stroke" points="77.6,245.9 184.1,245.9 205.5,280.2 346.9,280.2 "/>',
                    //'<g id="XMLID_3575_"><polyline id="XMLID_3583_" class="stroke" points="346.9,238.7 365.9,219.7 385.8,239.6 "/><polyline id="XMLID_3578_" class="stroke" points="346.9,259.5 365.9,240.4 385.8,260.3 "/><polyline id="XMLID_3576_" class="stroke" points="346.9,280.2 365.9,261.2 385.8,281.1 "/></g>',
                   // '<g id="XMLID_3585_"><polyline id="XMLID_3588_" class="stroke" points="38.7,224.3 57.7,205.2 77.6,225.1 "/><polyline id="XMLID_3587_" class="stroke" points="38.7,245 57.7,226 77.6,245.9 "/><polyline id="XMLID_3586_" class="stroke" points="38.7,265.8 57.7,246.7 77.6,266.6 "/></g>',
                    '<g id="XMLID_3420_"><polyline id="XMLID_3423_" class="stroke" points="55,70 77.1,47.9 100.2,70.9 "/><polyline id="XMLID_3422_" class="stroke" points="68.8,83.6 100,83.6 100,116.2 "/><polyline id="XMLID_3421_" class="stroke" points="86.8,127 55.5,127 55.5,94.4 "/></g>',
                    '<g id="XMLID_3415_" class="_6_teapot_cup-opacity"><polyline id="XMLID_3419_" class="stroke" points="149.1,112.2 149.5,96.4 166.8,96.4 "/><circle id="XMLID_3418_" class="stroke" cx="187" cy="104.9" r="19.9"/><line id="XMLID_3417_" class="stroke" x1="206.9" y1="96.6" x2="222.3" y2="85"/><line id="XMLID_3416_" class="stroke" x1="187" y1="85" x2="187" y2="78.3"/></g>',
                    //'<g id="XMLID_3397_"><g id="XMLID_3401_"><path id="XMLID_3403_" class="stroke" d="M397.9,28.9c-5.6,0-8.6,2.4-8.6,8.9c0,8.4,4.9,20.4,8.6,20.4c4.3,0,8.6-12,8.6-20.4C406.5,31.3,403.5,28.9,397.9,28.9z"/><path id="XMLID_3402_" class="stroke" d="M397.9,101.5c5.6,0,8.6-2.4,8.6-8.9c0-8.4-4.9-20.4-8.6-20.4c-4.3,0-8.6,12-8.6,20.4C389.3,99.1,392.3,101.5,397.9,101.5z"/></g><g id="XMLID_3398_"><path id="XMLID_3400_" class="stroke" d="M434.2,65.2c0-5.6-2.4-8.6-8.9-8.6c-8.4,0-20.4,4.9-20.4,8.6c0,4.3,12,8.6,20.4,8.6C431.8,73.8,434.2,70.8,434.2,65.2z"/><path id="XMLID_3399_" class="stroke" d="M361.6,65.2c0,5.6,2.4,8.6,8.9,8.6c8.4,0,20.4-4.9,20.4-8.6c0-4.3-12-8.6-20.4-8.6C364,56.6,361.6,59.6,361.6,65.2z"/></g></g>',
                    '<g id="XMLID_3404_"><g id="XMLID_3408_"><path id="XMLID_3410_" class="stroke" d="M142.2,157.5c-5.6,0-8.6,2.4-8.6,8.9c0,8.4,4.9,20.4,8.6,20.4c4.3,0,8.6-12,8.6-20.4C150.8,159.9,147.9,157.5,142.2,157.5z"/><path id="XMLID_3409_" class="stroke" d="M142.2,230.1c5.6,0,8.6-2.4,8.6-8.9c0-8.4-4.9-20.4-8.6-20.4c-4.3,0-8.6,12-8.6,20.4C133.7,227.6,136.6,230.1,142.2,230.1z"/></g><g id="XMLID_3405_"><path id="XMLID_3407_" class="stroke" d="M178.5,193.8c0-5.6-2.4-8.6-8.9-8.6c-8.4,0-20.4,4.9-20.4,8.6c0,4.3,12,8.6,20.4,8.6C176.1,202.3,178.5,199.4,178.5,193.8z"/><path id="XMLID_3406_" class="stroke" d="M105.9,193.8c0,5.6,2.4,8.6,8.9,8.6c8.4,0,20.4-4.9,20.4-8.6c0-4.3-12-8.6-20.4-8.6C108.4,185.2,105.9,188.1,105.9,193.8z"/></g></g><g id="XMLID_1721_"><polyline id="XMLID_1723_" class="stroke" points="240.3,160.6 240.3,151.9 255.3,151.9 "/><path id="XMLID_1722_" class="stroke" d="M257.4,144c0,0.2,0,0.5,0,0.7c0,13.2,10.7,23.9,23.9,23.9c13.2,0,23.9-10.7,23.9-23.9c0-0.2,0-0.5,0-0.7H257.4z"/></g>',
                    '<g class="_6_bee-opacity" id="XMLID_3_"><path id="XMLID_20_" class="stroke" d="M255.7,259.4c-4.2,0-7.7-6.9-7.7-15.5s3.4-15.5,7.7-15.5"/><path id="XMLID_19_" class="stroke" d="M239.3,259.4c-4.2,0-7.7-7-7.7-15.7s3.4-15.7,7.7-15.7"/><path id="XMLID_18_" class="stroke" d="M220.2,243.7L220.2,243.7c0-8.6,7.1-15.7,15.7-15.7h17.3c8.6,0,15.7,7.1,15.7,15.7l0,0c0,8.6-7.1,15.7-15.7,15.7h-17.3C227.3,259.4,220.2,252.3,220.2,243.7z"/><line id="XMLID_16_" class="stroke" x1="313" y1="243.5" x2="303.6" y2="243.9"/><line id="XMLID_3437_" class="stroke" x1="254.4" y1="226.5" x2="224.7" y2="205.2"/><path class="stroke" d="M303.6,243.9c0,8.6-6.9,15.5-15.5,15.5s-15.5-6.9-15.5-15.5s6.9-15.5,15.5-15.5S303.6,235.3,303.6,243.9"/><path class="stroke" d="M293.3,239.4L293.3,239.4L293.3,239.4z"/></g></g>',
                    '</svg>'].join(''),
                animation: {
                    speed: 'slow',
                    repeat: true
                },
                fn:{
                    start_animation: function(color){
                       // setTimeout(function(){self.edges['EDGE-7487529'].Play();}, 2500);
                      // self.edges['EDGE-74875293'].Play();
                       //self.edges['EDGE-2423513'].Play();

                        self.edges['EDGE-7487529_6'].Play(color);
                        self.edges['EDGE-2423513_6'].Play(color);
                    },
                    end_animate: function(color){
                       self.edges['EDGE-5037815_'].Play(color);
                       self.edges['EDGE-28079208_6'].Play(color);
                        //setTimeout(function(){
                        //    self.edges['EDGE-280792081'].Play();
                        //},1125);
                    }
                }
            },
        };
        //-----------------------------------------end patterns-----------------------------------------------------


        //-----------------------------------------edges------------------------------------------------------------

        this.edges = {
            'EDGE-5037815':{
                name:'bee_2',
                dom_name:'EDGE-5037815',
                config:{width: "550px", height: "400px"},
                onReady:function(){
                    $('.bee-opacity').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition(this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-6851151':{
                name:'rabbit-2',
                dom_name:'EDGE-6851151',
                config: {width: "520px", height: "280px"},
                onReady:function(){
                    $('.rabbit-opacity').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition(this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-242351':{
                name:'flower',
                dom_name:'EDGE-242351',
                config:{width: "550px", height: "400px"},
                onReady:function(){},
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition(this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-2423511':{
                name:'flower_ill3',
                dom_name:'EDGE-2423511',
                config:{width: "550px", height: "400px"},
                onReady:function(){},
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition(this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-2423512':{
                name:'4_flower',
                dom_name:'EDGE-2423512',
                config:{width: "550px", height: "400px"},
                onReady:function(){},
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition(this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-2423513':{
                name:'5_flower',
                dom_name:'EDGE-2423513',
                config:{width: "550px", height: "400px"},
                onReady:function(){},
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition(this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-2423513_6':{
                name:'6_flower',
                dom_name:'EDGE-2423513_6',
                config:{width: "550px", height: "400px"},
                onReady:function(){},
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition(this.name, this.dom_name, this.config, '');
                }
            },



            'EDGE-7487529':{
                name:'pine',
                dom_name:'EDGE-7487529',
                config:{width: "520px", height: "280px"},
                onReady:function(){},
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-20496424':{
                name:'bird_ill_2',
                dom_name:'EDGE-20496424',
                config:{width: "800px", height: "240px"},
                onReady:function(){
                    $('.birdi-i-2').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },
            'pattern3_bird':{
                name:'3_bird',
                dom_name:'pattern3_bird',
                config:{width: "800px", height: "240px"},
                onReady:function(){


                    $('._3_bird-opacity').css({opacity:0});

                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-74875291':{
                name:'pine_ill2',
                dom_name:'EDGE-74875291',
                config:{width: "800px", height: "250px"},
                onReady:function(){
                   // $('.birdi-i-2').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-74875292':{
                name:'pine_illustr_3_2',
                dom_name:'EDGE-74875292',
                config:{width: "580px", height: "250px"},
                onReady:function(){
                   // $('.birdi-i-2').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },


            'EDGE-74875293':{
                name:'5_pine',
                dom_name:'EDGE-74875293',
                config:{width: "550px", height: "250px"},
                onReady:function(){
                    // $('.birdi-i-2').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },

            'EDGE-204964241':{
                name:'velik_ill_2',
                dom_name:'EDGE-204964241',
                config:{width: "800px", height: "250px"},
                onReady:function(){
                    $('.velick-i-2').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },

            'EDGE-68511511':{
                name:'rabbit_ill_2',
                dom_name:'EDGE-68511511',
                config:{width: "800px", height: "250px"},
                onReady:function(){
                    $('.rabbit-ill-2').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-28079208':{
                name:'4_teapot_big',
                dom_name:'EDGE-28079208',
                config:{width: "520px", height: "220px"},
                onReady:function(){
                   // $('.rabbit-ill-2').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-280792081':{
                name:'4_teapot_cup',
                dom_name:'EDGE-280792081',
                config:{width: "520px", height: "220px"},
                onReady:function(){
                    $('._4_teapot_cup_opacity').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-280792082':{
                name:'5_teapot_cup',
                dom_name:'EDGE-280792082',
                config:{width: "520px", height: "220px"},
                onReady:function(){
                    $('._5_teapot_cup-opacity').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-5037815_':{
                name:'6_bee',
                dom_name:'EDGE-5037815_',
                config:{width: "530px", height: "310px"},
                onReady:function(){
                    $('._6_bee-opacity').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-7487529_6':{
                name:'6_pine',
                dom_name:'EDGE-7487529_6',
                config:{width: "530px", height: "310px"},
                onReady:function(){
                  //  $('._5_teapot_cup-opacity').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },
            'EDGE-28079208_6':{
                name:'6_teapot_cup',
                dom_name:'EDGE-28079208_6',
                config:{width: "530px", height: "310px"},
                onReady:function(){
                    $('._6_teapot_cup-opacity').css({opacity:0});
                },
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, '');
                }
            },
            'main_bird':{
                name:'main_bird',
                dom_name:'main_bird',
                config:{  width: "100px", height: "100px"},
                onReady:function(){},
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, 'main/');
                }
            },  'main_fish':{
                name:'main_fish',
                dom_name:'main_fish',
                config:{  width: "100px", height: "100px"},
                onReady:function(){},
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, 'main/');
                }
            },  'main_wave':{
                name:'main_wave',
                dom_name:'main_wave',
                config:{  width: "100px", height: "100px"},
                onReady:function(){},
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, 'main/');
                }
            },  'main_flower':{
                name:'main_flower',
                dom_name:'main_flower',
                config:{  width: "100px", height: "100px"},
                onReady:function(){},
                Play: function(color){
                    this.config['color'] = color;
                    self.loadComposition( this.name, this.dom_name, this.config, 'main/');
                }
            },
        };
        //-----------------------------------------end edges------------------------------------------------------------


    }
        Patternizer.prototype = {
            init: function () {
                var self = this;
                AdobeEdge.bootstrapCallback(function (compId) {
                    patternizer.edges[compId].onReady();
                });
                var patterns = $('.pattern');
                patterns.each(function (ind, el) {
                    var $el = $(el),
                        patternID = $el.data('pattern');
                    if(patternID in self.patterns){
                        $el.append(self.patterns[patternID].svg);
                    }else{
                        console.log('Patternizer: ' + patternID  + ' not found');
                    }
                });
            },
            loadComposition:function(name, dom_element, params, dir){
              patternizer.EDGEloadComp(name, dom_element, params, dir);
            },
            animate: function () {
                var self = this,
                    patterns = {};
                setTimeout(function(){
                    $('.anim-pattern .pattern-svg').each(function(ind, el){
                        var $el = $(el),
                            color = ($el.parent().hasClass('dark-green')?'dark-green':'light-green'),
                            patternID = $el.attr('id'),
                            pattern = self.patterns[patternID],
                            type = pattern.animation.speed;




                        patterns[patternID] = {
                            element:new Vivus(patternID, {
                                type:(type=='fast'?'async':'oneByOne') ,
                                duration: (type=='fast'?100:400),
                                onReady:function(){ pattern.fn.start_animation(color); }
                            }, function(){ pattern.fn.end_animate(color); }),
                            status:true,
                            color: color,
                            repeat:(type == !'fast')
                        };
                    });
                    setInterval(function(){
                        $.each(patterns,function(ind,el){
                            if(el.repeat==true){
                                if(el.status==true){
                                    el.element.play(-3);
                                    el.status = false;
                                }else{
                                    el.element.reset().play();
                                    el.status = true;
                                }
                            }
                        });
                    },10000)
                },1000);
            }
        };
        return new Patternizer();
    }());

$(document).ready(function() {
    patternizer.init();

    if($('.green-bar').length){

        setTimeout(function(){patternizer.edges.main_bird.Play();},500);
        setTimeout(function(){ patternizer.edges.main_wave.Play();},1000);
        setTimeout(function(){ patternizer.edges.main_flower.Play();},1500);
        setTimeout(function(){ patternizer.edges.main_fish.Play();},2000);

    }

    patternizer.animate();
});
