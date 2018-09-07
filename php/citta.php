<?php

         mysqli_report(MYSQLI_REPORT_STRICT);

        include("database.php");

        $citta = file_get_contents("html/citta.html");

        $titolo = $_SESSION['PAGINA']; //per titolo qui si intende il nome della citta: vicenza, padova ecc

        $immagine = "images/".$titolo."/".$titolo."Home.jpg";

        $alt = "foto di ".$titolo;

        $citta = str_replace('$TITOLO$', $titolo, $citta);

        $citta = str_replace('$IMGCITTA$', $immagine, $citta);

        $citta = str_replace('$ALT$', $alt, $citta);

        $citta = str_replace('$CITTA$', $titolo, $citta);

        //prima parte della pagina strutturata

        include("connDatabase.php");

        echo $citta;

        include("notizieHome.php");

        mysqli_close($conn);

?>
