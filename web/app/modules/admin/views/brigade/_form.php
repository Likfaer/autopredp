<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Brigade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brigade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idbrigade')->textInput() ?>

    <?= $form->field($model, 'namebrigade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plot_idplot')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
