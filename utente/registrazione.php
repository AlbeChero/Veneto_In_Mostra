<?php

		//ok la pagina è stata davvero richiamata dalla form

        if(!(isset($_POST['Email']))){
            $pagina = file_get_contents("registrazione.html");
            $pagina = str_replace('$MESSAGGIO$', "", $pagina);
            echo $pagina;
            exit();
        }

        include("../php/database.php");

		$email = $_POST['Email']; //recupero il contenuto della casella email
		$psw = $_POST['Password']; //recupero il contenuto della casella password
        $psw2 = $_POST['Password2'];
        $Nome = $_POST['Nome'];
        $Cognome = $_POST['Cognome'];
        $Username = $_POST['Username'];

        if($email == '' || $Nome == '' || $Cognome == '' || $psw == '' || $psw2 == '' || $Username == ''){
            $pagina = file_get_contents("registrazione.html");
            $pagina = str_replace('$MESSAGGIO$', "<div class='box_errore'>Errore: e' obbligatorio compilare tutti i campi!</div>", $pagina);
            echo $pagina;
            exit;
        }

        if(strlen($psw)<8){
            $pagina = file_get_contents("../html/registrazione.html");
            $pagina = str_replace('$MESSAGGIO$', "<div class='box_errore'>La lunghezza della password deve essere minimo di 8 caratteri!</div>", $pagina);
            echo $pagina;
            exit;
        }

        if($psw != $psw2){
            $pagina = file_get_contents("../html/registrazione.html");
            $pagina = str_replace('$MESSAGGIO$', "<div class='box_errore'>Errore: le password digitate non corrispondono!</div>", $pagina);
            echo $pagina;
            exit;
        }
        else{

		$conn = new mysqli("localhost","root","", "db_venetoinmostra");

		$comandoSQL = "select * from utenti where email ='" . $email ."'";

		$controlloEmail = $conn -> query($comandoSQL);

			if ($controlloEmail -> fetch_assoc()) {
				$pagina = file_get_contents("registrazione.html");
                $pagina = str_replace('$MESSAGGIO$', "<div class='box_errore'>Errore: la e-mail inserita e' già stata utlizzata!</div>", $pagina);
                echo $pagina;
                exit;
			}

        $comandoSQL = "select * from utenti where username ='" . $Username ."'";

        $controlloUsername = $conn -> query($comandoSQL);

        if ($controlloUsername -> fetch_assoc()) {
				$pagina = file_get_contents("registrazione.html");
                $pagina = str_replace('$MESSAGGIO$', "<div class='box_errore'>Errore: l'Username inserito e' gia' stato in uso!</div>", $pagina);
                echo $pagina;
                exit;
			}

			$comandoSQL = "insert into utenti values ( null ,'". $email ."','" .$Username. "','" . $psw ."','" . $Nome . "','" . $Cognome . "')";

			$risultato = $conn -> query($comandoSQL);

			if ($risultato){
                mysqli_close($conn);
				$pagina = file_get_contents("registrazione.html");
                $pagina = str_replace('$MESSAGGIO$', "<div class='box_successo'>Registrazione effettuata!</div>", $pagina);
                echo $pagina;
                exit;
    		}
    		else{
    			mysqli_close($conn);
      			$pagina = file_get_contents("registrazione.html");
                $pagina = str_replace('$MESSAGGIO$', "<div class='box_errore'>Errore: registrazione fallita!</div>", $pagina);
                echo $pagina;
    		}

    		exit;

		}



?>
