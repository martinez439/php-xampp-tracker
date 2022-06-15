<?php
if(isset($_POST["submit"])){
$hostname='localhost';
$username='root';
$password='';

try {
$dbh = new PDO("mysql:host=$hostname;dbname=CompanyWideTracker",$username,$password);

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
$sql = "INSERT INTO issues (user, location, description)
VALUES ('".$_POST["user"]."','".$_POST["location"]."','".$_POST["description"]."')";
if ($dbh->query($sql)) {
header('Location: /index.php');
echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";

}
else{
echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}
header(index.php);
$dbh = null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}

}
?>