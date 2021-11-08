<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Plastic;

/**
 * PlasticSearch represents the model behind the search form of `app\models\Plastic`.
 */
class PlasticSearch extends Plastic
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_plastic'], 'integer'],
            [['name', 'picture'], 'safe'],
            [['price_in_base', 'price_not_in_base'], 'number'],
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
        $query = Plastic::find();

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
            'id_plastic' => $this->id_plastic,
            'price_in_base' => $this->price_in_base,
            'price_not_in_base' => $this->price_not_in_base,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'picture', $this->picture]);

        return $dataProvider;
    }
}
