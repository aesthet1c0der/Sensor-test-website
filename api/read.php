<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * from DHT11";
$result = $conn->query($sql);
$sql = "SELECT * from MQ135";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo json_encode($row, JSON_NUMERIC_CHECK);
  }
} 
else {
  echo "0 results";
}
$conn->close();
?>
