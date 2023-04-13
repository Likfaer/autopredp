<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\PlotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Plots';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plot-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Plot', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idplot',
            'nameplot',
            'workshop_idworkshop',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Plot $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idplot' => $model->idplot, 'workshop_idworkshop' => $model->workshop_idworkshop]);
                 }
            ],
        ],
    ]); ?>


</div>
