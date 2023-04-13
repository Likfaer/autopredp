<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Engeneer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="engeneer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nameengeneer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdayengeneer')->textInput() ?>

    <?= $form->field($model, 'datestartengeneer')->textInput() ?>

    <?= $form->field($model, 'expengeneer')->textInput() ?>

    <?= $form->field($model, 'engineerstatus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plot_idplot')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
