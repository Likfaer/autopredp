<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Header */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="header-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nameheader')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdayheader')->textInput() ?>

    <?= $form->field($model, 'datestartheader')->textInput() ?>

    <?= $form->field($model, 'expheader')->textInput() ?>

    <?= $form->field($model, 'workshop_idworkshop')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
