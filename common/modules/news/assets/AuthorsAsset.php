<?php

namespace common\modules\news\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AuthorsAsset extends AssetBundle
{
    public $sourcePath = __DIR__;
    
    public $js = [
        'js/Authors.js',
    ];
    public $css = [
        'css/Authors.css',
    ];
    public $depends = [
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    
    public $publishOptions = [
        'forceCopy'=>true,
    ];
}
