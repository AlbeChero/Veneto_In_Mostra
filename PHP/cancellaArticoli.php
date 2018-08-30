<?php

        session_start();

         mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "db_venetoinmostra") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

        $citta = $_GET['citta'];
        $idArticolo = $_GET['id'];

        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "db_venetoinmostra");

        $query = ("delete from ".$citta." where id = '".$idArticolo."'");

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Errore nella query $query: " . mysqli_error($conn));
        }

        mysqli_close();

        $url = $_SESSION['pag'];

        header("Location: $url");

?>
