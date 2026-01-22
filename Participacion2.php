<?php
// Ejercicio1 : Haz un programa que reciba una cadena (Ya definida en el codigo), y devuelva la misma cadena pero con las palabras en orden inverso. Maneja los posibles errores.
$cadena = "Ejemplo de cadena";
$palabras = explode(" ", $cadena);
foreach (count($palabras) > 0) {
    $cadena_invertida =strrev(implode(" ", array_reverse($palabras)));
    echo "Cadena invertida: $cadena_invertida<br>";
} else {

    echo "Error: La cadena está vacía.<br>";
}


// Ejercicio 2: Haz un programa que reciba una cadena de texto que contenga una lista de numeros separados por comas (Ya definida en el codigo), y devuelva la suma de esos numeros. Maneja los posibles errores
$cadena_numeros = "10,20,30,40,50";
$numeros = explode(",", $cadena_numeros);
$suma = 0;
$errores = false;
foreach ($numeros as $numero) {
    if (is_numeric($numero)) {
        $suma += $numero;
    } else {
        $errores = true;
        echo "Error: '$numero' no es un número válido.<br>";
    }
}


// Ejercicio 3: Haz un programa que reciba una cadena de texto (Ya definida en el codigo), y cuente cuantas veces aparece una subcadena especifica dentro de esa cadena. Maneja los posibles errores.
$cadena_texto = "Este es un ejemplo de cadena";
$subcadena = "de";
$contador = 0;
if (is_string($cadena_texto) && is_string($subcadena)) {
    $contador = substr_count($cadena_texto, $subcadena);
    echo "La subcadena '$subcadena' aparece $contador veces en la cadena.<br>";
} else {
    echo "Error: Las entradas no son cadenas de texto válidas.<br>";
}