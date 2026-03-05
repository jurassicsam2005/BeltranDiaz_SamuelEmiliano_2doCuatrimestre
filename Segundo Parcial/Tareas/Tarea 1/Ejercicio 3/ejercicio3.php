<?php
    //
    if (isset($_GET['enviar'])) {
        $articulo = $_GET['articulo'];
        $precio = $_GET['precio'];
        $descuento = $_GET['descuento'];

        $monto_descuento = ($precio * $descuento) / 100;
        $precio_final = $precio - $monto_descuento;

        echo "<h2>Resultados</h2>";
        echo "<p>Artículo: " . $articulo . "</p>";
        echo "<p>Precio original: $" . number_format($precio, 2) . "</p>";
        echo "<p>Descuento: " . $descuento . "%</p>";
        echo "<p>Monto del descuento: $" . number_format($monto_descuento, 2) . "</p>";
        echo "<p>Precio final con descuento: $" . number_format($precio_final, 2) . "</p>";

        if ($descuento < 10) {
            echo "<p>El descuento es \"Bajo\" (menos del 10%).</p>";
        } elseif ($descuento >= 10 && $descuento <= 30) {
            echo "<p>El descuento es \"Moderado\" (10% al 30%).</p>";
        } else {
            echo "<p>El descuento es \"Alto\" (más del 30%).</p>";
        }
    }