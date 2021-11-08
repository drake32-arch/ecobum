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
        'css/site.css',
        'css/style.css',
        'css/swipebox.css',
        'css/stacktable.css',
        'http://fonts.googleapis.com/css?family=Dancing+Script:400,700',
        'http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800',
        'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
    ];
    public $js = [
        'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
        'js/stacktable.js',
        'js/move-top.js',
        'js/easing.js',
        'js/custom.js',
        'js/jquery-1.11.0.min.js',
        'js/responsiveslides.min.js',
        ['js/jquery.swipebox.min.js', 'defer' => true],
        'js/jquery.mixitup.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
