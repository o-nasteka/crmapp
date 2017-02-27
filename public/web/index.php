<?php
// Включаем сам фреймворк Yii (1)
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
// Получаем конфигурацию (2)
$config = require(__DIR__ . '/../config/web.php');
// Соэдаём и немедленно выполняем приложение (3)
(new yii\web\Application($config))->run();