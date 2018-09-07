<?php

        session_start();

        include("database.php");

        $citta = $_GET['citta'];
        $idArticolo = $_GET['id'];

        include("connDatabase.php");

        $query = ("delete from ".$citta." where id = '".$idArticolo."'");

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Errore nella query $query: " . mysqli_error($conn));
        }

        mysqli_close($conn);

        $url = $_SESSION['pag'];

        header("Location: $url");

?>
