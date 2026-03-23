<?php 
    //
    if(isset($_GET['dia']) && isset($_GET['mes']) && isset($_GET['anio'])) {
        $dia = $_GET['dia'];
        $mes = $_GET['mes'];
        $anio = $_GET['anio'];
        $fecha_nacimiento = new DateTime("$anio-$mes-$dia");
        $fecha_actual = new DateTime();
        $edad = $fecha_actual->diff($fecha_nacimiento);
        echo "La fecha de nacimiento ingresada es: {$dia}/{$mes}/{$anio} y la edad del usuario es: {$edad->y} años, {$edad->m} meses y {$edad->d} días";
    }