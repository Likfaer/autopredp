<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="container p-3 mb-2 bg-success text-white">
  <tr>
    <td >Регистрация</td>
  </tr>
</div>
<?php $form = ActiveForm::begin() ?>
<?= $form->field($model, 'username')->label('Логин:') ?>
<?= $form->field($model, 'password')->passwordInput() ?>

 <div class="form-group">
        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
<?php echo '<a type="button"  href="http://localhost/autopredp/web/index.php" class="btn btn-primary">Назад</a>' ?>
