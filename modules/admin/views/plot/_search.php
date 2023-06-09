<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\PlotSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="plot-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idplot') ?>

    <?= $form->field($model, 'nameplot') ?>

    <?= $form->field($model, 'infoplot') ?>

    <?= $form->field($model, 'workshop_idworkshop') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
