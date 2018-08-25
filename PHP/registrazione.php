<?php

		//ok la pagina è stata davvero richiamata dalla form

         mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "prova") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

		$email = $_POST['Email']; //recupero il contenuto della casella email
		$psw = $_POST['Password']; //recupero il contenuto della casella password
        $psw2 = $_POST['Password2'];
        $Nome = $_POST['Nome'];
        $Cognome = $_POST['Cognome'];

        if($email == '' || $Nome == '' || $Cognome == '' || $psw == '' || $psw2 == ''){
            $pagina = file_get_contents("../HTML/registrazione.html");
            echo $pagina;
            echo "<div class='box_errore'>Errore: e' obbligatorio compilare tutti i campi!</div>";
            exit;
        }

        if(strlen($psw)<8){
            $pagina = file_get_contents("../HTML/registrazione.html");
            echo $pagina;
            echo "<div class='box_errore'>La lunghezza della password deve essere minimo di 8 caratteri!</div>";
            exit;
        }

        if($psw != $psw2){
            $pagina = file_get_contents("../HTML/registrazione.html");
            echo $pagina;
            echo "<div class='box_errore'>Errore: le password digitate non corrispondono!</div>";
            exit;
        }
        else{

		$conn = new mysqli("localhost","root","", "prova");

		$comandoSQL = "select psw from utenti where email ='" . $email ."'";

		$risultatoAccesso = $conn->query($comandoSQL);

			if ($risultatoAccesso->fetch_assoc()) {
				$pagina = file_get_contents("../HTML/registrazione.html");
                echo $pagina;
                echo "<div class='box_errore'>Errore: la e-mail inserita e' già stata utlizzata!</div>";
                exit;
			}

			$comandoSQL = "insert into utenti values ( null ,'". $email ."','" . $psw ."','" . $Nome . "','" . $Cognome . "')";

			$risultato = $conn -> query($comandoSQL);

			if ($risultato){
                $ComandoSQLperaccesso = "select id from utenti where email ='" . $email ."'";
                $Aux = $conn->query($ComandoSQLperaccesso);
                $Name = $Aux->fetch_assoc();
                $idUtente = $Name['id'];
                mysqli_close($conn);
				$pagina = file_get_contents("../HTML/registrazione.html");
                echo $pagina;
                echo "<div class='box_verde'>Registrazione effettuata!</div>";
                exit;
    		}
    		else{
    			mysqli_close($conn);
      			$pagina = file_get_contents("../HTML/registrazione.html");
                echo $pagina;
                echo "<div class='box_errore'>Errore: registrazione fallita!</div>";
    		}

    		exit;

		}



?>
