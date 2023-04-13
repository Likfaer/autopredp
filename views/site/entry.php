<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="container p-3 mb-2 bg-success text-white">
  <tr>
    <td >Лабораторная работа №1</td>
  </tr>
</div>
<?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'name')->label('Ваше имя:') ?>
	<?= $form->field($model, 'email')->label('Ваш e-mail:') ?>
	<?= $form->field($model, 'age')->label('Ваш возраст:')->hint('Возраст может быть от 18 до 100.') ?>
	<?= $form->field($model, 'date')->textInput()->input('date')->label('Дата посещения:');  ?>
	<?= $form->field($model, 'kitchen')->label('Любимая кухня:')->dropDownList([
        'Русская кухня' => 'Русская кухня',
        'Корейская кухня' => 'Корейская кухня',
        'Итальянская кухня' => 'Итальянская кухня'
    ],
    [
        'prompt' => 'Выберите вариант'
    ]) ?>
	<?= $form->field($model, 'ch')->label('Порекомендуете нас друзьям?')->radioList([
        '1' => 'Да',
        '2' => 'Нет',
		'3' => 'Не важно']) ?>
	<?= $form->field($model, 'comment')->label('Текст отзыва:')->textarea(['rows' => 2, 'cols' => 5]) ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
