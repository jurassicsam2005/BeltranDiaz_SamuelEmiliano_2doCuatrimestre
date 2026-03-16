<?php 
    //
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $monto = $_POST["monto"];
        $usd = $_POST["usd"];
        $eur = $_POST["eur"];

        // Conversión
        $equivalenteUSD = round($monto / $usd, 2);
        $equivalenteEUR = round($monto / $eur, 2);

        // Cuántas unidades se obtienen con 100 pesos
        $usd100 = round(100 / $usd, 2);
        $eur100 = round(100 / $eur, 2);

        echo "<h3>Resultados:</h3>";
        echo "Monto original: $monto MXN <br>";
        echo "Equivalente en dólares: $equivalenteUSD USD <br>";
        echo "Equivalente en euros: $equivalenteEUR EUR <br>";
        echo "Con 100 MXN se obtienen: $usd100 USD y $eur100 EUR <br>";
    }
    ?>
