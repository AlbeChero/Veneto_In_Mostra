<?php

    session_start();

    if(isset($_GET['tipo']))
    $tipologia = $_GET['tipo'];
    else $tipologia = "ricerca";

    $page = file_get_contents("home.html");
    $Home = file_get_contents("html/paginaHomeSito.html");
    $nav1 = file_get_contents("html/NavigationBarUp.html");
    $bottoniNav1 =file_get_contents("html/bottonea.html");
    $footer = file_get_contents("html/footer.html");

    if(isset($_SESSION['PAGINA'])){
      $pag = $_SESSION['PAGINA'];
      $nav2 = file_get_contents("html/NavigationBarDown.html");  }
    else{ $pag = "";
          $nav2 = "";
        }

     $page = str_replace('$HEADER$', $nav1, $page);
     $page= str_replace('$DOWN$', $nav2, $page);
     $page = str_replace('$CITTA$', $pag, $page);
     $pag = strtoupper($pag);
     $page = str_replace('$LUOGO$', $pag, $page);
     $page= str_replace('$FOOTER$', $footer, $page);

      ob_start();

     if($tipologia == "data"){
             $_SESSION['DATA'] = $_GET['data'];
             include "php/date.php";
        }
     else {
             $_SESSION['ricerca'] = $_POST['cerca']; //PRENDO QUELLO CHE E' CERCATO
             include "php/ricerca.php";
          }

     $risultati = ob_get_clean();

     $page = str_replace('$PAGINA$', $risultati, $page);



        if (isset($_SESSION['username'])){
                 $username = $_SESSION['username'];
                 $username = strtoupper($username);

                 $page = str_replace('$ACCEDI$', "", $page);
                 $page= str_replace('$UTENTE$', $username, $page);

        }  else {
                $page = str_replace('$ACCEDI$', $bottoniNav1, $page);
                $page = str_replace('$UTENTE$', "", $page);
            }


        if(isset($_SESSION['username']) && $username == "ADMIN")
            $page = str_replace('$NUOVIARTICOLI$', "NUOVI ARTICOLI", $page);
        else
            $page = str_replace('$NUOVIARTICOLI$', "", $page);


         echo $page;
?>
