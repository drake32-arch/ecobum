<?php

namespace app\models;

use yii\base\Model;

class RestarauntForm extends Model
{
    public $name;
    public $email;
    public $dateguest;
    public $old;
    public $kitchen;
    public $recomend;
    public $review;
    public function rules()
    {
        return [
            [['name', 'email', 'dateguest', 'old', 'kitchen', 'recomend', 'review'], 'required', 'message' => 'Заполните все поля'],
            ['name', 'string', 'length' => [5, 30], 'message' =>'Введите имя длинной от 5 до 30 символов'], // Проверка длины имени
            ['email', 'email', 'message' =>'Введиет корректный электронный адрес'], // Корректный адрес почты
            ['dateguest', 'date', 'format' => 'dd/MM/yyyy'],   // Корректный формат даты посещения
            ['old', 'integer', 'max' => 100, 'min' => 18, 'message' =>'Ваш возраст может быть от 18 до 100 лет'],
            ['review', 'trim']// комментарий не содержит лишних пробелов



];
    }
}
