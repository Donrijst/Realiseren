<?php
$host = 'localhost:3307';
$db   = 'ijdb'; //<-------------naam van de database die je wilt gebruiken
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $conn = new PDO($dsn, $user, $pass, $options);
    echo("Connection successful");
} catch (Exception $e) {
    echo("Failed to open database connection");
    exit;
}

?>