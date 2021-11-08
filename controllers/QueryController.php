<?php
  namespace app\controllers;
  use Yii;
  use yii\filters\AccessControl;  
  use yii\web\Response;
  use yii\filters\VerbFilter;
  use yii\web\Controller;
  use yii\data\Pagination;
  use app\models\Avtor;
  use app\models\Knigi;
  use app\models\LabForm;
  use app\models\EntryForm;
  
use yii\base\Model;
  

  /*class QueryController extends Controller
  {
 
    public function actionIndex()
    {   
        
       $book = Knigi::find()
       ->where(['between','byear','1901-01-01','2000-12-31'])
       ->orderBy('byear')
       ->all();

        $que2 = Avtor::find()
        ->joinwith(['knigi'],false)
        ->select(['fio', 'COUNT(*) as cnt'])
        ->groupBy(['fio'])
        ->all();
        $model = new EntryForm();
        if ($model->load(Yii::$app->request->post()))
      {
        $name = $model->name;
        $query = Knigi::find();
        $books = $query->
        where(['like','nazvanie', $name])
        ->all();
        return $this->render('query', compact('books'));}
       return $this->render('query', compact('book','que2'));
      
       
    }*/
 /*   public function actionEntry()
    {   
        $model = new EntryForm();
        if ($model->load(Yii::$app->request->post()))
      {
        $name = $model->name;
        $query = Knigi::find();
        $books = $query->
        where(['like','nazvanie', $name])
        ->all();
        return $this->render('index', compact('books'));
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены
            // делаем что-то полезное с $model ...
             return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('entry', ['model' => $model]);
        }
    } */
  
 /*   public function actionFind2(){
      $books = new LabForm();
      if ($books->load(Yii::$app->request->post()))
      {
        $name = $books->name;
        $query = Knigi::find();
        $books = $query->
        where(['like','nazvanie', $name])
        ->all();
        return $this->render('index',['books'=> $books,] );
      }

  }*/
  }