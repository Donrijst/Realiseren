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

include "../includes/header.php";
include "../includes/nav.php";

$sql = "SELECT * FROM tblRiddles";

// Execute the query and fetch the data
$result = $conn->query($sql); // Use query() to execute directly

// Fetch each row from the result set and display it
    echo "<table border='1'>";
    echo "<tr>
            <th>ID:</th>
            <th>Raadsel:</th>
            <th>Oplossing:</th>
            <th>Bedenker:</th>
            <th>Datum:</th>
        </tr>";

// Loop through each row of data
    while ($row = $result->fetch()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["Id"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["RiddleText"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["RiddleAnswer"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Creator"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["CreateDate"]) . "</td>";
        echo "</tr>";
    }

    ?>
    <style>
        table {
            width: 70%;
        }
    </style>
