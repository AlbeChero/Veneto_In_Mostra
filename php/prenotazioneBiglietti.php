<?php

    session_start();

     mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "db_venetoinmostra") ;
                } catch (Exception $e ) {
                    echo "<h4> Database momentaneamente non disponibile :( </h4>";
                    exit;
                }

    $prenEffettuata = file_get_contents("../html/prenotazione.html");
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "db_venetoinmostra");

    $persone = $_POST['persone'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_POST['email'];
    $spettacolo = $_SESSION['spettacolo'];

    $risultato = mysqli_query($conn, "INSERT INTO prenotazioni (persone, nome, cognome, email, spettacolo, id) VALUES ('".$persone."','".$nome."','".$cognome."','".$email."','".$spettacolo."', NULL)");

    if($risultato) echo $prenEffettuata;

    unset($_SESSION["spettacolo"]);
?>
