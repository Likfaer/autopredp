<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Header;
use app\modules\admin\models\HeaderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
/**
 * HeaderController implements the CRUD actions for Header model.
 */
class HeaderController extends Controller
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
     * Lists all Header models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new HeaderSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Header model.
     * @param int $idheader Idheader
     * @param int $workshop_idworkshop Workshop Idworkshop
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idheader, $workshop_idworkshop)
    {
        return $this->render('view', [
            'model' => $this->findModel($idheader, $workshop_idworkshop),
        ]);
    }

    /**
     * Creates a new Header model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Header();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idheader' => $model->idheader, 'workshop_idworkshop' => $model->workshop_idworkshop]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Header model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idheader Idheader
     * @param int $workshop_idworkshop Workshop Idworkshop
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idheader, $workshop_idworkshop)
    {
        $model = $this->findModel($idheader, $workshop_idworkshop);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idheader' => $model->idheader, 'workshop_idworkshop' => $model->workshop_idworkshop]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Header model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idheader Idheader
     * @param int $workshop_idworkshop Workshop Idworkshop
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idheader, $workshop_idworkshop)
    {
        $this->findModel($idheader, $workshop_idworkshop)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Header model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idheader Idheader
     * @param int $workshop_idworkshop Workshop Idworkshop
     * @return Header the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idheader, $workshop_idworkshop)
    {
        if (($model = Header::findOne(['idheader' => $idheader, 'workshop_idworkshop' => $workshop_idworkshop])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
