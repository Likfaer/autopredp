<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Plot */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idplot')->textInput() ?>

    <?= $form->field($model, 'nameplot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'workshop_idworkshop')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
