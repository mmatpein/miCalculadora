<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
                if ($operacion == 'suma'){
                    $simboloOperacion = " + ";
                } elseif ($operacion == 'resta'){
                    $simboloOperacion = " - ";
                } elseif ($operacion == 'multiplicacion'){
                    $simboloOperacion = " * ";
                } elseif ($operacion == 'division'){
                    $simboloOperacion = " / ";
                }
                echo $operando1.$simboloOperacion.$operando2;
            ?>
        </div>
        <p class="resultado">Resultado: <?php echo $resultado; ?></p>
        <?php
        // put your code here
        ?>
    </body>
</html>
