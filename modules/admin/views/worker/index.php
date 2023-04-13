<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\WorkerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Workers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Worker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idworker',
            'nameworker',
            'birthdayworker',
            'datestartworker',
            'expworker',
            'workerstatus',
            'idbrigade',
			[
				'attribute' => 'idbrigade',
				//'filter' => ArrayHelper::map(Plot::find()->all(),'idplot','nameplot'),
				'value'=> function($call){
					return $call->idbrigade0->namebrigade;
				}
			],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idworker' => $model->idworker]);
                 }
            ],
        ],
    ]); ?>


</div>
