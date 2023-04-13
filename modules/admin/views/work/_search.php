<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\WorkSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idwork') ?>

    <?= $form->field($model, 'categorywork') ?>

    <?= $form->field($model, 'namework') ?>

    <?= $form->field($model, 'startcreationwork') ?>

    <?= $form->field($model, 'endcreationwork') ?>

    <?php // echo $form->field($model, 'analyseend') ?>

    <?php // echo $form->field($model, 'brigade_idbrigade') ?>

    <?php // echo $form->field($model, 'lab_idlab') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
