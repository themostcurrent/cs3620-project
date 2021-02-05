<?php
session_start();

$servername = "bookscs3620.mysql.database.azure.com";
//if the SQLUSER is there then use it, if not use the $_ENV
$username = (isset($_SESSION["SQLUSER"]) ? $_SESSION["SQLUSER"] : $_Env['SQLUSER']);
$password = (isset($_SESSION["SQLPW"]) ? $_SESSION["SQLPW"] : $_Env['SQLPW']);
   
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
///////////////////// sql to insert records
$sql = "INSERT INTO shows (idshows, title)
VALUES (1, '深夜食堂'),(2, 'Violet Evergarden'),(3, 'Super Bad'),(4, 'Godzilla: the planet eater')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
///////////////////// sql to select records

$sql = "SELECT idshows, title, FROM shows";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["idshows"]. " - title: " . $row["title"]. "<br>";
  }
} else {
  echo "0 results";
}

/////////////////////// sql to delete a record
$sql = "DELETE FROM shows WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
