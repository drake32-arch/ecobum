<?php

namespace app\models;

use yii\base\Model;

class LabForm extends Model
{
    public $name;
    public function rules(){
		return [
			['name', 'trim'],
		];
    }
}
public function getJanre()
{
    return $this->hasOne(Janre::className(), ['idjanre' => 'idjanre']);
}
public function getAvtor()
{
    return $this->hasOne(Avtor::className(), ['idavtor' => 'idavtor']);
}

public static function tableName()
{
    return "knigi";
}
}