<?php

        session_start();

         mysqli_report(MYSQLI_REPORT_STRICT);

        try {
                $connection = new mysqli("localhost","root","", "prova") ;
                } catch (Exception $e ) {
                    echo "<h2> Database momentaneamente non disponibile :( <h2>";
                    exit;
                }

        $email = $_SESSION['email'];
        $psw = $_SESSION['password'];
        $vecchiaPsw = $_POST['Vecchiapsw'];
        $nuovaPsw = $_POST['Nuovapsw'];
        $nuovaPsw2 = $_POST['Nuovapsw2'];

        $conn = new mysqli("localhost","root","", "prova");

        if($psw != $vecchiaPsw)
           $messaggio = 1;

        else{ if(strlen($nuovaPsw)<8)
                $messaggio = 2;
            else{
                if($nuovaPsw == $vecchiaPsw)
                    $messaggio = 3;
                else{
                        if($nuovaPsw == $nuovaPsw2){
                            $comandoSQL2 = "update utenti SET psw = '".$nuovaPsw."' where email = '".$email."'";
                            $risultatoModifica = $conn -> query($comandoSQL2);

                            if($risultatoModifica)
                                $messaggio = 4;

                            else
                                $messaggio = 5;     }

                        else{
                            $messaggio = 6;
                            }
                    }
                }

            }

            $NomeUtente = $_SESSION['name'];
            $Cognome = $_SESSION['cognome'];
            $Email = $_SESSION['email'];

            $profilo = file_get_contents("../HTML/profiloUtente.html");
            $profilo = str_replace('$EMAIL$', $Email, $profilo);
            $profilo = str_replace('$NOME$', $NomeUtente, $profilo);
            $profilo = str_replace('$COGNOME$', $Cognome, $profilo);

            switch($messaggio){
                case '1':
                    $mess = "Password sbagliata!";
                    $profilo = str_replace('$MESSAGGIO$', $mess, $profilo);
                    echo $profilo;
                    break;
                case '2':
                    $mess = "La nuova password deve essere almeno 8 caratteri!";
                    $profilo = str_replace('$MESSAGGIO$', $mess, $profilo);
                    echo $profilo;
                    break;
                case '3':
                    $mess = "La nuova password deve essere diversa dalla precedente!";
                    $profilo = str_replace('$MESSAGGIO$', $mess, $profilo);
                    echo $profilo;
                    break;
                case '4':
                    $mess = "La tua password e' stata modificata!";
                    $_SESSION['password'] = $nuovaPsw;
                    $profilo = str_replace('$MESSAGGIO$', $mess, $profilo);
                    echo $profilo;
                    break;
                case '5':
                    $mess = "Modifica della password fallita";
                    $profilo = str_replace('$MESSAGGIO$', $mess, $profilo);
                    echo $profilo;
                    break;
                case '6':
                    $mess = "Le nuove password non corrispondono!";
                    $profilo = str_replace('$MESSAGGIO$', $mess, $profilo);
                    echo $profilo;
                    break;
            }

    mysqli_close($conn);

?>
