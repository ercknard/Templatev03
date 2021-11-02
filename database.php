<?php
$servername = "us-cdbr-east-04.cleardb.com";
$username = "b64914f07d5e65";
$password = "f742c533";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
