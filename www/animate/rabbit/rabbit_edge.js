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
                            rect: ['0px', '5px', '100px', '90px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"rabbit.svg",'0px','0px']
                        },
                        {
                            id: 'ear1_double2',
                            type: 'image',
                            rect: ['43px', '14px', '10px', '80px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"ear1_double2.svg",'0px','0px'],
                            transform: [[],['-5']]
                        },
                        {
                            id: 'ear1_double2Copy',
                            type: 'image',
                            rect: ['31px', '3px', '10px', '80px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"ear1_double2.svg",'0px','0px'],
                            transform: [[],['-5']]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '100px', '100px', 'auto', 'auto'],
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
                            "eid13",
                            "rotateZ",
                            0,
                            481,
                            "easeInBack",
                            "${ear1_double2Copy}",
                            '0deg',
                            '10deg'
                        ],
                        [
                            "eid15",
                            "rotateZ",
                            481,
                            481,
                            "easeInBack",
                            "${ear1_double2Copy}",
                            '10deg',
                            '-5deg'
                        ],
                        [
                            "eid17",
                            "rotateZ",
                            962,
                            481,
                            "easeInBack",
                            "${ear1_double2Copy}",
                            '-5deg',
                            '10deg'
                        ],
                        [
                            "eid19",
                            "rotateZ",
                            1443,
                            481,
                            "easeInBack",
                            "${ear1_double2Copy}",
                            '10deg',
                            '-5deg'
                        ],
                        [
                            "eid22",
                            "rotateZ",
                            1923,
                            577,
                            "easeInBack",
                            "${ear1_double2Copy}",
                            '-5deg',
                            '0deg'
                        ],
                        [
                            "eid14",
                            "rotateZ",
                            0,
                            481,
                            "easeInBack",
                            "${ear1_double2}",
                            '0deg',
                            '10deg'
                        ],
                        [
                            "eid16",
                            "rotateZ",
                            481,
                            481,
                            "easeInBack",
                            "${ear1_double2}",
                            '10deg',
                            '-5deg'
                        ],
                        [
                            "eid18",
                            "rotateZ",
                            962,
                            481,
                            "easeInBack",
                            "${ear1_double2}",
                            '-5deg',
                            '10deg'
                        ],
                        [
                            "eid20",
                            "rotateZ",
                            1443,
                            481,
                            "easeInBack",
                            "${ear1_double2}",
                            '10deg',
                            '-5deg'
                        ],
                        [
                            "eid21",
                            "rotateZ",
                            1923,
                            577,
                            "easeInBack",
                            "${ear1_double2}",
                            '-5deg',
                            '0deg'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_ + "rabbit_edgeActions.js");
})("EDGE-1400067");
