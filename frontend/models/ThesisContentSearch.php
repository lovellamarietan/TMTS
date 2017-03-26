<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ThesisContent;

/**
 * ThesisContentSearch represents the model behind the search form about `frontend\models\ThesisContent`.
 */
class ThesisContentSearch extends ThesisContent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_id', 'thesis_id'], 'integer'],
            [['section_id', 'content_text'], 'safe'],
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
        $query = ThesisContent::find();

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
            'content_id' => $this->content_id,
            'thesis_id' => $this->thesis_id,
        ]);

        $query->andFilterWhere(['like', 'section_id', $this->section_id])
            ->andFilterWhere(['like', 'content_text', $this->content_text]);

        return $dataProvider;
    }
}
