<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\EquipmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Equipments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Equipment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idequipment',
            'nameequipment',
            'infoequipment',
            'lab_idlab',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Equipment $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'idequipment' => $model->idequipment, 'lab_idlab' => $model->lab_idlab]);
                 }
            ],
        ],
    ]); ?>


</div>
