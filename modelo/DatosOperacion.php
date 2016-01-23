<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace miCalc\modelo;

/**
 * Description of DatosOperacion
 *
 * @author mauri
 */
class DatosOperacion {
    const SUMA = 0;
    const RESTA = 1;
    const MULTIPLICACION = 2;
    const DIVISION = 3;
    
    public $operacion;
    public $operando1;
    public $operando2;
}
