<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Engeneer */

$this->title = 'Create Engeneer';
$this->params['breadcrumbs'][] = ['label' => 'Engeneers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="engeneer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
