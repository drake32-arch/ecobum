<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "poddon".
 *
 * @property int $id_poddona
 * @property string $name
 * @property resource|null $picture
 * @property float $price
 *
 * @property Offer[] $offers
 */
class Poddon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'poddon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['picture'], 'string'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_poddona' => 'Id Poddona',
            'name' => 'Наименование',
            'picture' => 'Picture',
            'price' => 'Цена руб./шт.',
        ];
    }

    /**
     * Gets query for [[Offers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOffers()
    {
        return $this->hasMany(Offer::className(), ['id_poddona' => 'id_poddona']);
    }
}
