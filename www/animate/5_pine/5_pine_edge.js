/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
    var dir_  = patternizer.directory_path + '5_pine/';
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
                            id: 'pine1',
                            type: 'image',
                            rect: ['45px', '130px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'pine4',
                            type: 'image',
                            rect: ['449px', '86px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '550px', '250px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,0.00)"]
                        }
                    }
                },
                timeline: {
                    duration: 2173,
                    autoPlay: true,
                    data: [
                        [
                            "eid26",
                            "scaleX",
                            454,
                            1394,
                            "easeOutElastic",
                            "${pine4}",
                            '0',
                            '1'
                        ],
                        [
                            "eid67",
                            "height",
                            2173,
                            0,
                            "linear",
                            "${Stage}",
                            '250px',
                            '250px'
                        ],
                        [
                            "eid73",
                            "top",
                            2173,
                            0,
                            "linear",
                            "${pine1}",
                            '130px',
                            '130px'
                        ],
                        [
                            "eid78",
                            "left",
                            1848,
                            0,
                            "linear",
                            "${pine4}",
                            '449px',
                            '449px'
                        ],
                        [
                            "eid79",
                            "left",
                            2173,
                            0,
                            "linear",
                            "${pine4}",
                            '449px',
                            '449px'
                        ],
                        [
                            "eid66",
                            "width",
                            2173,
                            0,
                            "linear",
                            "${Stage}",
                            '550px',
                            '550px'
                        ],
                        [
                            "eid3",
                            "scaleX",
                            0,
                            1394,
                            "easeOutElastic",
                            "${pine1}",
                            '0',
                            '1'
                        ],
                        [
                            "eid24",
                            "scaleY",
                            454,
                            1394,
                            "easeOutElastic",
                            "${pine4}",
                            '0',
                            '1'
                        ],
                        [
                            "eid74",
                            "left",
                            2173,
                            0,
                            "linear",
                            "${pine1}",
                            '45px',
                            '45px'
                        ],
                        [
                            "eid4",
                            "scaleY",
                            0,
                            1394,
                            "easeOutElastic",
                            "${pine1}",
                            '0',
                            '1'
                        ],
                        [
                            "eid77",
                            "top",
                            2173,
                            0,
                            "linear",
                            "${pine4}",
                            '86px',
                            '86px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_ + "5_pine_edgeActions.js");
})("EDGE-74875293");
