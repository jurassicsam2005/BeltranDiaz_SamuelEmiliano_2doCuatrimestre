<?php
    //
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Función para normalizar texto (minúsculas y sin acentos)
        function normalizar($cadena) {
            $cadena = strtolower($cadena);
            $cadena = str_replace(
                ['á','é','í','ó','ú','ñ'],
                ['a','e','i','o','u','n'],
                $cadena
            );
            return str_replace(' ', '', $cadena);
        }

        $nombre = normalizar($_POST["nombre"]);
        $apaterno = normalizar($_POST["apaterno"]);
        $amaterno = normalizar($_POST["amaterno"]);
        $anio = intval($_POST["anio"]);

        // a) Primera letra del nombre + apellido paterno
        $sug1 = substr($nombre, 0, 1) . $apaterno;

        // b) Nombre completo + últimos 2 dígitos del año
        $sug2 = $nombre . substr($anio, -2);

        // c) Apellido paterno + apellido materno + primera letra del nombre
        $sug3 = $apaterno . $amaterno . substr($nombre, 0, 1);

        // d) Iniciales + año completo
        $sug4 = substr($nombre, 0, 1) . substr($apaterno, 0, 1) . substr($amaterno, 0, 1) . $anio;

        // e) Apellido paterno al revés + número de caracteres del nombre completo
        $nombreCompleto = $nombre . $apaterno . $amaterno;
        $sug5 = strrev($apaterno) . strlen($nombreCompleto);

         echo "<h3>Sugerencias de nombre de usuario:</h3>";
        echo "1) $sug1 <br>";
        echo "2) $sug2 <br>";
        echo "3) $sug3 <br>";
        echo "4) $sug4 <br>";
        echo "5) $sug5 <br>";
    }
?>