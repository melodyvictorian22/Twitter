<?php
	require_once __DIR__ . "/vendor/autoload.php";
    
    $client = new MongoDB\Client('mongodb://localhost:27017');
    $db = $client->db_twitter;
    
    $collection1 = (new MongoDB\Client)->db_twitter->cl_account;
    $collection2 = (new MongoDB\Client)->db_twitter->cl_tweet;
    $collection3 = (new MongoDB\Client)->db_twitter->cl_follows;
?>