/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
    var dir_4_teapot_big = 'animate/4_teapot_big/';
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
                            id: 'circle',
                            type: 'image',
                            rect: ['452px', '125px', '29px', '29px', 'auto', 'auto'],
                            clip: 'rect(0px 29px 29px 0px)',
                            fill: ["rgba(0,0,0,0)",im+"circle_small.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'circle2',
                            type: 'image',
                            rect: ['452px', '125px', '29px', '29px', 'auto', 'auto'],
                            clip: 'rect(0px 29px 29px 0px)',
                            fill: ["rgba(0,0,0,0)",im+"circle_small.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'teapot',
                            type: 'image',
                            rect: ['397px', '149px', '65px', '59px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"teapot.svg",'0px','0px']
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '520px', '220px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,0.00)"]
                        }
                    }
                },
                timeline: {
                    duration: 2250,
                    autoPlay: true,
                    labels: {
                        "start": 0
                    },
                    data: [
                        [
                            "eid46",
                            "left",
                            669,
                            0,
                            "linear",
                            "${circle2}",
                            '452px',
                            '452px'
                        ],
                        [
                            "eid49",
                            "top",
                            669,
                            703,
                            "easeInQuad",
                            "${circle2}",
                            '157px',
                            '125px'
                        ],
                        [
                            "eid41",
                            "left",
                            0,
                            0,
                            "linear",
                            "${circle}",
                            '452px',
                            '452px'
                        ],
                        [
                            "eid42",
                            "left",
                            297,
                            0,
                            "linear",
                            "${circle}",
                            '452px',
                            '452px'
                        ],
                        [
                            "eid23",
                            "scaleY",
                            297,
                            289,
                            "easeInQuad",
                            "${circle}",
                            '0',
                            '1'
                        ],
                        [
                            "eid33",
                            "scaleY",
                            896,
                            250,
                            "easeInQuad",
                            "${circle}",
                            '1',
                            '0'
                        ],
                        [
                            "eid22",
                            "scaleX",
                            297,
                            289,
                            "easeInQuad",
                            "${circle}",
                            '0',
                            '1'
                        ],
                        [
                            "eid32",
                            "scaleX",
                            896,
                            250,
                            "easeInQuad",
                            "${circle}",
                            '1',
                            '0'
                        ],
                        [
                            "eid43",
                            "scaleX",
                            669,
                            289,
                            "easeInQuad",
                            "${circle2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid44",
                            "scaleX",
                            1268,
                            250,
                            "easeInQuad",
                            "${circle2}",
                            '1',
                            '0'
                        ],
                        [
                            "eid7",
                            "top",
                            297,
                            703,
                            "easeInQuad",
                            "${circle}",
                            '157px',
                            '125px'
                        ],
                        [
                            "eid47",
                            "scaleY",
                            669,
                            289,
                            "easeInQuad",
                            "${circle2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid48",
                            "scaleY",
                            1268,
                            250,
                            "easeInQuad",
                            "${circle2}",
                            '1',
                            '0'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_+"4_teapot_big_edgeActions.js");
})("EDGE-28079208");
