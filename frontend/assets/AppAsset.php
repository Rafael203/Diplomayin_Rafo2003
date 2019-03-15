<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/bootstrap.css',
        'css/font-awesome.min.css',
        'css/flexslider.css',

    ];
    public $js = [
        'js/minicart.js',
        'js/jquery-1.11.1.min.js',
        'js/jquerywmuSlider.js',
        'js/jqueryflexslider.js',
        'js/jqueryflexisel.js',
        'js/imagezoom.js',
        'js/easyResponsiveTabs.js',
        'js/bootstrap.js'


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
