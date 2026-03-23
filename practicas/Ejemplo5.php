<?php
    // Ejemplo 5: Gestion de calificaciones

    // Verificar que los datos fueron enviados mediente POST
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["nombre"]) && isset($_POST["materia"]) && isset($_POST["calificacion"])){
            // Recibimos los datos del formulario y los asignamos a variables
            $nombre = $_POST["nombre"];
            $materia = $_POST["materia"];
            $califiacion = $_POST["calificacion"];
            $calificacion_letra = "";

            // Asignamos valor de calificacion en letra segun la calificacion numerica
            if($califiacion >90 && $califiacion <=100){
                $calificacion_letra = "A";
                echo "<p>Felicidades, $nombre! Has aprobado la materia: $materia con una calificacion de excelencia: $calificacion. Valor en letra $calificacion_letra. !Sigue asi!</p>";            
            }elseif($califiacion >80 && $califiacion <=90){
                $calificacion_letra = "B";
                echo "<p>Buen trabajo, $nombre! Has aprobado la materia: $materia con una muy buena calificacion: $calificacion. Valor en letra $calificacion_letra. !Continua con tu esfuerzo!</p>";
            }elseif($califiacion >70 && $califiacion <=80){
                $calificacion_letra = "C";
                echo "<p>Bien, $nombre! Has aprobado la materia: $materia con una calificacion: $calificacion. Valor en letra $calificacion_letra. !Podemos mejorar, tu puedes!</p>";
            }elseif($califiacion >60 && $califiacion <=70){
                $calificacion_letra = "D";
                echo "<p>Uy, $nombre! Has aprobado la materia: $materia con una calificacion: $calificacion. Valor en letra $calificacion_letra. !Tienes que mejorar, echale ganas!</p>";  
            }else{
                $calificacion_letra = "F";
                echo "<p>$nombre! Has reprobado la materia: $materia con una calificacion: $calificacion. Valor en letra $calificacion_letra. !Tienes que esforzarte!</p>";
            }    
        }