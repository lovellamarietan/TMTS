<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Keymap;

/**
 * KeymapSearch represents the model behind the search form about `frontend\models\Keymap`.
 */
class KeymapSearch extends Keymap
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['keymap_id', 'thesis_id', 'keyword_id'], 'integer'],
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
        $query = Keymap::find();

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
            'keymap_id' => $this->keymap_id,
            'thesis_id' => $this->thesis_id,
            'keyword_id' => $this->keyword_id,
        ]);

        return $dataProvider;
    }
}
