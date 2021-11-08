<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plastic".
 *
 * @property int $id_plastic
 * @property string $name
 * @property resource $picture
 * @property float $price_in_base
 * @property float $price_not_in_base
 *
 * @property Offer[] $offers
 */
class Plastic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plastic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'picture', 'price_in_base', 'price_not_in_base'], 'required'],
            [['picture'], 'string'],
            [['price_in_base', 'price_not_in_base'], 'number'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_plastic' => 'Id Plastic',
            'name' => 'Наименоване',
            'picture' => 'Picture',
            'price_in_base' => 'Цена на пластик с вывозом, руб./кг',
            'price_not_in_base' => 'Стоимость на базе без вывоза руб./кг',
        ];
    }

    /**
     * Gets query for [[Offers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOffers()
    {
        return $this->hasMany(Offer::className(), ['id_plastic' => 'id_plastic']);
    }
}
