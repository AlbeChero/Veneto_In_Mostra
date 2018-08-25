<?php
        mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "prova") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

        $email = $_POST['Email'];
		$psw = $_POST['Password'];

        if($email == "" || $psw == ""){
            $pagina = file_get_contents("../HTML/accesso.html");
            echo $pagina;
            echo "<div class='box_errore'>Tutti i campi devono essere compilati per accedere!</div>";
            exit;
        }

		$conn = new mysqli("localhost","root","", "prova");

		$comandoSQL = "select psw from utenti where email ='" . $email ."'";

		$risultatoAccesso = $conn -> query($comandoSQL);

        if ($risultatoAccesso) {

          if($riga = $risultatoAccesso -> fetch_assoc()) {
      			 $autenticato = ($psw === $riga['psw']);
    		} else {
   				    $autenticato = false; }
        }

        if ($autenticato){

            $ComandoSQLperaccesso = "select nome from utenti where email ='" . $email ."'";
            $Aux = $conn->query($ComandoSQLperaccesso);
            $Name = $Aux->fetch_assoc();
            $nomeUtente = $Name['nome'];

            $ComandoSQLperaccesso = "select cognome from utenti where email ='" . $email ."'";
            $Aux = $conn->query($ComandoSQLperaccesso);
            $Name = $Aux->fetch_assoc();
            $cognomeUtente = $Name['cognome'];
            mysqli_close($conn);

            session_start();
            $_SESSION['name'] = $nomeUtente;
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $psw;
            $_SESSION['cognome'] = $cognomeUtente;

            header("Location: capoHome.php");

            exit;
        } else{
            mysqli_close($conn);
            $pagina = file_get_contents("../HTML/accesso.html");
            echo $pagina;
            echo "<div class='box_errore'>Password o e-mail digitate sono sbagliate!</div>";

        }

?>
