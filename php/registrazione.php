<?php

		//ok la pagina è stata davvero richiamata dalla form

         mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "db_venetoinmostra") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

		$email = $_POST['Email']; //recupero il contenuto della casella email
		$psw = $_POST['Password']; //recupero il contenuto della casella password
        $psw2 = $_POST['Password2'];
        $Nome = $_POST['Nome'];
        $Cognome = $_POST['Cognome'];
        $Username = $_POST['Username'];

        if($email == '' || $Nome == '' || $Cognome == '' || $psw == '' || $psw2 == '' || $Username == ''){
            $pagina = file_get_contents("../html/registrazione.html");
            echo "<div class='box_errore'>Errore: e' obbligatorio compilare tutti i campi!</div>";
            echo $pagina;
            exit;
        }

        if(strlen($psw)<8){
            $pagina = file_get_contents("../html/registrazione.html");
            echo "<div class='box_errore'>La lunghezza della password deve essere minimo di 8 caratteri!</div>";
            echo $pagina;
            exit;
        }

        if($psw != $psw2){
            $pagina = file_get_contents("../html/registrazione.html");
            echo "<div class='box_errore'>Errore: le password digitate non corrispondono!</div>";
            echo $pagina;
            exit;
        }
        else{

		$conn = new mysqli("localhost","root","", "db_venetoinmostra");

		$comandoSQL = "select * from utenti where email ='" . $email ."'";

		$controlloEmail = $conn -> query($comandoSQL);

			if ($controlloEmail -> fetch_assoc()) {
				$pagina = file_get_contents("../html/registrazione.html");
                echo "<div class='box_errore'>Errore: la e-mail inserita e' già stata utlizzata!</div>";
                echo $pagina;
                exit;
			}

        $comandoSQL = "select * from utenti where username ='" . $Username ."'";

        $controlloUsername = $conn -> query($comandoSQL);

        if ($controlloUsername -> fetch_assoc()) {
				$pagina = file_get_contents("../html/registrazione.html");
                echo "<div class='box_errore'>Errore: l'Username inserito e' gia' stato in uso!</div>";
                echo $pagina;
                exit;
			}

			$comandoSQL = "insert into utenti values ( null ,'". $email ."','" .$Username. "','" . $psw ."','" . $Nome . "','" . $Cognome . "')";

			$risultato = $conn -> query($comandoSQL);

			if ($risultato){
                mysqli_close($conn);
				$pagina = file_get_contents("../html/registrazione.html");
                echo "<div class='box_successo'>Registrazione effettuata!</div>";
                echo $pagina;
                exit;
    		}
    		else{
    			mysqli_close($conn);
      			$pagina = file_get_contents("../html/registrazione.html");
                echo "<div class='box_errore'>Errore: registrazione fallita!</div>";
                echo $pagina;
    		}

    		exit;

		}



?>
