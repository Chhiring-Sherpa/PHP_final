<?php
$serverName = "localhost"; 
$port = "3307"; 
$username = "root";
$password = ""; 
$database = "assignment_3";

// Create a new PDO instance
try {
    $dsn = "mysql:host=$serverName;port=$port;dbname=$database;charset=utf8";
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo"succefully connected";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
