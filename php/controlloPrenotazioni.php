<?php
        session_start();

        $urlPrec = $_SERVER['HTTP_REFERER'];

        if(!isset($_SESSION['username'])){
            $aux = file_get_contents("$urlPrec");
            echo $aux;
            echo "Per prenotare devi effettuare laccesso o registrazione";
        }
        else{

        }
?>
