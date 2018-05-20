<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        /** 'css/site.css', */
        'css/main.css',
        'css/util.css',
        'css/bootstrap/css/bootstrap.min.css',
        'css/animate/animate.css',
        'css/css-hamburgers/hamburgers.min.css',
        'css/animsition/css/animsition.min.css',
        'css/select2/select2.min.css',
        'css/daterangepicker/daterangepicker.css',
        'css/slick/slick.css',
        'css/lightbox2/css/lightbox.min.css',
        'css/font-awesome-4.7.0/css/font-awesome.min.css',
        'css/themify/themify-icons.css',
        'css/Linearicons-Free-v1.0.0/icon-font.min.css',
        'css/elegant-font/html-css/style.css',
    ];
    public $js = [
        'js/jquery/jquery-3.2.1.min.js',
        'js/animsition/js/animsition.min.js',
        'js/bootstrap/js/popper.js',
        'js/bootstrap/js/bootstrap.min.js',
        'js/select2/select2.min.js',
        'js/slick/slick.min.js',
        'js/slick-custom.js',
        'js/countdowntime/countdowntime.js',
        'js/lightbox2/js/lightbox.min.js',
        'js/sweetalert/sweetalert.min.js',
        'js/main.js',
	'js/select.js',
	'js/btn.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
