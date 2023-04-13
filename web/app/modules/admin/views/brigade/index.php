<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\BrigadeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Brigades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="brigade-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Brigade', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idbrigade',
            'namebrigade',
            'plot_idplot',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Brigade $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idbrigade' => $model->idbrigade, 'plot_idplot' => $model->plot_idplot]);
                 }
            ],
        ],
    ]); ?>


</div>
