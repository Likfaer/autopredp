<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Workshop;
use app\modules\admin\models\WorkshopSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\db\Query;
/**
 * WorkshopController implements the CRUD actions for Workshop model.
 */
class WorkshopController extends Controller
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
     * Lists all Workshop models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WorkshopSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	public function actionQuery4()
    {
		$model = new Workshop;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Workshop::find()
            ->innerjoin('header', 'header.workshop_idworkshop = workshop.idworkshop')
			->innerjoin('plot', 'plot.workshop_idworkshop = workshop.idworkshop')
			->where(['like', 'workshop.idworkshop', $model->workshop]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $workshops = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query4', [
            'workshops' => $workshops,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query4', [
				 'model' => $model,]);
				 }
    }
    /**
     * Displays a single Workshop model.
     * @param int $idworkshop Idworkshop
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idworkshop)
    {
        return $this->render('view', [
            'model' => $this->findModel($idworkshop),
        ]);
    }

    /**
     * Creates a new Workshop model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Workshop();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idworkshop' => $model->idworkshop]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Workshop model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idworkshop Idworkshop
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idworkshop)
    {
        $model = $this->findModel($idworkshop);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idworkshop' => $model->idworkshop]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Workshop model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idworkshop Idworkshop
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idworkshop)
    {
        $this->findModel($idworkshop)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Workshop model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idworkshop Idworkshop
     * @return Workshop the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idworkshop)
    {
        if (($model = Workshop::findOne(['idworkshop' => $idworkshop])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
