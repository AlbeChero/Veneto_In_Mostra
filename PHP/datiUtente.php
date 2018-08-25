<?php

    session_start();

    $profilo = file_get_contents("../HTML/profiloUtente.html");

    $NomeUtente = $_SESSION['name'];
    $Cognome = $_SESSION['cognome'];
    $Email = $_SESSION['email'];

      $profilo = str_replace('$EMAIL$', $Email, $profilo);
      $profilo = str_replace('$NOME$', $NomeUtente, $profilo);
      $profilo = str_replace('$COGNOME$', $Cognome, $profilo);
      $profilo = str_replace('$MESSAGGIO$', "", $profilo);

    echo $profilo;


?>
