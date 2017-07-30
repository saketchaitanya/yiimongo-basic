<?php
use Yii;

$params = require(__DIR__ . '/params.php');
//$db = require(__DIR__ . '/db.php');

$config = 
[
    'id' => 'basic',
     'name'=> 'Chinmaya Centre Reporting Application',
    'basePath' => dirname(__DIR__),
    //'defaultRoute'=> 'site/index',
    'bootstrap' => ['log'],
    'components' => 
    [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'qawsedrftgyhujikol',
            'parsers'=>[
             'application/json'=> 'yii\web\JsonParser',
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl'=>['site/index'],
            'returnUrl'=>'site/index',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        
        'log' => 
        [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        //'db' => $db,
        'mongodb'=>
        [
            'class' => '\yii\mongodb\Connection',
            'dsn' => 'mongodb://yiiUser:yiiUser@localhost:27017/yiiBasic',
        ],  
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            'index'=>'site/index',
            'about'=>'site/about',
            'contact'=>'site/contact',
            'login'=> 'site/login',
            'site/index/<action:\w+>'=>'site/index',
            '<controller:[\w-]+>s' => '<controller>/index',
            'POST <controller:[\w-]+>s' => '<controller>/create',
            'PUT <controller:[\w-]+>/<id:\d+>'    => '<controller>/update',
            'DELETE <controller:[\w-]+>/<id:\d+>' => '<controller>/delete',
            '<controller:[\w-]+>/<id:\d+>'        => '<controller>/view',
            ['class'=>'yii\rest\UrlRule', ]
            ],
        ],
        'view' => 
        [
            'theme' => [
               'basePath' => '@app/themes/watermelon/assets',
               'baseUrl' => '@web/themes/watermelon/assets',
               'pathMap' => [
                  '@app/views' => ['@app/themes/basic', 
                                    '@app/web/themes/watermelon',
                                  ],
                  '@app/widgets' => '@app/themes/basic/widgets'
               ],
            ],
        ],
        /*'view' => 
        [
            'theme' => [
               'basePath' => '@app/themes/stargazers/',
               'baseUrl' => '@web/themes/stargazers/',
               'pathMap' => [
                  '@app/views' => [
                                    '@app/web/themes/stargazers/',
                                  ],
                  '@app/widgets' => '@app/themes/basic/widgets'
               ],
            ],
        ],*/
        /*'view' => 
        [
            'theme' => [
               'basePath' => '@app/themes/iphone7/',
               'baseUrl' => '@web/themes/iphone7/',
               'pathMap' => [
                  '@app/views' => [
                                    '@app/web/themes/iphone7/',
                                  ],
                  '@app/widgets' => '@app/themes/basic/iphone7'
               ],
            ],
        ],*/
    ],
    'modules' => 
    [
        'giimongo' => [
            'class' => 'yii\gii\Module',
            'generators' => [
                'mongoDbModel' => [
                    'class' => 'yii\mongodb\gii\model\Generator',
                    /*'templates' => [ // setting materializecss templates
                'materializecss' => '@vendor/macgyer/yii2-materializecss/src/gii-templates/generators/crud/materializecss', 
            ]*/
                ]
            ],
        ],
    ],
];
    

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
            'crud' => [
            'class' => 'yii\gii\generators\crud\Generator',
            /*'templates' => [ // setting materializecss templates
                'materializecss' => '@vendor/macgyer/yii2-materializecss/src/gii-templates/generators/crud/materializecss', 
            ]*/
        ]
    ], 
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
