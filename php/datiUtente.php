<?php

    session_start();

    $profilo = file_get_contents("../html/profiloUtente.html");

    $NomeUtente = "";
    $Cognome = "";
    $Email = "";
    if(!empty($_SESSION['name'])) $NomeUtente = $_SESSION['name'];
    if(!empty($_SESSION['cognome'])) $Cognome = $_SESSION['cognome'];
    if(!empty($_SESSION['email'])) $Email = $_SESSION['email'];

      $profilo = str_replace('$EMAIL$', $Email, $profilo);
      $profilo = str_replace('$NOME$', $NomeUtente, $profilo);
      $profilo = str_replace('$COGNOME$', $Cognome, $profilo);
      $profilo = str_replace('$MESSAGGIO$', "", $profilo);

    echo $profilo;


?>
