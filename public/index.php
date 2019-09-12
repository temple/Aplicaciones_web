<?php

$mbd = new \PDO('mysql:host=localhost;dbname=mysql', 'root', null);
foreach($mbd->query('SHOW TABLES;') as $fila) {
    print_r($fila);
}


include __DIR__.'/vista.html';
exit;
require_once __DIR__.'/../vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
//require __DIR__.'/../src/FrontController.php';
$front = new FrontController();
$front->run();

