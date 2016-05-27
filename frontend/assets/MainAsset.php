<?php

namespace frontend\assets;
use yii\web\View;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'source/style.css',
        'source/owl-carousel/owl.carousel.css',
        'source/owl-carousel/owl.theme.css',
        'source/sliteslider/css/style.css',
        'source/sliteslider/css/custom.css'
    ];
    public $js = [
        'source/script.js',
        'source/owl-carousel/owl.carousel.js',
        'source/sliteslider/js/modernizr.custom.79639.js',
        'source/slitslider/js/jquery.ba-cond.min.js',
        'source/slitslider/js/jquery.slitslider.js',
        'source/js/google_analytics_auto.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];

    public $jsOptions = [
      'position' => View::POS_HEAD,
    ];
}
