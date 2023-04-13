<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\modules\admin\models\Plot;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\BrigadeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<?php
$this->title = 'Бригады';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brigade-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить бригаду', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idbrigade',
            'namebrigade',
            [
				'attribute' => 'plot_idplot',
				'filter' => $helper,
				'value'=> function($call){
					return $call->plotIdplot->nameplot;
				}
			],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idbrigade' => $model->idbrigade, 'plot_idplot' => $model->plot_idplot]);
                 }
            ],
        ],
    ]); ?>


</div>
