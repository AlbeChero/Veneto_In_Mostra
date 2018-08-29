<?php
        session_start();

        $page = file_get_contents("../HTML/home.html");
        $nav1 = file_get_contents("../HTML/NavigationBarUp.html");
        $bottoniNav1 = file_get_contents("../HTML/bottonea.html");
        $pag = $_SESSION['PAGINA'];

        if($_SESSION['pag'] == "http://localhost/GitLabProgetto/PHP/capoHome.php"){
            $nav2 = "";
        } else $nav2 = file_get_contents("../HTML/NavigationBarDown.html");

        if (isset($_SESSION['username'])){
                 $username = $_SESSION['username'];
                 $username = strtoupper($username);
                 $page = str_replace('$HEADER$', $nav1, $page);
                 $page = str_replace('$ACCEDI$', "", $page);
                 $page= str_replace('$UTENTE$', $username, $page);
                 $page= str_replace('$DOWN$', $nav2, $page);
                 $page= str_replace('$PAGINA$', "", $page);
                 $page= str_replace('$FOOTER$', "", $page);
                 $page = str_replace('$CITTA$', $pag, $page);
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
                $page = str_replace('$CITTA$', $pag, $page);
                $page= str_replace('$FOOTER$', "", $page);
                $pag = strtoupper($pag);
                $page = str_replace('$LUOGO$', $pag, $page);
            }

?>
