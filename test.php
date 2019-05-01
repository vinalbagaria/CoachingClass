<?php 
 define('DB_SERVER', 'localhost:3306'); //database server url and port
 define('DB_USERNAME', 'root');  //database server username
 define('DB_PASSWORD', ''); //database server password
 define('DB_DATABASE', 'profile'); //where profile is the database 
 
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 

	/*if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
	}	
	echo "Connected successfully";*/
	$uName = $_POST['username'];
	$pW = $_POST['password'];
	$sql = "SELECT * FROM authenticate WHERE username = '$uName' AND password = '$pW';";
	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) != 1 || mysqli_num_rows($result) == 0){
		echo "Invalid Credentials";    
	}
	else {
	    echo "Hey  "."<h2>".$uName."</h2>"."<br>"."You have successfully logged in";
	}

	mysqli_close($db);



?>