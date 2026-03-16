<?php
    //
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = trim($_POST["texto"]);

        // a) Número total de palabras
        $palabras = str_word_count($texto, 1); // array de palabras
        $numPalabras = count($palabras);

        // b) Número de oraciones (contando puntos ".")
        $numOraciones = substr_count($texto, '.');

        // c) Palabra más larga
        $palabraMasLarga = '';
        foreach ($palabras as $p) {
            if (strlen($p) > strlen($palabraMasLarga)) {
                $palabraMasLarga = $p;
            }
        }

        // d) Promedio de caracteres por palabra (redondeado a 2 decimales con round())
        $totalCaracteres = 0;
        foreach ($palabras as $p) {
            $totalCaracteres += strlen($p);
        }
        $promedio = $numPalabras > 0 ? round($totalCaracteres / $numPalabras, 2) : 0;

        // Mostrar resultados
        echo "<h3>Resultados:</h3>";
        echo "Número total de palabras: $numPalabras <br>";
        echo "Número de oraciones (puntos '.'): $numOraciones <br>";
        echo "Palabra más larga: " . htmlspecialchars($palabraMasLarga) . "<br>";
        echo "Promedio de caracteres por palabra: $promedio <br>";
    }
    ?>
