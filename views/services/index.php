<?php

use app\models\Services;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\ServicesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Услуги';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1>
        <?= Html::encode($this->title) ?>
    </h1>

    <?php
    $columns = [
        ['class' => 'yii\grid\SerialColumn'],
        'name',
        'description',
        'price',
        'time',
    ];

    if (!Yii::$app->user->isGuest && Yii::$app->user->identity->is_admin == 1) {
        $columns[] = [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, Services $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            },
        ];
        ?>
        <p>
            <?= Html::a('Создать услугу', ['create'], ['class' => 'btn btn-primary']) ?>
        </p>
    <?php } ?>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-striped table-bordered'
        ],
        'pager' => [
            'class' => 'yii\bootstrap5\LinkPager'
        ],
        'columns' => $columns,
    ]); ?>

    <?php Pjax::end(); ?>

</div>