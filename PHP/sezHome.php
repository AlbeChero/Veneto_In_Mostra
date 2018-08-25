<?php
        if($sezione != "contatti"){
         mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "prova") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

        $articolo = file_get_contents("../HTML/boxArticolo.html");

        $citta = $_SESSION['PAGINA'];

        $conn = new mysqli("localhost","root","", "prova");

        $SQL = "select * from ". $citta ." where sezione ='" . $sezione ."' ORDER BY id ASC LIMIT 1";
        $RIS = $conn -> query($SQL);


    while($riga = $RIS -> fetch_assoc()){
            $titolo = $riga['titolo'];
            $testo =  $riga['testo'];
            $img = $riga['img'];
            $alt = $riga['alt'];
            $id = $riga['id'];
            $articolo = str_replace('$TITOLO$', $titolo, $articolo);
            $articolo = str_replace('$TESTO$', $testo, $articolo);
            $articolo = str_replace('$URL$', $img, $articolo);
            $articolo = str_replace('$ALT$', $alt, $articolo);
            echo $articolo;
            $articolo = file_get_contents("../HTML/boxArticolo.html");
            $id = $id + 1;
            $SQL2 = "select * from ". $citta ." where sezione ='" . $sezione ."' AND id = '". $id ."'";
            $RIS = $conn -> query($SQL2);
        }

?>
