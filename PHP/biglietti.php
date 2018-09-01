<?php
        session_start();

        $page = file_get_contents("../html/acquistoBiglietto.html");

        $citta = $_GET['tab'];
        $idArt = $_GET['id'];

        $conn = mysqli_connect("localhost", "root", "");

        mysqli_select_db($conn, "db_venetoinmostra");

        $result = mysqli_query($conn, "select * from ". $citta ." where id ='" . $idArt ."'");

        $riga = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $titolo = $riga['titolo'];
        $prezzo = $riga['prezzo'];

        $page = str_replace('$TITOLO$', $titolo, $page);
        $page = str_replace('$PREZZO$', $prezzo, $page);


        echo $page;

?>
