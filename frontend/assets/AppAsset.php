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

        'css/bootstrap.css',
        'css/style.css',
        'css/font-awesome.min.css',
        'css/flexslider.css',

    ];
    public $js = [
        'js/jquery-1.11.1.min.js',
        'js/bootstrap.js',
        'js/easyResponsiveTabs.js',
        'js/jquery.wmuSlider.js',
        'js/jquery.flexisel.js',
        'js/minicart.js',
        'js/imagezoom.js',
        'js/jquery.flexslider.js',

        'js/custom.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
