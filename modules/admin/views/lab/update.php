<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Lab */

$this->title = 'Update Lab: ' . $model->idlab;
$this->params['breadcrumbs'][] = ['label' => 'Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idlab, 'url' => ['view', 'idlab' => $model->idlab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lab-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
