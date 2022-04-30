<?php
$db = 'mysql:host=localhost;dbname=Test';
$user = 'phpmyadmin';
$pass = 'Ff#123456';

try {
    $conn = new PDO($db,$user,$pass);
} catch (PDOException $e) {
    echo "Filee".$e->getMessage();
}

?>