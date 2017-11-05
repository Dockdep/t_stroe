<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "/css/style.css",
//        "/css/pages-statick.css"
    ];
    public $js = [
        'http://maps.google.com/maps/api/js?key=AIzaSyCgyPQhOmGEwyAdZ0uS6fJLLvnNxgncfy0',
//        'js/markerclusterer.js',
        '/js/script.js',
        '/js/artbox_basket.js',
        '/js/owl.carousel.min.js',
        '/js/jquery.mask.min.js',
        '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

    public $jsOptions = [
        'position' =>  View::POS_END
    ];

}
