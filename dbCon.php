<?php
$servername = "localhost";
$username = "eks3146";
$password = "Magnesite3#menstruating";
$dbname = "eks3146";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>