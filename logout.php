<?php session_start();
    // session_unset("AkunLogin");
    session_destroy();
    header("Location: index.php");
?>