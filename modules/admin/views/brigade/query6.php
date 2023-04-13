	<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model, 'plot')->label('Введите номер участка:') ?>
	<?= $form->field($model, 'workshop')->label('Введите номер цеха:') ?>	
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
<?php if ($model->load(Yii::$app->request->post()) && $model->plot) { ?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID участка</th>
      <th scope="col">ФИО начальника</th>
      <th scope="col">Участок</th>
	  <th scope="col">Цех</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($brigadess as $brigade): ?>
      <tr>
        <td><?= $brigade->namebrigade  ?> </td>
		  <td>
		  <?php foreach ($brigade->workers as $worker): ?>
			  <h6><?= $worker->nameworker  ?> </h6>
		   <?php endforeach; ?></td>
		  <td> <?= $brigade->plotIdplot->nameplot ?></td>
		  <td> <?= $brigade->plotIdplot->workshopIdworkshop->nameworkshop ?></td>
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