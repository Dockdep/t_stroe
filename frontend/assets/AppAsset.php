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
        "/css/style.css"
    ];
    public $js = [
        '/js/script.js',
        '/js/artbox_basket.js',
        '/js/owl.carousel.min.js',
        '/js/jquery.mask.min.js',
        '//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js',
        'http://maps.google.com/maps/api/js?key=AIzaSyBXSAliyEprv8IkWDANdy8VJiJuJrJ4eNk&sensor=false',
        'js/markerclusterer.js',

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset'
    ];

    public $jsOptions = [
        'position' =>  View::POS_END
    ];

}
