<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Workshop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workshop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idworkshop')->textInput() ?>

    <?= $form->field($model, 'nameworkshop')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'infoworkshop')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
