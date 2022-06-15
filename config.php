<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "CompanyWideTracker";
$dsn        = "mysql:host=$servername;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
?>