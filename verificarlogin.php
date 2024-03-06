<?php
    session_start();

    if (!isset($_SESSION['usuario'])){
        header('Location: Login.php?erro=true');
        exit;
    }
?>