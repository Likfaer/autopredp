<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Lab */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lab-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idlab')->textInput() ?>

    <?= $form->field($model, 'namelab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'infolab')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
