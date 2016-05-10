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
        #<!-- Bootstrap  -->
        'bootstrap/css/bootstrap.min.css',
        #<!-- plugin css  -->
        'js-plugin/animation-framework/animate.css',
        'js-plugin/pretty-photo/css/prettyPhoto.css',
        'js-plugin/isotope/css/style.css',
        'js-plugin/supersized/css/supersized.css',
        'js-plugin/supersized/theme/supersized.shutter.css',
        #<!-- icon fonts -->
        'font-icons/custom-icons/css/custom-icons.css',
        'font-icons/custom-icons/css/custom-icons-ie7.css',
        #<!-- Custom css -->
        'css/layout.css',
        'css/colors.css',
    ];
    public $js = [
        'js/modernizr-2.6.1.min.js',
        'js-plugin/respond/respond.min.js',
        'js-plugin/jquery/1.8.3/jquery.min.js',
        'js-plugin/jquery-ui/jquery-ui-1.8.23.custom.min.js',
        #<!-- third party plugins  -->
        'bootstrap/js/bootstrap.js',
        'bootstrap/js/bootstrap-carousel-ie.js',
        'js-plugin/easing/jquery.easing.1.3.js',
        'js-plugin/supersized/js/supersized.3.2.7.min.js',
        'js-plugin/supersized/theme/supersized.shutter.min.js',
        'js-plugin/responsive-nav/responsive-nav.min.js',
        'js-plugin/isotope/jquery.isotope.min.js',
        'js-plugin/neko-contact-ajax-plugin/js/jquery.form.js',
        'js-plugin/neko-contact-ajax-plugin/js/jquery.validate.min.js',
        'js-plugin/pretty-photo/js/jquery.prettyPhoto.js',
        'js-plugin/parallax/js/jquery.scrollTo-1.4.3.1-min.js',
        'js-plugin/parallax/js/jquery.localscroll-1.2.7-min.js',
        'js-plugin/parallax/js/jquery.stellar.min.js',
        #<!-- Custom  -->
        'js/custom.js',
    ];
    public $depends = [
        #'yii\web\YiiAsset',
        #'yii\bootstrap\BootstrapAsset',
    ];
}
class FontAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        #<!-- web font  -->
        '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,800',
    ];
    public $cssOptions = [
        'type' => 'text/css',
    ];
}
