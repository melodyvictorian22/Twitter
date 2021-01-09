<?php
	require_once __DIR__ . "/vendor/autoload.php";
    $collection1 = (new MongoDB\Client)->db_twitter->cl_account;
    $cl_interaction = (new MongoDB\Client)->db_twitter->cl_interaction;
    $cl_tweet = (new MongoDB\Client)->db_twitter->cl_tweet;
?>