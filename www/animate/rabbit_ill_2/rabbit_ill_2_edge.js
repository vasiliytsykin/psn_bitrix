/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
  //  var dir_ = 'animate/rabbit_ill_2/';
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
                            id: 'rabbit',
                            type: 'image',
                            rect: ['383px', '75px', '100px', '90px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"rabbit.svg",'0px','0px']
                        },
                        {
                            id: 'ear1_double2',
                            type: 'image',
                            rect: ['422px', '73px', '10px', '80px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"ear1_double2.svg",'0px','0px']
                        },
                        {
                            id: 'ear1_double2Copy',
                            type: 'image',
                            rect: ['410px', '71px', '10px', '80px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"ear1_double2.svg",'0px','0px']
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '800px', '240px', 'auto', 'auto'],
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
                            "eid39",
                            "top",
                            0,
                            0,
                            "linear",
                            "${ear1_double2}",
                            '73px',
                            '73px'
                        ],
                        [
                            "eid36",
                            "left",
                            0,
                            0,
                            "linear",
                            "${ear1_double2Copy}",
                            '410px',
                            '410px'
                        ],
                        [
                            "eid35",
                            "left",
                            0,
                            0,
                            "linear",
                            "${ear1_double2}",
                            '422px',
                            '422px'
                        ],
                        [
                            "eid40",
                            "top",
                            0,
                            0,
                            "linear",
                            "${ear1_double2Copy}",
                            '71px',
                            '71px'
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
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_+"rabbit_ill_2_edgeActions.js");
})("EDGE-68511511");
