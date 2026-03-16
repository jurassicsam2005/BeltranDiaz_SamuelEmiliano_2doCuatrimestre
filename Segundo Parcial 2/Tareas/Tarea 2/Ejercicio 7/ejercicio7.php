<?php
    //
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $litros = $_POST["litros"];
        $precio = $_POST["precio"];
        $km = $_POST["km"];
        $extra = $_POST["extra"];

        // a) Costo total de la carga actual
        $costoTotal = $litros * $precio;

        // b) Rendimiento del vehículo (km/litro)
        $rendimiento = $litros > 0 ? round($km / $litros, 2) : 0;

        // c) Costo por kilómetro recorrido
        $costoKm = $km > 0 ? round($costoTotal / $km, 2) : 0;

        // d) Litros adicionales con presupuesto extra y km adicionales
        $litrosExtra = $precio > 0 ? round($extra / $precio, 2) : 0;
        $kmExtra = round($litrosExtra * $rendimiento, 2);

        echo "<h3>Resultados:</h3>";
        echo "Costo total de la carga actual: $costoTotal MXN <br>";
        echo "Rendimiento del vehículo: $rendimiento km/litro <br>";
        echo "Costo por kilómetro recorrido: $costoKm MXN/km <br>";
        echo "Con el presupuesto adicional de $extra MXN se pueden comprar $litrosExtra litros más <br>";
        echo "Kilómetros adicionales posibles: $kmExtra km <br>";
    }
    ?>
