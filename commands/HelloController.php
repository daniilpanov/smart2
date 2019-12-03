<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\Device;
use app\models\Room;
use app\models\User;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HelloController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex($message = 'hello world')
    {
        echo $message . "\n";

        return ExitCode::OK;
    }

    public function actionGenerateUsers($count = 1)
    {
        for($i = 0; $i < $count; $i++) {
            $user = new User();
            $user->login = "user".time('s').rand(0,10);
            $user->password = "pass";
            $user->save();

            echo "User $user->id created\n";

            $this->createRoom('Коридор', $user->id, [
                [
                    'name' => 'Входная дверь',
                    'type' => 1,
                    'value' => 'close'
                ],
                [
                    'name' => 'Свет',
                    'type' => 2,
                    'value' => 'on'
                ],
                [
                    'name' => 'Температура',
                    'type' => 5,
                    'value' => '20'
                ]
            ]);
            $this->createRoom('Кухня', $user->id, [
                [
                    'name' => 'Окно',
                    'type' => 4,
                    'value' => 'close'
                ],
                [
                    'name' => 'Свет',
                    'type' => 2,
                    'value' => 'on'
                ],
                [
                    'name' => 'Температура',
                    'type' => 5,
                    'value' => '22'
                ]
            ]);
            $this->createRoom('Зал', $user->id, [
                [
                    'name' => 'Левое окно',
                    'type' => 4,
                    'value' => 'open'
                ],
                [
                    'name' => 'Правое окно',
                    'type' => 4,
                    'value' => 'open'
                ],
                [
                    'name' => 'Левый свет',
                    'type' => 2,
                    'value' => 'off'
                ],
                [
                    'name' => 'Правый свет',
                    'type' => 2,
                    'value' => 'off'
                ],
                [
                    'name' => 'Температура на улице',
                    'type' => 5,
                    'value' => '17'
                ]
            ]);
            $this->createRoom('Спальня', $user->id, [
                [
                    'name' => 'Окно',
                    'type' => 4,
                    'value' => 'close'
                ],
                [
                    'name' => 'Светильник',
                    'type' => 3,
                    'value' => 'on'
                ],
                [
                    'name' => 'Свет',
                    'type' => 2,
                    'value' => 'off'
                ],
                [
                    'name' => 'Термостат',
                    'type' => 6,
                    'value' => '20'
                ]
            ]);
        }
    }

    private function createRoom($roomName, $userId, $devices)
    {
        $room = new Room();
        $room->user_id = $userId;
        $room->name = $roomName;
        $room->photo = 'http://wsr.ru/smart-home/web/images/'.$roomName.'.png';

        $room->save();
        echo "\tRoom $room->id created\n";

        $this->createDevices($room->id, $devices);
    }

    private function createDevices($roomId, $devices)
    {
        foreach($devices as $device) {
            $newDevice = new Device();
            $newDevice->room_id = $roomId;
            $newDevice->type_id = $device['type'];
            $newDevice->name = $device['name'];
            $newDevice->value = $device['value'];
            $newDevice->save();

            echo "\t\tDevice $device[name] created\n";
        }
    }
}
