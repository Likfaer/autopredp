<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Worker */

$this->title = $model->idworker;
$this->params['breadcrumbs'][] = ['label' => 'Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="worker-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idworker' => $model->idworker, 'brigade_idbrigade' => $model->brigade_idbrigade], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idworker' => $model->idworker, 'brigade_idbrigade' => $model->brigade_idbrigade], [
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
            'idworker',
            'nameworker',
            'birthdayworker',
            'datestartworker',
            'expworker',
            'workerstatus',
            'brigade_idbrigade',
        ],
    ]) ?>

</div>
