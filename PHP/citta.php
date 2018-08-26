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

        //prima parte della pagina strutturata

        $conn = mysqli_connect("localhost", "root", "");

        mysqli_select_db($conn, "db_venetoinmostra");

        $sezione1 = "eventi"; //questi possono esssere asegnati dall'admin
        $id1 = 2;

        $risultato1 = mysqli_query($conn, "select * from ".$titolo." where sezione ='" . $sezione1 ."' and id = '".$id1."'");

        if($risultato1){

            $riga = mysqli_fetch_array($risultato1, MYSQLI_ASSOC);

            $titoloArt = $riga['titolo'];
            $testo = $riga['home'];
            $img = $riga['img'];
            $alt = $riga['alt'];
            $link = "../PHP/capoHome.php?pagina='".$titolo."'";

            $citta = str_replace('$TITOLOART$', $titoloArt, $citta);
            $citta = str_replace('$TESTO$', $testo, $citta);
            $citta = str_replace('$ALT$', $alt, $citta);
            $citta = str_replace('$IMG$', $img, $citta);
            $citta = str_replace('$LINK$', $link, $citta);

        }

        $sezione2 = "teatro"; //questo possono essere assegnati dall'admnin
        $id2 = 6;

        $risultato2 = mysqli_query($conn, "select * from ".$titolo." where sezione ='" . $sezione2 ."'and id = '".$id2."'");

          if($risultato2){

            $riga = mysqli_fetch_array($risultato2, MYSQLI_ASSOC);

            $titoloArt = $riga['titolo'];
            $testo = $riga['home'];
            $img = $riga['img'];
            $alt = $riga['alt'];
            $link = "../PHP/capoHome.php?pagina='".$titolo."'";

            $citta = str_replace('$TITOLOART2$', $titoloArt, $citta);
            $citta = str_replace('$TESTO2$', $testo, $citta);
            $citta = str_replace('$ALT2$', $alt, $citta);
            $citta = str_replace('$IMG2$', $img, $citta);
            $citta = str_replace('$LINK2$', $link, $citta);

        }


        echo $citta;

?>
