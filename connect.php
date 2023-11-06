<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khatabook";

$kname=$_POST['kname'];
$plus=$_POST['plus'];
$minus=$_POST['minus'];
$taareek=$_POST['taareek'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO khata (username, plus, minus, taareek)
VALUES ('$kname', '$plus', '$minus','$taareek')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>