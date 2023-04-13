<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Brigade */

$this->title = 'Update Brigade: ' . $model->idbrigade;
$this->params['breadcrumbs'][] = ['label' => 'Brigades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idbrigade, 'url' => ['view', 'idbrigade' => $model->idbrigade, 'plot_idplot' => $model->plot_idplot]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="brigade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
