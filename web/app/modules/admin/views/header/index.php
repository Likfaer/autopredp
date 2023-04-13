<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\HeaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Headers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="header-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Header', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idheader',
            'nameheader',
            'birthdayheader',
            'datestartheader',
            'expheader',
            //'workshop_idworkshop',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Header $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idheader' => $model->idheader, 'workshop_idworkshop' => $model->workshop_idworkshop]);
                 }
            ],
        ],
    ]); ?>


</div>
