<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Equipment */

$this->title = 'Update Equipment: ' . $model->idequipment;
$this->params['breadcrumbs'][] = ['label' => 'Equipments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idequipment, 'url' => ['view', 'idequipment' => $model->idequipment, 'lab_idlab' => $model->lab_idlab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="equipment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
