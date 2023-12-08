<?php

use app\models\Category;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Equipment $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="equipment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        ArrayHelper::map(Category::find()->all(), 'id', 'name'), // 'id' и 'name' замените на фактические названия столбцов
        ['prompt' => '--Выберите тип устройства--']
    ) ?>

    <?= $form->field($model, 'received_date')->input("datetime-local") ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>