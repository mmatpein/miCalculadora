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
