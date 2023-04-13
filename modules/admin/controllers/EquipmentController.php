<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Equipment;
use app\modules\admin\models\EquipmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
/**
 * EquipmentController implements the CRUD actions for Equipment model.
 */
class EquipmentController extends Controller
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
     * Lists all Equipment models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new EquipmentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Equipment model.
     * @param int $idequipment Idequipment
     * @param int $lab_idlab Lab Idlab
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idequipment, $lab_idlab)
    {
        return $this->render('view', [
            'model' => $this->findModel($idequipment, $lab_idlab),
        ]);
    }

    /**
     * Creates a new Equipment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Equipment();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idequipment' => $model->idequipment, 'lab_idlab' => $model->lab_idlab]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Equipment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idequipment Idequipment
     * @param int $lab_idlab Lab Idlab
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idequipment, $lab_idlab)
    {
        $model = $this->findModel($idequipment, $lab_idlab);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idequipment' => $model->idequipment, 'lab_idlab' => $model->lab_idlab]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Equipment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idequipment Idequipment
     * @param int $lab_idlab Lab Idlab
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idequipment, $lab_idlab)
    {
        $this->findModel($idequipment, $lab_idlab)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Equipment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idequipment Idequipment
     * @param int $lab_idlab Lab Idlab
     * @return Equipment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idequipment, $lab_idlab)
    {
        if (($model = Equipment::findOne(['idequipment' => $idequipment, 'lab_idlab' => $lab_idlab])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
