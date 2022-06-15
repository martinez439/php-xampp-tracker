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

$new_issue = array(
    "user" => $_POST['user'],
    "location"  => $_POST['location'],
    "description"     => $_POST['description']
  );
  
  $sql = sprintf(
    "INSERT INTO %s (%s) values (%s)",
    "issues",
    implode(", ", array_keys($new_issue)),
    ":" . implode(", :", array_keys($new_issue))
);

$statement = $connection->prepare($sql);
$statement->execute($new_issue); 
?>