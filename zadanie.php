<?php
$servername = "mysql-lauranowak23.alwaysdata.net";
$username = "217184";
$password = "Haslo123";
$dbname = "lauranowak23_123";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>