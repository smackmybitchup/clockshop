<?php

$params = require(__DIR__ . '/params.php');
$components = require (__DIR__.'/components.php');

$config = [
    'id' => 'shop',
    'language' => 'ru-RU',
    'timeZone' => 'Europe/Kiev',
    'defaultRoute' => 'shop/index',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => $components,
    'params' => $params,
    'modules' => [
        'admin' => 'app\modules\admin\AdminModule'
    ]
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
