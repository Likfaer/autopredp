<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Scientist;
use app\modules\admin\models\ScientistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
/**
 * ScientistController implements the CRUD actions for Scientist model.
 */
class ScientistController extends Controller
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
     * Lists all Scientist models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ScientistSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Scientist model.
     * @param int $idscientist Idscientist
     * @param int $lab_idlab Lab Idlab
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idscientist, $lab_idlab)
    {
        return $this->render('view', [
            'model' => $this->findModel($idscientist, $lab_idlab),
        ]);
    }

    /**
     * Creates a new Scientist model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Scientist();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idscientist' => $model->idscientist, 'lab_idlab' => $model->lab_idlab]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Scientist model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idscientist Idscientist
     * @param int $lab_idlab Lab Idlab
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idscientist, $lab_idlab)
    {
        $model = $this->findModel($idscientist, $lab_idlab);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idscientist' => $model->idscientist, 'lab_idlab' => $model->lab_idlab]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Scientist model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idscientist Idscientist
     * @param int $lab_idlab Lab Idlab
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idscientist, $lab_idlab)
    {
        $this->findModel($idscientist, $lab_idlab)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Scientist model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idscientist Idscientist
     * @param int $lab_idlab Lab Idlab
     * @return Scientist the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idscientist, $lab_idlab)
    {
        if (($model = Scientist::findOne(['idscientist' => $idscientist, 'lab_idlab' => $lab_idlab])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
