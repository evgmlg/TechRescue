<?php


use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

use app\models\Services;
use app\models\User;
use app\models\Equipment;
use app\models\StatusType

/** @var yii\web\View $this */
/** @var app\models\Tasks $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tasks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'services_id')->dropDownList(
        ArrayHelper::map(Services::find()->all(),'id','name'),
        ['prompt' => "--Выберите услугу--"]
    ) ?>

    <?= $form->field($model, 'user_id')->dropDownList(
        ArrayHelper::map(User::find()->all(),'id','username'),
        ['prompt' => "--Выберите пользователя--"]
    ) ?>

    <?= $form->field($model, 'equipment_id')->dropDownList(
        ArrayHelper::map(Equipment::find()->all(),'id','name'),
        ['prompt' => "--Оборудование--"]
    ) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creator_id')->dropDownList(
        ArrayHelper::map(User::find()->all(),'id','username'),
        ['prompt' => "--Выберите создателя задачи--"],
    ) ?>

    <?= $form->field($model, 'worker_id')->dropDownList(
        ArrayHelper::map(User::find()->all(),'id','username'),
        ['prompt' => "--Выберите исполнителя задачи--"],
    ) ?>

    <?= $form->field($model, 'started_at')->input("datetime-local") ?>

    <?= $form->field($model, 'end_at')->input("datetime-local") ?>

    <?= $form->field($model, 'status')->dropDownList(
        ArrayHelper::map(StatusType::find()->all(),'id','name'),
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
