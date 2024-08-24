<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\StatusType $model */

$this->title = 'Изменить тип статуса: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Типы статусов', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="status-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
