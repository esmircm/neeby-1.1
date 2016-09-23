<?php
namespace yii\easyii\assets;

class AdminAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@easyii/media';
    public $css = [
        'css/admin.css',
        'css/tema2/font-icons/entypo/css/entypo.css',
        'css/tema2/bootstrap.css',
        'css/tema2/neon-core.css',
//        'css/tema2/skins/purple.css',

        
//        'css/tema1/icons.css',
//        'css/tema1/bootstrap.css',
//        'css/tema1/plugins.css',
//        'css/tema1/main.css',
//        'css/tema1/custom.css',
    ];
    
//    public $plugins = [
//        
//        'plugins/core/slimscroll/jquery.slimscroll.min.js',
//        'plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js',
//        'plugins/core/fastclick/fastclick.js',
//        'plugins/charts/sparklines/jquery.sparkline.js',
//    ];
    
    public $js = [
        'js/admin.js',
        
        'js/tema2/jquery-1.11.3.min.js',
        'js/tema2/gsap/TweenMax.min.js',
        'js/tema2/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js',
        'js/tema2/bootstrap.js',
        'js/tema2/joinable.js',
        'js/tema2/resizeable.js',
        'js/tema2/neon-api.js',
        'js/tema2/neon-chat.js',
        'js/tema2/neon-custom.js',
        
//        'plugins/core/pace/pace.min.js',
//        'js/tema1/libs/jquery-2.1.1.min.js',
//        'js/tema1/libs/jquery-ui-1.10.4.min.js',
//        'js/tema1/bootstrap/bootstrap.js',
//        'js/tema1/libs/modernizr.custom.js',
//        'js/tema1/jRespond.min.js',
//        'js/tema1/plugins/core/pace/pace.min.js',
//        'js/tema1/plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js',
//        'js/tema1/plugins/core/fastclick/fastclick.js',
//        'js/tema1/plugins/charts/sparklines/jquery.sparkline.js',
//        'js/tema1/jquery.supr.js',
//        'js/tema1/main.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\easyii\assets\SwitcherAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
