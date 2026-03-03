<?php
if(isset($_GET['nombre'])) { // Verifico si se envio el parematro 'nombre'
    $nombres = $_GET['nombre']; // Asigno el valor del parametro 'nombre'a la variable $nombres 
    $lista_arrays = explode(",", $nombres); // Divido la cadena $nombre en un arreglo, utilizando "," como delimitador

    echo "Los nombres ingresados por el usuario son: <br>"; // Imprimo un mensaje indicando que se musstran los nombres ingresados

    foreach($lista_arrays as $nombre) { // Recorremos el arreglo elemento mediante un foreach, recuerda que $nombre es una variable temporal 
        echo $nombre . "<br>";
    }
    echo "Total de nombres ingresados: " . count($lista_arrays);
}