<?php session_start();
    require_once('config.php');

    if(!isset($_GET['id'])){
        exit;
    }
    $userData = $collection1->findOne( array('_id'=> $_SESSION['AkunSedangLogin']));


    $user_id = $_GET['id'];
    $follower_id = $_SESSION['AkunSedangLogin'];

    $collection3->insertOne( array(
        'UserId' => new MongoDB\BSON\ObjectID("$user_id"),
        'Follower' => new MongoDB\BSON\ObjectID("$follower_id")
    ));

    header("Location: search.php");
?>