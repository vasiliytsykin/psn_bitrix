/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
   // var dir_ = 'animate/pine_ill2/';
    var dir_img =  patternizer.setDir(compId, 1);
    var dir_ =  patternizer.setDir(compId, 0);
    "use strict";
    var im=dir_img,
        aud=dir_+ 'media/',
        vid=dir_+ 'media/',
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
                            id: 'pine3',
                            type: 'image',
                            rect: ['589px', '50px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'pine4',
                            type: 'image',
                            rect: ['662px', '50px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        },
                        {
                            id: 'pine5',
                            type: 'image',
                            rect: ['542px', '156px', '10.4%', '79px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"pine.svg",'0px','0px'],
                            transform: [[],[],[],['0','0']]
                        }
                    ],
                    style: {
                        '${Stage}': {
                            isStage: true,
                            rect: ['null', 'null', '800px', '250px', 'auto', 'auto'],
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
                            "eid68",
                            "left",
                            2173,
                            0,
                            "linear",
                            "${pine5}",
                            '542px',
                            '542px'
                        ],
                        [
                            "eid69",
                            "top",
                            2173,
                            0,
                            "linear",
                            "${pine5}",
                            '156px',
                            '156px'
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
                            "eid89",
                            "height",
                            0,
                            0,
                            "linear",
                            "${Stage}",
                            '250px',
                            '250px'
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
                            "eid83",
                            "left",
                            2173,
                            0,
                            "linear",
                            "${pine3}",
                            '589px',
                            '589px'
                        ],
                        [
                            "eid80",
                            "left",
                            2173,
                            0,
                            "linear",
                            "${pine4}",
                            '662px',
                            '662px'
                        ],
                        [
                            "eid75",
                            "top",
                            2173,
                            0,
                            "linear",
                            "${pine4}",
                            '50px',
                            '50px'
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
                            "eid66",
                            "width",
                            2173,
                            0,
                            "linear",
                            "${Stage}",
                            '800px',
                            '800px'
                        ],
                        [
                            "eid79",
                            "top",
                            2173,
                            0,
                            "linear",
                            "${pine3}",
                            '50px',
                            '50px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_+"pine_ill2_edgeActions.js");
})("EDGE-74875291");
