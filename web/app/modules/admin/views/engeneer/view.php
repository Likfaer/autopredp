<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Engeneer */

$this->title = $model->idEngener;
$this->params['breadcrumbs'][] = ['label' => 'Engeneers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="engeneer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idEngener' => $model->idEngener, 'plot_idplot' => $model->plot_idplot, 'plot_workshop_idworkshop' => $model->plot_workshop_idworkshop], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idEngener' => $model->idEngener, 'plot_idplot' => $model->plot_idplot, 'plot_workshop_idworkshop' => $model->plot_workshop_idworkshop], [
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
            'idEngener',
            'nameengeneer',
            'birthdayengeneer',
            'datestartengeneer',
            'expengeneer',
            'engineerstatus',
            'plot_idplot',
            'plot_workshop_idworkshop',
        ],
    ]) ?>

</div>
