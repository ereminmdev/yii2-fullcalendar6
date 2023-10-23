# yii2-fullcalendar6

JavaScript Calendar for Yii framework.

https://fullcalendar.io/

## Install

``composer require --prefer-dist ereminmdev/yii2-fullcalendar6``

## Documentation

https://fullcalendar.io/docs

## Using in a view file

```
FullCalendarScheduler6Asset::register($this);
```

Adding `ru` locale:

```
$asset = FullCalendar6CoreAsset::register($this);
$this->registerJsFile($asset->baseUrl . '/locales/ru.global.min.js', ['depends' => ['ereminmdev\yii2\fullcalendar6\FullCalendarScheduler6Asset']]);
```
