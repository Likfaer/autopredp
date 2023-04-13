<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Worker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="worker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idworker')->textInput() ?>

    <?= $form->field($model, 'nameworker')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdayworker')->textInput() ?>

    <?= $form->field($model, 'datestartworker')->textInput() ?>

    <?= $form->field($model, 'expworker')->textInput() ?>

    <?= $form->field($model, 'workerstatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brigade_idbrigade')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
