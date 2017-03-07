/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
    var dir_img =  patternizer.setDir(compId, 1);
    var dir_ =  patternizer.setDir(compId, 0);
    "use strict";
    var im=dir_img,
        aud=dir_ + 'media/',
        vid=dir_ + 'media/',
        js=dir_ + 'js/',
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
                            id: 'rabbit',
                            type: 'image',
                            rect: ['295px', '186px', '100px', '90px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"rabbit.svg",'0px','0px']
                        },
                        {
                            id: 'ear1_double2',
                            type: 'image',
                            rect: ['334px', '184px', '10px', '80px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"ear1_double2.svg",'0px','0px']
                        },
                        {
                            id: 'ear1_double2Copy',
                            type: 'image',
                            rect: ['322px', '182px', '10px', '80px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"ear1_double2.svg",'0px','0px']
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '520px', '280px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,0.00)"]
                        }
                    }
                },
                timeline: {
                    duration: 3000,
                    autoPlay: true,
                    labels: {
                        "start": 0
                    },
                    data: [
                        [
                            "eid8",
                            "rotateZ",
                            0,
                            500,
                            "easeInBack",
                            "${ear1_double2Copy}",
                            '0deg',
                            '10deg'
                        ],
                        [
                            "eid9",
                            "rotateZ",
                            500,
                            500,
                            "easeInBack",
                            "${ear1_double2Copy}",
                            '10deg',
                            '-5deg'
                        ],
                        [
                            "eid10",
                            "rotateZ",
                            1000,
                            500,
                            "easeInBack",
                            "${ear1_double2Copy}",
                            '-5deg',
                            '10deg'
                        ],
                        [
                            "eid11",
                            "rotateZ",
                            1500,
                            500,
                            "easeInBack",
                            "${ear1_double2Copy}",
                            '10deg',
                            '-5deg'
                        ],
                        [
                            "eid12",
                            "rotateZ",
                            2000,
                            624,
                            "easeInBack",
                            "${ear1_double2Copy}",
                            '-5deg',
                            '0deg'
                        ],
                        [
                            "eid22",
                            "top",
                            0,
                            0,
                            "linear",
                            "${ear1_double2Copy}",
                            '182px',
                            '182px'
                        ],
                        [
                            "eid2",
                            "rotateZ",
                            0,
                            500,
                            "easeInBack",
                            "${ear1_double2}",
                            '0deg',
                            '10deg'
                        ],
                        [
                            "eid4",
                            "rotateZ",
                            500,
                            500,
                            "easeInBack",
                            "${ear1_double2}",
                            '10deg',
                            '-5deg'
                        ],
                        [
                            "eid5",
                            "rotateZ",
                            1000,
                            500,
                            "easeInBack",
                            "${ear1_double2}",
                            '-5deg',
                            '10deg'
                        ],
                        [
                            "eid6",
                            "rotateZ",
                            1500,
                            500,
                            "easeInBack",
                            "${ear1_double2}",
                            '10deg',
                            '-5deg'
                        ],
                        [
                            "eid7",
                            "rotateZ",
                            2000,
                            624,
                            "easeInBack",
                            "${ear1_double2}",
                            '-5deg',
                            '0deg'
                        ],
                        [
                            "eid16",
                            "left",
                            0,
                            0,
                            "linear",
                            "${ear1_double2Copy}",
                            '322px',
                            '322px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_ + "rabbit-2_edgeActions.js");
})("EDGE-6851151");
