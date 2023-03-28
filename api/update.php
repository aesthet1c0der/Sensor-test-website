<?php
header("Access-Control-Allow-Origin: *");
$servername = "localhost";
$username = "id19881891_akash1509";
$password = "LuffyC0der1509@";
$dbname = "id19881891_baseak";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['hum'])){
    $hum= $_GET['hum'];
    
    $sql = "UPDATE DHT11 SET hum= $hum";
    $result = $conn->query($sql);
}
if(isset($_GET['temp'])){
    $temp = $_GET['temp'];
    
    $sql = "UPDATE DHT11 SET temp= $temp";
    $result = $conn->query($sql);
}
if(isset($_GET['air'])){
    $air= $_GET['air'];
    
    $sql = "UPDATE MQ135 SET air= $air";
    $result = $conn->query($sql);
}
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
