<?php
    // 
    if (isset($_GET['numero']) && !empty($_GET['numero'])) {
        $numero = $_GET['numero'];

        if ($numero % 2 == 0) {
            echo "El número es par.<br>";
        } else {
            echo "El número es impar.<br>";
        }

        if ($numero > 0) {
            echo "El numero es positivo.<br>";
        } else {
            echo "El numero es negativo.<br>";
        }

        }