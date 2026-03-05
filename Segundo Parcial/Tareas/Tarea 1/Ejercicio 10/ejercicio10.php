<?php
    //
    if (isset ($_GET['nombre empleado']) && isset($_GET['sueldo'])) {
        $nombreEmpleado = $_GET['nombre empleado'];
        $sueldo = $_GET['sueldo'];
        $aumento = $sueldo * 0.10;
        $nuevoSueldo = $sueldo + $aumento;

        echo "El nuevo sueldo de $nombreEmpleado es: $" . number_format($nuevoSueldo, 2);
    } else {
        echo "Por favor, proporciona el nombre del empleado y su sueldo en la URL usando ?nombre_empleado=tu_nombre&sueldo=tu_sueldo";
    }