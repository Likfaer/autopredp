<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */

$this->title = $model->idcategory;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="category-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idcategory' => $model->idcategory, 'type_idtype' => $model->type_idtype], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idcategory' => $model->idcategory, 'type_idtype' => $model->type_idtype], [
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
            'idcategory',
            'namecategory',
            'infocategory',
            'type_idtype',
        ],
    ]) ?>

</div>
