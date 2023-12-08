<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <title>
        <?= Html::encode($this->title) ?>
    </title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-black bg-white shadow fixed-top',
            ],

        ]);
        $menuItems = [
            ['label' => 'Услуги', 'url' => ['/services']],
            ['label' => 'О нас', 'url' => ['/site/about']],
            ['label' => 'Контакты', 'url' => ['/site/contact']],
        ];
        // if (Yii::$app->user->isGuest) {
        //     $menuItems[] = ['label' => 'Регистрация', 'url' => ['/site/signup']];
        // }
        if (!Yii::$app->user->isGuest && Yii::$app->user->identity->is_admin == 1) {
            $menuItems[] = ['label' => 'Оборудование', 'url' => ['/equipment']];
            $menuItems[] = ['label' => 'Задачи', 'url' => ['/tasks']];
        }

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
            'items' => $menuItems,
        ]);
        if (Yii::$app->user->isGuest) {
            echo Html::tag('div', Html::a('Войти', ['/site/login'], ['class' => ['btn btn-link login text-decoration-none']]), ['class' => ['d-flex']]);
        } else {
            echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                . Html::submitButton(
                    'Выйти (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout text-decoration-none',
                        'data' => [
                            'confirm' => 'Уверены, что хотите выйти из аккаунта?',

                        ],
                    ]
                )
                . Html::endForm();
        }
        if (Yii::$app->user->isGuest) {
            echo Html::tag('div', Html::a('Регистрация', ['/site/signup'], ['class' => ['btn btn-link login text-decoration-none']]), ['class' => ['d-flex']]);
        }
        NavBar::end();
        ?>
    </header>

    <main id="main" class="flex-shrink-0" role="main">
        <div class="container">
            <?php if (!empty($this->params['breadcrumbs'])): ?>
                <?= Breadcrumbs::widget([
                    'links' => $this->params['breadcrumbs'],
                    'homeLink' => [
                        'label' => 'Домой',
                        'url' => Yii::$app->homeUrl
                    ]
                ]) ?>
            <?php endif ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer id="footer" class="mt-auto py-3 bg-light">
        <div class="container">
            <div class="row text-muted">
                <div class="col-md-6 text-start text-md-start">&copy; TechRescue
                    <?= date('Y') ?>
                </div>
                <div class="col-sm-6 text-start text-md-end">
                    <a href="https://www.instagram.com/" target="_blank" style="text-decoration:none">
                        <i class="bi bi-instagram" style="color: #B0ACAC;"></i>
                    </a>
                    <a href="https://web.whatsapp.com/" target="_blank" style="text-decoration:none">
                        <i class="bi bi-whatsapp" style="color: #B0ACAC;"></i>
                    </a>
                    <a href="https://web.telegram.org/" target="_blank" style="text-decoration:none">
                        <i class="bi bi-telegram" style="color: #B0ACAC;"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>