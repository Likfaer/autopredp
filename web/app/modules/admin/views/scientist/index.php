<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ScientistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Scientists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scientist-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Scientist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idscientist',
            'namescientist',
            'birthdayscientist',
            'datestartscientist',
            'expscientistscientist',
            //'lab_idlab',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Scientist $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idscientist' => $model->idscientist, 'lab_idlab' => $model->lab_idlab]);
                 }
            ],
        ],
    ]); ?>


</div>
