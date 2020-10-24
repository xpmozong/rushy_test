<?php
return [
    'database' => [
        'default' => [
            'dbname' => 'enterprise',
            'driver' => 'orm',
            'master' => [
                'username' => 'root',
                'password' => '',
                'host' => 'localhost',
                'port' => 3306,
                'options' => [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
                ]
            ],
            'slave' => [
                [
                    'username' => 'root',
                    'password' => '',
                    'host' => 'localhost',
                    'port' => 3306,
                    'options' => [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
                    ]
                ]
            ]
        ],
        // 'test2' => [
        //     'dbname' => 'test2',
        //     'driver' => 'orm',
        //     'master' => [
        //         'username' => 'root',
        //         'password' => '',
        //         'host' => 'localhost',
        //         'port' => 3306,
        //         'options' => [
        //             PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        //             PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        //         ]
        //     ],
        //     'slave' => [
        //         [
        //             'username' => 'root',
        //             'password' => '',
        //             'host' => 'localhost',
        //             'port' => 3306,
        //             'options' => [
        //                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        //                 PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'
        //             ]
        //         ]
        //     ]
        // ]
    ]
];