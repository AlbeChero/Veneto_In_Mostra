<?php

        mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "db_venetoinmostra") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

        $conn = mysqli_connect("localhost", "root", "");

        mysqli_select_db($conn, "db_venetoinmostra");

        $pagina = file_get_contents("../HTML/nuoviArticoli.html");

        if(!(isset($_POST['citta'])) || !(isset($_POST['tipologia']))){
            echo "Tutti i campi devono essere compilati!";
            echo $pagina;
            exit();
        }

        $citta = $_POST['citta'];
        $tipologia = $_POST['tipologia'];
        $biglietti = $_POST['biglietti'];
        $titoloArticolo = $_POST['titoloA'];
        $titoloImg = $_POST['titoloI'];
        $alt = $_POST['alt'];
        $dataI = $_POST['dataI'];    //rivedi i possibili errori di inserimento data
        $dataF = $_POST['dataF'];
        $percorso = "../IMG/".$citta."/".$tipologia."/".$titoloImg;
        $testo = $_POST['testo'];

        if($titoloArticolo == "" || $titoloImg == "" || $alt == "" || $percorso == "" || $testo == "" || $biglietti == ""){
            echo "Tutti i campi devono essere compilati!";
            echo $pagina;
            exit();
        }

        $conn = new mysqli("localhost","root","", "db_venetoinmostra");

        $comandoSQL = "INSERT INTO " .$citta. "(sezione, titolo, testo, img, data_inizio, data_fine, alt, id) VALUES ('".$tipologia."','".$titoloArticolo."','".$testo."','".$percorso."','".$dataI."','".$dataF."','".$alt."','null')";

        $risultato = $conn -> query($comandoSQL);

        if($risultato){
            echo "Articolo pubblicato!";
            echo $pagina;
        } else {
            echo "Pubblicazione articolo fallita!";
            echo $pagina;
        }
?>
