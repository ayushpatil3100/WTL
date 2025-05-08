<?php
$host = 'localhost';
$user = 'myuser';
$pass = 'mypassword';
$db   = 'mydb';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}
echo "✅ Connected successfully!";
?>
