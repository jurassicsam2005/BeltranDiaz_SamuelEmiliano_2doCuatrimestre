<?php
    //
    if (isset($_GET['numbers'])) {
        $numbers = explode(',', $_GET['numbers']);
        $positivos = [];
        $negativos = [];
        $ceros = [];
        $pares = [];
        $impares = [];

        foreach ($numbers as $num) {
            $num = trim($num);
            if ($num > 0) {
                $positivos[] = $num;
            } elseif ($num < 0) {
                $negativos[] = $num;
            } else {
                $ceros[] = $num;
            }

            if ($num % 2 == 0) {
                $pares[] = $num;
            } else {
                $impares[] = $num;
            }
        }

        echo "<h2>Números Positivos</h2>";
        if (!empty($positivos)) {
            echo "<p>" . implode(', ', $positivos) . "</p>";
            echo "<p>Conteo: " . count($positivos) . "</p>";
        } else {
            echo "<p>No hay números positivos.</p>";
        }

        echo "<hr>";

        echo "<h2>Números Negativos</h2>";
        if (!empty($negativos)) {
            echo "<p>" . implode(', ', $negativos) . "</p>";
            echo "<p>Conteo: " . count($negativos) . "</p>";
        } else {
            echo "<p>No hay números negativos.</p>";
        }

        echo "<hr>";

        echo "<h2>Ceros</h2>";
        if (!empty($ceros)) {
            echo "<p>" . implode(', ', $ceros) . "</p>";
            echo "<p>Conteo: " . count($ceros) . "</p>";
        } else {
            echo "<p>No hay ceros.</p>";
        }

        echo "<hr>";

        echo "<h2>Números Pares</h2>";
        if (!empty($pares)) {
            echo "<p>" . implode(', ', $pares) . "</p>";
            echo "<p>Conteo: " . count($pares) . "</p>";
        } else {
            echo "<p>No hay números pares.</p>";
        }

        echo "<hr>";

        echo "<h2>Números Impares</h2>";
        if (!empty($impares)) {
            echo "<p>" . implode(', ', $impares) . "</p>";
            echo "<p>Conteo: " . count($impares) . "</p>";
        } else {
            echo "<p>No hay números impares.</p>";
        }
    } else {
        echo "Por favor, proporciona una lista de números en la URL usando ?numbers=numero1,numero2,...";
    }
?>