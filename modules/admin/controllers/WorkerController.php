<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Worker;
use app\modules\admin\models\WorkerSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\db\Query;
/**
 * WorkerController implements the CRUD actions for Worker model.
 */
class WorkerController extends Controller
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
     * Lists all Worker models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WorkerSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	public function actionQuery32()
    {
		$model = new Worker;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Worker::find()
			->where(['like', 'worker.workerstatus', $model->type]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $workers = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query32', [
            'workers' => $workers,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query32', [
				 'model' => $model,]);
				 }
    }
    /**
     * Displays a single Worker model.
     * @param int $idworker Idworker
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idworker)
    {
        return $this->render('view', [
            'model' => $this->findModel($idworker),
        ]);
    }

    /**
     * Creates a new Worker model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Worker();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idworker' => $model->idworker]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Worker model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idworker Idworker
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idworker)
    {
        $model = $this->findModel($idworker);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idworker' => $model->idworker]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Worker model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idworker Idworker
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idworker)
    {
        $this->findModel($idworker)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Worker model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idworker Idworker
     * @return Worker the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idworker)
    {
        if (($model = Worker::findOne(['idworker' => $idworker])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
