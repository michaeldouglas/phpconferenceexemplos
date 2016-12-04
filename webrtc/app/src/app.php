<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

// config do sistema
$directory = [];
$directory['directoryROOT'] = dirname(__DIR__);

// Registro do Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../resources/Views',
));

//Exemplo de registro de log e utilização
$app->register(new Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__ . '/../log/phpconference.log',
));

// Conexão com o banco de dados
$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'dbs.options' =>
        [
            'portal_default' =>
                [
                    'driver' => 'pdo_mysql',
                    'host' => '127.0.0.1',
                    'dbname' => 'phpconference',
                    'user' => 'webschool',
                    'password' => '123456',
                    'charset' => 'UTF-8',
                ]
        ],
));

//Ativa o debug
$app['debug'] = true;