<?php

    include("php/database.php");

    include("php/connDatabase.php");

    $sezione = $_GET['sez'];
    $citta = $_GET['pagina'];

    if($sezione != "contatti"){

        $articolo = file_get_contents("sezione/boxArticolo.html");
        $elimina = file_get_contents("sezione/bottoneElimina.html");


        if($sezione != "biglietti")
                $result = mysqli_query($conn, "select * from ". $citta ." where sezione ='" . $sezione ."'");
        else  $result = mysqli_query($conn, "select * from ". $citta ." where biglietti <> 'null' ");

        while ($riga = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $titolo = $riga['titolo'];
                $testo =  $riga['testo'];
                $img = $riga['img'];
                $dataI = $riga['data_inizio'];
                $biglietti = $riga['biglietti'];
                $alt = $riga['alt'];
                $id = $riga['id'];

                if($dataI != ""){
                    $dataI = implode("/", array_reverse(explode("-", $dataI)));
                    $dataInizio = "DAL ".$dataI;    }
                else $dataInizio = "";

                $dataF = $riga['data_fine'];

                if($dataF != ""){
                $dataF = implode("/", array_reverse(explode("-", $dataF)));
                $dataFine = " AL ".$dataF;    }
                else $dataFine = "";

                if (isset($_SESSION['username']) && $_SESSION['username'] == "admin"){
                    $elimina = str_replace('$ID$', $id, $elimina);
                    $elimina = str_replace('$CITTA$', $citta, $elimina);
                    $articolo = str_replace('$ELIMINA$', $elimina , $articolo);
                } else $articolo = str_replace('$ELIMINA$', "" , $articolo);

                $articolo = str_replace('$TITOLO$', $titolo, $articolo);
                $articolo = str_replace('$DATAI$', $dataInizio, $articolo);
                $articolo = str_replace('$DATAF$', $dataFine, $articolo);
                $articolo = str_replace('$TESTO$', $testo, $articolo);
                $articolo = str_replace('$URL$', $img, $articolo);
                $articolo = str_replace('$ALT$', $alt, $articolo);

                if($biglietti!='null'){
                    $articolo = str_replace('$BIGLIETTO$', $biglietti, $articolo);
                } else $articolo = str_replace('$BIGLIETTO$', "", $articolo);


                echo $articolo;
                $articolo = file_get_contents("sezione/boxArticolo.html");
                $elimina = file_get_contents("sezione/bottoneElimina.html");
            }

    } else{

            $contatti = file_get_contents("sezione/contatti.html");
            echo $contatti;


    }

?>
