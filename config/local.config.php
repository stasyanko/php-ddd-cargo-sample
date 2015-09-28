<?php
return [
    'view' => [
        'cache' => false,
    ],
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'params' => [
                    'host' => 'localhost',
                    'port' => '3306',
                    'user' => 'root',
                    'password' => '',
                    'dbname' => 'cargo_sample',
                    'charset' => 'utf8',
                    'driverOptions' => [
                        1002 => "SET NAMES 'UTF8'"
                    ],
                ]
            ]
        ],
    ],
];