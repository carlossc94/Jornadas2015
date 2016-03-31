<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace app\assets;
use yii\web\AssetBundle;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MaterialAsset extends AssetBundle {
    public $sourcePath = '@vendor/bower/version2';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css" ',
        'css/font-awesome.min.css',
        'css/main.css',
        'css/style.css',
        'css/animate.css',
        'css/responsive.css',
    ];
    public $js = [
        'js/material.min.js',
        'js/ripples.min.js',
        'js/jquery.js',
        'js/bootstrap.min.js',
        'http://maps.google.com/maps/api/js?sensor=true',
        'js/gmaps.js',
        'js/smoothscroll.js',
        'js/jquery.parallax.js',
        'js/coundown-timer.js',
        'js/jquery.scrollTo.js',
        'js/jquery.nav.js',
        'js/main.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',

    ];
}
