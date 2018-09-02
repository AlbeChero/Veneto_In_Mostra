<?php

        mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "db_venetoinmostra") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

        $dataOdierna = date ("Y-m-d");

        $dataBottone = $_SESSION["DATA"];
        $citta = $_SESSION["PAGINA"];
        $articolo = file_get_contents("html/boxArticolo.html");
        $elimina = file_get_contents("html/bottoneElimina.html");

        $conn = mysqli_connect("localhost", "root", "");

        mysqli_select_db($conn, "db_venetoinmostra");

        if($dataBottone == "oggi"){
            $cit = ucfirst($citta);
            $pageHome = str_replace('$TITOLO$', $cit." | Eventi di oggi", $pageHome );
            $result = mysqli_query($conn, "select * from ". $citta ." where data_inizio <='" . $dataOdierna."' and '".$dataOdierna."' <= data_fine");
            $stampa = "di oggi";
        }

        if($dataBottone == "domani"){
            $cit = ucfirst($citta);
            $pageHome  = str_replace('$TITOLO$', $cit." | Eventi di domani", $pageHome );
            $result = mysqli_query($conn, "select * from ". $citta ." where data_inizio <= '".$dataOdierna."' + interval 1 day and '".$dataOdierna."' + interval 1 day <= data_fine");
            $stampa = "di domani";
        }

        if($dataBottone == "settimana"){
             $cit = ucfirst($citta);
             $pageHome  = str_replace('$TITOLO$', $cit." | Eventi per i prossimi 7 giorni", $pageHome );
             $result = mysqli_query($conn, "select * from ". $citta ." where data_inizio <= '".$dataOdierna."' + interval 7 day and '".$dataOdierna."' + interval 7 day <= data_fine");
             $stampa = "per i prossimi 7 giorni";
        }

         if($dataBottone == "mese"){
             $cit = ucfirst($citta);
             $pageHome  = str_replace('$TITOLO$', $cit." | Eventi per i prossimi 30 giorni", $pageHome );
             $result = mysqli_query($conn, "select * from ". $citta ." where data_inizio <= '".$dataOdierna."' + interval 30 day and '".$dataOdierna."' + interval 30 day <= data_fine");
             $stampa = "per i prossimi 30 giorni";
        }

        $luogo = ucfirst($citta);
        echo "<h1>Eventi ".$stampa." a ".$luogo."</h1>";

         while ($riga = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $titolo = $riga['titolo'];
                $testo =  $riga['testo'];
                $img = $riga['img'];
                $dataI = $riga['data_inizio'];
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
                    $articolo = str_replace('$ELIMINA$', $elimina, $articolo);
                } else $articolo = str_replace('$ELIMINA$', "", $articolo);

                $articolo = str_replace('$TITOLO$', $titolo, $articolo);
                $articolo = str_replace('$DATAI$', $dataInizio, $articolo);
                $articolo = str_replace('$DATAF$', $dataFine, $articolo);
                $articolo = str_replace('$TESTO$', $testo, $articolo);
                $articolo = str_replace('$URL$', $img, $articolo);
                $articolo = str_replace('$ALT$', $alt, $articolo);


                echo $articolo;
                $articolo = file_get_contents("html/boxArticolo.html");
            }
?>
