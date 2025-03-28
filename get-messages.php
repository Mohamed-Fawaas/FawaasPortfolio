<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "messages";
$password = "root";
$dbname = "myportfoliomsgs";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM messages ORDER BY timestamp DESC");
$messages = [];

while($row = $result->fetch_assoc()) {
    $messages[] = $row;
}

echo json_encode($messages);

$conn->close();
?>