<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */

$this->title = 'Update Category: ' . $model->idcategory;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcategory, 'url' => ['view', 'idcategory' => $model->idcategory, 'type_idtype' => $model->type_idtype, 'work_idwork' => $model->work_idwork]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
