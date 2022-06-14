<?php
require "config.php";

try {
  $conn = new PDO("mysql:host=$servername;dbname=CompanyWideTracker", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully bro";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>