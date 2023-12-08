<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1>
        <?= Html::encode($this->title) ?>
    </h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <ul class="list-group list-group-flush lgcontacts">
                    <li class="list-group-item bg-transparent">
                        <a>Находимся по адрессу:</a>
                        <div>
                            <a href="https://yandex.ru/maps/-/CDeD4AnH" class='mosadr' target="_blank">Киров, Московская
                                ул., 39</a>
                        </div>
                    </li>

                    <li class="list-group-item bg-transparent">
                        <a>Номера телефонов:</a>
                        <div class=phone>
                            <a href="tel:+74951234567">+7 (999) 123-45-67</a>
                        </div>
                        <div class=phone>
                            <a href="tel:+79003213235">+7 (900) 321-32-35</a>
                        </div>
                    </li>

                    <li class="list-group-item bg-transparent">
                        <a>Электронная почта:</a>
                        <div class=email>
                            <a href="mailto:delalploxo@gmail.com?subject=Вопрос о ">delalploxo@gmail.com</a>
                        </div>
                    </li>

                    <li class="list-group-item bg-transparent">
                        <a>Время работы:</a>
                        <ul class='timework'>
                            <ol>Понедельник - пятница: 9.00 - 19.00</ol>
                            <ol>Суббота: 9.00 - 17.00</ol>
                            <ol>Воскресенье: Выходной</ol>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-sm-7">
                <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abe129e69ca244c2c457c9d61eab9b14765a9b282755bd5b58ab555f9936cb15a&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>
</div>