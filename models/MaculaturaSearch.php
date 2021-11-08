<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Maculatura;

/**
 * MaculaturaSearch represents the model behind the search form of `app\models\Maculatura`.
 */
class MaculaturaSearch extends Maculatura
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_maculatura'], 'integer'],
            [['name', 'picture'], 'safe'],
            [['price_more_500', 'price_200', 'price_50', 'price_in_base'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Maculatura::find();

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
            'id_maculatura' => $this->id_maculatura,
            'price_more_500' => $this->price_more_500,
            'price_200' => $this->price_200,
            'price_50' => $this->price_50,
            'price_in_base' => $this->price_in_base,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'picture', $this->picture]);

        return $dataProvider;
    }
}
