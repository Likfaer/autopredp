<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
      <?= $form->field($model, 'type')->label('Выберете профессию:')->dropDownList([
        'Сборщик' => 'Сборщик',
        'Токарь' => 'Токарь',
        'Слесарь'=>'Слесарь',
	 	'Сварщик'=>'Сварщик'
    ], ['prompt' => '']) ?>
    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>

<?php if ($model->load(Yii::$app->request->post())) { ?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ФИО</th>
      <th scope="col">Название</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($workers as $worker): ?>
      <tr>
        <td><?= $worker->nameworker  ?> </td>
		<td><?= $worker->workerstatus  ?> </td>
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