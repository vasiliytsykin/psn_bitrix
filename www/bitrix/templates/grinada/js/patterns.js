var patternizer = (function () {

    function Patternizer(){

        this.patterns = {

            'pattern-1': {
                name: 'pattern-1',
                svg: '<svg id="pattern-1" class="pattern-svg" width="520" height="280"><polyline class="stroke" points="360.8 248.5 376.6 271.9 349 271.9"/><circle class="stroke" cx="330.1" cy="234.8" r="14"/><line class="stroke" x1="326.9" y1="220.8" x2="326.9" y2="190"/><line class="stroke" x1="333.2" y1="271.9" x2="333.2" y2="251.1"/><line class="stroke" x1="320.6" y1="271.9" x2="331.7" y2="271.9"/><line class="stroke" x1="339.4" y1="223.9" x2="339.4" y2="193.2"/><line class="stroke" x1="364.3" y1="250.6" x2="371.1" y2="245.5"/><path class="stroke" d="M326.2 229.7L326.2 229.8z"/><polyline class="stroke" points="416.6 219.6 438.6 197.5 461.7 220.6"/><polyline class="stroke" points="416.6 243.7 438.6 221.6 461.7 244.7"/><polyline class="stroke" points="416.6 267.8 438.6 245.7 461.7 268.8"/><polyline class="stroke" points="424.7 98.1 446.8 76 469.8 99.1"/><polyline class="stroke" points="424.7 122.2 446.8 100.1 469.8 123.2"/><polyline class="stroke" points="424.7 146.3 446.8 124.2 469.8 147.3"/><polyline class="stroke" points="366.1 69.4 388.2 47.3 411.2 70.4"/><polyline class="stroke" points="366.1 93.4 388.2 71.4 411.2 94.4"/><polyline class="stroke" points="366.1 117.5 388.2 95.4 411.2 118.5"/><polyline class="stroke" points="204.5 188.7 226.6 166.6 249.7 189.6"/><polyline class="stroke" points="204.5 212.7 226.6 190.7 249.7 213.7"/><polyline class="stroke" points="204.5 236.8 226.6 214.7 249.7 237.8"/><polyline class="stroke" points="146.2 188.7 168.3 166.6 191.3 189.6"/><polyline class="stroke" points="146.2 212.7 168.3 190.7 191.3 213.7"/><polyline class="stroke" points="146.2 236.8 168.3 214.7 191.3 237.8"/><path class="stroke" d="M9.2 224.9c0 0 49.6 36.4 111 0.3"/><path class="stroke" d="M64.6 104.5c-6.6 0-10.1 2.8-10.1 10.5 0 9.9 5.8 24 10.1 24 5.1 0 10.1-14.2 10.1-24C74.8 107.3 71.3 104.5 64.6 104.5z"/><path class="stroke" d="M64.6 190c6.6 0 10.1-2.8 10.1-10.5 0-9.9-5.8-24-10.1-24 -5.1 0-10.1 14.2-10.1 24C54.5 187.2 58 190 64.6 190z"/><path class="stroke" d="M107.4 147.3c0-6.6-2.8-10.1-10.5-10.1 -9.9 0-24 5.8-24 10.1 0 5.1 14.2 10.1 24 10.1C104.6 157.4 107.4 153.9 107.4 147.3z"/><path class="stroke" d="M21.9 147.3c0 6.6 2.8 10.1 10.5 10.1 9.9 0 24-5.8 24-10.1 0-5.1-14.2-10.1-24-10.1C24.7 137.2 21.9 140.6 21.9 147.3z"/><polyline class="stroke" points="491.6 9.1 469.5 31.2 446.4 8.1"/><polyline class="stroke" points="480.5 53.8 469.2 65.1 457.5 53.3"/><circle class="stroke" cx="500.5" cy="34.7" r="10.3"/><circle class="stroke" cx="439.1" cy="34.7" r="10.3"/><line class="stroke" x1="288" y1="173.8" x2="288" y2="154.6"/><line class="stroke" x1="304.4" y1="173.8" x2="304.4" y2="154.6"/><path class="stroke" d="M342.5 106.9h-19.4c-0.3-0.4-0.5-0.8-0.8-1.2 -3.4-4.5-8-8.1-13.3-10.2l-6.6 9.4 -35.3 49.7v0h30.7c15.6 0 28.5-11.7 30.4-26.8L342.5 106.9z"/><path class="stroke" d="M308.3 114.8L308.3 114.9z"/><path class="stroke" d="M358.2 159.4c0 0-60.9 8.5-79.7 77.2"/><path class="stroke" d="M473.5 200.8c0 0-31.1-53.1-101.7-44.3"/><circle class="stroke" cx="148.2" cy="123.5" r="15.5"/><path class="stroke" d="M180.7 108c4.3 0 7.7 6.9 7.7 15.5 0 8.6-3.5 15.5-7.7 15.5"/><path class="stroke" d="M197.1 107.6c4.3 0 7.7 7 7.7 15.7 0 8.7-3.5 15.7-7.7 15.7"/><path class="stroke" d="M200.4 139h-17.3c-8.6 0-15.7-7.1-15.7-15.7l0 0c0-8.6 7.1-15.7 15.7-15.7h17.3c8.6 0 15.7 7.1 15.7 15.7l0 0C216.1 131.9 209.1 139 200.4 139z"/><line class="stroke" x1="182.1" y1="106.2" x2="211.7" y2="84.8"/><line class="stroke" x1="132.7" y1="123.5" x2="123.4" y2="123.1"/><path class="stroke" d="M143 119L143 119.1z"/></svg>',
                animation: {
                    speed: 'slow',
                    repeat: true
                }
            },

            'pattern-2': {
                name: 'pattern-2',
                svg: '<svg id="pattern-2" class="pattern-svg" width="800" height="240" viewBox="-399 881 800 240"><polyline class="stroke" points="209.3 957 231.4 934.9 254.4 958 "/><polyline class="stroke" points="209.3 981.1 231.4 959 254.4 982.1 "/><polyline class="stroke" points="209.3 1005.2 231.4 983.1 254.4 1006.2 "/><polyline class="stroke" points="161.6 1062.7 183.7 1040.6 206.7 1063.7 "/><polyline class="stroke" points="161.6 1086.8 183.7 1064.7 206.7 1087.8 "/><polyline class="stroke" points="161.6 1110.9 183.7 1088.8 206.7 1111.9 "/><polyline class="stroke" points="281.6 957 303.7 934.9 326.8 958 "/><polyline class="stroke" points="281.6 981.1 303.7 959 326.8 982.1 "/><polyline class="stroke" points="281.6 1005.2 303.7 983.1 326.8 1006.2 "/><circle class="stroke" cx="101.4" cy="981.3" r="11.9"/><circle class="stroke" cx="154.5" cy="981.3" r="11.9"/><path class="stroke" d="M126.5 890.1V923H93.6c0 18.2 14.7 32.9 32.9 32.9s32.9-14.7 32.9-32.9S144.6 890.1 126.5 890.1z"/><polyline class="stroke" points="389.6 971.9 369 991.4 348.4 971.9 "/><polyline class="stroke" points="389.6 994.9 369 1014.4 348.4 994.9 "/><polygon class="stroke" points="369 1084.2 355.3 1031.2 384 1031.2 "/><line class="stroke" x1="209.3" y1="1005.2" x2="93.4" y2="1005.2"/><polyline class="stroke" points="49.7 1018.8 65.4 1042.2 37.8 1042.2 "/><circle class="stroke" cx="18.9" cy="1005.2" r="14"/><line class="stroke" x1="15.7" y1="991.1" x2="15.7" y2="960.4"/><line class="stroke" x1="22" y1="1042.2" x2="22" y2="1021.5"/><line class="stroke" x1="9.4" y1="1042.2" x2="20.5" y2="1042.2"/><line class="stroke" x1="28.2" y1="994.3" x2="28.2" y2="963.5"/><line class="stroke" x1="53.1" y1="1020.9" x2="59.9" y2="1015.8"/><path class="stroke" d="M14.2 1000L14.3 1000z"/><polyline class="stroke" points="-384.5 1025.3 -239.9 1025.3 -199.4 980.1 -38.6 980.1 "/><line class="stroke" x1="-353.4" y1="1023.9" x2="-353.4" y2="1004.7"/><line class="stroke" x1="-337" y1="1023.9" x2="-337" y2="1004.7"/><path class="stroke" d="M-298.9 957h-19.4c-0.3-0.4-0.5-0.8-0.8-1.2-3.4-4.5-8-8.1-13.3-10.2l-6.6 9.4-35.3 49.7 0 0h30.7c15.6 0 28.5-11.7 30.4-26.8L-298.9 957z"/><path class="stroke" d="M-333.4 964.9L-333.5 964.9z"/><circle class="stroke" cx="-364.6" cy="1080.4" r="10.4"/><circle class="stroke" cx="-318.1" cy="1080.4" r="10.4"/><line class="stroke" x1="-295.1" y1="1070" x2="-387.6" y2="1070"/><circle class="stroke" cx="-83.7" cy="962.8" r="10.4"/><circle class="stroke" cx="-150.7" cy="962.8" r="10.4"/><polyline class="stroke" points="-143.3 936.4 -118.3 961.4 -96.8 940 "/><line class="stroke" x1="-150.7" y1="936.4" x2="-130.4" y2="936.4"/><polyline class="stroke" points="-83.7 952.4 -83.7 918.8 -52.7 918.8 "/></svg>',
                animation: {
                    speed: 'slow',
                    repeat: true
                }
            },

            'pattern-3': {
                name: 'pattern-3',
                svg: '<svg id="pattern-3" class="pattern-svg" width="520" height="190"><polyline class="stroke" points="515.8 77.9 496 97.7 475.3 77 454.6 97.7 433.9 77 "/><polyline class="stroke" points="515.8 104.5 496 124.3 475.3 103.6 454.6 124.3 433.9 103.6 "/><polyline class="stroke" points="79.5 7 57.4 29.1 34.4 6 "/><polyline class="stroke" points="68.5 51.7 57.2 63 45.4 51.2 "/><circle class="stroke" cx="88.5" cy="32.6" r="10.3"/><circle class="stroke" cx="27.1" cy="32.6" r="10.3"/><polyline class="stroke" points="4.2 95.6 26.3 73.5 49.3 96.6 "/><polyline class="stroke" points="4.2 119.7 26.3 97.6 49.3 120.7 "/><polyline class="stroke" points="4.2 143.8 26.3 121.7 49.3 144.7 "/><polyline class="stroke" points="69.2 95.6 91.3 73.5 114.3 96.6 "/><polyline class="stroke" points="69.2 119.7 91.3 97.6 114.3 120.7 "/><polyline class="stroke" points="69.2 143.8 91.3 121.7 114.3 144.7 "/><polyline class="stroke" points="389.2 135.6 411.3 113.5 434.3 136.6 "/><polyline class="stroke" points="389.2 159.7 411.3 137.6 434.3 160.7 "/><polyline class="stroke" points="389.2 183.8 411.3 161.7 434.3 184.7 "/><polyline class="stroke" points="327.1 135.6 349.2 113.5 372.2 136.6 "/><polyline class="stroke" points="327.1 159.7 349.2 137.6 372.2 160.7 "/><polyline class="stroke" points="327.1 183.8 349.2 161.7 372.2 184.7 "/><path class="stroke" d="M130.4 143c0 0 49.6-36.4 111-0.3"/><path class="stroke" d="M502.3 26.3c0 0-48.7-37.6-110.9-3"/><path class="stroke" d="M364 5.3c-6.6 0-10.1 2.8-10.1 10.5 0 9.9 5.8 24 10.1 24 5.1 0 10.1-14.2 10.1-24C374.1 8.1 370.6 5.3 364 5.3z"/><path class="stroke" d="M364 90.8c6.6 0 10.1-2.8 10.1-10.5 0-9.9-5.8-24-10.1-24-5.1 0-10.1 14.2-10.1 24C353.9 87.9 357.3 90.8 364 90.8z"/><path class="stroke" d="M406.7 48c0-6.6-2.8-10.1-10.5-10.1-9.9 0-24 5.8-24 10.1 0 5.1 14.2 10.1 24 10.1C403.9 58.1 406.7 54.7 406.7 48z"/><path class="stroke" d="M321.2 48c0 6.6 2.8 10.1 10.5 10.1 9.9 0 24-5.8 24-10.1 0-5.1-14.2-10.1-24-10.1C324.1 37.9 321.2 41.4 321.2 48z"/><polyline class="stroke" points="259.8 127.6 281.9 105.5 305 128.6 "/><polyline class="stroke" points="273.6 141.2 304.8 141.2 304.8 173.9 "/><polyline class="stroke" points="291.5 184.6 260.3 184.6 260.3 152 "/></svg>',
                animation: {
                    speed: 'slow',
                    repeat: true
                }
            },

            'pattern-4': {
                name: 'pattern-4',
                svg: '<svg id="pattern-4" class="pattern-svg" width="490" height="220"><circle class="stroke" cx="464.5" cy="160.8" r="3.7"/><circle class="stroke" cx="464.5" cy="141.6" r="5.9"/><circle class="stroke" cx="464.5" cy="121.7" r="5.9"/><polyline class="stroke" points="430.3 4.9 458 4.9 458 17.9 "/><path class="stroke" d="M458 55.4V28.7h-28.2c-15.6 0-28.3 12.7-28.3 28.3 0 0.5 0.1 1.1 0.1 1.6h28.2H458c0-0.5 0.1-1.1 0.1-1.6C458 56.5 458 55.9 458 55.4z"/><line class="stroke" x1="451.2" y1="182.5" x2="458" y2="177.4"/><path class="stroke" d="M458 203.8c0-0.5 0.1-1.1 0.1-1.6 0-15.6-12.7-28.3-28.3-28.3-15.6 0-28.3 12.7-28.3 28.3 0 0.5 0.1 1.1 0.1 1.6H458z"/><path class="stroke" d="M450.4 162.5c-5.2-5.3-12.4-8.6-20.4-8.6-7.2 0-13.8 2.7-18.8 7.1"/><path class="stroke" d="M484.4 91c0 0-48.7-37.6-110.9-3"/><path class="stroke" d="M282.6 165.2c0 0 48.7 37.6 110.9 3"/><path class="stroke" d="M346.1 69.9c-6.6 0-10.1 2.8-10.1 10.5 0 9.9 5.8 24 10.1 24 5.1 0 10.1-14.2 10.1-24C356.2 72.8 352.7 69.9 346.1 69.9z"/><path class="stroke" d="M346.1 155.4c6.6 0 10.1-2.8 10.1-10.5 0-9.9-5.8-24-10.1-24-5.1 0-10.1 14.2-10.1 24C336 152.6 339.4 155.4 346.1 155.4z"/><path class="stroke" d="M388.8 112.7c0-6.6-2.8-10.1-10.5-10.1-9.9 0-24 5.8-24 10.1 0 5.1 14.2 10.1 24 10.1C386 122.8 388.8 119.3 388.8 112.7z"/><path class="stroke" d="M303.3 112.7c0 6.6 2.8 10.1 10.5 10.1 9.9 0 24-5.8 24-10.1 0-5.1-14.2-10.1-24-10.1C306.2 102.6 303.3 106 303.3 112.7z"/><path class="stroke" d="M112.4 125.5c-6.6 0-10.1 2.8-10.1 10.5 0 9.9 5.8 24 10.1 24 5.1 0 10.1-14.2 10.1-24C122.5 128.4 119 125.5 112.4 125.5z"/><path class="stroke" d="M112.4 211c6.6 0 10.1-2.8 10.1-10.5 0-9.9-5.8-24-10.1-24-5.1 0-10.1 14.2-10.1 24C102.3 208.2 105.8 211 112.4 211z"/><path class="stroke" d="M155.2 168.3c0-6.6-2.8-10.1-10.5-10.1-9.9 0-24 5.8-24 10.1 0 5.1 14.2 10.1 24 10.1C152.3 178.4 155.2 174.9 155.2 168.3z"/><path class="stroke" d="M69.7 168.3c0 6.6 2.8 10.1 10.5 10.1 9.9 0 24-5.8 24-10.1 0-5.1-14.2-10.1-24-10.1C72.5 158.2 69.7 161.6 69.7 168.3z"/><polyline class="stroke" points="256.5 76.8 278.6 54.7 301.7 77.8 "/><polyline class="stroke" points="224.9 129.6 247 107.5 270.1 130.6 "/><polyline class="stroke" points="224.9 158.1 247 136 270.1 159.1 "/><polyline class="stroke" points="238.6 171.7 269.9 171.7 269.9 204.4 "/><polyline class="stroke" points="256.6 215.1 225.4 215.1 225.4 182.5 "/><path class="stroke" d="M99.5 97.4c0 0-61.4-4.2-93.9 59.1"/><path class="stroke" d="M117.4 97.4c0 0 61.4-4.2 93.9 59.1"/><polyline class="stroke" points="71.7 63.3 72.1 47.5 89.5 47.5 "/><circle class="stroke" cx="109.7" cy="56" r="19.9"/><line class="stroke" x1="129.5" y1="47.7" x2="144.9" y2="36.1"/><line class="stroke" x1="109.7" y1="36.1" x2="109.7" y2="29.4"/><polyline class="stroke" points="146.7 87.1 146.7 78.4 161.7 78.4 "/><path class="stroke" d="M163.8 70.5c0 0.2 0 0.5 0 0.7 0 13.2 10.7 23.9 23.9 23.9 13.2 0 23.9-10.7 23.9-23.9 0-0.2 0-0.5 0-0.7H163.8z"/><circle class="stroke" cx="186.1" cy="43" r="10.4"/></svg>',
                animation: {
                    speed: 'slow',
                    repeat: true
                }
            },

            'pattern-5': {
                name: 'pattern-5',
                svg: '<svg id="pattern-5" class="pattern-svg" width="460" height="170"><polyline class="stroke" points="387.9 98.8 235.5 98.8 205.9 139.8 69.4 139.8 "/><path class="stroke" d="M184.5 103.3c0 0.4 0.1 0.8 0.1 1.2 0 11.7-9.5 21.3-21.3 21.3-11.7 0-21.3-9.5-21.3-21.3 0-0.4 0-0.8 0.1-1.2H184.5z"/><polyline class="stroke" points="127.4 118.5 127.4 110.5 142.9 110.5 "/><circle class="stroke" cx="165" cy="75.5" r="9.3"/><polyline class="stroke" points="340.8 27.2 362.9 5.1 385.9 28.2 "/><polyline class="stroke" points="354.5 40.9 385.7 40.9 385.7 73.5 "/><polyline class="stroke" points="372.5 84.3 341.3 84.3 341.3 51.7 "/><polyline class="stroke" points="218.7 69.5 219.1 53.7 236.4 53.7 "/><circle class="stroke" cx="256.6" cy="62.2" r="19.9"/><line class="stroke" x1="276.5" y1="53.9" x2="291.9" y2="42.3"/><line class="stroke" x1="256.6" y1="42.3" x2="256.6" y2="35.5"/><path class="stroke" d="M83.1 25.3c5.6 0 8.6 2.4 8.6 8.9 0 8.4-4.9 20.4-8.6 20.4-4.3 0-8.6-12-8.6-20.4C74.5 27.7 77.4 25.3 83.1 25.3z"/><path class="stroke" d="M83.1 97.9c-5.6 0-8.6-2.4-8.6-8.9 0-8.4 4.9-20.4 8.6-20.4 4.3 0 8.6 12 8.6 20.4C91.6 95.5 88.7 97.9 83.1 97.9z"/><path class="stroke" d="M46.8 61.6c0-5.6 2.4-8.6 8.9-8.6 8.4 0 20.4 4.9 20.4 8.6 0 4.3-12 8.6-20.4 8.6C49.2 70.2 46.8 67.2 46.8 61.6z"/><path class="stroke" d="M119.4 61.6c0 5.6-2.4 8.6-8.9 8.6-8.4 0-20.4-4.9-20.4-8.6 0-4.3 12-8.6 20.4-8.6C116.9 53 119.4 56 119.4 61.6z"/><polyline class="stroke" points="306 116.6 325.8 136.4 346.4 115.7 367.2 136.4 387.9 115.7 "/><polyline class="stroke" points="306 143.2 325.8 163 346.4 142.3 367.2 163 387.9 142.3 "/><polyline class="stroke" points="50.4 115.7 28.3 93.6 5.2 116.7 "/><polyline class="stroke" points="50.4 139.8 28.3 117.7 5.2 140.8 "/><polyline class="stroke" points="50.4 163.9 28.3 141.8 5.2 164.9 "/><polyline class="stroke" points="454.8 71.5 432.7 49.5 409.6 72.5 "/><polyline class="stroke" points="454.8 95.6 432.7 73.5 409.6 96.6 "/><polyline class="stroke" points="454.8 119.7 432.7 97.6 409.6 120.7 "/></svg>',
                animation: {
                    speed: 'slow',
                    repeat: true
                }
            },

            'pattern-6': {
                name: 'pattern-6',
                svg: '<svg id="pattern-6" class="pattern-svg" width="470" height="270"><polyline class="stroke" points="23.1 121.6 175.5 121.6 205.1 162.5 341.6 162.5 396.6 74.8 461.3 74.8 "/><polyline class="stroke" points="47.6 225.9 154.1 225.9 175.5 260.2 316.9 260.2 "/><path class="stroke" d="M272.5 126.1c0 0.4 0.1 0.8 0.1 1.2 0 11.7-9.5 21.3-21.3 21.3-11.7 0-21.3-9.5-21.3-21.3 0-0.4 0-0.8 0.1-1.2H272.5z"/><polyline class="stroke" points="215.5 141.2 215.5 133.2 231 133.2 "/><circle class="stroke" cx="253.1" cy="98.2" r="9.3"/><circle class="stroke" cx="258.2" cy="223.8" r="15.5"/><path class="stroke" d="M225.7 208.3c-4.3 0-7.7 6.9-7.7 15.5s3.5 15.5 7.7 15.5"/><path class="stroke" d="M209.3 207.9c-4.3 0-7.7 7-7.7 15.7 0 8.7 3.5 15.7 7.7 15.7"/><path class="stroke" d="M206 239.3h17.3c8.6 0 15.7-7.1 15.7-15.7l0 0c0-8.6-7.1-15.7-15.7-15.7H206c-8.6 0-15.7 7.1-15.7 15.7l0 0C190.3 232.3 197.3 239.3 206 239.3z"/><line class="stroke" x1="224.4" y1="206.5" x2="194.7" y2="185.2"/><line class="stroke" x1="273.7" y1="223.8" x2="283" y2="223.5"/><path class="stroke" d="M263.4 221.9c0.2 0 0.3-0.1 0.4-0.2 0.1-0.1 0.2-0.3 0.2-0.4 0-0.2-0.1-0.3-0.2-0.4-0.2-0.2-0.6-0.2-0.8 0-0.1 0.1-0.2 0.3-0.2 0.4 0 0.2 0.1 0.3 0.2 0.4C263.1 221.8 263.2 221.9 263.4 221.9z"/><polyline class="stroke" points="316.9 218.7 335.9 199.7 355.8 219.6 "/><polyline class="stroke" points="316.9 239.5 335.9 220.4 355.8 240.3 "/><polyline class="stroke" points="316.9 260.2 335.9 241.2 355.8 261.1 "/><polyline class="stroke" points="8.7 204.3 27.7 185.2 47.6 205.1 "/><polyline class="stroke" points="8.7 225 27.7 206 47.6 225.9 "/><polyline class="stroke" points="8.7 245.8 27.7 226.7 47.6 246.6 "/><polyline class="stroke" points="25 50 47.1 27.9 70.2 50.9 "/><polyline class="stroke" points="38.8 63.6 70 63.6 70 96.2 "/><polyline class="stroke" points="56.8 107 25.5 107 25.5 74.4 "/><polyline class="stroke" points="119.1 92.2 119.5 76.4 136.8 76.4 "/><circle class="stroke" cx="157" cy="84.9" r="19.9"/><line class="stroke" x1="176.9" y1="76.6" x2="192.3" y2="65"/><line class="stroke" x1="157" y1="65" x2="157" y2="58.3"/><path class="stroke" d="M367.9 8.9c-5.6 0-8.6 2.4-8.6 8.9 0 8.4 4.9 20.4 8.6 20.4 4.3 0 8.6-12 8.6-20.4C376.5 11.3 373.5 8.9 367.9 8.9z"/><path class="stroke" d="M367.9 81.5c5.6 0 8.6-2.4 8.6-8.9 0-8.4-4.9-20.4-8.6-20.4-4.3 0-8.6 12-8.6 20.4C359.3 79.1 362.3 81.5 367.9 81.5z"/><path class="stroke" d="M404.2 45.2c0-5.6-2.4-8.6-8.9-8.6-8.4 0-20.4 4.9-20.4 8.6 0 4.3 12 8.6 20.4 8.6C401.8 53.8 404.2 50.8 404.2 45.2z"/><path class="stroke" d="M331.6 45.2c0 5.6 2.4 8.6 8.9 8.6 8.4 0 20.4-4.9 20.4-8.6 0-4.3-12-8.6-20.4-8.6C334 36.6 331.6 39.6 331.6 45.2z"/><path class="stroke" d="M112.2 137.5c-5.6 0-8.6 2.4-8.6 8.9 0 8.4 4.9 20.4 8.6 20.4 4.3 0 8.6-12 8.6-20.4C120.8 139.9 117.9 137.5 112.2 137.5z"/><path class="stroke" d="M112.2 210.1c5.6 0 8.6-2.4 8.6-8.9 0-8.4-4.9-20.4-8.6-20.4-4.3 0-8.6 12-8.6 20.4C103.7 207.6 106.6 210.1 112.2 210.1z"/><path class="stroke" d="M148.5 173.8c0-5.6-2.4-8.6-8.9-8.6-8.4 0-20.4 4.9-20.4 8.6 0 4.3 12 8.6 20.4 8.6C146.1 182.3 148.5 179.4 148.5 173.8z"/><path class="stroke" d="M75.9 173.8c0 5.6 2.4 8.6 8.9 8.6 8.4 0 20.4-4.9 20.4-8.6 0-4.3-12-8.6-20.4-8.6C78.4 165.2 75.9 168.1 75.9 173.8z"/></svg>',
                animation: {
                    speed: 'slow',
                    repeat: true
                }
            },

            'bee': {
                name: 'bee',
                svg: '<svg id="bee" class="pattern-svg" width="85" height="55"><circle class="stroke" cx="24.7" cy="37.1" r="12.9"/><path class="stroke" d="M51.6 24.3c3.6 0 6.4 5.8 6.4 12.9 0 7.1-2.9 12.9-6.4 12.9"/><path class="stroke" d="M65.2 23.9c3.6 0 6.4 5.8 6.4 13 0 7.2-2.9 13-6.4 13"/><path class="stroke" d="M68 50H53.6c-7.2 0-13-5.9-13-13l0 0c0-7.2 5.9-13 13-13H68c7.2 0 13 5.9 13 13l0 0C81 44.1 75.1 50 68 50z"/><line class="stroke" x1="52.7" y1="22.7" x2="77.3" y2="5"/><line class="stroke" x1="11.8" y1="37.1" x2="4" y2="36.8"/><path class="stroke" d="M22 34L22 34.1z"/></svg>',
                animation: {
                    speed: 'fast',
                    repeat: false
                }
            },

            'bird': {
                name: 'bird',
                svg: '<svg id="bird" class="pattern-svg" width="140" height="170" viewBox="-929 916 140 170"><line class="stroke" x1="-870" y1="1021.1" x2="-870" y2="1002"/><line class="stroke" x1="-853.7" y1="1021.1" x2="-853.7" y2="1002"/><path class="stroke" d="M-815.6 954.2h-19.3c-0.3-0.4-0.5-0.8-0.8-1.2-3.4-4.5-8-8.1-13.3-10.2l-6.6 9.4-35.3 49.8 0 0h30.7c15.6 0 28.5-11.7 30.4-26.8L-815.6 954.2z"/><path class="stroke" d="M-850 962.2L-850 962.3z"/><circle class="stroke" cx="-882.2" cy="1048.7" r="10.4"/><circle class="stroke" cx="-835.8" cy="1048.7" r="10.4"/><line class="stroke" x1="-812.8" y1="1038.3" x2="-905.2" y2="1038.3"/></svg>',
                animation: {
                    speed: 'fast',
                    repeat: false
                }
            },

            'carrot': {
                name: 'carrot',
                svg: '<svg id="carrot" class="pattern-svg" width="80" height="150"><polyline class="stroke" points="60.6,18.8 40,38.4 19.4,18.8"/><polyline class="stroke" points="60.6,41.8 40,61.3 19.4,41.8"/><polygon class="stroke" points="40,131.2 26.3,78.1 55,78.1"/></svg>',
                animation: {
                    speed: 'fast',
                    repeat: false
                }
            },

            'flower': {
                name: 'flower',
                svg: '<svg id="flower" class="pattern-svg" width="200" height="200" viewBox="1544 -89.9 200 200"><path class="stroke" d="M1644-26.2c-5.6 0-8.6 2.4-8.6 8.9 0 8.4 4.9 20.4 8.6 20.4 4.3 0 8.6-12 8.6-20.4C1652.6-23.7 1649.6-26.2 1644-26.2z"/><path class="stroke" d="M1644 46.3c5.6 0 8.6-2.4 8.6-8.9 0-8.4-4.9-20.4-8.6-20.4-4.3 0-8.6 12-8.6 20.4C1635.4 44 1638.4 46.3 1644 46.3z"/><path class="stroke" d="M1680.3 10.2c0-5.6-2.4-8.6-8.9-8.6-8.4 0-20.4 4.9-20.4 8.6 0 4.3 12 8.6 20.4 8.6C1677.9 18.7 1680.3 15.8 1680.3 10.2z"/><path class="stroke" d="M1607.7 10.2c0 5.6 2.4 8.6 8.9 8.6 8.4 0 20.4-4.9 20.4-8.6 0-4.3-12-8.6-20.4-8.6C1610.1 1.6 1607.7 4.5 1607.7 10.2z"/></svg>',
                animation: {
                    speed: 'fast',
                    repeat: false
                }
            },

            'buggy': {
                name: 'buggy',
                svg: '<svg id="buggy" class="pattern-svg" width="140" height="140"><circle class="stroke" cx="44.9" cy="105.2" r="10.6"/><circle class="stroke" cx="92.1" cy="105.2" r="10.6"/><path class="stroke" d="M67.2,24.3v29.2H38C38,69.6,51,82.7,67.2,82.7s29.2-13.1,29.2-29.2S83.3,24.3,67.2,24.3z"/></svg>',
                animation: {
                    speed: 'fast',
                    repeat: false
                }
            },

            'shower': {
                name: 'shower',
                svg: '<svg id="shower" class="pattern-svg" width="100" height="135"><line class="stroke" x1="50" y1="51.6" x2="50" y2="24.6"/><line class="stroke" x1="50" y1="109" x2="50" y2="99.6"/><line class="stroke" x1="26.5" y1="107.6" x2="33.2" y2="101"/><line class="stroke" x1="73.5" y1="107.6" x2="66.8" y2="100.9"/><path class="stroke" d="M79.1,84.4c0-0.5,0.1-1.1,0.1-1.7c0-16.1-13.1-29.2-29.2-29.2S20.8,66.6,20.8,82.8c0,0.6,0.1,1.1,0.1,1.7H79.1z"/></svg>',
                animation: {
                    speed: 'fast',
                    repeat: false
                }
            },

            'trees': {
                name: 'trees',
                svg: '<svg id="trees" class="pattern-svg" width="130" height="80"><polyline class="stroke" points="6.3,26.5 28.3,4.4 51.4,27.5"/><polyline class="stroke" points="6.3,50.5 28.3,28.5 51.4,51.5"/><polyline class="stroke" points="6.3,74.6 28.3,52.5 51.4,75.6"/><polyline class="stroke" points="78.6,26.5 100.7,4.4 123.7,27.5"/><polyline class="stroke" points="78.6,50.5 100.7,28.5 123.7,51.5"/><polyline class="stroke" points="78.6,74.6 100.7,52.5 123.7,75.6"/></svg>',
                animation: {
                    speed: 'fast',
                    repeat: false
                }
            },

            'adv-bird': {
                name: 'adv-bird',
                svg: '<svg id="adv-bird" class="pattern-svg" width="100" height="100"><line class="stroke" x1="53.3" y1="33.7" x2="53.3" y2="33.8"/><line class="stroke" x1="33.3" y1="89.1" x2="33.3" y2="70"/><line class="stroke" x1="49.6" y1="89.1" x2="49.6" y2="70"/><path class="stroke" d="M87.7,22.2H68.3c-0.3-0.4-0.5-0.8-0.8-1.2c-3.4-4.5-8-8.1-13.3-10.2l-6.6,9.4L12.3,70v0H43c15.6,0,28.5-11.7,30.4-26.8L87.7,22.2z"/></svg>',
                animation: {
                    speed: 'fast',
                    repeat: false
                }
            },

            'adv-flower': {
                name: 'adv-flower',
                svg: '<svg id="adv-flower" class="pattern-svg" width="100" height="100"><path class="stroke" d="M50,7.2c-6.6,0-10.1,2.8-10.1,10.5c0,9.9,5.8,24,10.1,24c5.1,0,10.1-14.2,10.1-24C60.1,10.1,56.6,7.2,50,7.2z"/><path class="stroke" d="M50,92.8c6.6,0,10.1-2.8,10.1-10.5c0-9.9-5.8-24-10.1-24c-5.1,0-10.1,14.2-10.1,24C39.9,89.9,43.4,92.8,50,92.8z"/><path class="stroke" d="M92.8,50c0-6.6-2.8-10.1-10.5-10.1c-9.9,0-24,5.8-24,10.1c0,5.1,14.2,10.1,24,10.1C89.9,60.1,92.8,56.6,92.8,50z"/><path class="stroke" d="M7.2,50c0,6.6,2.8,10.1,10.5,10.1c9.9,0,24-5.8,24-10.1c0-5.1-14.2-10.1-24-10.1C10.1,39.9,7.2,43.4,7.2,50z"/></svg>',
                animation: {
                    speed: 'fast',
                    repeat: false
                }
            },

            'adv-wave': {
                name: 'adv-wave',
                svg: '<svg id="adv-wave" class="pattern-svg" width="100" height="100"><polyline class="stroke" points="91,27.2 71.2,47.1 50.5,26.4 29.7,47.1 9,26.4"/><polyline class="stroke" points="91,53.8 71.2,73.6 50.5,52.9 29.7,73.6 9,52.9"/></svg>',
                animation: {
                    speed: 'fast',
                    repeat: false
                }
            },

            'adv-fish': {
                name: 'adv-fish',
                svg: '<svg id="adv-fish" class="pattern-svg" width="100" height="100"><polyline class="stroke" points="14.9,26.6 61.7,73.4 85.1,50 61.7,26.6 14.9,73.4 "/></svg>',
                animation: {
                    speed: 'fast',
                    repeat: false
                }
            }
        };

    }

    Patternizer.prototype = {

        init: function () {

            var self = this;
            var patterns = $('.pattern');

            patterns.each(function (ind, el) {

                var $el = $(el),
                    patternID = $el.data('pattern');
                $el.append(self.patterns[patternID].svg);

            });

        },

        animate: function () {

            var self = this,
                patterns = {};

            setTimeout(function(){

                $('.anim-pattern .pattern-svg').each(function(ind, el){

                    var $el = $(el),
                        patternID = $el.attr('id'),
                        pattern = self.patterns[patternID],
                        type = pattern.animation.speed;


                    patterns[patternID] = {
                        element:new Vivus(patternID, {type:(type=='fast'?'async':'oneByOne') , duration: (type=='fast'?100:400)}),
                        status:true,
                        repeat:(type == !'fast')
                    };
                });

                setInterval(function(){

                    $.each(patterns,function(ind,el){
                        if(el.repeat==true){
                            if(el.status==true){
                                el.element.play(-3);
                                el.status = false;
                            }else{
                                el.element.reset().play();
                                el.status = true;
                            }
                        }
                    });
                },10000)

            },1000);

        }

    };

    return new Patternizer();

}());


