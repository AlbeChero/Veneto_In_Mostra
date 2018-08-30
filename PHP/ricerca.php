<?php

        mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "db_venetoinmostra") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

        include("cambiamentiNav.php");

        $ricercata = $_POST['cerca'];
        $articolo = file_get_contents("../HTML/boxArticolo.html");

        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "db_venetoinmostra");

        if (isset($_SESSION['PAGINA']))
                $pag = $_SESSION['PAGINA']; //per pagina intendo le citta qui, quindi vicenza, padova ecc
        else $pag = "";


 if( !isset($_SESSION['pag']) || $_SESSION['pag'] == "http://localhost/GitLabProgetto/PHP/capoHome.php" ){  //sessione['pag'] e' l'url
     $nav2 = "";
     $page = str_replace('$TITOLO$', "Home | Cerca", $page);  //ricera nella Home, quindi cerco in tutte le citta
     echo $page;

    $tabelle = array("padova", "vicenza", "verona", "venezia");
    $x = 0;
    $numRisultati = 0;

    while($x < 4){

           $result = mysqli_query($conn, "select * from ".$tabelle[$x]." where sezione <> 'biglietti' AND (testo LIKE '%".$ricercata."%' OR titolo LIKE '%".$ricercata."%')");

        while ($riga = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $titolo = $riga['titolo'];
                $testo =  $riga['testo'];
                $img = $riga['img'];
                $dataI = $riga['data_inizio'];
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
                    $articolo = str_replace('$ELIMINA$', "elimina", $articolo);
                } else $articolo = str_replace('$ELIMINA$', "", $articolo);

                $alt = $riga['alt'];
                $id = $riga['id'];
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
                $numRisultati = $numRisultati + 1;
                $articolo = file_get_contents("../HTML/boxArticolo.html");
            }

            $x = $x + 1;
    }

 }
    else  {
             $titolo = ucfirst($pag);
             $page= str_replace('$TITOLO$', $titolo." | Cerca", $page);
             echo $page;

             $result = mysqli_query($conn, "select * from ".$titolo." where sezione <> 'biglietti' AND (testo LIKE '%".$ricercata."%' OR titolo LIKE '%".$ricercata."%')");

            while ($riga = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $titolo = $riga['titolo'];
                $testo =  $riga['testo'];
                $img = $riga['img'];
                $dataI = $riga['data_inizio'];
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
                    $articolo = str_replace('$ELIMINA$', "elimina", $articolo);
                } else $articolo = str_replace('$ELIMINA$', "", $articolo);

                $alt = $riga['alt'];
                $id = $riga['id'];
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
                $articolo = file_get_contents("../HTML/boxArticolo.html");
            }
        }

?>
