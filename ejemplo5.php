<?php
    //Verificamos si se han enviado los parametros necesarios
    if(isset($_GET['numero_base'])&& isset($_GET['numero_multiplicador'])){
        // Si los parametros existen, loa asignamos a varios para su uso posterior
        $numero_base = $_GET['numero_base'];
        $multiplicador = $_GET['numero_multiplicador'];

        echo "h2 Tabla de multiplicar del numero {$numero_base} hasta {$multiplicador} </h2>";
        // Con un for, iteramos desde 1 (Puede ser inclusive iniciando desde 0, pero no se especificaen el enunciado, asi que lo iniciare en 1) hasta el valor del multiplicador. en cada iteracion, la variable $i aumentara en 1.
        for($i = 1; $i <= $multiplicador; $i++){
            //Aui realizo la multiplicacion, puedo realizarla directo en un echo o separarla nen una variable.
            $multiplicacion = $numero_base * $i; // Recuerda que multiplicamos por $i, no por el multiplicador, ya que el multiplicador es el limite donde se detendranj las iteraciones.

            // Imprimimos el resultado de la multiplicacion en cada iteracion 
            echo "<p> {$numero_base} * {$i} = {$multiplicacion} </p>"

        }
    } 