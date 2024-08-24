<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\helpers\AppHelper;
/** @var yii\web\View $this */
/** @var app\models\Tasks $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Задачи', 'url' => ['index']];
$this->params['breadcrumbs'][] =  $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tasks-view">

    <h1> Задача №<?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту задачу?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                'attribute' => 'services_id',
                'label' => 'Услуга',
                'value' => function ($model) {
                        return $model->services->name;
                    },
            ],
            [
                'attribute' => 'user_id',
                'label' => 'Пользователи',
                'value' => function ($model) {
                        return $model->user->username;
                    },
            ],
            [
                'attribute' => 'equipment_id',
                'label' => 'Оборудование',
                'value' => function ($model) {
                        return $model->equipment->name;
                    },
            ],
            'comment',
            [
                'attribute' => 'creator_id',
                'label' => 'Создатель задачи',
                'value' => function ($model) {
                        return $model->creator->username;
                    },
            ],
            [
                'attribute' => 'worker_id',
                'label' => 'Исполнитель задачи',
                'value' => function ($model) {
                        return $model->worker->username;
                    },
            ],
            'started_at',
            'end_at',
            [
                'attribute' => 'status',
                'label' => 'Статус задачи',
                'value' => function ($model) {
                        return $model->statusName->name;
                    },
            ],
        ],
    ]) ?>

</div>
