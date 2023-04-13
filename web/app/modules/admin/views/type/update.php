<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Type */

$this->title = 'Update Type: ' . $model->idtype;
$this->params['breadcrumbs'][] = ['label' => 'Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtype, 'url' => ['view', 'idtype' => $model->idtype]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
