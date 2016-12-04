<?php

namespace Php\Conference\Calculadora\Unit\Calculadora;

use Php\Conference\Calculadora\Soma;

class SomaTest extends \PHPUnit_Framework_TestCase
{
    protected $soma;
    protected function setUp()
    {
        $this->soma = new Soma;
    }
    
    public function testSomar()
    {
        $val1 = 1;
        $val2 = 2;
        $resultadoEsperado = 3;
        $total = $this->soma->getResultado($val1, $val2);
        $this->assertEquals($resultadoEsperado, $total);
    }
    
    public function testBoolSomar()
    {
        $val1 = 'a';
        $val2 = 2;
        $val3 = 2;
        $val4 = 'a';
        
        $resultado = $this->soma->getResultado($val1, $val2);
        $resultado2 = $this->soma->getResultado($val3, $val4);
        
        $this->assertEquals(false, $resultado);
        $this->assertEquals(false, $resultado2);
    }
}