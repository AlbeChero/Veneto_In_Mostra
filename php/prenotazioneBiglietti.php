<?php

    session_start();

    include("database.php");
    include("connDatabase.php");

    $persone = $_POST['persone'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_SESSION['email'];
    $spettacolo = $_SESSION['spettacolo'];

    if($nome == "" || $cognome == ""){
        $id = $_SESSION['id'];
        $tab = $_SESSION['tab'];
        header("Location: biglietti.php?id=$id&tab=$tab");
        exit();
    }

    $risultato = mysqli_query($conn, "INSERT INTO prenotazioni (persone, nome, cognome, email, spettacolo, id) VALUES ('".$persone."','".$nome."','".$cognome."','".$email."','".$spettacolo."', NULL)");


    if($risultato) header("Location: ../html/prenotazione.html");


    unset($_SESSION["spettacolo"]);

    mysqli_close($conn);

?>
