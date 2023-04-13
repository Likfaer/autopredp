<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Brigade;
use app\modules\admin\models\BrigadeSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\db\Query;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Plot;
/**
 * BrigadeController implements the CRUD actions for Brigade model.
 */
class BrigadeController extends Controller
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
     * Lists all Brigade models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BrigadeSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);
		
		
		// ВОТ ЭТА СТРОЧКА
		
		$helper = ArrayHelper::map(Plot::find()->all(),'idplot','nameplot');
		
		// ВОТ ЭТА СТРОЧКА ^^^ 
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'helper' => $helper,
        ]);
    }
	public function actionQuery6()
    {
		$model = new Brigade;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Brigade::find()
			->innerjoin('plot', 'brigade.plot_idplot = plot.idplot')
			->innerjoin('workshop', 'plot.workshop_idworkshop = workshop.idworkshop')
			->where(['like', 'plot.nameplot', $model->plot])
			->andWhere(['like', 'plot.workshop_idworkshop', $model->workshop]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $brigadess = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query6', [
            'brigadess' => $brigadess,
			'model' => $model,
            'pagination' => $pagination, ]);
		}
			else {
			 return $this->render('query6', [
				 'model' => $model,]);
				 }
       }
	public function actionQuery9()
    {
		$model = new Brigade;
		if ($model->load(Yii::$app->request->post()))
        {
        $query = Brigade::find()
			->innerjoin('work', 'brigade.idbrigade = work.brigade_idbrigade')
			->where(['like', 'work.namework', $model->work]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $brigadess = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query9', [
            'brigadess' => $brigadess,
			'model' => $model,
            'pagination' => $pagination, ]);
       }
			else {
			 return $this->render('query9', [
				 'model' => $model,]);
				 }
    }

    /**
     * Displays a single Brigade model.
     * @param int $idbrigade Idbrigade
     * @param int $plot_idplot Plot Idplot
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idbrigade, $plot_idplot)
    {
        return $this->render('view', [
            'model' => $this->findModel($idbrigade, $plot_idplot),
        ]);
    }

    /**
     * Creates a new Brigade model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Brigade();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idbrigade' => $model->idbrigade, 'plot_idplot' => $model->plot_idplot]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Brigade model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idbrigade Idbrigade
     * @param int $plot_idplot Plot Idplot
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idbrigade, $plot_idplot)
    {
        $model = $this->findModel($idbrigade, $plot_idplot);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idbrigade' => $model->idbrigade, 'plot_idplot' => $model->plot_idplot]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Brigade model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idbrigade Idbrigade
     * @param int $plot_idplot Plot Idplot
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idbrigade, $plot_idplot)
    {
        $this->findModel($idbrigade, $plot_idplot)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Brigade model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idbrigade Idbrigade
     * @param int $plot_idplot Plot Idplot
     * @return Brigade the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idbrigade, $plot_idplot)
    {
        if (($model = Brigade::findOne(['idbrigade' => $idbrigade, 'plot_idplot' => $plot_idplot])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
