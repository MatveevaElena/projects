<?php
namespace common\components\widgets;

use yii\easyii\helpers\Data;
use yii\easyii\models\Setting;
use yii\helpers\Url;

class Redactor extends \vova07\imperavi\Widget
{
    public function init()
    {
        $this->defaultSettings = [
            'minHeight' => 400,
            'imageUpload' => Url::to(['/admin/redactor/image-upload']),
            'fileUpload' => Url::to(['/admin/redactor/file-upload']),
            'imageManagerJson' => Url::to(['/admin/redactor/images-get']),
            'fileManagerJson' => Url::to(['/admin/redactor/files-get']),
            'plugins' => ['imagemanager', 'filemanager', 'table', 'fullscreen'],
            //'formatting' => false,|
            'replaceDivs' => false,
            'paragraphize' => false
        ];
        parent::init();
    }
}