<?php

         mysqli_report(MYSQLI_REPORT_STRICT);

        include("database.php");

        $citta = file_get_contents("html/citta.html");

         //per titolo qui si intende il nome della citta: vicenza, padova ecc

        $immagine = "images/".$pag."/".$pag."Home.jpg";

        $alt = "foto di ".$pag;

        $citta = str_replace('$TITOLO$', $pag, $citta);

        $citta = str_replace('$IMGCITTA$', $immagine, $citta);

        $citta = str_replace('$ALT$', $alt, $citta);

        $citta = str_replace('$CITTA$', $pag, $citta);

        //prima parte della pagina strutturata

        include("connDatabase.php");

        echo $citta;

        include("notizieHome.php");

        mysqli_close($conn);

?>
