<?php

        if(!isset($_POST['Username']) || !isset($_POST['Password'])){
            $accesso = file_get_contents("../html/accesso.html");
            $accesso = str_replace('$MESSAGGIO$', "", $accesso);
            echo $accesso;
            exit();
        }

        include("database.php");

        $username = $_POST['Username'];
		$psw = $_POST['Password'];

        if($username == "" || $psw == ""){
            $pagina = file_get_contents("../html/accesso.html");
            $pagina = str_replace('$MESSAGGIO$', "<div class='box_errore'>Tutti i campi devono essere compilati per accedere!</div>", $pagina);
            echo $pagina;
            exit;
        }

		$conn = new mysqli("localhost","root","", "db_venetoinmostra");

		$comandoSQL = "select psw from utenti where username ='" . $username ."'";

		$risultatoAccesso = $conn -> query($comandoSQL);

        if ($risultatoAccesso) {

          if($riga = $risultatoAccesso -> fetch_assoc()) {
      			 $autenticato = ($psw === $riga['psw']);
    		} else {
   				    $autenticato = false; }
        }

        if ($autenticato){

            $ComandoSQLperaccesso = "select * from utenti where username ='" . $username ."'";
            $Aux = $conn -> query($ComandoSQLperaccesso);
            $dati = $Aux -> fetch_assoc();

            $nomeUtente = $dati['Nome'];
            $cognomeUtente = $dati['Cognome'];
            $email = $dati['email'];

            session_start();

            $_SESSION['username'] = $username;
            $_SESSION['password'] = $psw;
            $_SESSION['name'] = $nomeUtente;
            $_SESSION['cognome'] = $cognomeUtente;
            $_SESSION['email'] = $email;

            if(isset($_SESSION['pag'])){
              $url = $_SESSION['pag'];
             header("Location: $url"); }
            else header("Location: ../index.php");

            exit;
        } else{
            mysqli_close($conn);
            $pagina = file_get_contents("../html/accesso.html");
            $pagina = str_replace('$MESSAGGIO$', "<div class='box_errore'>Password o e-mail digitate sono sbagliate!</div>", $pagina);
            echo $pagina;
        }

?>
