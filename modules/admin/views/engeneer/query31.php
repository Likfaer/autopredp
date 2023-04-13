<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>
      <?= $form->field($model, 'type')->label('Выберете профессию:')->dropDownList([
        'Инженер' => 'Инженер',
        'Технолог' => 'Технолог',
        'Техник'=>'Техник',
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
      <th scope="col">Профессия</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($engeneers as $engeneer): ?>
      <tr>
        <td><?= $engeneer->nameengeneer  ?> </td>
		<td><?= $engeneer->engineerstatus  ?> </td>
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