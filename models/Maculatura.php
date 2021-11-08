<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "maculatura".
 *
 * @property int $id_maculatura
 * @property string $name
 * @property resource $picture
 * @property float $price_more_500
 * @property float $price_200-500
 * @property float $price_50-200
 * @property float $price_in_base
 *
 * @property Offer[] $offers
 */
class Maculatura extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'maculatura';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'picture', 'price_more_500', 'price_200', 'price_50', 'price_in_base'], 'required'],
            [['picture'], 'string'],
            [['price_more_500', 'price_200', 'price_50', 'price_in_base'], 'number'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_maculatura' => 'Id Maculatura',
            'name' => 'Наименование',
            'picture' => 'Picture',
            'price_more_500' => 'от 500кг',
            'price_200' => '200кг - 500кг',
            'price_50' => '50кг - 200кг',
            'price_in_base' => 'Стоимость на базе без вывоза за кг',
        ];
    }

    /**
     * Gets query for [[Offers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOffers()
    {
        return $this->hasMany(Offer::className(), ['id_maculatura' => 'id_maculatura']);
    }
}
