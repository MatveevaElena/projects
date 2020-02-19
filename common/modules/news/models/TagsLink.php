<?php

namespace common\modules\news\models;

use Yii;

/**
 * This is the model class for table "tags_link".
 *
 * @property int $id
 * @property int $tag_id
 * @property int $item_id
 * @property string $model
 */
class TagsLink extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tags_link';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tag_id', 'item_id', 'model'], 'required'],
            [['tag_id', 'item_id'], 'integer'],
            [['model'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tag_id' => 'Tag ID',
            'item_id' => 'Item ID',
            'model' => 'Model',
        ];
    }
}
