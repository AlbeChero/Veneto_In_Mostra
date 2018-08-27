<?php

    $conn = mysqli_connect("localhost", "root", "") or die("Could not connect: " . mysqli_error());

    $sezione = $_SESSION['SEZIONE'];

    if($sezione != "contatti"){

        $articolo = file_get_contents("../HTML/boxArticolo.html");

        $citta = $_SESSION['PAGINA'];

        mysqli_select_db($conn, "db_venetoinmostra");

        $result = mysqli_query($conn, "select * from ". $citta ." where sezione ='" . $sezione ."'");

        while ($riga = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $titolo = $riga['titolo'];
                $testo =  $riga['testo'];
                $img = $riga['img'];
                $dataI = $riga['data_inizio'];
                $dataI = implode("/", array_reverse(explode("-", $dataI)));
                $dataF = $riga['data_fine'];
                $dataF = implode("/", array_reverse(explode("-", $dataF)));
                $alt = $riga['alt'];
                $id = $riga['id'];
                $articolo = str_replace('$TITOLO$', $titolo, $articolo);
                $articolo = str_replace('$DATAI$', $dataI, $articolo);
                $articolo = str_replace('$DATAF$', $dataF, $articolo);
                $articolo = str_replace('$TESTO$', $testo, $articolo);
                $articolo = str_replace('$URL$', $img, $articolo);
                $articolo = str_replace('$ALT$', $alt, $articolo);
                echo $articolo;
                $articolo = file_get_contents("../HTML/boxArticolo.html");
            }

    } else{
        if($sezione == "contatti"){

            $contatti = file_get_contents("../HTML/contatti.html");
            echo $contatti;
        }
    }

?>
