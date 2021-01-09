<?php
    require 'config.php';

    if(!isset($_SESSION["suksesLogin"]) ){
        header("Location: login.php");
    }
?>