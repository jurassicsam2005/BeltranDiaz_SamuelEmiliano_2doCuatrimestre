<?php
    //
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["n"]);

        echo "<h3>Pirámide de $n filas:</h3>";

        // La fila más ancha tiene (2N - 1) asteriscos
        $maxAncho = 2 * $n - 1;

        // Generar pirámide
        for ($i = 1; $i <= $n; $i++) {
            $numAsteriscos = 2 * $i - 1;
            $numEspacios = ($maxAncho - $numAsteriscos) / 2;

            echo str_repeat(" ", $numEspacios) . str_repeat("*", $numAsteriscos) . "<br>";
        }

        // Calcular número total de asteriscos
        // Fórmula: N^2 (suma de serie 1+3+5+...+(2N-1))
        $totalAsteriscos = $n * $n;

        echo "<h3>Resultados:</h3>";
        echo "Número total de asteriscos en la pirámide: $totalAsteriscos";
    }
?>