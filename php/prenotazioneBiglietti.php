<?php

    session_start();

    include("database.php");
    include("connDatabase.php");

    $persone = $_POST['persone'];
    $nome = $_POST['nome'];
    $cognome = $_POST['cognome'];
    $email = $_SESSION['email'];
    $id = $_GET['id'];
    $tab = $_GET['tab'];

    if($nome == "" || $cognome == ""){
        header("Location: biglietti.php?id=$id&tab=$tab");
        exit();
    }

    $risultato1 = mysqli_query($conn, "select titolo from ". $tab ." where id ='" . $id ."'");

    $riga = mysqli_fetch_array($risultato1, MYSQLI_ASSOC);

    $spettacolo = $riga['titolo'];

    $risultato = mysqli_query($conn, "INSERT INTO prenotazioni (persone, nome, cognome, email, spettacolo, id) VALUES ('".$persone."','".$nome."','".$cognome."','".$email."','".$spettacolo."', NULL)");


    if($risultato) header("Location: ../html/prenotazione.html");


    unset($_SESSION["spettacolo"]);

    mysqli_close($conn);

?>
