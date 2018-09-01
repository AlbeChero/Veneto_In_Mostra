<?php
        session_start();
        unset($_SESSION['username']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['cognome']);
        unset( $_SESSION['pag']);
        session_destroy();
        header("Location: ../index.php");
?>
