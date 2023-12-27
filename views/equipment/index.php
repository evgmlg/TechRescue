<?php

use app\models\Category;
use app\models\Equipment;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\EquipmentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Оборудование';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipment-index">

    <h1>
        <?= Html::encode($this->title) ?>
    </h1>

    <p>
        <?= Html::a('Добавить новое', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

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
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'serial_number',
            [
                'attribute' => 'category_id',
                'label' => 'Категория',
                'value' => function ($model) {
                        return $model->category->name;
                    },
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'category_id',
                    Category::getDropDownList(),
                    ['class' => 'form-control', 'prompt' => '']
                ),
            ],
            'received_date',
            'description',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Equipment $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>