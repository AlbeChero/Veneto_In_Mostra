<?php

    session_start();

    $pageHome = file_get_contents("home.html");
    $Home = file_get_contents("html/paginaHomeSito.html");
    $nav1 = file_get_contents("html/NavigationBarUp.html");
    $navSezioni = file_get_contents("html/NavigationBarUp2.html");
    $nav2 = file_get_contents("html/NavigationBarDown.html");
    $bottoniNav1 =file_get_contents("html/bottonea.html");
    $footer = file_get_contents("html/footer.html");
    $pag404 = file_get_contents("html/404.html");

    if( isset($_GET['pagina']) || isset($_GET['sez']) || isset($_GET['tipo']) )
    $pageHome = str_replace('$HEADER$', $navSezioni, $pageHome);
    else $pageHome = str_replace('$HEADER$', $nav1, $pageHome);

    if (isset($_SESSION['username'])) {   //IF PER CAPIRE SE C'E' UN UTENTE LOGGATO O MENO. E SE C'E' CONTROLLO SE E' L'ADMIN

         $username = $_SESSION['username'];
         $username = strtoupper($username);
         $pageHome = str_replace('$ACCEDI$', "", $pageHome);
         $pageHome = str_replace('$UTENTE$', "<a href=\"php/datiUtente.php\"> $username </a>", $pageHome);
    }
    else {
            $pageHome = str_replace('$ACCEDI$', $bottoniNav1, $pageHome);
            $pageHome = str_replace('$UTENTE$', "", $pageHome);
    }

    if(isset($_SESSION['username']) && $username == "ADMIN")
         $pageHome = str_replace('$NUOVIARTICOLI$', "<a href=\"html/nuoviArticoli.html\">NUOVI ARTICOLI</a>", $pageHome);
    else
         $pageHome = str_replace('$NUOVIARTICOLI$', "", $pageHome);


    if( (isset($_GET['pagina']) && !(isset($_GET['data']))) || isset($_GET['sez']) )     {   //IF CHE GESTISCE LE PAGINE DELLE CITTA'


            if( isset($_GET['pagina']) && !(isset($_GET['sez']))) {
                $pag = $_GET['pagina'];

                if($pag != "padova" && $pag !="vicenza" && $pag !="venezia" && $pag !="verona"){
                    echo $pag404;
                    exit();
                }

                $titolo = ucfirst($pag);
                $pageHome = str_replace('$TITOLO$', $titolo." | Home", $pageHome);
                $pageHome = str_replace('$SEZIONE$', "HOME ".strtoupper($titolo), $pageHome);
                ob_start();
                include "php/citta.php";  //INCLUDO IL PHP CHE MI GENERA LA HOME DELLE CITTA'
            }

            else  {
                    $sezione = $_GET['sez'];
                    if ($sezione != "eventi" && $sezione != "teatro" && $sezione != "cucina" && $sezione != "arte" && $sezione != "attrazioni" && $sezione != "biglietti" && $sezione != "contatti"){
                        echo $pag404;
                        exit();
                    }

                    $pag = $_GET['pagina'];
                    $titolo = ucfirst("$pag");
                    $SEZ = ucfirst($sezione);
                    $pageHome = str_replace('$TITOLO$', $titolo." | ".$SEZ, $pageHome);
                    $pageHome = str_replace('$SEZIONE$', strtoupper($sezione), $pageHome);
                    ob_start();
                    include "php/sezGenerale.php";   //INCLUDO IL PHP CHE GENERA TUTTE LE SEZIONI GENERALI DI QUELLA CITTA'
            }

            $page = strtoupper($pag);
            $pageHome = str_replace('$DOWN$', $nav2, $pageHome);
            $pageHome = str_replace('$CITTA$', $pag, $pageHome);
            $pageHome = str_replace('$LUOGO$', $page, $pageHome);
            $risultati = ob_get_clean();
            $pageHome = str_replace('$PAGINA$', $risultati, $pageHome);
            $pageHome = str_replace('$FOOTER$', $footer, $pageHome);
            echo $pageHome;
    }

else{

    if(isset($_GET['data'])){       //GESTORE DATI E RICERCHE

        $dataBottone = $_GET['data'];
        $citta = $_GET["pagina"];

        if ($dataBottone != "oggi" && $dataBottone != "domani" && $dataBottone != "settimana" && $dataBottone != "mese"){
                echo $pag404;
                exit();
            }

        $pageHome = str_replace('$DOWN$', $nav2, $pageHome);
        $pageHome = str_replace('$CITTA$', $citta, $pageHome);
        $pag = strtoupper($citta);
        $pageHome = str_replace('$LUOGO$', $pag, $pageHome);

        ob_start();

        include "php/date.php";

        $risultati = ob_get_clean();

        $pageHome = str_replace('$PAGINA$', $risultati, $pageHome);
        $pageHome= str_replace('$FOOTER$', $footer, $pageHome);
        echo $pageHome;
    }


    else{
            if(isset($_GET['cerca'])){
                $ricercata = $_GET['cerca'];

                ob_start();

                include "php/ricerca.php";

                $risultati = ob_get_clean();
                $pageHome = str_replace('$DOWN$', "", $pageHome);
                $pageHome = str_replace('$PAGINA$', $risultati, $pageHome);
                $pageHome= str_replace('$FOOTER$', $footer, $pageHome);
                echo $pageHome;
            }


            else{
                            // SE SI ENTRA IN QUESTO ELSE ALLORA VUOL DIRE CHE SIAMO NELLA HOME PRINCIPALE DEL SITO
                $pageHome = str_replace('$PAGINA$', $Home, $pageHome);
                $pageHome = str_replace('$DOWN$', "", $pageHome);
                $pageHome = str_replace('$FOOTER$', $footer, $pageHome);
                $pageHome = str_replace('$TITOLO$', "Veneto In Mostra | Home", $pageHome);
                $pageHome = str_replace('$SEZIONE$', "HOME", $pageHome);


                if(isset($_SESSION['pag'])){
                    unset($_SESSION['pag']);
                }
                echo $pageHome;
                exit();

            }

        }

}

        $_SESSION['pag'] = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];  //LO USO PER GLI URL DEL SITO

?>
