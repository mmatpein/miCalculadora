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
use miCalc\modelo\DatosOperacion;
class OperadorBinarioTest extends \PHPUnit_Framework_TestCase{
    
    protected $operadorBinario;
    
    protected function setUp(){
        $this->operadorBinario = new OperadorBinario();
    }
    
    /**
     * @dataProvider providerOperacion
     */
    public function testOperadorBinarioOperacion($operando1, $operando2, $operacion, $resultadoEsperado){
        $datosOperacion = new DatosOperacion();
        $datosOperacion->operacion = $operacion;
        $datosOperacion->operando1 = $operando1;
        $datosOperacion->operando2 = $operando2;
        
        $resultado = $this->operadorBinario->operacion($datosOperacion);
        $this->assertEquals($resultado,$resultadoEsperado,"La operación no es correcta");
    }

    
    /**
     * @dataProvider providerSuma
     */
    public function testOperadorBinarioSuma($operando1, $operando2, $resultadoEsperado){
        
        $resultado = $this->operadorBinario->suma($operando1, $operando2);
        $this->assertEquals($resultado,$resultadoEsperado,"La suma no es correcta");
    }
    
    /**
     * @dataProvider providerResta
     */
    public function testOperadorBinarioResta($operando1, $operando2, $resultadoEsperado){
        $resultado = $this->operadorBinario->resta($operando1,$operando2);
        $this->assertEquals($resultado,$resultadoEsperado,"La resta no es correcta");
    }
    
    /**
     * @dataProvider providerMultiplicacion
     */
    public function testOperadorBinarioMultiplicacion($operando1, $operando2, $resultadoEsperado){
        $resultado = $this->operadorBinario->multiplicacion($operando1, $operando2);
        $this->assertEquals($resultado,$resultadoEsperado,"La multiplicación no es correcta");
    }
    
    /**
     * @dataProvider providerDivision
     */
    public function testOperadorBinarioDivision($operando1, $operando2, $resultadoEsperado){
        $resultado = $this->operadorBinario->division($operando1,$operando2);
        $this->assertEquals($resultado,$resultadoEsperado,"La división no es correcta");
    }
    
    public function providerSuma(){
        return array(
            '3 + 2 = 5' => array(3,2,5),
            '-3 + 7 = 4' => array(-3,7,4),
            '-6 + -7 = -13' => array(-6,-7,-13)
        );
    }
    
    public function providerResta(){
        return array(
            '3 - 7 = -4' => array(3,7,-4),
            '3 - (-7) = 10' => array(3,-7,10),
            '-3 - 7 = -10' => array(-3,7,-10)
        );
    }
    
    public function providerMultiplicacion(){
        return array(
            '3 * 2 = 6' => array(3,2,6),
            '-3 * 2 = -6' => array(-3,2,-6),
            '-3 * -2 = 6' => array(-3,-2,6) 
        );
    }
    
    public function providerDivision(){
        return array(
            '6 / 3 = 2' => array(6,3,2),
            '10 / 2 = 5' => array(10,2,5),
            '10 / (-2) = -5' => array(10,-2,-5)
        );
    }
    
    public function providerOperacion(){
        return array(
            '3 + 2 = 5' => array(3,2,DatosOperacion::SUMA,5),
            '-3 + 7 = 4' => array(-3,7,DatosOperacion::SUMA,4),
            '-6 + -7 = -13' => array(-6,-7,DatosOperacion::SUMA,-13),
            '3 - 7 = -4' => array(3,7,DatosOperacion::RESTA,-4),
            '3 - (-7) = 10' => array(3,-7,DatosOperacion::RESTA,10),
            '-3 - 7 = -10' => array(-3,7,DatosOperacion::RESTA,-10),
            '3 * 2 = 6' => array(3,2,DatosOperacion::MULTIPLICACION,6),
            '-3 * 2 = -6' => array(-3,2,DatosOperacion::MULTIPLICACION,-6),
            '-3 * -2 = 6' => array(-3,-2,DatosOperacion::MULTIPLICACION,6) ,
            '6 / 3 = 2' => array(6,3,DatosOperacion::DIVISION,2),
            '10 / 2 = 5' => array(10,2,DatosOperacion::DIVISION,5),
            '10 / (-2) = -5' => array(10,-2,DatosOperacion::DIVISION,-5)            
        );
    }
}
