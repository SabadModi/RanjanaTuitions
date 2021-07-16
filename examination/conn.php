<?php 

$host = "localhost";
$user = "root";
$pass = "LeoMessi10";
$db   = "cee_db";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}

$conn2 = mysqli_connect("localhost", "root", "LeoMessi10", "cee_db");
