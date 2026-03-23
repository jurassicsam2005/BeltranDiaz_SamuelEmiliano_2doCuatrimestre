<?php
    //
    if(isset($_GET['salario'])) {
        $salario = $_GET['salario'];
        $aumento = $salario * 0.15;
        $nuevo_salario = $salario + $aumento;
        echo "El salario original es: {$salario} y el nuevo salario con el aumento del 15% es: {$nuevo_salario}";
    }