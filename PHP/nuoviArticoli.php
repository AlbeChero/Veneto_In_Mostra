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

        if(!(isset($_POST['citta'])) || !(isset($_POST['tipologia'])) || $titoloArticolo == "" || $titoloImg == "" || $alt == "" || $dataI == "" || $dataF == "" || $percorso == "" || $testo == ""){
             echo $pagina;
            echo "Tutti i campi devono essere compilati!";
            exit();
        }

        $citta = $_POST['citta'];
        $tipologia = $_POST['tipologia'];
        $titoloArticolo = $_POST['titoloA'];
        $titoloImg = $_POST['titoloI'];
        $alt = $_POST['alt'];
        $dataI = $_POST['dataI'];
        $dataF = $_POST['dataF'];
        $percorso = "../IMG/".$citta."/".$tipologia."/".$titoloImg;
        $testo = $_POST['testo'];

        $conn = new mysqli("localhost","root","", "db_venetoinmostra");

        $comandoSQL = "INSERT INTO " .$citta. "(sezione, titolo, testo, img, data_inizio, data_fine, alt, id) VALUES ('".$tipologia."','".$titoloArticolo."','".$testo."','".$percorso."','".$dataI."','".$dataF."','".$alt."','null')";

        $risultato = $conn -> query($comandoSQL);

        if($risultato){
            echo $pagina;
            echo "Articolo pubblicato!";
        } else {
            echo $pagina;
            echo "Pubblicazione articolo fallita!";
        }
?>
