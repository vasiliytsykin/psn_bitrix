/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
    //var dir_ = 'animate/pine_illustr_3_2/';
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
                            rect: ['27px', '100px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'pine2',
                            type: 'image',
                            rect: ['92px', '100px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'pine3',
                            type: 'image',
                            rect: ['350px', '140px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'pine4',
                            type: 'image',
                            rect: ['412px', '140px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
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
                    duration: 2173,
                    autoPlay: true,
                    data: [
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
                            "eid5",
                            "scaleX",
                            315,
                            1394,
                            "easeOutElastic",
                            "${pine2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid80",
                            "top",
                            2173,
                            0,
                            "linear",
                            "${pine4}",
                            '140px',
                            '140px'
                        ],
                        [
                            "eid86",
                            "left",
                            1848,
                            0,
                            "linear",
                            "${pine4}",
                            '412px',
                            '412px'
                        ],
                        [
                            "eid87",
                            "left",
                            2173,
                            0,
                            "linear",
                            "${pine4}",
                            '412px',
                            '412px'
                        ],
                        [
                            "eid74",
                            "top",
                            2173,
                            0,
                            "linear",
                            "${pine2}",
                            '100px',
                            '100px'
                        ],
                        [
                            "eid12",
                            "scaleX",
                            629,
                            1394,
                            "easeOutElastic",
                            "${pine3}",
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
                            "eid76",
                            "left",
                            2173,
                            0,
                            "linear",
                            "${pine2}",
                            '92px',
                            '92px'
                        ],
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
                            "eid83",
                            "top",
                            2173,
                            0,
                            "linear",
                            "${pine3}",
                            '140px',
                            '140px'
                        ],
                        [
                            "eid75",
                            "top",
                            2173,
                            0,
                            "linear",
                            "${pine1}",
                            '100px',
                            '100px'
                        ],
                        [
                            "eid84",
                            "left",
                            2023,
                            0,
                            "linear",
                            "${pine3}",
                            '350px',
                            '350px'
                        ],
                        [
                            "eid85",
                            "left",
                            2173,
                            0,
                            "linear",
                            "${pine3}",
                            '350px',
                            '350px'
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
                            "eid6",
                            "scaleY",
                            315,
                            1394,
                            "easeOutElastic",
                            "${pine2}",
                            '0',
                            '1'
                        ],
                        [
                            "eid66",
                            "width",
                            2173,
                            0,
                            "linear",
                            "${Stage}",
                            '580px',
                            '580px'
                        ],
                        [
                            "eid70",
                            "left",
                            2173,
                            0,
                            "linear",
                            "${pine1}",
                            '27px',
                            '27px'
                        ],
                        [
                            "eid14",
                            "scaleY",
                            629,
                            1394,
                            "easeOutElastic",
                            "${pine3}",
                            '0',
                            '1'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_+"pine_illustr_3_2_edgeActions.js");
})("EDGE-74875292");