var intro_showing = false;


function freeze(el) {
    el.addClass('static');
    el.css({
        'transform': 'translate(0,0)'
    });
}

function unfreeze(el) {
    el.removeClass('static');
}

function animateBigFigure() {

    $('.big-figure:not(.static)').each(function(ind, el){

        var windowHeight = $(window).height();
        var scrolled = $(window).scrollTop() + windowHeight;
        var elOffset = $(el).offset().top;

        if(scrolled  > elOffset){
            var top_pos = -200 * ((scrolled - elOffset) / windowHeight);
            $(el).css({
                transform: ' translateY(' +  top_pos + 'px)'
            });
        }

    });

}

$(document).ready(function(){

    patternizer.init();
    patternizer.animate();
    
    $(window).scroll(function(){

        animateBigFigure();
    });


    setInterval(function(){
        $('.btn-cross').toggleClass('anim');
    }, 1000);


    (function () {

        var intro = $('.g-intro');

        if($(window).width() > 1024 && intro.length != 0){
            setTimeout(function(){
                if(!intro_showing){
                    start_intro();
                    intro_showing = true;
                }
            },3000);


        }else{
            intro.hide();
        }


        function start_intro(){

            var draw = SVG('intro-svg');
            console.log(draw);
            var sub = draw.get(2),
                video =  document.getElementById("video-main");
            console.log(sub);
            var circle = sub.get(0).get(0);
            circle.animate(1000).radius(1800);

            setTimeout(function(){
                $('.g-intro').animate({opacity:0},500,function(){
                    $('.g-intro').hide();
                    video.play();
                });
            },1000);

        }

    }());


});