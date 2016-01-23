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
        <link rel="stylesheet" href="css/estilo.css"/>
    </head>
    <body>
        <form action="controlador/calcular.php" method="get">
            <ul>
                <li><label for="operando1">Operando 1</label>
                    <input type="number" id="operando1" name="operando1" value="0"/></li>
                <li><label for="operando2">Operando 2</label>
                    <input type="number" id="operando2" name="operando2" value="0"/></li>
                <li><label for="operacion">Operación </label>
                    <select id="operacion" name="operacion">
                       <option value="suma">Suma</option>
                       <option value="resta">Resta</option>
                       <option value="multiplicacion">Multiplicación</option>
                       <option value="division">División</option>
                    </select></li>
                    <li><button type="submit" value="enviar">Enviar</button></li>
            </ul>
        </form>
        <img src="a.jpg" alt="alterativo"/>

    </body>
</html>
