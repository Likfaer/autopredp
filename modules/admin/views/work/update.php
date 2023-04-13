<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Work */

$this->title = 'Update Work: ' . $model->idwork;
$this->params['breadcrumbs'][] = ['label' => 'Works', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idwork, 'url' => ['view', 'idwork' => $model->idwork, 'brigade_idbrigade' => $model->brigade_idbrigade, 'lab_idlab' => $model->lab_idlab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="work-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
