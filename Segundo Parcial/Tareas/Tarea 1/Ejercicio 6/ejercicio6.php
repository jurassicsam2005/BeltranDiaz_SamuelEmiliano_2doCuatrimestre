<?php
    //
    if (isset($_GET['nombre'])) {
        $nombreCompleto = $_GET['nombre'];
        $palabras = explode(' ', $nombreCompleto);
        $iniciales = [];

        foreach ($palabras as $palabra) {
            if (!empty($palabra)) {
                $iniciales[] = strtoupper($palabra[0]);
            }
        }

        echo "Las iniciales de '$nombreCompleto' son: " . implode('.', $iniciales);
    } else {
        echo "Por favor, proporciona tu nombre completo en la URL usando ?nombre=tu_nombre_completo";
    }