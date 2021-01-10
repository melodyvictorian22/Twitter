<?php session_start();
require_once('config.php');

if(!isset($_POST['tweet'])){
    exit;
}

$user_id = $_SESSION['AkunSedangLogin'];
$userData = $collection1->findOne( array('_id'=>$user_id));
$tweet = substr($_POST['tweet'], 140);
$date = date('Y-m-d H:i:s');

$collection2->insertOne( array(
    'authorId' => $user_id,
    'authorName' => $userData['NamaPengguna'],
    'tweet' => $tweet,
    'created' => date
));

header('Location:timeline.php');