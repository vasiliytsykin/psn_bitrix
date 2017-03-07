/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
   // var dir_ = 'animate/bird_ill_2/';
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
                            id: 'bird',
                            type: 'image',
                            rect: ['21px', '60px', '83px', '87px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"bird.svg",'0px','0px']
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
                    duration: 1750,
                    autoPlay: true,
                    labels: {
                        "start": 0
                    },
                    data: [
                        [
                            "eid2",
                            "top",
                            500,
                            237,
                            "easeInOutBack",
                            "${bird}",
                            '60px',
                            '27px'
                        ],
                        [
                            "eid3",
                            "top",
                            737,
                            263,
                            "easeInOutBack",
                            "${bird}",
                            '27px',
                            '60px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);
    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_+"bird_ill_2_edgeActions.js");
})("EDGE-20496424");
