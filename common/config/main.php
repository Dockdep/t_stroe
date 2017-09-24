<?php
    return [
        'language' => 'ru-RU',
        'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
        'controllerMap'       => [
            'siteMap' => [
                'class'    => 'artweb\artbox\ecommerce\console\SiteMapController',
            ],
        ],
        'components' => [
            'mailer' => [
                    'class' => 'yii\swiftmailer\Mailer',
                    'transport' => [
                   'class' => 'Swift_SmtpTransport',
                   'host' => 'smtp.gmail.com',
                   'username' => 'dockdep@gmail.com',
                   'password' => 'k0l0b04eg2',
                   'port' => '587',
                   'encryption' => 'tls',
               ],
            ],
//            'cache' => [
//                'class' => 'yii\caching\MemCache',
//                'keyPrefix' => 'extrem_'
//            ],
//            'sender' => [
//                'class' => 'artweb\artbox\components\SmsSender',
//            ],
            'artboximage' => [
                'class'    => 'artweb\artbox\components\artboximage\ArtboxImage',
                'driver'   => 'GD',
                'rootPath' => Yii::getAlias('@storage'),
                'rootUrl'  => Yii::getAlias('/storage'),
                'presets'  => include_once "presets.php",
            ],
            'basket'      => [
                'class' => 'artweb\artbox\ecommerce\models\Basket',
            ],
            'formatter' => [
                'timeZone' => 'Europe/Kiev',
            ],
        ],

    ];
