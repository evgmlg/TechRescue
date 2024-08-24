<?php

namespace app\helpers;

use Yii;

class AppHelper
{
    public static function isVisibleForAdmin()
    {
        $is_admin = 0;
        if (!Yii::$app->user->isGuest) {
            $is_admin = Yii::$app->user->getIdentity()->is_admin;
        }
        return $is_admin;
    }

}