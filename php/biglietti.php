<?php
        session_start();

        include("database.php");

        //$accesso = file_get_contents("../html/accesso.html");

        if(!(isset($_SESSION['username']))){
            $_SESSION['alt'] = true;
            header("location: login.php");
            exit();
        }

        $page = file_get_contents("../html/prenotazioniBiglietto.html");

        $citta = $_GET['tab'];
        $idArt = $_GET['id'];
        $email = $_SESSION['email'];

        include("connDatabase.php");

        $result = mysqli_query($conn, "select * from ". $citta ." where id ='" . $idArt ."'");

        $riga = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $titolo = $riga['titolo'];
        $prezzo = $riga['prezzo'];

        //$_SESSION['spettacolo'] = $titolo;

        $page = str_replace('$TITOLO$', $titolo, $page);
        $page = str_replace('$PREZZO$', $prezzo, $page);
        $page = str_replace('$CITTA$', $citta, $page);
        $page = str_replace('$EMAIL$', $email, $page);
        $page = str_replace('$ID$', $idArt, $page);
        $page = str_replace('$TAB$', $citta, $page);

        mysqli_close($conn);

        echo $page;
?>
