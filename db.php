<?php
if(!isset($_SESSION)) {
    session_start();
}
$dsn = 'mysql:dbname=rpg;host=localhost';
$user = 'root';
$password = '';
try {
    // Création d’une nouvelle connexion MySQL via PDO
    $db = new PDO($dsn, $user, $password);
    $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $e->getMessage();
}
//$dbh = null; // Destruction de la connexion MySQL
