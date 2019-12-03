<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart house</title>
    <link rel="stylesheet" href="<?= Yii::getAlias('@web/web') ?>/assets/css/main.css">
</head>
<body>

<div class="home-wrap" id="app">

    <div class="buildings">
        <div class="building">
            <div class="flat" v-for="flat in getRooms(0,3)">
                <div class="room room-hall">
                    <div class="device device-light device-light-1" v-if="flat.hall.light1 == 'on'"></div>
                    <div class="device device-light device-light-2" v-if="flat.hall.light2 == 'on'"></div>
                    <div class="device device-window window-green device-window-1" v-if="flat.hall.window1 == 'close'"></div>
                    <div class="device device-window window-green device-window-2" v-if="flat.hall.window2 == 'close'"></div>
                </div>
                <div class="room room-bedroom">
                    <div class="device device-light" v-if="flat.bedroom.light == 'on'"></div>
                    <div class="device device-window window-blue" v-if="flat.bedroom.window == 'close'"></div>
                    <div class="device device-bra" v-if="flat.bedroom.bra == 'on'"></div>
                </div>
                <div class="room room-exit">
                    <div class="device device-light" v-if="flat.exit.light == 'on'"></div>
                    <div class="device device-door" v-if="flat.exit.door == 'open'"></div>
                </div>
                <div class="room room-kitchen">
                    <div class="device device-light" v-if="flat.kitchen.light == 'on'"></div>
                    <div class="device device-window window-yellow" v-if="flat.kitchen.window == 'close'"></div>
                </div>
            </div>
        </div>

        <div class="building">
            <div class="flat" v-for="flat in getRooms(4,8)">
                <div class="room room-hall">
                    <div class="device device-light device-light-1" v-if="flat.hall.light1 == 'on'"></div>
                    <div class="device device-light device-light-2" v-if="flat.hall.light2 == 'on'"></div>
                    <div class="device device-window window-green device-window-1" v-if="flat.hall.window1 == 'close'"></div>
                    <div class="device device-window window-green device-window-2" v-if="flat.hall.window2 == 'close'"></div>
                </div>
                <div class="room room-bedroom">
                    <div class="device device-light" v-if="flat.bedroom.light == 'on'"></div>
                    <div class="device device-window window-blue" v-if="flat.bedroom.window == 'close'"></div>
                    <div class="device device-bra" v-if="flat.bedroom.bra == 'on'"></div>
                </div>
                <div class="room room-exit">
                    <div class="device device-light" v-if="flat.exit.light == 'on'"></div>
                    <div class="device device-door" v-if="flat.exit.door == 'open'"></div>
                </div>
                <div class="room room-kitchen">
                    <div class="device device-light" v-if="flat.kitchen.light == 'on'"></div>
                    <div class="device device-window window-yellow" v-if="flat.kitchen.window == 'close'"></div>
                </div>
            </div>
        </div>

        <div class="building">
            <div class="flat" v-for="flat in getRooms(9,12)">
                <div class="room room-hall">
                    <div class="device device-light device-light-1" v-if="flat.hall.light1 == 'on'"></div>
                    <div class="device device-light device-light-2" v-if="flat.hall.light2 == 'on'"></div>
                    <div class="device device-window window-green device-window-1" v-if="flat.hall.window1 == 'close'"></div>
                    <div class="device device-window window-green device-window-2" v-if="flat.hall.window2 == 'close'"></div>
                </div>
                <div class="room room-bedroom">
                    <div class="device device-light" v-if="flat.bedroom.light == 'on'"></div>
                    <div class="device device-window window-blue" v-if="flat.bedroom.window == 'close'"></div>
                    <div class="device device-bra" v-if="flat.bedroom.bra == 'on'"></div>
                </div>
                <div class="room room-exit">
                    <div class="device device-light" v-if="flat.exit.light == 'on'"></div>
                    <div class="device device-door" v-if="flat.exit.door == 'open'"></div>
                </div>
                <div class="room room-kitchen">
                    <div class="device device-light" v-if="flat.kitchen.light == 'on'"></div>
                    <div class="device device-window window-yellow" v-if="flat.kitchen.window == 'close'"></div>
                </div>
            </div>
        </div>

        <div class="building">
            <div class="flat" v-for="flat in getRooms(13,16)">
                <div class="room room-hall">
                    <div class="device device-light device-light-1" v-if="flat.hall.light1 == 'on'"></div>
                    <div class="device device-light device-light-2" v-if="flat.hall.light2 == 'on'"></div>
                    <div class="device device-window window-green device-window-1" v-if="flat.hall.window1 == 'close'"></div>
                    <div class="device device-window window-green device-window-2" v-if="flat.hall.window2 == 'close'"></div>
                </div>
                <div class="room room-bedroom">
                    <div class="device device-light" v-if="flat.bedroom.light == 'on'"></div>
                    <div class="device device-window window-blue" v-if="flat.bedroom.window == 'close'"></div>
                    <div class="device device-bra" v-if="flat.bedroom.bra == 'on'"></div>
                </div>
                <div class="room room-exit">
                    <div class="device device-light" v-if="flat.exit.light == 'on'"></div>
                    <div class="device device-door" v-if="flat.exit.door == 'open'"></div>
                </div>
                <div class="room room-kitchen">
                    <div class="device device-light" v-if="flat.kitchen.light == 'on'"></div>
                    <div class="device device-window window-yellow" v-if="flat.kitchen.window == 'close'"></div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="<?= Yii::getAlias('@web/web') ?>/assets/js/vue.js"></script>
<script src="<?= Yii::getAlias('@web/web') ?>/assets/js/main.js"></script>
</body>
</html>
