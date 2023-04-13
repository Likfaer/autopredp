<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Engeneer */

$this->title = 'Update Engeneer: ' . $model->idEngener;
$this->params['breadcrumbs'][] = ['label' => 'Engeneers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idEngener, 'url' => ['view', 'idEngener' => $model->idEngener, 'plot_idplot' => $model->plot_idplot]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="engeneer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
