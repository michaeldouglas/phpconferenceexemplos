<?php

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {//Verifica se a requisição realmente é do index.php
    return false;
}
// Chama o script do app que contém as configurações da aplicação
require_once __DIR__.'/../src/app.php';
$app->mount('/', new Projeto\Biblioteca\Controllers\FrontController());
$app->run();