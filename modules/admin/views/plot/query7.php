<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'workshop')->label('*Введите номер цеха:') ?>
	<?= $form->field($model, 'plot')->label('*Введите номер участка:') ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

<?php if ($model->load(Yii::$app->request->post()) && $model->workshop) { ?>
<table class="table table-bordered">
  <thead>
    <tr>
	  <th scope="col">ID плота</th>
      <th scope="col">ID цеха</th>
      <th scope="col">ФИО инженера</th>
      <th scope="col">Название участка</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($plots as $plot): ?>
      <tr>
        <td><?= $plot->idplot ?> </td>
		<td><?= $plot->workshop_idworkshop ?> </td>
		<td><?= $plot->engeneer->nameengeneer ?> </td>
		<td><?= $plot->nameplot ?> </td>
		 
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

