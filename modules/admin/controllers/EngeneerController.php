<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\Engeneer;
use app\modules\admin\models\EngeneerSearch;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use yii\db\Query;
/**
 * EngeneerController implements the CRUD actions for Engeneer model.
 */
class EngeneerController extends Controller
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
     * Lists all Engeneer models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new EngeneerSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Engeneer model.
     * @param int $idEngener Id Engener
     * @param int $plot_idplot Plot Idplot
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idEngener, $plot_idplot)
    {
        return $this->render('view', [
            'model' => $this->findModel($idEngener, $plot_idplot),
        ]);
    }

    /**
     * Creates a new Engeneer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Engeneer();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idEngener' => $model->idEngener, 'plot_idplot' => $model->plot_idplot]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
	public function actionQuery31()
    {
		$model = new Engeneer;
        if ($model->load(Yii::$app->request->post()))
        {
        $query = Engeneer::find()
			->where(['like', 'engeneer.engineerstatus', $model->type]);
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);
        $engeneers = $query
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('query31', [
            'engeneers' => $engeneers,
			'model' => $model,
            'pagination' => $pagination, ]);
      }
		else {
			 return $this->render('query31', [
				 'model' => $model,]);
				 }
    }
    /**
     * Updates an existing Engeneer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idEngener Id Engener
     * @param int $plot_idplot Plot Idplot
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idEngener, $plot_idplot)
    {
        $model = $this->findModel($idEngener, $plot_idplot);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idEngener' => $model->idEngener, 'plot_idplot' => $model->plot_idplot]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Engeneer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idEngener Id Engener
     * @param int $plot_idplot Plot Idplot
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idEngener, $plot_idplot)
    {
        $this->findModel($idEngener, $plot_idplot)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Engeneer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idEngener Id Engener
     * @param int $plot_idplot Plot Idplot
     * @return Engeneer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idEngener, $plot_idplot)
    {
        if (($model = Engeneer::findOne(['idEngener' => $idEngener, 'plot_idplot' => $plot_idplot])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
