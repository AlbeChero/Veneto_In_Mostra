<?php

        include("database.php");

        include("connDatabase.php");

        $pagina = file_get_contents("../html/nuoviArticoli.html");

        if(!(isset($_POST['citta'])) || !(isset($_POST['tipologia']))){
            echo "<h4 class=\"errore\">Tutti i campi devono essere compilati!</h4>";
            echo $pagina;
            exit();
        }

        $citta = $_POST['citta'];
        $tipologia = $_POST['tipologia'];
        $titoloArticolo = $_POST['titoloA'];
        $titoloImg = $_POST['titoloI'];
        $alt = $_POST['alt'];
        $dataI = $_POST['dataI'];    //rivedi i possibili errori di inserimento data
        $dataF = $_POST['dataF'];
        $percorso = "../IMG/".$citta."/".$tipologia."/".$titoloImg;
        $testo = $_POST['testo'];

        if($titoloArticolo == "" || $titoloImg == "" || $alt == "" || $testo == ""){
            echo "<h4 class=\"errore\">Tutti i campi senza asterisco devono essere compilati!</h4>";
            echo $pagina;
            exit();
        }

        if($dataI != "" && $dataF == "" || $dataI == "" && $dataF != ""){
            echo "<h4 class=\"errore\">Entrambe le date devono essere compilate!</h4>";
            echo $pagina;
            exit();
        }

        if($dataI > $dataF){
            echo "<h4 class=\"errore\">La data iniziale deve essere piu' piccolo o uguale a quella finale!</h4>";
            echo $pagina;
            exit();
        }

        if($dataI == "") $dataI = "NULL";
        else{
              $dataI = "'".$dataI."'";    }

        if($dataF == "") $dataF = "NULL";
        else{
              $dataF = "'".$dataF."'"; }

        include("connDatabase.php");

        $comandoSQL = "INSERT INTO " .$citta. "(sezione, testo, titolo, img, biglietti, prezzo, data_inizio, data_fine, alt, id) VALUES ('".$tipologia."','".$testo."','".$titoloArticolo."','".$percorso."', NULL , NULL ,".$dataI.",".$dataF.",'".$alt."', NULL)";

        $risultato = $conn -> query($comandoSQL);

        if($risultato){
            echo "<h4 class=\"successo\">Articolo pubblicato!</h4>";
            echo $pagina;
            exit();
        } else {
            echo "<h4 class=\"errore\">Pubblicazione articolo fallita!</h4>";
            echo $pagina;
            exit();
        }

    mysqli_close($conn);
?>
