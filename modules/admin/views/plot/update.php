<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Plot */

$this->title = 'Update Plot: ' . $model->idplot;
$this->params['breadcrumbs'][] = ['label' => 'Plots', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idplot, 'url' => ['view', 'idplot' => $model->idplot, 'workshop_idworkshop' => $model->workshop_idworkshop]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="plot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
