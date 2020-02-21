<?php

namespace common\modules\news\models\searches;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\news\models\TagsLink;

/**
 * TagsLinkSearch represents the model behind the search form about `\common\modules\news\models\TagsLink`.
 */
class TagsLinkSearch extends TagsLink
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tag_id', 'item_id'], 'integer'],
            [['model'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TagsLink::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tag_id' => $this->tag_id,
            'item_id' => $this->item_id,
        ]);

        $query->andFilterWhere(['like', 'model', $this->model]);

        return $dataProvider;
    }
}
