<?php
$servernam = "localhost";
$username = "root";
$password = "";
$database = "employees-data";
try{ 
$conn = new PDO("mysql:host=$servernam;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMOD_EXCPTION);
// echo "Connected Succesfully"
}catch(PDOException $e) {
  echo "connection failed" .$e->getMessage(); 
}
?>