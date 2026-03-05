<?php
    //
    if isset($_GET['nombre']) {
        $nombre = $_GET['nombre'];
        echo "Hola, $nombre!";
    } else {
        echo "Por favor, proporciona tu nombre en la URL usando ?nombre=tu_nombre";
    }