<?php

namespace miCalc\modelo;

/**
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
