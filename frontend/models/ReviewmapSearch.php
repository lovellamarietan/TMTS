<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Reviewmap;

/**
 * ReviewmapSearch represents the model behind the search form about `frontend\models\Reviewmap`.
 */
class ReviewmapSearch extends Reviewmap
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reviewmap_id', 'thesis_id', 'reviewer_id'], 'integer'],
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
        $query = Reviewmap::find();

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
            'reviewmap_id' => $this->reviewmap_id,
            'thesis_id' => $this->thesis_id,
            'reviewer_id' => $this->reviewer_id,
        ]);

        return $dataProvider;
    }
}
