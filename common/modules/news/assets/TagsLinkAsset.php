<?php

namespace common\modules\news\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TagsLinkAsset extends AssetBundle
{
    public $sourcePath = __DIR__;
    
    public $js = [
        'js/TagsLink.js',
    ];
    public $css = [
        'css/TagsLink.css',
    ];
    public $depends = [
    ];
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    
    public $publishOptions = [
        'forceCopy'=>true,
    ];
}
