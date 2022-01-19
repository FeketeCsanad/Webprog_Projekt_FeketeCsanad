<?php
use TwitterApp\Twitter;
require __DIR__ . '/vendor/autoload.php';

$path = $_SERVER['HOME'] . '/.twitter_php7.json';
$jsonCredentials = file_get_contents($path);
$credentials = json_decode($jsonCredentials, true);