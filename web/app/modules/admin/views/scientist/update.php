<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Scientist */

$this->title = 'Update Scientist: ' . $model->idscientist;
$this->params['breadcrumbs'][] = ['label' => 'Scientists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idscientist, 'url' => ['view', 'idscientist' => $model->idscientist, 'lab_idlab' => $model->lab_idlab]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="scientist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
