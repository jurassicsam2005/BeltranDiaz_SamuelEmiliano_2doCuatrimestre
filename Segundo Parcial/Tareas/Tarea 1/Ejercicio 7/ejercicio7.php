<?php
    //
    if (isset($_GET['numero']) && ($_GET['numero'])) {
        $numero = $_GET['numero'];
        if ($numero % 2 == 0) {
            echo "Muestra el numero mayor"
        } else {
            echo "Muestra el numero menor"
        }
    }