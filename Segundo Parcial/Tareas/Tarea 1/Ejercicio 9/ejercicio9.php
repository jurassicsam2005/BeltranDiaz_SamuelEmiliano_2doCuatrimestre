<?php
    //
    if (isset($_GET['frase'])) {
        $frase = $_GET['frase'];
        $palabra = $_GET['palabra'];
        $veces = substr_count(strtolower($frase), strtolower($palabra));
        $contiene = strpos(strtolower($frase), strtolower($palabra)) !== false;

        echo "a. La palabra '$palabra' aparece $veces veces en la frase.<br>";
        echo "b. La frase " . ($contiene ? "contiene" : "no contiene") . " la palabra '$palabra'.<br>";

        $fraseResaltada = str_replace(
            strtolower($palabra),
            '<strong>' . $palabra . '</strong>',
            strtolower($frase)
        );
        echo "c. La frase con las palabras resaltadas es: $fraseResaltada<br>";
    } else {
        echo "Por favor, proporciona una frase y una palabra a buscar en la URL usando ?frase=tu_frase&palabra=tu_palabra";
    }