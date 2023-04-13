<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'category')->label('Введите номер категории:') ?>
 	<?= $form->field($model, 'lab')->label('Введите номер лаборатории:') ?>
	<?= $form->field($model, 'startdate')->label('Введите начальную дату:') ?>
	<?= $form->field($model, 'enddate')->label('Введите конечную дату:') ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

<?php if ($model->load(Yii::$app->request->post())) { ?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID авто</th>
	  <th scope="col">Наименование авто</th>
	  <th scope="col">Наименование категории</th>
	  <th scope="col">Наименование лаборатории</th>
	  <th scope="col">Дата выпуска</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($works as $work): ?>
      <tr>
        <td><?= $work->idwork  ?> </td>
		<td><?= $work->namework  ?> </td>
		<td><?= $work->categorywork0->namecategory  ?> </td>
		<td><?= $work->labIdlab->idlab  ?> </td>
		<td><?= $work->endcreationwork  ?> </td>
		  
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

