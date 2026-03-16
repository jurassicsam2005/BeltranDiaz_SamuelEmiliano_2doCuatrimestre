<?php
    //
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = intval($_POST["base"]);
        $max = intval($_POST["max"]);

        echo "<h3>Tabla de Potencias:</h3>";
        $suma = 0;

        for ($i = 1; $i <= $max; $i++) {
            $resultado = pow($base, $i); // también se puede usar $base ** $i
            $suma += $resultado;
            $paridad = ($resultado % 2 == 0) ? "Par" : "Impar";
            echo "$base^$i = $resultado ($paridad)<br>";
        }

        echo "<h3>Resultados:</h3>";
        echo "Suma de todas las potencias: $suma<br>";
    }
?>