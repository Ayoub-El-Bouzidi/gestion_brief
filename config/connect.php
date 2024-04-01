<?php
$password = '';
$serverName = 'localhost';
$userName = 'root';

try {
    $conn = new PDO("mysql:host=$serverName;dbname=gestion_BRIEF",$userName,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo'fdvfd:'.$e->getMessage();
}
?>