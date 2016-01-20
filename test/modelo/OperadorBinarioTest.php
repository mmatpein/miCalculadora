<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace miCalc\test\modelo;

/**
 * Description of OperadorBinarioTest
 *
 * @author mauri
 */
require 'vendor/autoload.php';
use miCalc\modelo\OperadorBinario;
class OperadorBinarioTest extends \PHPUnit_Framework_TestCase{
    
    public function testOperadorBinarioSuma(){
        $operando1 = 3;
        $operando2 = 5;
        $operadorBinario = new OperadorBinario;
        $resultado = $operadorBinario->suma($operando1, $operando2);
        $resultadoEsperado = 8;
        $this->assertEquals($resultado,$resultadoEsperado,"La suma no es correcta");
    }
}
