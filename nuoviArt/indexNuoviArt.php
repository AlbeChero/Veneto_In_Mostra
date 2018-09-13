<?php
        $nuoviArticoli = file_get_contents("nuoviArticoli.html");

        $nuoviArticoli = str_replace('$MESSAGGIO$', "", $nuoviArticoli);

        echo $nuoviArticoli;
?>
