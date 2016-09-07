<?php
namespace app\assets;

class AppAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@app/media';
    public $css = [
//        'css/styles.css',
        'css/bootstrap.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/responsive.css',
        'css/style.css',
        'css/lib.min.css',
        'css/main.css',
//        'fonts/font-awesome/css/font-awesome.css'
        'fonts/css/font-awesome.min.css',
        'js/css3-animate-it-master/css/animations.css',
        'js/skrollr-master/examples/fixed-positioning.css',
        'js/skrollr-master/examples/main.css',
        
        
    ];
    public $js = [
//        'js/scripts.js',
        'js/bootstrap.js',
        'js/jquery.1.11.1.js',
        'js/jquery.isotope.js',
        'js/main.js',
        'js/modernizr.custom.js',
        'js/owl.carousel.js',
        'js/css3-animate-it-master/js/css3-animate-it.js',
        'js/jquery-scroll-1/dist/jquery.smoove.js',
        'js/a.js',
//        'js/skrollr-master/src/skrollr.js',
        'js/skrollr-master/dist/skrollr.min.js',
        'js/skrollr-master/dist/init.js'
        
//        'js/SmoothScroll.js',
    ];
    public $font = [
//        'fonts/font-awesome/css/font-awesome.css'
        'fonts/css/font-awesome.min.css'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
