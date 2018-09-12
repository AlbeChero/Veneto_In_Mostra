<?php

        include("database.php");



        $result = mysqli_query($conn, "select * from home where citta ='" . $pag ."'");

        $articolo = file_get_contents("html/notizieHome.html");

         while ($riga = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                $titoloArt = $riga['titolo'];
                $sezione = $riga['sezione'];
                $testo = $riga['testo'];
                $img = $riga['img'];
                $alt = $riga['alt'];
                $link = "index.php?pagina=". $pag ."&sez=" . $sezione ;

                $articolo = str_replace('$TITOLOART$', $titoloArt, $articolo);
                $articolo = str_replace('$TESTO$', $testo, $articolo);
                $articolo = str_replace('$ALT$', $alt, $articolo);
                $articolo = str_replace('$IMG$', $img, $articolo);
                $articolo = str_replace('$LINK$', $link, $articolo);
                echo $articolo;
                $articolo = file_get_contents("html/notizieHome.html");
            }


?>
