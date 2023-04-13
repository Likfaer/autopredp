<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Plot;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Brigade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="brigade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namebrigade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plot_idplot')->dropDownList(ArrayHelper::map(Plot::find()->all(),'idplot','nameplot')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
