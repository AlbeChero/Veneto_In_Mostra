<?php

        mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "db_venetoinmostra") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

        $conn = mysqli_connect("localhost", "root", "");

        mysqli_select_db($conn, "db_venetoinmostra");

        $citta = $_SESSION['PAGINA'];

        $result = mysqli_query($conn, "select * from home where citta ='" . $citta ."'");

        $articolo = file_get_contents("html/notizieHome.html");

         while ($riga = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                $titoloArt = $riga['titolo'];
                $sezione = $riga['sezione'];
                $testo = $riga['testo'];
                $img = $riga['img'];
                $alt = $riga['alt'];
                $link = "../index.php?sez=" . $sezione ;

                $articolo = str_replace('$TITOLOART$', $titoloArt, $articolo);
                $articolo = str_replace('$TESTO$', $testo, $articolo);
                $articolo = str_replace('$ALT$', $alt, $articolo);
                $articolo = str_replace('$IMG$', $img, $articolo);
                $articolo = str_replace('$LINK$', $link, $articolo);
                echo $articolo;
                $articolo = file_get_contents("html/notizieHome.html");
            }


?>
