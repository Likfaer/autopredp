<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Type;
use app\modules\admin\models\TypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;
/**
 * TypeController implements the CRUD actions for Type model.
 */
class TypeController extends Controller
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
     * Lists all Type models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TypeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Type model.
     * @param int $idtype Idtype
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idtype)
    {
        return $this->render('view', [
            'model' => $this->findModel($idtype),
        ]);
    }

    /**
     * Creates a new Type model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Type();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idtype' => $model->idtype]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Type model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idtype Idtype
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idtype)
    {
        $model = $this->findModel($idtype);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtype' => $model->idtype]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Type model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idtype Idtype
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idtype)
    {
        $this->findModel($idtype)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Type model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idtype Idtype
     * @return Type the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idtype)
    {
        if (($model = Type::findOne(['idtype' => $idtype])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
