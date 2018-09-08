<?php

        include("database.php");
        $dataOdierna = date ("Y-m-d");

        $dataBottone = $_SESSION["DATA"];
        $citta = $_SESSION["PAGINA"];
        $articolo = file_get_contents("html/boxArticolo.html");
        $elimina = file_get_contents("html/bottoneElimina.html");

        include("connDatabase.php");

        if($dataBottone == "oggi"){
            $cit = ucfirst($citta);
            $pageHome = str_replace('$TITOLO$', $cit." | Eventi di oggi", $pageHome );
            $pageHome = str_replace('$SEZIONE$', "EVENTI OGGI A ".strtoupper($citta), $pageHome);
            $query = "select * from ". $citta ." where data_inizio <='" . $dataOdierna."' and '".$dataOdierna."' <= data_fine";
            $result = mysqli_query($conn, $query);
            $stampa = "di oggi";
        }

        if($dataBottone == "domani"){
            $cit = ucfirst($citta);
            $pageHome  = str_replace('$TITOLO$', $cit." | Eventi di domani", $pageHome );
            $pageHome = str_replace('$SEZIONE$', "EVENTI DOMANI A ".strtoupper($citta), $pageHome);
            $query = "select * from ". $citta ." where data_inizio <= '".$dataOdierna."' + interval 1 day and '".$dataOdierna."' + interval 1 day <= data_fine ";
            $result = mysqli_query($conn, $query);
            $stampa = "di domani";
        }

        if($dataBottone == "settimana"){
             $cit = ucfirst($citta);
             $pageHome  = str_replace('$TITOLO$', $cit." | Eventi per i prossimi 7 giorni", $pageHome );
             $pageHome = str_replace('$SEZIONE$', "EVENTI PROSSIMI 7 GIORNI A ".strtoupper($citta), $pageHome);
             $query = "select * from ". $citta ." where data_inizio <= '".$dataOdierna."' + interval 7 day and '".$dataOdierna."'<= data_fine ";
             $result = mysqli_query($conn, $query);
             $stampa = "per i prossimi 7 giorni";
        }

         if($dataBottone == "mese"){
             $cit = ucfirst($citta);
             $pageHome  = str_replace('$TITOLO$', $cit." | Eventi per i prossimi 30 giorni", $pageHome );
             $pageHome = str_replace('$SEZIONE$', "EVENTI PROSSIMI 30 GIORNI A ".strtoupper($citta), $pageHome);
             $query = "select * from ". $citta ." where data_inizio <= '".$dataOdierna."' + interval 30 day and '".$dataOdierna."' <= data_fine ";
             $result = mysqli_query($conn, $query);
             $stampa = "per i prossimi 30 giorni";
        }

        if(!($riga = mysqli_fetch_array($result, MYSQLI_ASSOC)))
            echo "<div class=\"messaggioSpeciale2\">Nessun evento in programma</div>";
        else{
                $result = mysqli_query($conn, $query);
                $luogo = ucfirst($citta);
                echo "<div class=\"messaggioSpeciale\">Eventi ".$stampa." a ".$luogo."</div>";   }

         while ($riga = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $titolo = $riga['titolo'];
                $testo =  $riga['testo'];
                $img = $riga['img'];
                $dataI = $riga['data_inizio'];
                $alt = $riga['alt'];
                $id = $riga['id'];
                $biglietti = $riga['biglietti'];

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
                    $articolo = str_replace('$ELIMINA$', $elimina, $articolo);
                } else $articolo = str_replace('$ELIMINA$', "", $articolo);

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
                $articolo = file_get_contents("html/boxArticolo.html");
            }

        mysqli_close($conn);
?>
