<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="../css/estilos.css"/>
    </head>
    <body>
        <h1>Se ha calculado la siguiente operación</h1>
        <div class="operacion">
            <?php
                $simboloOperacion = "";
                /* @var $datosOperacion miCalc\modelo\DatosOperacion */
                if ($datosOperacion->operacion == \miCalc\modelo\DatosOperacion::SUMA){
                    $simboloOperacion = " + ";
                } elseif ($datosOperacion->operacion == \miCalc\modelo\DatosOperacion::RESTA){
                    $simboloOperacion = " - ";
                } elseif ($datosOperacion->operacion == \miCalc\modelo\DatosOperacion::MULTIPLICACION){
                    $simboloOperacion = " * ";
                } elseif ($datosOperacion->operacion == \miCalc\modelo\DatosOperacion::DIVISION){
                    $simboloOperacion = " / ";
                }
                echo $datosOperacion->operando1.$simboloOperacion.$datosOperacion->operando2;
            ?>
        </div>
        <p class="resultado">Resultado: <?php echo $resultadoOperacion; ?></p>
        
    </body>
</html>
