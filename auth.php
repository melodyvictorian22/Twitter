<?php
    require 'config.php';
    

    if(!isset($_SESSION["AkunSedangLogin"]) ){
        header("Location: login.php");
    }
?>