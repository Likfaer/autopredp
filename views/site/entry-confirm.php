<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="container p-3 mb-2 bg-success text-white">
  <tr>
    <td >Лабораторная работа №1</td>
  </tr>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <?php $form = ActiveForm::begin(); ?>
      <?= $form->field($model, 'name')->label('Ваше имя:') ?>
      <?= $form->field($model, 'email')->label('Ваш e-mail:') ?>
      <?= $form->field($model, 'age')->label('Ваш возраст:')->hint('Возраст может быть от 18 до 100.') ?>
      <?= $form->field($model, 'date')->textInput()->input('date', ['placeholder' => "дд.мм.гггг"])->label('Дата посещения:');  ?>
      <?= $form->field ( $model, 'kitchen' )->label( 'Любимая кухня:' )->dropDownList( [
        'Русская кухня' => 'Русская кухня',
        'Корейская кухня' => 'Корейская кухня',
        'Итальянская кухня' => 'Итальянская кухня'
      ], [
        'prompt' => 'Выберите вариант'
      ] )
      ?>
      <?= $form->field ( $model, 'ch' )->label( 'Порекомендуете нас друзьям?' )->radioList( [
        '1' => 'Да',
        '2' => 'Нет',
		'3' => 'Не важно'
      ] )
      ?>
      <?= $form->field($model, 'comment')->label('Текст отзыва:')->textarea(['rows' => 2, 'cols' => 5]) ?>
      <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
      </div>
      <?php ActiveForm::end(); ?>
    </div>
    <div class="col-sm">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <td>Name</td>
            <td><?= Html::encode( $model->name) ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?= Html::encode($model->email) ?></td>
          </tr>
          <tr>
            <td>Age</td>
            <td><?= Html::encode($model->age) ?></td>
          </tr>
          <tr>
            <td>Date</td>
            <td><?= Html::encode($model->date) ?></td>
          </tr>
          <tr>
            <td>Kitchen</td>
            <td><?= Html::encode($model->kitchen) ?></td>
          </tr>
          <tr>
            <td>Comment</td>
            <td><?= Html::encode($model->comment) ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
