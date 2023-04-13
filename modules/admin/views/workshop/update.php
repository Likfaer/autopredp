<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Workshop */

$this->title = 'Update Workshop: ' . $model->idworkshop;
$this->params['breadcrumbs'][] = ['label' => 'Workshops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idworkshop, 'url' => ['view', 'idworkshop' => $model->idworkshop]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="workshop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
