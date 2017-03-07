/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
    //var dir_  = patternizer.directory_path + '6_pine/';
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
                            rect: ['27px', '195px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'pine4',
                            type: 'image',
                            rect: ['342px', '206px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
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
                            "eid79",
                            "height",
                            2173,
                            0,
                            "linear",
                            "${Stage}",
                            '310px',
                            '310px'
                        ],
                        [
                            "eid90",
                            "top",
                            2173,
                            0,
                            "linear",
                            "${pine4}",
                            '206px',
                            '206px'
                        ],
                        [
                            "eid91",
                            "left",
                            1848,
                            0,
                            "linear",
                            "${pine4}",
                            '342px',
                            '342px'
                        ],
                        [
                            "eid92",
                            "left",
                            2173,
                            0,
                            "linear",
                            "${pine4}",
                            '342px',
                            '342px'
                        ],
                        [
                            "eid88",
                            "left",
                            2173,
                            0,
                            "linear",
                            "${pine1}",
                            '27px',
                            '27px'
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
                            "eid78",
                            "width",
                            2173,
                            0,
                            "linear",
                            "${Stage}",
                            '530px',
                            '530px'
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
                            "eid82",
                            "top",
                            2173,
                            0,
                            "linear",
                            "${pine1}",
                            '195px',
                            '195px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_+"6_pine_edgeActions.js");
})("EDGE-7487529_6");
