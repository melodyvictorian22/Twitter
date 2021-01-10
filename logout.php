<?php session_start();
    if(!isset($_SESSION['AkunSedangLogin'])){
        header('Location:index.php');
    }

    unset($_SESSION['AkunSedangLogin']);
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit;
?>