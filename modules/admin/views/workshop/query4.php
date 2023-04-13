<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'workshop')->label('*Введите номер цеха:') ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

<?php if ($model->load(Yii::$app->request->post()) && $model->workshop) { ?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID цеха</th>
      <th scope="col">ФИО начальника</th>
      <th scope="col">Участки</th>
	  <th scope="col">Count</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($workshops as $workshop): ?>
      <tr>
        <td><?= $workshop->nameworkshop  ?> </td>
		<td><?= $workshop->headers->nameheader  ?> </td>
		  <td>
		  <?php foreach ($workshop->plots as $plot): ?>
			  <h6><?= $plot->nameplot  ?> </h6>
		   <?php endforeach; ?></td>
		  <td><?= $workshop->countplots  ?> </td>
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

