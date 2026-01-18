<?php

// Condicionales

// Condicional if simple
if ($num1 > $num2) {
    echo "$num1 es mayor que $num2<br>";
}else{
    echo "$num2 es mayor que $num1<br>";
}

// Condicional if - elseif - else
if ($num1 > $num2) {
    echo "$num1 es mayor que $num2<br>";
} elseif ($num1 < $num2) { //Python: elif 
    echo "$num2 es mayor que $num1<br>";
} else {
    echo "Ambos numeros son iguales<br>";
}

// Switch
$dia = 3;
switch ($dia) { // Switch (3) 
    case 1:
        echo "Lunes<br>";
        break;
    case 2:
        echo "Martes<br>";
        break;
    case 3:
        echo "Miercoles<br>";
        break;
    case 4:
        echo "Jueves<br>";
        break;
    case 5:
        echo "Viernes<br>";
        break;
    case 6:
        echo "Sabado<br>";
        break;
    case 7:
        echo "Domingo<br>";
        break;
    default:
        echo "Dia invalido<br>";
        break;

}