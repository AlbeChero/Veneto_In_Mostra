<?php
        session_start();
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['cognome']);
        session_destroy();
        header("Location: capoHome.php");
?>
