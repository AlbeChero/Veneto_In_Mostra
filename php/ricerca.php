<?php

        include("database.php");

        include("connDatabase.php");


    $articolo = file_get_contents("html/boxArticolo.html");
    $elimina = file_get_contents("html/bottoneElimina.html");


    $pageHome  = str_replace('$TITOLO$', "Ricerca nel sito", $pageHome );  //ricera nella Home, quindi cerco in tutte le citta
    $pageHome = str_replace('$SEZIONE$', "RICERCA NEL SITO", $pageHome);

    $tabelle = array("padova", "vicenza", "verona", "venezia");
    $x = 0;
    $numRisultati = 0;

    while($x < 4){
        $result1 = mysqli_query($conn, "select * from ".$tabelle[$x]." where sezione <> 'biglietti' AND (testo LIKE '%".$ricercata."%' OR titolo LIKE '%".$ricercata."%')");

         while ($riga = mysqli_fetch_array($result1, MYSQLI_ASSOC)){
             $numRisultati = $numRisultati + 1;
         }
         $x = $x + 1;
    }

    if ($numRisultati == 0){
                            if(!empty($_SESSION['pag'])){
                                $url = $_SESSION['pag'];
                            } else $url = "index.php";
                            echo "<div class=\"messaggioSpeciale2\">Nessun risultato per: \"".$ricercata."\"</div>";
                            echo "<div class=\"messaggioSpeciale2\">Torna <a href=\"$url\">indietro</a> del sito</div>";
                          }
    else{

        if(!empty($_SESSION['pag'])){
             $url = $_SESSION['pag'];
        } else $url = "index.php";
        echo "<div class=\"messaggioSpeciale2\">Risultati per: \"".$ricercata."\"</div>";
        echo "<div class=\"messaggioSpeciale2\">Torna <a href=\"$url\">indietro</a> del sito</div>";

    }

    $x = 0;

    while($x < 4){

           $result = mysqli_query($conn, "select * from ".$tabelle[$x]." where sezione <> 'biglietti' AND (testo LIKE '%".$ricercata."%' OR titolo LIKE '%".$ricercata."%')");

        while ($riga = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $titolo = $riga['titolo'];
                $testo =  $riga['testo'];
                $img = $riga['img'];
                $dataI = $riga['data_inizio'];
                $biglietti = $riga['biglietti'];
                $alt = $riga['alt'];
                $id = $riga['id'];
                $citta = $tabelle[$x];

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
                    $elimina = str_replace('$ID$', $id , $elimina);
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

            $x = $x + 1;
    }


?>
