<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Comments;

/**
 * CommentsSearch represents the model behind the search form about `frontend\models\Comments`.
 */
class CommentsSearch extends Comments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'line_no', 'reviewer_id', 'review_id'], 'integer'],
            [['section_id', 'comment', 'commented_at', 'comment_status'], 'safe'],
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
        $query = Comments::find();

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
            'id' => $this->id,
            'line_no' => $this->line_no,
            'reviewer_id' => $this->reviewer_id,
            'commented_at' => $this->commented_at,
            'review_id' => $this->review_id,
        ]);

        $query->andFilterWhere(['like', 'section_id', $this->section_id])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'comment_status', $this->comment_status]);

        return $dataProvider;
    }
}
