<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Plot */

$this->title = $model->idplot;
$this->params['breadcrumbs'][] = ['label' => 'Plots', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="plot-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idplot' => $model->idplot, 'workshop_idworkshop' => $model->workshop_idworkshop], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idplot' => $model->idplot, 'workshop_idworkshop' => $model->workshop_idworkshop], [
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
            'idplot',
            'nameplot',
            'workshop_idworkshop',
        ],
    ]) ?>

</div>
