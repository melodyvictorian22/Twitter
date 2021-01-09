<?php
	require_once __DIR__ . "/vendor/autoload.php";
    $collection1 = (new MongoDB\Client)->db_twitter->cl_account;
    $collection2 = (new MongoDB\Client)->db_twitter->cl_tweet;
?>