<?php
    //
    if(isset($_GET['grados_Celcius'])) {
        $grados_Celcius = $_GET['grados_Celcius'];
        $convertir_a_Fahrenheit = ($grados_Celcius * 1.8)+ 32;
        $convertir_a_Kelvin = $grados_Celcius * 1.8 + 273.15;
        echo "Se hara la conversion de grados Celcius a grados Fahrenheit {$grados_Celcius} a {$convertir_a_Fahrenheit}";
        for ($i = 0; $i < 10; $i++) {
            }
            echo "<br>";
            echo "Se hara la conversion de grados Celcius a grados Kelvin {$grados_Celcius} a {$convertir_a_Kelvin}";
    }
    