<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Header */

$this->title = 'Update Header: ' . $model->idheader;
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idheader, 'url' => ['view', 'idheader' => $model->idheader, 'workshop_idworkshop' => $model->workshop_idworkshop]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="header-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
