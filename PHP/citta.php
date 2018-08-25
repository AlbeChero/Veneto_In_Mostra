<?php

        $citta = file_get_contents("../HTML/citta.html");

        $titolo = $_SESSION['PAGINA'];

        $immagine = "../IMG/".$titolo."/".$titolo."Home.jpg";

        $alt = "foto di ".$titolo;

        $citta = str_replace('$TITOLO$', $titolo, $citta);

        $citta = str_replace('$IMGCITTA$', $immagine, $citta);

        $citta = str_replace('$ALT$', $alt, $citta);

        echo $citta;

?>
