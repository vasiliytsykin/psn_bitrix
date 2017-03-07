/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
   // var dir_  = patternizer.directory_path + '6_teapot_cup/';
    var dir_img =  patternizer.setDir(compId, 1);
    var dir_ =  patternizer.setDir(compId, 0);
    "use strict";
    var im=dir_img,
        aud=dir_ +'media/',
        vid=dir_ +'media/',
        js=dir_ +'js/',
        fonts = {
        },
        opts = {
            'gAudioPreloadPreference': 'auto',
            'gVideoPreloadPreference': 'auto'
        },
        resources = [
        ],
        scripts = [
        ],
        symbols = {
            "stage": {
                version: "6.0.0",
                minimumCompatibleVersion: "5.0.0",
                build: "6.0.0.400",
                scaleToFit: "none",
                centerStage: "none",
                resizeInstances: false,
                content: {
                    dom: [
                        {
                            id: 'cup',
                            type: 'image',
                            rect: ['236px', '140px', '74px', '33px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"cup.svg",'0px','0px']
                        },
                        {
                            id: 'circle',
                            type: 'image',
                            rect: ['266px', '102px', '29px', '29px', 'auto', 'auto'],
                            clip: 'rect(0px 29px 25px 0px)',
                            fill: ["rgba(0,0,0,0)",im+"circle.svg",'0px','0px']
                        },
                        {
                            id: 'teapot_small',
                            type: 'image',
                            rect: ['145px', '74px', '84px', '62px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"teapot_small.svg",'0px','0px']
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '530px', '310px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,0.00)"]
                        }
                    }
                },
                timeline: {
                    duration: 2500,
                    autoPlay: true,
                    labels: {
                        "start": 0
                    },
                    data: [
                        [
                            "eid45",
                            "top",
                            0,
                            0,
                            "easeInSine",
                            "${circle}",
                            '141px',
                            '141px'
                        ],
                        [
                            "eid7",
                            "top",
                            117,
                            482,
                            "easeInSine",
                            "${circle}",
                            '141px',
                            '102px'
                        ],
                        [
                            "eid43",
                            "left",
                            0,
                            0,
                            "linear",
                            "${cup}",
                            '236px',
                            '236px'
                        ],
                        [
                            "eid48",
                            "scaleY",
                            0,
                            0,
                            "linear",
                            "${teapot_small}",
                            '1',
                            '1'
                        ],
                        [
                            "eid49",
                            "scaleY",
                            2500,
                            0,
                            "linear",
                            "${teapot_small}",
                            '1',
                            '1'
                        ],
                        [
                            "eid41",
                            "left",
                            0,
                            0,
                            "linear",
                            "${circle}",
                            '266px',
                            '266px'
                        ],
                        [
                            "eid2",
                            "rotateZ",
                            0,
                            253,
                            "linear",
                            "${teapot_small}",
                            '0deg',
                            '25deg'
                        ],
                        [
                            "eid3",
                            "rotateZ",
                            253,
                            298,
                            "linear",
                            "${teapot_small}",
                            '25deg',
                            '0deg'
                        ],
                        [
                            "eid44",
                            "top",
                            0,
                            0,
                            "linear",
                            "${cup}",
                            '140px',
                            '140px'
                        ],
                        [
                            "eid12",
                            "scaleY",
                            500,
                            229,
                            "easeInCirc",
                            "${circle}",
                            '1',
                            '0'
                        ],
                        [
                            "eid11",
                            "scaleX",
                            500,
                            229,
                            "easeInCirc",
                            "${circle}",
                            '1',
                            '0'
                        ],
                        [
                            "eid14",
                            "clip",
                            0,
                            178,
                            "linear",
                            "${circle}",
                            [0,29,0,0],
                            [0,29,2,0],
                            {valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'}
                        ],
                        [
                            "eid15",
                            "clip",
                            178,
                            322,
                            "linear",
                            "${circle}",
                            [0,29,2,0],
                            [0,29,28,0],
                            {valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'}
                        ],
                        [
                            "eid16",
                            "clip",
                            500,
                            142,
                            "linear",
                            "${circle}",
                            [0,29,28,0],
                            [0,29,30,0],
                            {valueTemplate: 'rect(@@0@@px @@1@@px @@2@@px @@3@@px)'}
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_ +"6_teapot_cup_edgeActions.js");
})("EDGE-28079208_6");
