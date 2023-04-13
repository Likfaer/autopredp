<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Scientist */

$this->title = $model->idscientist;
$this->params['breadcrumbs'][] = ['label' => 'Scientists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="scientist-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idscientist' => $model->idscientist, 'lab_idlab' => $model->lab_idlab], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idscientist' => $model->idscientist, 'lab_idlab' => $model->lab_idlab], [
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
            'idscientist',
            'namescientist',
            'birthdayscientist',
            'datestartscientist',
            'expscientistscientist',
            'lab_idlab',
        ],
    ]) ?>

</div>
