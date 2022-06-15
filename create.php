<?php
if (isset($_POST['submit'])) {
  require "config.php";

  try {
    $connection = new PDO($dsn, $username, $password, $options);
    // insert new issue will go here

  } catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
  }

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