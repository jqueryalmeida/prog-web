<?php
$host = 'localhost';
$user = 'root';
$pass = 'root';
$db = 'testes';

try {
    $con = new PDO("mysql:host=".$host.";dbname=".$db, $user, $pass);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $con->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);
} catch (Exception $e) {
    echo $e->getMessage() . " dbCall Line 9";
    exit;
}

