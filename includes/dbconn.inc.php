<?php
$server = "mysql:host=127.0.0.1;dbname=Library";
$username = "username";
$password = "your_password";
try {
    $pdo = new PDO($server, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
}
