<?php session_start();
    session_unset("suksesLogin");
    header("Location: index.php");
?>

<?php
    require 'config.php';

    if(!isset($_SESSION["suksesLogin"]) ){
        header("Location: login.php");
    }
?>