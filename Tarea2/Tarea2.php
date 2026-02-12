<?php

// Ejercicio 1: Haz un programa que declare una cadena y la muestre en mayúsculas.
$cadena = "Esto es una cadena";
$cadena_mayusculas = strtoupper($cadena);
echo "Cadena en mayusculas: $cadena_mayusculas<br>"; 


// Ejercicio 2: Haz un programa que declare un arreglo de edades y muestre la edad mayor.
$edades = [15, 26, 34, 45, 57, 62];
$edad_mayor = max($edades);
echo "La edad mayor es: $edad_mayor<br>";

// Ejercicio 3: Haz un programa que declare un arreglo de palabras y muestre solo las que tienen más de 5 letras.
$palabras = ["Hola", "Estudiante", "Como", "Estas", "Bienvenido"];
$palbras_mas_de_cinco = [];
foreach ($palabras as $palabra) {
    if (strlen($palabra) > 5) {
        $palabras_mas_de_cinco[] = $palabra;
    }
}

echo "Palabras con mas de 5 letras: " . implode(", ", $palabras_mas_de_cinco) . "<br>";

// Ejercicio 4: Haz un programa que declare una cadena y muestre cuántas veces aparece cada letra.
$cadena = "Computadora";
$contador_letras = [];
for ($i = 0; $i < strlen($cadena); $i++) {
    $letra = strtolower($cadena[$i]);
    if (ctype_alpha($letra)) {
        if (isset($contador_letras[$letra])) {
            $contador_letras[$letra]++;
        } else {
            $contador_letras[$letra] = 1;
        }
    }
}

// Ejercicio 5: Haz un programa que declare un arreglo de números y separe pares e impares en dos arreglos nuevos.
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$pares = [];
$impares = [];
foreach ($numeros as $numero) {
    if ($numero % 2 == 0) 
        $pares[] = $numero; 
     } else { 
        $impares[] = $numero;
}   
echo "Numeros pares: " . implode(", ", $pares) . "<br>" . "Numeros impares: " . implode(", ", $impares) . "<br>";
echo "Numeros impares: " . implode(", ", $impares) . "<br>";


// Ejercicio 6: Haz un programa que declare una cadena y cuente cuántas vocales tiene. 
$cadena = "Bienvenido a la clase de Preogramacion";
$vocales = ["a", "e", "i", "o", "u"];
$contador_vocales = 0;
$letras = str_split(strtolower($cadena));
foreach ($letras as $letra) {
    if ( in_array($letra, $vocales)) {
        $contador_vocales++; 
    }
}
echo "La cadena tiene $contador_vocales vocales.<br>";

// Ejercicio 7: Haz un programa que declare un arreglo asociativo con producto y cantidad y muestre los que están bajos (<5).
$productos = [
    "Manzanas" => 10,
    "Naranjas" => 3,
    "Platanos" => 7,
    "Peras" => 2
];

foreach ($productos as $productos => $cantidad) {
    if ($cantidad < 5) {
        }
        echo "Producto bajo en stock: $producto (Cantidad $cantidad)<br>";
}

// Ejercicio 8: Haz un programa que declare una frase y reemplace una palabra por otra.
$frase = "Programas es el futuro"; 
$palabra_a_reemplazar = "futuro";
$palabra_nueva = "camino a un mejor mañana";
$frase_modificada = str_replace($palabra_a_reemplazar, $palabra_nueva, $frase);
echo "Frase modificada" : $frase_modificada<br>;

// Ejercicio 9: Haz un programa que declare un arreglo asociativo de alumnos, donde cada alumno tenga varias calificaciones, y calcule el promedio de cada uno.
$alumnos = []; 
    "Gabriel" => [9 ,8 ,10 ], 
    "Samuel" => [8, 8, 9],
    "Carlos" => [7, 8, 9], 
    "Mario" => [10, 9, 10]; 

    foreach ($alumnos as $alumno) {
        $promedio = array_sum($calificaciones) / count($calificaciones);
        }
        echo "El rpomedio de $alumno es: $promedio<br>";


// Ejercicio 10: Haz un programa que declare un arreglo de nombres y muestre los que empiezan con vocal.
$nombres = ["Gabriel", "Samuel", "Caelos", "Mario", "Emanuel","Arturo","Ivan", "Oscar"];
$vocales = ["a", "e", "i", "o", "u"];
foreach ($nombres as $nombre) {
    $primera_letra = strtolower($nombre[0]);
    if (in_array($primera_letra, $vocales)) {
        echo "Nombre que empieza con vocal: $nombre<br>";
    }
}

