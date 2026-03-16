<?php
    // 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // a) Palabra o frase original
        $original = $_POST["texto"];

        // b) Palabra o frase invertida
        $invertida = strrev($original);

        // c) Verificación de palíndromo (ignorando mayúsculas y espacios)
        $normalizada = strtolower(str_replace(' ', '', $original));
        $esPalindromo = ($normalizada === strrev($normalizada));
         echo "<h3>Resultados:</h3>";
        echo "Original: " . htmlspecialchars($original) . "<br>";
        echo "Invertida: " . htmlspecialchars($invertida) . "<br>";
        echo "¿Es palíndromo?: " . ($esPalindromo ? "Sí" : "No");
    }
    ?>

