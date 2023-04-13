<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Plot;
use app\modules\admin\models\PlotSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\db\Query;
/**
 * PlotController implements the CRUD actions for Plot model.
 */
class PlotController extends Controller
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
     * Lists all Plot models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PlotSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
		public function actionQuery7()
    {
		$model = new Plot;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Plot::find()
			->where(['=', 'plot.idplot', $model->plot])
			->orWhere(['=', 'plot.workshop_idworkshop', $model->workshop]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $plots = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query7', [
            'plots' => $plots,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query7', [
				 'model' => $model,]);
				 }
    }
    /**
     * Displays a single Plot model.
     * @param int $idplot Idplot
     * @param int $workshop_idworkshop Workshop Idworkshop
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idplot, $workshop_idworkshop)
    {
        return $this->render('view', [
            'model' => $this->findModel($idplot, $workshop_idworkshop),
        ]);
    }

    /**
     * Creates a new Plot model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Plot();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idplot' => $model->idplot, 'workshop_idworkshop' => $model->workshop_idworkshop]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Plot model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idplot Idplot
     * @param int $workshop_idworkshop Workshop Idworkshop
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idplot, $workshop_idworkshop)
    {
        $model = $this->findModel($idplot, $workshop_idworkshop);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idplot' => $model->idplot, 'workshop_idworkshop' => $model->workshop_idworkshop]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Plot model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idplot Idplot
     * @param int $workshop_idworkshop Workshop Idworkshop
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idplot, $workshop_idworkshop)
    {
        $this->findModel($idplot, $workshop_idworkshop)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Plot model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idplot Idplot
     * @param int $workshop_idworkshop Workshop Idworkshop
     * @return Plot the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idplot, $workshop_idworkshop)
    {
        if (($model = Plot::findOne(['idplot' => $idplot, 'workshop_idworkshop' => $workshop_idworkshop])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
