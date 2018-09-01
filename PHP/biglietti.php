<?php
        session_start();

        $page = file_get_contents("../html/acquistoBiglietto.html");
        $nav1 = file_get_contents("../html/NavigationBarUp.html");
        $bottoniNav1 =file_get_contents("../html/bottonea.html");
        $footer = file_get_contents("../html/footer.html");

        $citta = $_GET['tab'];
        $idArt = $_GET['id'];

        if (isset($_SESSION['username'])){
                 $username = $_SESSION['username'];
                 $username = strtoupper($username);
                 $page = str_replace('$HEADER$', $nav1, $page);
                 $page = str_replace('$ACCEDI$', "", $page);
                 $page= str_replace('$UTENTE$', $username, $page);
                 $page= str_replace('$FOOTER$', $footer, $page);
                 $page= str_replace('$INDIETRO$', $citta, $page);

                 if($username == "ADMIN")
                 $page = str_replace('$NUOVIARTICOLI$', "NUOVI ARTICOLI", $page);
                 else $page = str_replace('$NUOVIARTICOLI$', "", $page);

        }  else {
                $page = str_replace('$HEADER$', $nav1, $page);
                $page = str_replace('$ACCEDI$', $bottoniNav1, $page);
                $page = str_replace('$UTENTE$', "", $page);
                $page = str_replace('$NUOVIARTICOLI$', "", $page);
                $page = str_replace('$CITTA$', $citta, $page);
                $page= str_replace('$FOOTER$', $footer, $page);
                $pag = strtoupper($citta);
                $page = str_replace('$LUOGO$', $pag, $page);
                $page= str_replace('$INDIETRO$', $citta, $page);
            }


        $conn = mysqli_connect("localhost", "root", "");

        mysqli_select_db($conn, "db_venetoinmostra");

        $result = mysqli_query($conn, "select * from ". $citta ." where id ='" . $idArt ."'");

        $riga = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $titolo = $riga['titolo'];
        $testo =  $riga['testo'];
        $img = $riga['img'];
        $alt = $riga['alt'];
        $prezzo = $riga['prezzo'];

        $page = str_replace('$TITOLO$', $titolo, $page);
        $page = str_replace('$TESTO$', $testo, $page);
        $page = str_replace('$URL$', $img, $page);
        $page = str_replace('$ALT$', $alt, $page);
        $page = str_replace('$IMG$', $img, $page);
        $page = str_replace('$BIGLIETTO$', "", $page);
        $page = str_replace('$PREZZO$', $prezzo, $page);


        echo $page;

?>
