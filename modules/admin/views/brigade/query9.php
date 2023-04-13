<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'work')->label('Введите номер авто:') ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
<?php if ($model->load(Yii::$app->request->post()) && $model->work) { ?>
<table class="table table-bordered">
  <thead>
    <tr>
		<th scope="col">Номер авто</th>
		<th scope="col">Название бригады</th>
		<th scope="col">Состав бригады</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($brigadess as $brigade): ?>
	  <td> <?php foreach ($brigade->works as $work): ?>
		  <h6><?= $work->namework  ?>  </h6>
		  <?php endforeach; ?></td>
	  <td><?= $brigade->namebrigade  ?> </td>
	  <td> <?php foreach ($brigade->workers as $worker): ?>
		  <h6><?= $worker->nameworker  ?> </h6>
		   <?php endforeach; ?></td>
      </tr>
      <?php endforeach; ?>
  </tbody>
</table>
<?= LinkPager::widget( [

  'pagination' => $pagination,
  'maxButtonCount' => 5,
  'activePageCssClass' => 'active',
  'linkContainerOptions' => [ 'class' => 'page-item' ],
  'linkOptions' => [ 'class' => 'page-link' ],
  'disabledListItemSubTagOptions' => [ 'tag' => 'a', 'class' => 'page-link' ],
] )
?>
<?php } ?>