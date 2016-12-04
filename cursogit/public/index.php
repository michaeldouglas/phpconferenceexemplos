<?php

require_once('./../vendor/autoload.php');

use Php\Conference\Calculadora\Soma;

$soma = new Soma;
echo $soma->getResultado(1,2);