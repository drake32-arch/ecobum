<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "offer".
 *
 * @property int $id_offer
 * @property int|null $id_plastic
 * @property int|null $id_maculatura
 * @property int|null $id_poddona
 * @property int|null $id_buyer
 * @property string|null $date
 *
 * @property Maculatura $maculatura
 * @property Plastic $plastic
 * @property Poddon $poddona
 */
class Offer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'offer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_plastic', 'id_maculatura', 'id_poddona', 'id_buyer'], 'integer'],
            [['date'], 'safe'],
            [['id_maculatura'], 'exist', 'skipOnError' => true, 'targetClass' => Maculatura::className(), 'targetAttribute' => ['id_maculatura' => 'id_maculatura']],
            [['id_plastic'], 'exist', 'skipOnError' => true, 'targetClass' => Plastic::className(), 'targetAttribute' => ['id_plastic' => 'id_plastic']],
            [['id_poddona'], 'exist', 'skipOnError' => true, 'targetClass' => Poddon::className(), 'targetAttribute' => ['id_poddona' => 'id_poddona']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_offer' => 'Id Offer',
            'id_plastic' => 'Id Plastic',
            'id_maculatura' => 'Id Maculatura',
            'id_poddona' => 'Id Poddona',
            'id_buyer' => 'Id Buyer',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[Maculatura]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaculatura()
    {
        return $this->hasOne(Maculatura::className(), ['id_maculatura' => 'id_maculatura']);
    }

    /**
     * Gets query for [[Plastic]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlastic()
    {
        return $this->hasOne(Plastic::className(), ['id_plastic' => 'id_plastic']);
    }

    /**
     * Gets query for [[Poddona]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPoddona()
    {
        return $this->hasOne(Poddon::className(), ['id_poddona' => 'id_poddona']);
    }
}
