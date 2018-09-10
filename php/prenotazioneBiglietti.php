<?php

    session_start();

    include("database.php");

    $prenEffettuata = file_get_contents("../html/prenotazione.html");
    include("connDatabase.php");

    $persone = $_POST['persone'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_SESSION['email'];
    $spettacolo = $_SESSION['spettacolo'];

    $risultato = mysqli_query($conn, "INSERT INTO prenotazioni (persone, nome, cognome, email, spettacolo, id) VALUES ('".$persone."','".$nome."','".$cognome."','".$email."','".$spettacolo."', NULL)");

    if($risultato) echo $prenEffettuata;

    unset($_SESSION["spettacolo"]);

    mysqli_close($conn);

?>
