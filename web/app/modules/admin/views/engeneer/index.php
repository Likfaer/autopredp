<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\EngeneerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Engeneers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="engeneer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Engeneer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idEngener',
            'nameengeneer',
            'birthdayengeneer',
            'datestartengeneer',
            'expengeneer',
            //'engineerstatus',
            //'plot_idplot',
            //'plot_workshop_idworkshop',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Engeneer $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idEngener' => $model->idEngener, 'plot_idplot' => $model->plot_idplot, 'plot_workshop_idworkshop' => $model->plot_workshop_idworkshop]);
                 }
            ],
        ],
    ]); ?>


</div>
