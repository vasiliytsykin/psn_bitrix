/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
//var dir_ = 'animate/pine/';
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
                            rect: ['142px', '163px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'pine2',
                            type: 'image',
                            rect: ['200px', '163px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'pine3',
                            type: 'image',
                            rect: ['362px', '43px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'pine4',
                            type: 'image',
                            rect: ['420px', '72px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'pine5',
                            type: 'image',
                            rect: ['412px', '193px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '520px', '280px', 'auto', 'auto'],
                            overflow: 'hidden',
                            fill: ["rgba(255,255,255,0.00)"]
                        }
                    }
                },
                timeline: {
                    duration: 2172.7890625,
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
                            "eid46",
                            "scaleY",
                            779,
                            1394,
                            "easeOutElastic",
                            "${pine5}",
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
                            "eid44",
                            "scaleX",
                            779,
                            1394,
                            "easeOutElastic",
                            "${pine5}",
                            '0',
                            '1'
                        ],
                        [
                            "eid65",
                            "left",
                            2023,
                            0,
                            "easeOutElastic",
                            "${pine3}",
                            '362px',
                            '362px'
                        ],
                        [
                            "eid60",
                            "left",
                            1848,
                            0,
                            "easeOutElastic",
                            "${pine4}",
                            '420px',
                            '420px'
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
                            "eid14",
                            "scaleY",
                            629,
                            1394,
                            "easeOutElastic",
                            "${pine3}",
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
                            "eid3",
                            "scaleX",
                            0,
                            1394,
                            "easeOutElastic",
                            "${pine1}",
                            '0',
                            '1'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_+"pine_edgeActions.js");
})("EDGE-7487529");
