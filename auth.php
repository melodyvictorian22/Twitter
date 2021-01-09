<?php
    require 'config.php';
    

    if(!isset($_SESSION["AkunLogin"]) ){
        header("Location: login.php");
    }
?>