<?php
    //
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tarjeta = $_POST["tarjeta"];

        // a) Verificar longitud de 16 caracteres
        $longitudValida = strlen($tarjeta) === 16;

        // b) Verificar que todos sean dígitos
        $soloDigitos = ctype_digit($tarjeta);

        if ($longitudValida && $soloDigitos) {
            // c) Formatear en grupos de 4 separados por espacio
            $formateada = chunk_split($tarjeta, 4, " ");
            $formateada = trim($formateada); // quitar espacio final

            // d) Mostrar versión con asteriscos en los primeros 12 dígitos
            $oculta = "**** **** **** " . substr($tarjeta, -4);

            echo "<h3>Resultados:</h3>";
            echo "Número válido<br>";
            echo "Número formateado: $formateada <br>";
            echo "Versión oculta: $oculta <br>";
        } else {
            echo "<p style='color:red;'>Error: El número debe tener exactamente 16 dígitos numéricos.</p>";
        }
    }
?>
