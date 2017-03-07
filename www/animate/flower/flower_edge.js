/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
    console.log('compId ' + compId);

    var dir_img =  patternizer.setDir(compId, 1);
    var dir_ =  patternizer.setDir(compId, 0);

    //var dir_flower = 'animate/flower';
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
                            id: 'flower',
                            type: 'image',
                            rect: ['25px', '120px', '100px', '100px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"flower.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '150px', '150px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,0.00)"]
                        }
                    }
                },
                timeline: {
                    duration: 4000,
                    autoPlay: true,
                    labels: {
                        "start": 1734
                    },
                    data: [
                        [
                            "eid3",
                            "rotateZ",
                            221,
                            1513,
                            "easeInOutSine",
                            "${flower}",
                            '0deg',
                            '360deg'
                        ],
                        [
                            "eid4",
                            "rotateZ",
                            2237,
                            1513,
                            "easeInOutSine",
                            "${flower}",
                            '0deg',
                            '360deg'
                        ],
                        [
                            "eid2",
                            "scaleY",
                            0,
                            1279,
                            "easeOutQuad",
                            "${flower}",
                            '0',
                            '1'
                        ],
                        [
                            "eid1",
                            "scaleX",
                            0,
                            1279,
                            "easeOutQuad",
                            "${flower}",
                            '0',
                            '1'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_ + '/flower_edgeActions.js');
})("EDGE-242351");
