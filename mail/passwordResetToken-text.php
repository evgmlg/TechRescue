<?php

/** @var yii\web\View $this */
/** @var app\models\User $user */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Здравствуйте <?= $user->username ?>,

Для того, чтобы изменить пароль перейдите по ссылке:

<?= $resetLink ?>
