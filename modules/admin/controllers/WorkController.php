<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Work;
use app\modules\admin\models\WorkSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\db\Query;
/**
 * WorkController implements the CRUD actions for Work model.
 */
class WorkController extends Controller
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
     * Lists all Work models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new WorkSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	
	public function actionQuery1()
    {
		$model = new Work;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Work::find()
			->innerjoin('category', 'work.categorywork = category.idcategory')
			->where(['like', 'category.namecategory', $model->category]);
			//->where(['=', 'work->brigadeIdbrigade->plotIdplot->workshopIdworkshop->idworkshop', $model->workshop]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $works = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query1', [
            'works' => $works,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query1', [
				 'model' => $model,]);
				 }
    }
	public function actionQuery2()
    {
		$model = new Work;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Work::find()
			->where(['between', 'endcreationwork', $model->startdate, $model->enddate])
			->andWhere(['=', 'categorywork', $model->category]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $works = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query2', [
            'works' => $works,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query2', [
				 'model' => $model,]);
				 }
    }
	public function actionQuery5()
    {
		$model = new Work;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Work::find()
			->where(['=', 'work.idwork', $model->id]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $works = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query5', [
            'works' => $works,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query5', [
				 'model' => $model,]);
				 }
    }
	public function actionQuery8()
    {
		$model = new Work;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Work::find()
			->Where(['like', 'categorywork', $model->category])
			->andWhere(['analyseend' => null])
			->andWhere(['endcreationwork' => null]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $works = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query8', [
            'works' => $works,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query8', [
				 'model' => $model,]);
				 }
    }
	public function actionQuery10()
    {
		$model = new Work;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Work::find()

			->Where(['=', 'idwork', $model->id]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $works = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query10', [
            'works' => $works,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query10', [
				 'model' => $model,]);
				 }
    }
	public function actionQuery11()
    {
		$model = new Work;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Work::find()
			->Where(['=', 'categorywork', $model->category])
			->andWhere(['=', 'lab_idlab', $model->lab])
			->andWhere(['between', 'endcreationwork', $model->startdate, $model->enddate]);
			
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $works = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query11', [
            'works' => $works,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query11', [
				 'model' => $model,]);
				 }
    }
	public function actionQuery12()
    {
		$model = new Work;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Work::find()
			->innerjoin('category', 'work.categorywork = category.idcategory')
			->Where(['like', 'category.namecategory', $model->category])
			->andWhere(['not', ['endcreationwork' => null]])
			->andWhere(['=', 'work.lab_idlab', $model->lab])
			->orWhere(['between', 'analyseend', $model->startdate, $model->enddate]);
			
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $works = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query12', [
            'works' => $works,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query12', [
				 'model' => $model,]);
				 }
    }
	public function actionQuery13()
    {
		$model = new Work;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Work::find()
			->innerjoin('category', 'work.categorywork = category.idcategory')
			->Where(['like', 'category.namecategory', $model->category])
			->andWhere(['not', ['endcreationwork' => null]])
			->andWhere(['=', 'work.lab_idlab', $model->lab])
			->orWhere(['between', 'analyseend', $model->startdate, $model->enddate]);
			
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $works = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query13', [
            'works' => $works,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query13', [
				 'model' => $model,]);
				 }
    }
	public function actionQuery14()
    {
		$model = new Work;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Work::find()
			->innerjoin('category', 'work.categorywork = category.idcategory')
			->Where(['like', 'category.namecategory', $model->category])
			->andWhere(['IS', 'endcreationwork' , null]);
			
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $works = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query14', [
            'works' => $works,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query14', [
				 'model' => $model,]);
				 }
    }
    /**
     * Displays a single Work model.
     * @param int $idwork Idwork
     * @param int $brigade_idbrigade Brigade Idbrigade
     * @param int $lab_idlab Lab Idlab
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idwork, $brigade_idbrigade, $lab_idlab)
    {
        return $this->render('view', [
            'model' => $this->findModel($idwork, $brigade_idbrigade, $lab_idlab),
        ]);
    }

    /**
     * Creates a new Work model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Work();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idwork' => $model->idwork, 'brigade_idbrigade' => $model->brigade_idbrigade, 'lab_idlab' => $model->lab_idlab]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Work model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idwork Idwork
     * @param int $brigade_idbrigade Brigade Idbrigade
     * @param int $lab_idlab Lab Idlab
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idwork, $brigade_idbrigade, $lab_idlab)
    {
        $model = $this->findModel($idwork, $brigade_idbrigade, $lab_idlab);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idwork' => $model->idwork, 'brigade_idbrigade' => $model->brigade_idbrigade, 'lab_idlab' => $model->lab_idlab]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Work model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idwork Idwork
     * @param int $brigade_idbrigade Brigade Idbrigade
     * @param int $lab_idlab Lab Idlab
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idwork, $brigade_idbrigade, $lab_idlab)
    {
        $this->findModel($idwork, $brigade_idbrigade, $lab_idlab)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Work model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idwork Idwork
     * @param int $brigade_idbrigade Brigade Idbrigade
     * @param int $lab_idlab Lab Idlab
     * @return Work the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idwork, $brigade_idbrigade, $lab_idlab)
    {
        if (($model = Work::findOne(['idwork' => $idwork, 'brigade_idbrigade' => $brigade_idbrigade, 'lab_idlab' => $lab_idlab])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
