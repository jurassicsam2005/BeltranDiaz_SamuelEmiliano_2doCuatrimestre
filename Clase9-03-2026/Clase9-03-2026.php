  <?php
// Ejemplo 1: Crea un formulario de registro de usuario que solicite el nomnre completo, correo electronico, contraseña y edad. El programa debe validar que la contraseña tenga al menos 8 caracteres y que la edad sea un numero positivo. Si todo es corecto, muestra un resumen de los datos registrados, ocultando la contraseña con asteriscos.

// Verificar si el formulario ha sido enviado por metodo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que los campos existan 
    if (isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["contrasena"]) && isset($_POST["edad"])) {

        $nombre_completo = $_POST["nombre"];
        $correo_electronico = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        $edad = $_POST["edad"];
        // Reemplazamos la contraseña con asteriscos
        $contraseña_oculta 

        // Validar que la contraseña tenga al menos 8 caracteres
        if (strlen($contrasena) < 8) {
            echo "<p style='color:red;'> La contraseña debe tomar al menos <strong>8 caractreres</strong>!</p>";
         }
            //Verificamos que la edad sea un numero positivo
         elseif($edad <= 0) {
            echo "<p style=color:red;'> La edad debe ser un numero positivo!</p>"
            }else{
               echo "<p><strong>Nombre: </strong>" . $nombre . "</p>";
               echo "<p><strong>Correo electronico: </strong>" . $correo . "</p>";
               echo "<p><strong>Contraseña: </strong>" . $contraseña_oculta . "</p>";
               echo "<p><strong>Edad: </strong>" . $edad . "</p>";
            }
        }else{
        echo "<p style=color:red;'> Por favor completa todos los campos del formulario!</p>";    
        }
}
    
