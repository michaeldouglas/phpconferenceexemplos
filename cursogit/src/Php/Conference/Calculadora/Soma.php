<?php

namespace Php\Conference\Calculadora;

class Soma
{
	private $valor1;
	private $valor2;

	public function getResultado($valor1, $valor2)
	{
		if (is_numeric($valor1) && is_numeric($valor2)) {
            return $valor1 + $valor2;
        }
        
        return false;
	}
}