<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\HeaderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="header-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idheader') ?>

    <?= $form->field($model, 'nameheader') ?>

    <?= $form->field($model, 'birthdayheader') ?>

    <?= $form->field($model, 'datestartheader') ?>

    <?= $form->field($model, 'expheader') ?>

    <?php // echo $form->field($model, 'workshop_idworkshop') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
