<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ScientistSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scientist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idscientist') ?>

    <?= $form->field($model, 'namescientist') ?>

    <?= $form->field($model, 'birthdayscientist') ?>

    <?= $form->field($model, 'datestartscientist') ?>

    <?= $form->field($model, 'expscientistscientist') ?>

    <?php // echo $form->field($model, 'lab_idlab') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
