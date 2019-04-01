<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'product' => [
            'class' => 'frontend\modules\product\Module',
        ],
        'cart' => [
            'class' => 'frontend\modules\cart\Module',
        ],
    ],
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@web/views/layouts'
                ],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-red',
                    ],
                ],
            ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'common' => [
                    'class' => 'yii\i18n\DbMessageSource',
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'shop' => 'product/product/',
                'about' => 'site/about',
                'contact' =>  'site/contact',
                'cart' =>  'cart/cart/',
                'faq' => 'site/faq',
                'shop/cat/<cat_id>' => 'product/product/',
                'shop/brand/<brand_id>' => 'product/product/',
                'products/<id>' => 'product/product/product',
                '<type:(sales|new|featured)>' =>  'product/product/',
                'jewellery' => 'site/jewellery',
                'login' => 'site/login',
                'register' => 'site/register',
            ],
        ],
    ],
    'params' => $params,
];

