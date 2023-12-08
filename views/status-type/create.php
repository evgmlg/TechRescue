<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\StatusType $model */

$this->title = 'Создать новый тип статуса';
$this->params['breadcrumbs'][] = ['label' => 'Тип статуса', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="status-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
