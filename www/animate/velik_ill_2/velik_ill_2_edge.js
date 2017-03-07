/*jslint */
/*global AdobeEdge: false, window: false, document: false, console:false, alert: false */
(function (compId) {
  //  var dir_ = 'animate/velik_ill_2/';
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
                            id: 'velik2',
                            type: 'image',
                            rect: ['194px', '33px', '117px', '63px', 'auto', 'auto'],
                            fill: ["rgba(0,0,0,0)",im+"velik2.svg",'0px','0px']
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
                    duration: 3250,
                    autoPlay: true,
                    labels: {
                        "start": 1136
                    },
                    data: [
                        [
                            "eid5",
                            "left",
                            0,
                            1136,
                            "easeInOutQuad",
                            "${velik2}",
                            '234px',
                            '194px'
                        ],
                        [
                            "eid6",
                            "left",
                            1136,
                            932,
                            "easeInOutQuad",
                            "${velik2}",
                            '194px',
                            '265px'
                        ],
                        [
                            "eid7",
                            "left",
                            2068,
                            1182,
                            "easeInOutQuad",
                            "${velik2}",
                            '265px',
                            '194px'
                        ]
                    ]
                }
            }
        };

    AdobeEdge.registerCompositionDefn(compId, symbols, fonts, scripts, resources, opts);

    if (!window.edge_authoring_mode) AdobeEdge.getComposition(compId).load(dir_+"velik_ill_2_edgeActions.js");
})("EDGE-204964241");
