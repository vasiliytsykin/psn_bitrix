/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
    //var dir_ = 'animate/bee_2';

    var dir_img =  patternizer.setDir(compId, 1);
    var dir_ =  patternizer.setDir(compId, 0);
    
    "use strict";
    var im= dir_img,
        aud= dir_ + '/media/',
        vid= dir_ + '/media/',
        js= dir_ + '/js/',
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
                            rect: ['145px', '27.9%', '73px', '57px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"krylo.svg",'0px','0px']
                        },
                        {
                            id: 'bee',
                            type: 'image',
                            rect: ['118px', '32.1%', '104px', '67px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"bee.svg",'0px','0px']
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '520px', '280px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,0)"]
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
                            '27.9%',
                            '18.84%'
                        ],
                        [
                            "eid20",
                            "top",
                            566,
                            559,
                            "easeInOutSine",
                            "${krylo}",
                            '18.84%',
                            '28%'
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
                            "eid19",
                            "top",
                            0,
                            566,
                            "easeInOutSine",
                            "${bee}",
                            '32.1%',
                            '23.12%'
                        ],
                        [
                            "eid21",
                            "top",
                            566,
                            559,
                            "easeInOutSine",
                            "${bee}",
                            '23.12%',
                            '32%'
                        ]
                    ]
                }
            }
        };
    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);
    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_ + '/bee_2_edgeActions.js');
})("EDGE-5037815");
