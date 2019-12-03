<?php

namespace app\controllers;


use app\models\Device;
use app\models\Macro;
use app\models\Room;
use Yii;
use yii\web\NotFoundHttpException;

class MacroController extends RestController
{
    public $modelClass = 'app\models\Macro';

    public function actions()
    {
        $actions = parent::actions();

        unset($actions['index']);
        unset($actions['view']);

        unset($actions['create']);
        unset($actions['delete']);
        unset($actions['update']);

        return $actions;
    }

    public function actionIndex()
    {
        return Macro::find()->where(['user_id' => Yii::$app->user->id])->select('id, name')->all();
    }

    public function actionView($id)
    {
        $macro = Macro::findOne(['id' => $id, 'user_id' => Yii::$app->user->id]);

        foreach ($macro->actions as $action) {
            $device = Device::findOne($action->device_id);
            $device->value = $action->value;
            $device->save(false);
        }

        return [
            'success' => true
        ];
    }

    public function actionCreate()
    {
        $macro = new Macro();
        $macro->load(\Yii::input(), '');
        $macro->user_id = Yii::$app->user->id;
        if($macro->validate() && $macro->save(false))
            return $macro;

        return $macro->errors;
    }

    public function actionDelete($id)
    {
        $macro = Macro::findOne($id);

        if(!$macro || $macro->user_id != Yii::$app->user->id)
            return [
                'success' => false
            ];

        if($macro->delete())
            return [
                'success' => true
            ];
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['authenticator'] = [
            'class' => \yii\filters\auth\HttpBearerAuth::className(),
            'except' => ['options']
        ];

        return $behaviors;
    }
}