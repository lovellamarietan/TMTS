<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Review;

/**
 * ReviewSearch represents the model behind the search form about `frontend\models\Review`.
 */
class ReviewSearch extends Review
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['review_id', 'thesis_id'], 'integer'],
            [['review_due_date', 'review_status'], 'safe'],
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
        $query = Review::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'review_id' => $this->review_id,
            'review_due_date' => $this->review_due_date,
            'thesis_id' => $this->thesis_id,
        ]);

        $query->andFilterWhere(['like', 'review_status', $this->review_status]);

        return $dataProvider;
    }
}
