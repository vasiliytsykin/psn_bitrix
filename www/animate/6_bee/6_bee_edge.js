/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
 //   var dir_  = patternizer.directory_path + '6_bee/';
    var dir_img =  patternizer.setDir(compId, 1);
    var dir_ =  patternizer.setDir(compId, 0);
    "use strict";
    var im=dir_img,
        aud=dir_+'media/',
        vid=dir_+'media/',
        js=dir_+'js/',
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
                            id: 'krylo',
                            type: 'image',
                            rect: ['218px', '198px', '73px', '57px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"krylo.svg",'0px','0px'],
                            transform: [[],[],[],['-1']]
                        },
                        {
                            id: 'bee',
                            type: 'image',
                            rect: ['215px', '210px', '104px', '67px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"bee.svg",'0px','0px'],
                            transform: [[],[],[],['-1']]
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
                    duration: 1125,
                    autoPlay: true,
                    labels: {
                        "start": 0
                    },
                    data: [
                        [
                            "eid18",
                            "top",
                            0,
                            566,
                            "easeInOutSine",
                            "${krylo}",
                            '198px',
                            '184px'
                        ],
                        [
                            "eid20",
                            "top",
                            566,
                            559,
                            "easeInOutSine",
                            "${krylo}",
                            '184px',
                            '198px'
                        ],
                        [
                            "eid2",
                            "rotateZ",
                            0,
                            125,
                            "easeInOutSine",
                            "${krylo}",
                            '0deg',
                            '-10deg'
                        ],
                        [
                            "eid3",
                            "rotateZ",
                            125,
                            125,
                            "easeInOutSine",
                            "${krylo}",
                            '-10deg',
                            '10deg'
                        ],
                        [
                            "eid4",
                            "rotateZ",
                            250,
                            125,
                            "easeInOutSine",
                            "${krylo}",
                            '10deg',
                            '0deg'
                        ],
                        [
                            "eid5",
                            "rotateZ",
                            375,
                            125,
                            "easeInOutSine",
                            "${krylo}",
                            '0deg',
                            '-10deg'
                        ],
                        [
                            "eid6",
                            "rotateZ",
                            500,
                            125,
                            "easeInOutSine",
                            "${krylo}",
                            '-10deg',
                            '10deg'
                        ],
                        [
                            "eid7",
                            "rotateZ",
                            625,
                            125,
                            "easeInOutSine",
                            "${krylo}",
                            '10deg',
                            '0deg'
                        ],
                        [
                            "eid8",
                            "rotateZ",
                            750,
                            125,
                            "easeInOutSine",
                            "${krylo}",
                            '0deg',
                            '-10deg'
                        ],
                        [
                            "eid9",
                            "rotateZ",
                            875,
                            125,
                            "easeInOutSine",
                            "${krylo}",
                            '-10deg',
                            '10deg'
                        ],
                        [
                            "eid10",
                            "rotateZ",
                            1000,
                            125,
                            "easeInOutSine",
                            "${krylo}",
                            '10deg',
                            '0deg'
                        ],
                        [
                            "eid51",
                            "left",
                            0,
                            0,
                            "easeInOutSine",
                            "${krylo}",
                            '218px',
                            '218px'
                        ],
                        [
                            "eid48",
                            "scaleX",
                            0,
                            0,
                            "easeInOutSine",
                            "${krylo}",
                            '-1',
                            '-1'
                        ],
                        [
                            "eid47",
                            "scaleX",
                            0,
                            0,
                            "easeInOutSine",
                            "${bee}",
                            '-1',
                            '-1'
                        ],
                        [
                            "eid45",
                            "left",
                            0,
                            0,
                            "easeInOutSine",
                            "${bee}",
                            '215px',
                            '215px'
                        ],
                        [
                            "eid19",
                            "top",
                            0,
                            566,
                            "easeInOutSine",
                            "${bee}",
                            '210px',
                            '195px'
                        ],
                        [
                            "eid21",
                            "top",
                            566,
                            559,
                            "easeInOutSine",
                            "${bee}",
                            '195px',
                            '210px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_+"6_bee_edgeActions.js");
})("EDGE-5037815_");
