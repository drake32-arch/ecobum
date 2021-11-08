<?php
  namespace app\controllers;
  use Yii;
  use yii\web\Controller;
  use yii\data\Pagination;
  use app\models\Avtor;
  use app\models\Janre;
  use app\models\Knigi;
  use app\models\LabForm;
  use app\models\EntryForm;


  class LibraryController extends Controller
  {
   public function actionCreate()
   {
       $avtor = new avtor();
       if( $avtor->load(Yii::$app->request->post()) && $avtor->validate() ) {
           if( $avtor->save() ) {
               return $this->refresh();
           }
       }
       return $this->render('create', ['avtor' => $avtor]);
   }
   public function actionDelet(){
      $avtor = new avtor();
      $query = avtor::find();
      $dells = $query->
      all();
      if ($avtor->load(Yii::$app->request->post()) && $avtor->idavtor)
      {
        $id = $avtor->idavtor;
        avtor::deleteAll(['=','idavtor',$id]);
        return $this->refresh();
      }
      return $this->render('delet', [
          'avtor' => $avtor]);
  }
    public function actionAvtor()
    {
        $avtors  = Avtor::find()->all();

       return $this->render('avtor', compact('avtors'));
    }

    public function actionJanre()
    {
        $janres  = Janre::find()->all();

       return $this->render('janre', compact('janres'));
    }
    public function actionKnigi()
    {  
      $model = new EntryForm();
      if ($model->load(Yii::$app->request->post()))
    {
      $name = $model->name;
      $query = Knigi::find();
      $books = $query->
      where(['like','nazvanie', $name])
      ->all();
      return $this->render('knigi', compact('books'));

      }else{
      
        $knigi = Knigi::find()->with(['avtor','janre'])->all();

       return $this->render('knigi', compact('knigi'));
    }
   }
    public function actionQuery()
    {   
        
       $book = Knigi::find()
       ->where(['between','byear','1901-01-01','2000-12-31'])
       ->orderBy('byear')
       ->all();

       return $this->render('query', compact('book'));
      
    }
    public function actionQuery2()
    {  

      $que2 = Avtor::find()
      ->joinwith(['knigi'],false)
      ->select(['fio', 'COUNT(*) as cnt'])
      ->groupBy(['fio'])
      ->all();

      return $this->render('query2', compact('que2'));
    }
    public function actionQuery3()
      {   
         $model = new EntryForm();
         if ($model->load(Yii::$app->request->post()))
       {
         $name = $model->name;
         $query = Knigi::find();
         $books = $query->
         where(['like','nazvanie', $name])
         ->all();
         return $this->render('query3', compact('books'));

         }else{
            return $this->render('query3', compact('books'));
         }
     }
    }
  