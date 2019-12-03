<?php

namespace app\controllers;

use app\models\Room;
use app\models\User;
use app\models\Device;
use Yii;

class UserController extends RestController
{
    public $modelClass = 'app\models\User';


    public function actions()
    {
        $actions = parent::actions();

        unset($actions['index']);
        unset($actions['view']);
        unset($actions['create']);
        unset($actions['update']);
        unset($actions['delete']);

        return $actions;
    }

    public function actionLogin()
    {
        $user = new User();


        $user->load(\Yii::input(), '');
        $user->scenario = 'login';
        return $user->login();
    }

    public function actionChange()
    {
        $devices = Device::find()->where(['type_id' => 5])->all();

        foreach($devices as $device) {
            $device->value = rand(-100, 100);
            $device->save(false);
        }
    }

    public function actionInfo()
    {
        $users = User::find()->all();

        $out = [];

        foreach ($users as $user) {

            $exit = $user->rooms[0];
            $kitchen = $user->rooms[1];
            $hall = $user->rooms[2];
            $bedroom = $user->rooms[3];

            $out[] = [
                "exit" => [
                    "door" => $exit->devices[0]->value,
                    "light" => $exit->devices[1]->value
                ],
                "kitchen" => [
                    "window" => $kitchen->devices[0]->value,
                    "light" => $kitchen->devices[1]->value
                ],
                "hall" => [
                    "window1" => $hall->devices[0]->value,
                    "window2" => $hall->devices[1]->value,
                    "light1" => $hall->devices[2]->value,
                    "light2" => $hall->devices[3]->value,
                ],
                "bedroom" => [
                    "window" => $bedroom->devices[0]->value,
                    "bra" => $bedroom->devices[1]->value,
                    "light" => $bedroom->devices[2]->value
                ]
            ];
        }

        return $out;
    }
}