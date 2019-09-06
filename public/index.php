<?php


require_once __DIR__.'/../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
//require __DIR__.'/../src/FrontController.php';

$front = new FrontController();
$front->run();

