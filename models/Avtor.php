<?php
namespace app\models;
use yii\db\ActiveRecord;
class Avtor extends ActiveRecord
{
        public $cnt;
        public function getAvtor()
        {
            return $this->hasMany(Avtor::className(), ['idavtor' => 'idavtor']);
        }
        public function getKnigi()
        {
            return $this->hasMany(Knigi::className(), ['idavtor' => 'idavtor']);
        }
        public static function tableName()
        {
            return 'avtor';
        }
       public function rules()
        {
            return [
                [['fio', 'dataroj','datesmerti'], 'required'],
                [['fio'], 'trim'],
                ['idavtor', 'integer', 'min' => 1, 'max' => 100],
                [['fio'], 'string', 'max' => 255],
            ];
        }
}
