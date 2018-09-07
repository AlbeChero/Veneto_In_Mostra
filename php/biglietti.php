<?php
        session_start();

        include("database.php");

        $page = file_get_contents("../html/prenotazioniBiglietto.html");

        $citta = $_GET['tab'];
        $idArt = $_GET['id'];

        include("connDatabase.php");

        $result = mysqli_query($conn, "select * from ". $citta ." where id ='" . $idArt ."'");

        $riga = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $titolo = $riga['titolo'];
        $prezzo = $riga['prezzo'];

        $_SESSION['spettacolo'] = $titolo;

        $page = str_replace('$TITOLO$', $titolo, $page);
        $page = str_replace('$PREZZO$', $prezzo, $page);
        $page = str_replace('$CITTA$', $citta, $page);

        mysqli_close($conn);

        echo $page;
?>
