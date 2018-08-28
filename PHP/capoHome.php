<?php

    session_start();


    $pageHome = file_get_contents("../HTML/home.html");
    $Home = file_get_contents("../HTML/paginaHomeSito.html");
    $nav1 = file_get_contents("../HTML/NavigationBarUp.html");
    $nav2 = file_get_contents("../HTML/NavigationBarDown.html");
    $bottoniNav1 =file_get_contents("../HTML/bottonea.html");
    $footer = file_get_contents("../HTML/footer.html");


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
                        $pageHome = str_replace('$PAGINA$', "", $pageHome);
                        $pageHome = str_replace('$FOOTER$', "", $pageHome);
                        echo $pageHome;
                        include "citta.php";
                        $pageHome = str_replace('$FOOTER$', $footer, $pageHome);
                        echo $footer;

                         }

                else { if(isset($_GET['sez']))       {
                            $pag = $_SESSION['PAGINA'];
                            $sezione = $_GET['sez'];
                            $_SESSION['SEZIONE'] = $sezione;

                            $pageHome = str_replace('$PAGINA$', "", $pageHome);
                            $pageHome = str_replace('$DOWN$', $nav2, $pageHome);
                            $pageHome = str_replace('$CITTA$', $pag, $pageHome);
                            $pageHome = str_replace('$FOOTER$', "", $pageHome);
                            echo $pageHome;
                            include "sezGenerale.php";
                            echo $footer;                  }
                      else{
                            $pageHome = str_replace('$PAGINA$', $Home, $pageHome);
                            $pageHome = str_replace('$DOWN$', "", $pageHome);
                            $pageHome = str_replace('$FOOTER$', $footer, $pageHome);
                            echo $pageHome;
                            exit;
                          }

                     }

?>
