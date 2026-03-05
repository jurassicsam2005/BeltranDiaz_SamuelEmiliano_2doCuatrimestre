<?php
    //
    if isset($_GET['producto']) && isset($_GET['precio']) {
        $producto = $_GET['producto'];
        $precioSinIVA = floatval($_GET['precio']);
        $iva = $precioSinIVA * 0.16;
        $precioConIVA = $precioSinIVA + $iva;

        echo "<h2>Resultados para el producto: $producto</h2>";
        echo "<p>Precio sin IVA: $" . number_format($precioSinIVA, 2) . "</p>";
        echo "<p>Monto del IVA (16%): $" . number_format($iva, 2) . "</p>";
        echo "<p>Precio total con IVA incluido: $" . number_format($precioConIVA, 2) . "</p>";
    } else {
        echo "<p>Por favor, complete el formulario.</p>";
    }