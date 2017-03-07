/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
    var dir_3_bird  = patternizer.directory_path + '3_bird/';

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
                            rect: ['180px', '74px', '83px', '87px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"bird.svg",'0px','0px']
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '580px', '250px', 'auto', 'auto'],
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
                            "eid8",
                            "left",
                            0,
                            0,
                            "easeInOutBack",
                            "${bird}",
                            '180px',
                            '180px'
                        ],
                        [
                            "eid4",
                            "width",
                            1750,
                            0,
                            "linear",
                            "${Stage}",
                            '580px',
                            '580px'
                        ],
                        [
                            "eid5",
                            "height",
                            1750,
                            0,
                            "linear",
                            "${Stage}",
                            '250px',
                            '250px'
                        ],
                        [
                            "eid9",
                            "top",
                            0,
                            0,
                            "easeInOutBack",
                            "${bird}",
                            '74px',
                            '74px'
                        ],
                        [
                            "eid2",
                            "top",
                            500,
                            250,
                            "easeInOutBack",
                            "${bird}",
                            '74px',
                            '35px'
                        ],
                        [
                            "eid3",
                            "top",
                            750,
                            250,
                            "easeInOutBack",
                            "${bird}",
                            '35px',
                            '74px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_+"3_bird_edgeActions.js");
})("pattern3_bird");
