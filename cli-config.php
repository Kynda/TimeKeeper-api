<?php

// cli-config.php

use Doctrine\DBAL;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Slim\Container;

/** @var Container $container */

define('APP_ROOT', __DIR__);

require APP_ROOT . '/vendor/autoload.php';

$settings = require APP_ROOT . '/src/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require APP_ROOT . '/src/dependencies.php';

$container = $app->getContainer();

$cli = ConsoleRunner::createApplication(
    ConsoleRunner::createHelperSet($container[EntityManager::class])
);

$cli->add(new DBAL\Migrations\Tools\Console\Command\ExecuteCommand());
$cli->add(new DBAL\Migrations\Tools\Console\Command\GenerateCommand());
$cli->add(new DBAL\Migrations\Tools\Console\Command\LatestCommand());
$cli->add(new DBAL\Migrations\Tools\Console\Command\MigrateCommand());
$cli->add(new DBAL\Migrations\Tools\Console\Command\DiffCommand());
$cli->add(new DBAL\Migrations\Tools\Console\Command\UpToDateCommand());
$cli->add(new DBAL\Migrations\Tools\Console\Command\StatusCommand());
$cli->add(new DBAL\Migrations\Tools\Console\Command\VersionCommand());

$cli->run();
