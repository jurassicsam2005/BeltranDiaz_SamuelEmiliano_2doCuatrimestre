<?php
    //
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $sexo = $_POST["sexo"];
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];
        $edad = $_POST["edad"];
        $factor = $_POST["actividad"];

        // Calcular TMB según sexo
        if ($sexo == "hombre") {
            $tmb = 88.36 + (13.4 * $peso) + (4.8 * $altura) - (5.7 * $edad);
        } else {
            $tmb = 447.6 + (9.2 * $peso) + (3.1 * $altura) - (4.3 * $edad);
        }

        // Calorías diarias recomendadas
        $calorias = round($tmb * $factor, 2);

        echo "<h3>Resultados:</h3>";
        echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
        echo "Peso: $peso kg<br>";
        echo "Altura: $altura cm<br>";
        echo "Edad: $edad años<br>";
        echo "TMB (calorías en reposo por día): " . round($tmb, 2) . "<br>";
        echo "Calorías diarias recomendadas según actividad: $calorias<br>";
    }
    ?>
