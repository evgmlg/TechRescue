<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Equipment $model */

$this->title = 'Добавление оборудования';
$this->params['breadcrumbs'][] = ['label' => 'Оборудование', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
