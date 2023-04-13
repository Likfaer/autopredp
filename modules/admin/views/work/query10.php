<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'id')->label('*Введите номер авто:') ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

<?php if ($model->load(Yii::$app->request->post()) && $model->id) { ?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID авто</th>
	  <th scope="col">Наименование авто</th>
	  <th scope="col">Наименование категории</th>
	  <th scope="col">Наименование лаборатории</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($works as $work): ?>
      <tr>
        <td><?= $work->idwork  ?> </td>
		<td><?= $work->namework  ?> </td>
		<td><?= $work->categorywork0->namecategory  ?> </td>
		<td><?= $work->labIdlab->namelab  ?> </td>
		  
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

