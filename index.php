<?php

    session_start();

    $pageHome = file_get_contents("home.html");
    $Home = file_get_contents("html/paginaHomeSito.html");
    $nav1 = file_get_contents("html/NavigationBarUp.html");
    $nav2 = file_get_contents("html/NavigationBarDown.html");
    $bottoniNav1 =file_get_contents("html/bottonea.html");
    $footer = file_get_contents("html/footer.html");
    $pag404 = file_get_contents("html/404.html");

    $pageHome = str_replace('$HEADER$', $nav1, $pageHome);

    if (isset($_SESSION['username'])) {  //IF PER CAPIRE SE C'E' UN UTENTE LOGGATO O MENO. E SE C'E' CONTROLLO SE E' L'ADMIN

         $username = $_SESSION['username'];
         $username = strtoupper($username);
         $pageHome = str_replace('$ACCEDI$', "", $pageHome);
         $pageHome = str_replace('$UTENTE$', $username, $pageHome);
    }
    else {
            $pageHome = str_replace('$ACCEDI$', $bottoniNav1, $pageHome);
            $pageHome = str_replace('$UTENTE$', "", $pageHome);
    }

    if(isset($_SESSION['username']) && $username == "ADMIN")
         $pageHome = str_replace('$NUOVIARTICOLI$', "NUOVI ARTICOLI", $pageHome);
    else
         $pageHome = str_replace('$NUOVIARTICOLI$', "", $pageHome);


    if( isset($_GET['pagina']) || isset($_GET['sez']) )     {   //IF CHE GESTISCE LE PAGINE DELLE CITTA'

            if( isset($_GET['pagina'])) {
                $pag = $_GET['pagina'];
                if($pag != "padova" && $pag !="vicenza" && $pag !="venezia" && $pag !="verona"){
                    echo $pag404;
                    exit();
                }
                $_SESSION['PAGINA'] = $pag;
                $titolo = ucfirst($pag);
                $pageHome = str_replace('$TITOLO$', $titolo." | Home", $pageHome);

                ob_start();
                include "php/citta.php";  //INCLUDO IL PHP CHE MI GENERA LA HOME DELLE CITTA'
            }

            if( isset($_GET['sez']))  {
                    $sezione = $_GET['sez'];
                    if ($sezione != "eventi" && $sezione != "teatro" && $sezione != "cucina" && $sezione != "arte" && $sezione != "attrazioni" && $sezione != "biglietti" && $sezione != "contatti"){
                        echo $pag404;
                        exit();
                    }
                    $pag = $_SESSION['PAGINA'];
                    $_SESSION['SEZIONE'] = $sezione;
                    $titolo = ucfirst($pag);
                    $SEZ = ucfirst($sezione);
                    $pageHome = str_replace('$TITOLO$', $titolo." | ".$SEZ, $pageHome);
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

    if(isset($_GET['tipo'])){       //GESTORE DATI E RICERCHE

        $tipologia = $_GET['tipo'];

          if(isset($_SESSION['PAGINA'])){
                $pag = $_SESSION['PAGINA'];   }
            else{ $pag = "";
                  $nav2 = "";
        }

        if($tipologia != "ricerca" && $tipologia!= "date"){
            echo $pag404;
            exit();
        }

        $pageHome = str_replace('$DOWN$', $nav2, $pageHome);
        $pageHome = str_replace('$CITTA$', $pag, $pageHome);
        $pag = strtoupper($pag);
        $pageHome = str_replace('$LUOGO$', $pag, $pageHome);

       ob_start();

      if($tipologia == "date"){
             $_SESSION['DATA'] = $_GET['data'];
             include "php/date.php";
        }
      else {
            if(isset($_POST['cerca']))
             $_SESSION['ricerca'] = $_POST['cerca']; //PRENDO QUELLO CHE E' CERCATO

             include "php/ricerca.php";
          }

     $risultati = ob_get_clean();

     $pageHome = str_replace('$PAGINA$', $risultati, $pageHome);
     $pageHome= str_replace('$FOOTER$', $footer, $pageHome);
     echo $pageHome;
    }


    else{ // SE SI ENTRA IN QUESTO ELSE ALLORA VUOL DIRE CHE SIAMO NELLA HOME PRINCIPALE DEL SITO
            $url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            if($url == "http://" . $_SERVER['SERVER_NAME']."/GitLabProgetto/index.php"){
                $pageHome = str_replace('$PAGINA$', $Home, $pageHome);
                $pageHome = str_replace('$DOWN$', "", $pageHome);
                $pageHome = str_replace('$FOOTER$', $footer, $pageHome);
                $pageHome = str_replace('$TITOLO$', "Veneto In Mostra | Home", $pageHome);

                if(isset($_SESSION['PAGINA']))
                    unset($_SESSION['PAGINA']); //COSI SO QUANDO E' TORNATO ALLA HOME DEL SITO

                echo $pageHome;
                exit();
            }

            else{
                echo $pag404;
                exit();
            }
        }

}

        $_SESSION['pag'] = "http://" . $_SERVER['SERVER_NAME'].":8080" . $_SERVER['REQUEST_URI'];  //LO USO PER GLI URL DEL SITO

?>
