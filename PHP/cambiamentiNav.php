<?php
        session_start();

        $page = file_get_contents("../HTML/home.html");
        $nav1 = file_get_contents("../HTML/NavigationBarUp.html");
        $bottoniNav1 = file_get_contents("../HTML/bottonea.html");

        if (isset($_SESSION['username'])){
                 $username = $_SESSION['username'];
                 $username = strtoupper($username);
                 $page = str_replace('$HEADER$', $nav1, $page);
                 $page = str_replace('$ACCEDI$', "", $page);
                 $page= str_replace('$UTENTE$', $username, $page);
                 $page= str_replace('$DOWN$', "", $page);
                 $page= str_replace('$PAGINA$', "", $page);
                 $page= str_replace('$FOOTER$', "", $page);
                 if($username == "ADMIN")
                 $page = str_replace('$NUOVIARTICOLI$', "NUOVI ARTICOLI", $page);
                 else $page = str_replace('$NUOVIARTICOLI$', "", $page);
        }  else {
                $page = str_replace('$HEADER$', $nav1, $page);
                $page = str_replace('$ACCEDI$', $bottoniNav1, $page);
                $page = str_replace('$UTENTE$', "", $page);
                $page = str_replace('$NUOVIARTICOLI$', "", $page);
                $page= str_replace('$DOWN$', "", $page);
                $page= str_replace('$PAGINA$', "", $page);
                $page= str_replace('$FOOTER$', "", $page);
            }

        echo $page;
?>
