<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Brigade */

$this->title = $model->idbrigade;
$this->params['breadcrumbs'][] = ['label' => 'Brigades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="brigade-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idbrigade' => $model->idbrigade, 'plot_idplot' => $model->plot_idplot], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idbrigade' => $model->idbrigade, 'plot_idplot' => $model->plot_idplot], [
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
            'idbrigade',
            'namebrigade',
            'plot_idplot',
        ],
    ]) ?>

</div>
