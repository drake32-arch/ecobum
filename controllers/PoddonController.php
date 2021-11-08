<?php

namespace app\controllers;

use Yii;
use app\models\Poddon;
use app\models\PoddonSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PoddonController implements the CRUD actions for Poddon model.
 */
class PoddonController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                
            ],
        ];
    }

    /**
     * Lists all Poddon models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PoddonSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Poddon model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */



}
