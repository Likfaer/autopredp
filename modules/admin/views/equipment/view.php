<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Equipment */

$this->title = $model->idequipment;
$this->params['breadcrumbs'][] = ['label' => 'Equipments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="equipment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idequipment' => $model->idequipment, 'lab_idlab' => $model->lab_idlab], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idequipment' => $model->idequipment, 'lab_idlab' => $model->lab_idlab], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idequipment',
            'nameequipment',
            'infoequipment',
            'lab_idlab',
        ],
    ]) ?>

</div>
