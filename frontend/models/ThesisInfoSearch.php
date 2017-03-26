<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ThesisInfo;

/**
 * ThesisInfoSearch represents the model behind the search form about `frontend\models\ThesisInfo`.
 */
class ThesisInfoSearch extends ThesisInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['thesis_id', 'author_id', 'adviser_id'], 'integer'],
            [['thesis_title', 'thesis_status', 'created_at', 'proposal_at', 'proposal_approved_at', 'final_defense_at', 'final_approved_at'], 'safe'],
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
        $query = ThesisInfo::find();

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
            'thesis_id' => $this->thesis_id,
            'author_id' => $this->author_id,
            'created_at' => $this->created_at,
            'proposal_at' => $this->proposal_at,
            'proposal_approved_at' => $this->proposal_approved_at,
            'final_defense_at' => $this->final_defense_at,
            'final_approved_at' => $this->final_approved_at,
            'adviser_id' => $this->adviser_id,
        ]);

        $query->andFilterWhere(['like', 'thesis_title', $this->thesis_title])
            ->andFilterWhere(['like', 'thesis_status', $this->thesis_status]);

        return $dataProvider;
    }
}
