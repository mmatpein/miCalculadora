<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace miCalc\modelo;

/**
 * Description of OperadorBinario
 *
 * @author mauri
 */
class OperadorBinario {
    //put your code here
    
    /* @var $datosOperacion DatosOperacion*/
    public function operacion($datosOperacion){
        $operando1 = $datosOperacion->operando1;
        $operando2 = $datosOperacion->operando2;
        $resultado = 0;
        switch ($datosOperacion->operacion){
            case DatosOperacion::SUMA:
                $resultado = $this->suma($operando1, $operando2);
                break;
            case DatosOperacion::RESTA:
                $resultado = $this->resta($operando1, $operando2);
                break;
            case DatosOperacion::MULTIPLICACION:
                $resultado = $this->multiplicacion($operando1, $operando2);
                break;
            case DatosOperacion::DIVISION:
                $resultado = $this->division($operando1, $operando2);
                break;
        }
        return $resultado;
    }
    
    public function suma($operando1, $operando2){
        return $operando1 + $operando2;
    }
    
    public function resta($operando1, $operando2){
        return $operando1 - $operando2;
    }
    
    public function multiplicacion($operando1, $operando2){
        return $operando1 * $operando2;
    }
    
    public function division($operando1, $operando2){
        return $operando1 / $operando2;
    }
}
