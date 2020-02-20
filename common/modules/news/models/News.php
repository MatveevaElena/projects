<?php

namespace common\modules\news\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $text
 * @property int $time
 * @property string $author
 * @property string $img
 * @property string $title
 * @property string $short
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'time', 'author', 'img', 'title', 'short'], 'required'],
            [['text'], 'string'],
            [['time'], 'safe'],
            [['author'], 'string', 'max' => 150],
            [['img', 'title'], 'string', 'max' => 250],
            [['short'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => Yii::t('ML','Text'),
            'time' => Yii::t('ML','Time'),
            'author' => Yii::t('ML','Author'),
            'img' => Yii::t('ML','Img'),
            'title' => Yii::t('ML','Title'),
            'short' => Yii::t('ML','Short'),
        ];
    }
   

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {

            $this->time = date("Y-m-d H:i:s", strtotime($this->time));
 
            return true;
        }
    return false;
    }
}
