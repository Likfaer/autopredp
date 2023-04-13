<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Workshop */

$this->title = $model->idworkshop;
$this->params['breadcrumbs'][] = ['label' => 'Workshops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="workshop-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idworkshop' => $model->idworkshop], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idworkshop' => $model->idworkshop], [
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
            'idworkshop',
            'nameworkshop',
            'infoworkshop',
        ],
    ]) ?>

</div>
