<?php

namespace common\modules\news\models\searches;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\news\models\News;

/**
 * NewsSearch represents the model behind the search form about `\common\modules\news\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['text', 'time', 'author', 'img', 'title', 'short'], 'safe'],
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
        $query = News::find();

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
            'time' => $this->time,
        ]);

        $query->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'short', $this->short]);

        return $dataProvider;
    }
}
