<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Header */

$this->title = $model->idheader;
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="header-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idheader' => $model->idheader, 'workshop_idworkshop' => $model->workshop_idworkshop], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idheader' => $model->idheader, 'workshop_idworkshop' => $model->workshop_idworkshop], [
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
            'idheader',
            'nameheader',
            'birthdayheader',
            'datestartheader',
            'expheader',
            'workshop_idworkshop',
        ],
    ]) ?>

</div>
