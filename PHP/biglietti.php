<?php

        include("cambiamentiNav.php");

        $page = str_replace('$TITOLO$', "Acquisto biglietti", $page);

        echo $page;

        $idArt = $_GET['biglietto'];

        $conn = mysqli_connect("localhost", "root", "");

        mysqli_select_db($conn, "db_venetoinmostra");

        $citta = $_SESSION['PAGINA'];

        $result = mysqli_query($conn, "select * from ". $citta ." where id ='" . $idArt ."'");


        $biglietto = file_get_contents("../HTML/descrizioneArticolo.html");

        $riga = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $titolo = $riga['titolo'];
        $testo =  $riga['testo'];
        $img = $riga['img'];
        $alt = $riga['alt'];

        $biglietto = str_replace('$TITOLO$', $titolo, $biglietto);
        $biglietto = str_replace('$TESTO$', $testo, $biglietto);
        $biglietto = str_replace('$URL$', $img, $biglietto);
        $biglietto = str_replace('$ALT$', $alt, $biglietto);
        $biglietto = str_replace('$IMG$', $img, $biglietto);
        $biglietto = str_replace('$BIGLIETTO$', "", $biglietto);

        if($riga['biglietti']!= "null"){
            $parteInferiore = file_get_contents("../HTML/acquistoBiglietto.html");
            $biglietto = str_replace('$PARTEINFERIORE$', $parteInferiore, $biglietto);
        }

        echo $biglietto;


?>
