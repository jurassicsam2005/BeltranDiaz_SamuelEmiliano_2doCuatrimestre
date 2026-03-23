<?php
    // Ejemplo 4: Desarrolla un programa que simule el inicio de sesion de un programa debe validar que los datos coincidan en un usuario y contraseña predefinidos en el script PHP. S i son correctos, muestra un mensaje de bienvenida; si es incorrecto, muestra un mensaje de error indicando que campo fallo (sin revelar cual de los dos es incorrecto por seguridad)

    // Ejemplo 4: Inicio de Sesion 

    // Verificamos el usuario y la contraseña que seran los usuarios "correctos" para el inicio de sesion.
    $usuario_correcto = "admin";
    $contraseña_correcta = "lacontraseña123";

    // Verificamos si los datos han sido enviados mediante el metodo POST.
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["username"]) && isset($_POST["password"])){

         // Validamos que el usuario y la contraseña ingresados coincidan con los predefinidos
         if(($usuario_correcto === $usuario_ingresado) && ($contraseña_correcta === $contraseña_ingresada)){
            // En caso de que ambos sean correctos, mostramos un mensaje de bienvenida
            }else{
              // Si alguno de los dos, es incorrecto. Mostrar un mensaje de error, y mostrar cual fue el dato erroneo, sin mostrar el valor real
              echo "<p style='color: green;'> Bienvenido, $usuario_correcto!</p>";
              if(($usuario_correcto !== $usuario_ingresado) && ($contraseña_correcta !== $contraseña_ingresada)){
                   echo "<p style='color: red;'> Error: Usuario y contraseña incorrectos.</p>";
                } elseif($usuario_correcto !== $usuario_ingresado){
                    echo "<p style color:'red;'> Error: Usuario incorrecto.</p>";
                }  
            } 

        }
    }
?>