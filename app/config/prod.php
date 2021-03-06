<?php

use Silex\Provider\MonologServiceProvider;

/**
 * Project's settings.
 */

$app['cache.path'] = __DIR__ . '/../cache';

$app['twig.options.cache'] = $app['cache.path'] . '/twig';

$app['db.options'] = [
    'driver'   => 'database_driver',
    'host'     => 'database_host',
    'port'     => 'database_port',
    'dbname'   => 'database_name',
    'user'     => 'database_user',
    'password' => 'database_password'
];

$app->register(
    new MonologServiceProvider(),
    ['monolog.logfile' => __DIR__ . '/../logs/silex_app.log']
);
