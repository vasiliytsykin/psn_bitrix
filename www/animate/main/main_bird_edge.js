/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {

    var dir_img =  patternizer.setDir(compId, 1);
    var dir_ =  patternizer.setDir(compId, 0);

    var dir_ = patternizer.directory_path + 'main/';

    "use strict";
    var im=dir_+ 'images/',
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
                            id: 'preimuschestva_1',
                            type: 'image',
                            rect: ['0px', '0px', '100px', '100px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"preimuschestva_1.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
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
                    duration: 1500,
                    autoPlay: true,
                    data: [
                        [
                            "eid4",
                            "scaleX",
                            0,
                            1500,
                            "easeOutElastic",
                            "${preimuschestva_1}",
                            '0',
                            '1'
                        ],
                        [
                            "eid5",
                            "scaleY",
                            0,
                            1500,
                            "easeOutElastic",
                            "${preimuschestva_1}",
                            '0',
                            '1'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_+"main_bird_edgeActions.js");
})("main_bird");
