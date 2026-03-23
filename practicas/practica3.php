<?php
    //
    if(isset($_GET['palabra'])) {
        $palabra = $_GET['palabra'];
        $numero_de_caracteres = strlen($palabra);
        $numero_de_vocales = substr_count(strtolower($palabra), 'a') + substr_count(strtolower($palabra), 'e') + substr_count(strtolower($palabra), 'i') + substr_count(strtolower($palabra), 'o') + substr_count(strtolower($palabra), 'u');
        echo "La palabra o frase ingresada es: {$palabra} y tiene un total de caracteres (Incluyendo espacios) de: {$numero_de_caracteres} y un total de vocales de: {$numero_de_vocales}";
    }