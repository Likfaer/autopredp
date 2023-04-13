<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Work */

$this->title = $model->idwork;
$this->params['breadcrumbs'][] = ['label' => 'Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="work-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idwork' => $model->idwork, 'brigade_idbrigade' => $model->brigade_idbrigade, 'lab_idlab' => $model->lab_idlab], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idwork' => $model->idwork, 'brigade_idbrigade' => $model->brigade_idbrigade, 'lab_idlab' => $model->lab_idlab], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idwork',
            'categorywork',
            'namework',
            'startcreationwork',
            'endcreationwork',
            'analyseend',
            'brigade_idbrigade',
            'lab_idlab',
        ],
    ]) ?>

</div>
