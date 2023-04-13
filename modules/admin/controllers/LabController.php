<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Lab;
use app\modules\admin\models\LabSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\db\Query;
/**
 * LabController implements the CRUD actions for Lab model.
 */
class LabController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Lab models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LabSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lab model.
     * @param int $idlab Idlab
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idlab)
    {
        return $this->render('view', [
            'model' => $this->findModel($idlab),
        ]);
    }

    /**
     * Creates a new Lab model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Lab();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idlab' => $model->idlab]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Lab model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idlab Idlab
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idlab)
    {
        $model = $this->findModel($idlab);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idlab' => $model->idlab]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Lab model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idlab Idlab
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idlab)
    {
        $this->findModel($idlab)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lab model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idlab Idlab
     * @return Lab the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idlab)
    {
        if (($model = Lab::findOne(['idlab' => $idlab])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
