<?php

require_once __DIR__.'/Mobile_Detect.php';
global $detect;
global $type_dev;
$detect = new Mobile_Detect;
$type_dev = ($detect->isMobile()?'modile':($detect->isTablet()?'tablet':'desktop'));

$arCSS = array(
    SITE_TEMPLATE_PATH.'/fonts/bwsurco/bwsurco.css',
    SITE_TEMPLATE_PATH.'/fonts/geometria/geometria.css',
    SITE_TEMPLATE_PATH.'/fonts/ALSRublRegular/ALSRublRegular.css',
    "/lib/bootstrap-grid.css",
    "/lib/owl.carousel/dist/assets/owl.carousel.css",
    "/lib/slick-carousel/slick/slick.css",
    "/lib/ion.rangeSlider/css/ion.rangeSlider.css",
    "/lib/pickmeup/css/pickmeup.css",
    "/lib/dragdealer/dragdealer.css",
    "/lib/magnific-popup/dist/magnific-popup.css",
    SITE_TEMPLATE_PATH.'/css/rangeSlider.css'
);
$asrScripts = array(
    "/lib/jquery/dist/jquery.min.js",
    "/lib/owl.carousel/dist/owl.carousel.js",
    "/lib/slick-carousel/slick/slick.js",
    "/lib/ion.rangeSlider/js/ion.rangeSlider.js",
    "/lib/magnific-popup/dist/jquery.magnific-popup.js",
    "/lib/dragdealer/dragdealer.js",
    "/lib/progressbar.js/dist/progressbar.js",
    "/lib/pickmeup/dist/pickmeup.min.js",
    "http://maps.googleapis.com/maps/api/js?key=AIzaSyAjpIIkyyZMHBvf1bpQgabz5QithzXaAfU&amp;sensor=true",
    "/pano/tour.js",
    SITE_TEMPLATE_PATH.'/js/vivus.js',
    SITE_TEMPLATE_PATH.'/js/svg.min.js',
    SITE_TEMPLATE_PATH.'/js/patterns.js',
    SITE_TEMPLATE_PATH.'/js/infra.js',
    SITE_TEMPLATE_PATH.'/js/script.js',
    SITE_TEMPLATE_PATH.'/js/about.js',
    SITE_TEMPLATE_PATH.'/js/contacts.js',
    SITE_TEMPLATE_PATH.'/js/flat-detail.js',
    SITE_TEMPLATE_PATH.'/js/filter.js'
);


