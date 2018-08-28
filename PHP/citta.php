<?php

         mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "db_venetoinmostra") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

        $citta = file_get_contents("../HTML/citta.html");

        $titolo = $_SESSION['PAGINA']; //per titolo qui si intende il nome della citta: vicenza, padova ecc

        $immagine = "../IMG/".$titolo."/".$titolo."Home.jpg";

        $alt = "foto di ".$titolo;

        $citta = str_replace('$TITOLO$', $titolo, $citta);

        $citta = str_replace('$IMGCITTA$', $immagine, $citta);

        $citta = str_replace('$ALT$', $alt, $citta);

        $citta = str_replace('$CITTA$', $titolo, $citta);

        //prima parte della pagina strutturata

        $conn = mysqli_connect("localhost", "root", "");

        mysqli_select_db($conn, "db_venetoinmostra");

        echo $citta;

        include("notizieHome.php");

?>
