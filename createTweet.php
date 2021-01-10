<?php session_start();
require_once('config.php');

if(!isset($_POST['tweet'])){
    exit;
}

$user_id = $_SESSION['AkunSedangLogin'];
$userData = $db->cl_account->findOne( array('_id'=>$user_id));
$tweet = substr($_POST['tweet'], 0, 140);
$date = date('Y-m-d H:i:s');

$db->cl_tweet->insertOne( array(
    'authorId' => $user_id,
    'authorName' => $userData['NamaPengguna'],
    'tweet' => $tweet,
    'created' => $date
));

header('Location:timeline.php');
?>