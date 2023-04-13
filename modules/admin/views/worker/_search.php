<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\WorkerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idworker') ?>

    <?= $form->field($model, 'nameworker') ?>

    <?= $form->field($model, 'birthdayworker') ?>

    <?= $form->field($model, 'datestartworker') ?>

    <?= $form->field($model, 'expworker') ?>

    <?php // echo $form->field($model, 'workerstatus') ?>

    <?php // echo $form->field($model, 'idbrigade') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
