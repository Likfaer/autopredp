<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Worker */

$this->title = 'Update Worker: ' . $model->idworker;
$this->params['breadcrumbs'][] = ['label' => 'Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idworker, 'url' => ['view', 'idworker' => $model->idworker]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="worker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
