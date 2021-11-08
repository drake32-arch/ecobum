<?php
  namespace app\controllers;
  use Yii;
  use yii\web\Controller;
  use yii\data\Pagination;
  use app\models\LabForm;
  

  

  class QueController extends Controller
  {
  
    public function actionLab0()
    {    
        $model = new LabForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены
            // делаем что-то полезное с $model ...
             return $this->render('lab3', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('lab3', ['model' => $model]);
        }
    }
  }