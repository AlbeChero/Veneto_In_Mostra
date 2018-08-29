<?php

        mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "db_venetoinmostra") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

        session_start();

        $ricercata = $_POST['cerca'];

        $page = file_get_contents("../HTML/home.html");
        $nav1 = file_get_contents("../HTML/NavigationBarUp.html");
        $bottoniNav1 = file_get_contents("../HTML/bottonea.html");

        if (isset($_SESSION['PAGINA']))
                $pag = $_SESSION['PAGINA'];
        else {$pag = ""; }


 if(!isset($_SESSION['pag']) || $_SESSION['pag'] == "http://localhost/GitLabProgetto/PHP/capoHome.php"){
     $nav2 = ""; }
    else $nav2 = file_get_contents("../HTML/NavigationBarDown.html");


        if (isset($_SESSION['username'])){
                 $username = $_SESSION['username'];
                 $username = strtoupper($username);
                 $page = str_replace('$HEADER$', $nav1, $page);
                 $page = str_replace('$ACCEDI$', "", $page);
                 $page= str_replace('$UTENTE$', $username, $page);
                 $page= str_replace('$DOWN$', $nav2, $page);
                 $page= str_replace('$PAGINA$', "", $page);
                 $page= str_replace('$FOOTER$', "", $page);
                 $pag = strtoupper($pag);
                 $page = str_replace('$LUOGO$', $pag, $page);
                 if($username == "ADMIN")
                 $page = str_replace('$NUOVIARTICOLI$', "NUOVI ARTICOLI", $page);
                 else $page = str_replace('$NUOVIARTICOLI$', "", $page);
        }  else {
                $page = str_replace('$HEADER$', $nav1, $page);
                $page = str_replace('$ACCEDI$', $bottoniNav1, $page);
                $page = str_replace('$UTENTE$', "", $page);
                $page = str_replace('$NUOVIARTICOLI$', "", $page);
                $page= str_replace('$DOWN$', $nav2, $page);
                $page= str_replace('$PAGINA$', "", $page);
                $page= str_replace('$FOOTER$', "", $page);
                $pag = strtoupper($pag);
                $page = str_replace('$LUOGO$', $pag, $page);
            }

        echo $page;


        $articolo = file_get_contents("../HTML/boxArticolo.html");

        $conn = mysqli_connect("localhost", "root", "");

        mysqli_select_db($conn, "db_venetoinmostra");

        $tabelle = array("padova", "vicenza");
        $x = 0;
        $numRisultati = 0;

    while($x < 2){

           $result = mysqli_query($conn, "select * from ".$tabelle[$x]." where testo LIKE '%".$ricercata."%' OR titolo LIKE '%".$ricercata."%'");

        while ($riga = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $titolo = $riga['titolo'];
                $testo =  $riga['testo'];
                $img = $riga['img'];
                $dataI = $riga['data_inizio'];

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
                echo $articolo;
                $numRisultati = $numRisultati + 1;
                $articolo = file_get_contents("../HTML/boxArticolo.html");
            }

            $x = $x + 1;
    }

    if($numRisultati == 0) echo "<div class='box_errore'>Nessun risultato trovato!</div>";

?>
