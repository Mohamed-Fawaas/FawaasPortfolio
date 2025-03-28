<?php
$host = 'localhost';
$dbname = 'myportfoliomsgs'; // Your database name
$user = 'root'; // Try default XAMPP user
$pass = ''; // Default XAMPP password is empty

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>