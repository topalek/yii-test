<?php
return [
    'name' => 'Test Yii Project',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'urlManager' => [
            'showScriptName' => false,  // Disable index.php
            'enablePrettyUrl' => true,  // Disable r= routes
        ],

    ],

];
