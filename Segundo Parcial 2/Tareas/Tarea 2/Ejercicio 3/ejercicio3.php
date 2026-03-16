<?php
    //
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cal1 = $_POST["cal1"];
        $peso1 = $_POST["peso1"];
        $cal2 = $_POST["cal2"];
        $peso2 = $_POST["peso2"];
        $cal3 = $_POST["cal3"];
        $peso3 = $_POST["peso3"];

        $sumaPesos = $peso1 + $peso2 + $peso3;

        if ($sumaPesos != 100) {
            echo "<p style='color:red;'>Error: La suma de los porcentajes debe ser exactamente 100%. Actualmente es $sumaPesos%.</p>";
        } else {
            // a) Aportación ponderada de cada evaluación
            $aport1 = $cal1 * $peso1 / 100;
            $aport2 = $cal2 * $peso2 / 100;
            $aport3 = $cal3 * $peso3 / 100;

            // b) Promedio ponderado final
            $promedio = $aport1 + $aport2 + $aport3;

            // c) Aprobado o reprobado
            $resultado = $promedio >= 60 ? "Aprobado" : "Reprobado";

            // d) Evaluación con la calificación más alta y más baja
            $evaluaciones = [
                "Parcial 1" => $cal1,
                "Parcial 2" => $cal2,
                "Examen Final" => $cal3
            ];
            $maxEval = array_keys($evaluaciones, max($evaluaciones))[0];
            $minEval = array_keys($evaluaciones, min($evaluaciones))[0];

            echo "<h3>Resultados:</h3>";
            echo "Aportación Parcial 1: $aport1 <br>";
            echo "Aportación Parcial 2: $aport2 <br>";
            echo "Aportación Examen Final: $aport3 <br>";
            echo "Promedio Ponderado Final: $promedio <br>";
            echo "Resultado: $resultado <br>";
            echo "Evaluación con mayor calificación: $maxEval ({$evaluaciones[$maxEval]}) <br>";
            echo "Evaluación con menor calificación: $minEval ({$evaluaciones[$minEval]}) <br>";
        }
    }
    ?>

