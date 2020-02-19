<?php

namespace common\modules\news\models;

use Yii;

/**
 * This is the model class for table "tags".
 *
 * @property int $id
 * @property string $title
 */
class Tags extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tags';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 100],
            [['title'], 'trim'],
            [['title'],'uniqValidation'],
            [['title'], 'noteqValidation']
        ];
    }
    
    public function uniqValidation($attribute, $message)
    {
        $model = self::find()->where(['title'=>$this->title])->count();
        if($model > 0){
            $this->addError($attribute, 'Такой тег уже существует');
        }
    }
    public function noteqValidation($attribute, $message)
    {
        if($this->title[0] == '='){
            $this->addError($attribute, 'Так писать нельзя!');
        }
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
}
