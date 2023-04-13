<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Plot;
/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Scientist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scientist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namescientist')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthdayscientist')->textInput() ?>

    <?= $form->field($model, 'datestartscientist')->textInput() ?>

    <?= $form->field($model, 'expscientistscientist')->textInput() ?>

    <?= $form->field($model, 'lab_idlab')->dropDownList(ArrayHelper::map(Lab::find()->all(),'idlab','namelab')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
