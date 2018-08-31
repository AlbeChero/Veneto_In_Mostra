<?php

    session_start();

    $page = file_get_contents("../HTML/home.html");
    $Home = file_get_contents("../HTML/paginaHomeSito.html");
    $nav1 = file_get_contents("../HTML/NavigationBarUp.html");
    $nav2 = file_get_contents("../HTML/NavigationBarDown.html");
    $bottoniNav1 =file_get_contents("../HTML/bottonea.html");
    $footer = file_get_contents("../HTML/footer.html");

    $_SESSION['DATA'] = $_GET['data'];
    $pag = $_SESSION['PAGINA'];

        if (isset($_SESSION['username'])){
                 $username = $_SESSION['username'];
                 $username = strtoupper($username);
                 $page = str_replace('$HEADER$', $nav1, $page);
                 $page = str_replace('$ACCEDI$', "", $page);
                 $page= str_replace('$UTENTE$', $username, $page);
                 $page= str_replace('$DOWN$', $nav2, $page);
                 $page= str_replace('$FOOTER$', $footer, $page);
                 $page = str_replace('$CITTA$', $pag, $page);
                 $pag = strtoupper($pag);
                 $page = str_replace('$LUOGO$', $pag, $page);

                 if($username == "ADMIN")
                 $page = str_replace('$NUOVIARTICOLI$', "NUOVI ARTICOLI", $page);
                 else $page = str_replace('$NUOVIARTICOLI$', "", $page);

                 ob_start();
                 include "date.php";
                 $date = ob_get_clean();
                 $page= str_replace('$PAGINA$', $date, $page);
                 echo $page;
        }  else {
                $page = str_replace('$HEADER$', $nav1, $page);
                $page = str_replace('$ACCEDI$', $bottoniNav1, $page);
                $page = str_replace('$UTENTE$', "", $page);
                $page = str_replace('$NUOVIARTICOLI$', "", $page);
                $page= str_replace('$DOWN$', $nav2, $page);
                $page = str_replace('$CITTA$', $pag, $page);
                $page= str_replace('$FOOTER$', $footer, $page);
                $pag = strtoupper($pag);
                $page = str_replace('$LUOGO$', $pag, $page);

                ob_start();
                include "date.php";
                $date = ob_get_clean();
                $page= str_replace('$PAGINA$', $date, $page);
                echo $page;
            }




?>
