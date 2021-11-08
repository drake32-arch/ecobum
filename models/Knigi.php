<?php
namespace app\models;
use yii\db\ActiveRecord;


class Knigi extends ActiveRecord
{
    public $cnt;

    public function getAvtor()
    {
        return $this->hasOne(Avtor::className(), ['idavtor' => 'idavtor']);
    }
    public function getKnigi()
    {
        return $this->hasMany(Knigi::className(), ['idavtor' => 'idavtor']);
        return $this->hasMany(Knigi::className(), ['idjanre' => 'idjanre']);
    }

    public function getJanre()
    {
        return $this->hasOne(Janre::className(), ['idjanre' => 'idjanre']);
    }
    
}
