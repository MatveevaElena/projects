<?php
namespace common\components\gii\crud;

use yii\gii\generators\crud\Generator as BaseGiiGenerator;

class Generator extends BaseGiiGenerator {
    public $moduleName;
	public $modelName;
	/**
	 * @var boolean 
	 */
	public $enablePjax = 1;
	
	/**
	 * @inheritdoc
	 */
	public function rules() {
		return array_merge(parent::rules(), [
			[['enablePjax'], 'boolean'],
		]);
	}

	public function attributeLabels() {
        return array_merge(parent::attributeLabels(), [
            'moduleName' => 'Название модуля',
            'modelName' => 'Имя модели',
        ]);
    }
	
	public function load($data, $formName = null) {
		return parent::load($data, $formName);
    }
}
