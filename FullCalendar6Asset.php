<?php

namespace ereminmdev\yii2\fullcalendar6;

use yii\web\AssetBundle;

class FullCalendar6Asset extends AssetBundle
{
    public $sourcePath = '@npm/fullcalendar';

    public $js = [
        YII_DEBUG ? 'index.global.js' : 'index.global.min.js',
    ];
}
