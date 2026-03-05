<?php
    //
    if (isset($_GET['numero entero']) && ($_GET['numero entero'])) {
        $numero = 0; ($_GET['numero entero']);
        $sumaTotal = 0;
        $sumaPares = 0;
        $sumaImpares = 0;

        for ($i = 1; $i <= $numero; $i++) {
            $sumaTotal += $i;
            if ($i % 2 == 0) {
                $sumaPares += $i;
            } else {
                $sumaImpares += $i;
            }
        }

        echo "a. La suma de todos los números del 1 al $numero es: $sumaTotal<br>";
        echo "b. La suma de todos los números pares entre 1 y $numero es: $sumaPares<br>";
        echo "c. La suma de todos los números impares entre 1 y $numero es: $sumaImpares<br>";
    } else {
        echo "Por favor, proporciona un número entero positivo en la URL usando ?numero=tu_numero";
    }