<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\EngeneerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="engeneer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idEngener') ?>

    <?= $form->field($model, 'nameengeneer') ?>

    <?= $form->field($model, 'birthdayengeneer') ?>

    <?= $form->field($model, 'datestartengeneer') ?>

    <?= $form->field($model, 'expengeneer') ?>

    <?php // echo $form->field($model, 'engineerstatus') ?>

    <?php // echo $form->field($model, 'plot_idplot') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
