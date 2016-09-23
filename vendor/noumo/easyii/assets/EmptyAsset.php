<?php
namespace yii\easyii\assets;

class EmptyAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@easyii/media';
    public $css = [
//        'css/empty.css',
        'css/login/bootstrap.css',
        'css/login/neon-forms.css',
    ];
    
    public $js = [
        
        'js/login/jquery-1.11.3.min.js',
        'js/login/gsap/TweenMax.min.js',
        'js/login/bootstrap.js',
        'js/login/resizeable.js',
        'js/login/jquery.validate.min.js',
        'js/login/neon-login.js',
    
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
