<?php
session_start();

$servername = "bookscs3620.mysql.database.azure.com";
//if the SQLUSER is there then use it, if not use the $_ENV
$username = (isset($_SESSION["SQLUSER"]) ? $_SESSION["SQLUSER"] : "$_Env['SQLUSER']");
$password = (isset($_SESSION["SQLPW"]) ? $_SESSION["SQLPW"] : "$_Env['SQLPW']");

$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO shows (idshows, title)
VALUES (1, '深夜食堂')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
