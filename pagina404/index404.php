<?php

    $pagina404 = file_get_contents("pagina404/404.html");

    if (isset($_SESSION['username'])) {   //IF PER CAPIRE SE C'E' UN UTENTE LOGGATO O MENO. E SE C'E' CONTROLLO SE E' L'ADMIN

         $username = $_SESSION['username'];
         $username = strtoupper($username);
         $pagina404 = str_replace('$ACCEDI$', "", $pagina404);
         $pagina404 = str_replace('$UTENTE$', "<a href=\"php/datiUtente.php\"> $username </a>", $pagina404);
    }
    else {
            $pagina404 = str_replace('$ACCEDI$', $bottoniNav1, $pagina404);
            $pagina404 = str_replace('$UTENTE$', "", $pagina404);
    }

    if(isset($_SESSION['username']) && $username == "ADMIN")
         $pagina404 = str_replace('$NUOVIARTICOLI$', "<a href=\"html/nuoviArticoli.html\">NUOVI ARTICOLI</a>", $pagina404);
    else
         $pagina404 = str_replace('$NUOVIARTICOLI$', "", $pagina404);

    echo $pagina404;


?>
