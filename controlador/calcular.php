<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../vendor/autoload.php';
use miCalc\modelo\OperadorBinario;
use miCalc\modelo\DatosOperacion;

function selectorOperacion($operacion){
    if ($operacion == 'suma'){
        return DatosOperacion::SUMA;
    } elseif ($operacion == "resta"){
        return DatosOperacion::RESTA;
    } elseif ($operacion == "multiplicacion"){
        return DatosOperacion::MULTIPLICACION;
    } elseif ($operacion == "division"){
        return DatosOperacion::DIVISION;
    } else {
        return -1;
    }
}

$operando1 = filter_input(INPUT_GET,"operando1", FILTER_VALIDATE_INT);
$operando2 = filter_input(INPUT_GET,"operando2", FILTER_VALIDATE_INT);
$operacion = filter_input(INPUT_GET,"operacion", FILTER_SANITIZE_STRING);

$operacion_realizada = "";

$operadorBinario = new OperadorBinario();
$datosOperacion = new DatosOperacion();

$datosOperacion->operando1 = $operando1;
$datosOperacion->operando2 = $operando2;

$datosOperacion->operacion = selectorOperacion($operacion);
$resultadoOperacion = $operadorBinario->operacion($datosOperacion);

require '../vista/vistaCalcular.php';