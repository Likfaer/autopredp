<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'id')->label('Введите номер автомобиля:') ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

<?php if ($model->load(Yii::$app->request->post()) && $model->id) { ?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID авто</th>
      <th scope="col">Название</th>
	  <th scope="col">Статус</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($works as $work): ?>
	  <?php
			if (is_null($work->analyseend)){
				if (is_null($work->endcreationwork)){
					$work->status = 'В производстве';}
				$work->status = 'В производстве';}
			else {$work->status = 'Выпущено';}
	  ?>
      <tr>
        <td><?= $work->idwork  ?> </td>
		<td><?= $work->namework  ?> </td>
		<td><?= $work->status ?> </td>
		
      </tr>
      <?php endforeach; ?>
  </tbody>
</table>

<?php } ?>