<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/default',
                '<controller:(\w+)>/<action:(\w+)>/<id:\d+>' => '<controller>/<action>',
                '<controller:(\w+)>/<action:(\w+)>' => '<controller>/<action>',
                '<module:(\w+)>/<controller:(\w+)>/<action:(\w+)>' => '<module>/<controller>/<action>',
                '<module:(\w+)>/<controller:(\w+)>/<action:(\w+)>/<id:\d+>' => '<module>/<controller>/<action>',
                '<a:(login|logout|request-password-reset)>' => 'site<a>',
            ],
        ],
    ],
    'modules' => [
        'news' => [
            'class' => 'common\modules\news\Module',
        ],
    ]
];
