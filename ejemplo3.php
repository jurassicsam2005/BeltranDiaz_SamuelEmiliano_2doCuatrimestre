<?php
if(isset($_GET['nombre']) && isset($_GET['edad']) && isset($_GET['estatura']) && isset($_GET['peso'])) {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
    $estatura = $_GET['estatura'];
    $peso = $_GET['peso'];

    $imc = round(($peso / ($estatura * $estatura)), 2);

    if($imc < 18.5) {
        echo "Hola $nombre, tu IMC es $imc y estás por debajo del peso ideal.</p>";
    } elseif($imc >= 18.5 && $imc < 25) {
        echo "Hola $nombre, tu IMC es $imc y estas en tu peso ideal.</p>";
    } else {
        echo "Hola $nombre, tu IMC es $imc y tienes sobrepeso.";
    }
} else {
    echo "Por favor, completa todos los campos del formulario.";
}
