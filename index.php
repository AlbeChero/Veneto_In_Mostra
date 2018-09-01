<?php

    session_start();


    $pageHome = file_get_contents("home.html");
    $Home = file_get_contents("html/paginaHomeSito.html");
    $nav1 = file_get_contents("html/NavigationBarUp.html");
    $nav2 = file_get_contents("html/NavigationBarDown.html");
    $bottoniNav1 =file_get_contents("html/bottonea.html");
    $footer = file_get_contents("html/footer.html");


    if (isset($_SESSION['username'])){

         $username = $_SESSION['username'];
         $username = strtoupper($username);
         $pageHome = str_replace('$HEADER$', $nav1, $pageHome);
         $pageHome = str_replace('$ACCEDI$', "", $pageHome);
         $pageHome = str_replace('$UTENTE$', $username, $pageHome);
         if($username == "ADMIN")
         $pageHome = str_replace('$NUOVIARTICOLI$', "NUOVI ARTICOLI", $pageHome);
         else $pageHome = str_replace('$NUOVIARTICOLI$', "", $pageHome);
         }

    else {
                $pageHome = str_replace('$HEADER$', $nav1, $pageHome);
                $pageHome = str_replace('$ACCEDI$', $bottoniNav1, $pageHome);
                $pageHome = str_replace('$UTENTE$', "", $pageHome);
                $pageHome = str_replace('$NUOVIARTICOLI$', "", $pageHome);
    }

         if(isset($_GET['pagina']))     {

                        $pag = $_GET['pagina'];
                        $_SESSION['PAGINA'] = $pag;
                        $pageHome = str_replace('$DOWN$', $nav2, $pageHome);
                        $pageHome = str_replace('$CITTA$', $pag, $pageHome);
                        $titolo = ucfirst($pag);
                        $pageHome = str_replace('$TITOLO$', $titolo." | Home", $pageHome);
                        $pag = strtoupper($pag);
                        ob_start();
                        include "php/citta.php";
                        $aux = ob_get_clean();
                        $pageHome = str_replace('$LUOGO$', $pag, $pageHome);
                        $pageHome = str_replace('$PAGINA$', $aux, $pageHome);
                        $pageHome = str_replace('$FOOTER$', $footer, $pageHome);
                        echo $pageHome;
                         }

                else { if(isset($_GET['sez']))       {
                            $pag = $_SESSION['PAGINA'];
                            $sezione = $_GET['sez'];
                            $_SESSION['SEZIONE'] = $sezione;
                            $pageHome = str_replace('$DOWN$', $nav2, $pageHome);
                            $pageHome = str_replace('$CITTA$', $pag, $pageHome);
                            $titolo = ucfirst($pag);
                            $SEZ = ucfirst($sezione);
                            $pageHome = str_replace('$TITOLO$', $titolo." | ".$SEZ, $pageHome);
                            $pag = strtoupper($pag);
                            ob_start();
                            include "php/sezGenerale.php";
                            $aux = ob_get_clean();
                            $pageHome = str_replace('$LUOGO$', $pag, $pageHome);
                            $pageHome = str_replace('$PAGINA$', $aux, $pageHome);
                            $pageHome = str_replace('$FOOTER$', $footer, $pageHome);
                            echo $pageHome;                  }
                      else{
                            $pageHome = str_replace('$PAGINA$', $Home, $pageHome);
                            $pageHome = str_replace('$DOWN$', "", $pageHome);
                            $pageHome = str_replace('$FOOTER$', $footer, $pageHome);
                            $pageHome = str_replace('$TITOLO$', "Veneto In Mostra | Home", $pageHome);
                            if(isset($_SESSION['PAGINA'])) unset($_SESSION['PAGINA']);
                            $_SESSION['pag'] = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                            echo $pageHome;
                            exit;
                          }

                     }

        $_SESSION['pag'] = "http://" . $_SERVER['SERVER_NAME']. $_SERVER['REQUEST_URI'];

?>