<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\Brigade;
use app\modules\admin\models\Lab;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Work */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="work-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'categorywork')->textInput() ?>

    <?= $form->field($model, 'namework')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'startcreationwork')->textInput() ?>

    <?= $form->field($model, 'endcreationwork')->textInput() ?>

    <?= $form->field($model, 'analyseend')->textInput() ?>

    <?= $form->field($model, 'brigade_idbrigade')->dropDownList(ArrayHelper::map(Brigade::find()->all(),'idbrigade','namebrigade')) ?>

    <?= $form->field($model, 'lab_idlab')->dropDownList(ArrayHelper::map(Lab::find()->all(),'idlab','namelab')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
