<?php

namespace app\controllers;

use yii\rest\ActiveController;

class RestController extends ActiveController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['corsFilter'] = [
             'class' => \yii\filters\Cors::className(),
             'cors' => [
                 'Origin' => ['*'],
                 'Access-Control-Request-Method' => ['GET', 'DELETE', 'HEAD', 'OPTIONS', 'PATCH', 'POST', 'PUT'],
                 'Access-Control-Request-Headers' => ['*']
             ]
         ];

        return $behaviors;
    }
}