<?php
//include_once("config2.php");

if(isset($_POST['Submit'])) {	
	$user = $_POST['user'];
	$location = $_POST['location'];
	$description = $_POST['description'];
		
	// checking empty fields
    /*
	if(empty($name) || empty($age) || empty($email)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			*/
		//insert data to database		
		$sql = "INSERT INTO `issues`(user, location, description) VALUES(:user, :location, :description)";
		$query = $dbConn->prepare($sql);
				
		$query->bindparam(':user', $user);
		$query->bindparam(':location', $location);
		$query->bindparam(':description', $description);
		$query->execute();
        var_dump($query);
        
		
		// Alternative to above bindparam and execute
		// $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));
		
		//display success message
		//echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}

?>