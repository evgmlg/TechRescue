<?php

use app\helpers\AppHelper;
use app\models\Equipment;
use app\models\Tasks;
use app\models\Services;
use app\models\User;
use app\models\StatusType;

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\TasksSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Задачи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasks-index">

    <h1>
        <?= Html::encode($this->title) ?>
    </h1>

    <?php
    $columns = [

        ['class' => 'yii\grid\SerialColumn'],

        // 'id',
        [
            'attribute' => 'services_id',
            'label' => 'Услуга',
            'value' => function ($model) {
                return $model->services->name;
            },
            'filter' => Html::activeDropDownList(
                $searchModel,
                'services_id',
                Services::getDropDownList(),
                ['class' => 'form-control', 'prompt' => '--Выберите тип услуги--']
            ),
        ],
        [
            'attribute' => 'user_id',
            'label' => 'Пользователи',
            'value' => function ($model) {
                return $model->user->username;
            },
            'filter' => Html::activeDropDownList(
                $searchModel,
                'user_id',
                User::getDropDownList(),
                ['class' => 'form-control', 'prompt' => '--Выберите пользователя--']
            ),
            'visible' => AppHelper::isVisibleForAdmin()
        ],
        [
            'attribute' => 'equipment_id',
            'label' => 'Оборудование',
            'value' => function ($model) {
                return $model->equipment->name;
            },
            'filter' => Html::activeDropDownList(
                $searchModel,
                'equipment_id',
                Equipment::getDropDownList(),
                ['class' => 'form-control', 'prompt' => '--Выберите оборудование--']
            ),
        ],
        'comment',
        [
            'attribute' => 'creator_id',
            'label' => 'Создатель задачи',
            'value' => function ($model) {
                return $model->creator->username;
            },
            'filter' => Html::activeDropDownList(
                $searchModel,
                'creator_id',
                User::getDropDownList(),
                ['class' => 'form-control', 'prompt' => '--Выберите пользователя--']
            ),
            'visible' => AppHelper::isVisibleForAdmin()
        ],
        [
            'attribute' => 'worker_id',
            'label' => 'Исполнитель задачи',
            'value' => function ($model) {
                return $model->worker->username;
            },
            'filter' => Html::activeDropDownList(
                $searchModel,
                'worker_id',
                User::getDropDownList(),
                ['class' => 'form-control', 'prompt' => '--Выберите пользователя--']
            ),
            'visible' => AppHelper::isVisibleForAdmin()
        ],
        'started_at',
        'end_at',
        [
            'attribute' => 'status',
            'label' => 'Статус задачи',
            'value' => function ($model) {
                return $model->statusName->name;
            },
            'filter' => Html::activeDropDownList(
                $searchModel,
                'status',
                StatusType::getDropDownList(),
                ['class' => 'form-control', 'prompt' => '--Выберите статус--']
            ),
        ],
    ];

    if (!Yii::$app->user->isGuest && Yii::$app->user->identity->is_admin == 0){
        $columns[] = [
            'class' => ActionColumn::className(),
            'template' => '{view}',
            'urlCreator' => function ($action, Tasks $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            },
        ];
    }

    if (!Yii::$app->user->isGuest && Yii::$app->user->identity->is_admin == 1) {
        $columns[] = [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, Tasks $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            },
        ];
        ?>
        <p>
            <?= Html::a('Новая задача', ['create'], ['class' => 'btn btn-primary']) ?>
        </p>
    <?php } ?>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $columns,
        'pager' => [
            'class' => 'yii\bootstrap5\LinkPager'
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>