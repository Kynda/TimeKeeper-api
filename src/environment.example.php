<?php

if (!defined('APPLICATION_ENV')) {
    define('APPLICATION_ENV', getenv('APPLICATION_ENV'));
}

switch (APPLICATION_ENV) {
    case 'PRODUCTION':
    case 'STAGING':
    case 'DOCKER':
    case 'DEVELOPMENT':
    case 'TESTING':
    default:
        return [
            'settings' => [
                'doctrine' => [
                    'connection' => [
                        'driver'    => 'pdo_mysql',
                        'host'      => 'localhost',
                        'port'      => 3306,
                        'dbname'    => TK_DB_NAME,
                        'user'      => TK_DB_USER,
                        'password'  => TK_DB_PASSWORD,
                        'charset'   => 'utf-8',
                    ],
                ],
            ],
        ];
}
