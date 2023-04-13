<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Equipment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idequipment')->textInput() ?>

    <?= $form->field($model, 'nameequipment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'infoequipment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab_idlab')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
