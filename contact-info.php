<?php 



 define('DB_SERVER', 'localhost'); //database server url and port
 define('DB_USERNAME', 'root');  //database server username
 define('DB_PASSWORD', ''); //database server password
 define('DB_DATABASE', 'profile'); //where profile is the database 

 
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE); 
 /*if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
	}	
	echo "Connected successfully";*/
	if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$phone = $_POST["phone"];
	$content = $_POST["content"];
	}
	$sql = "INSERT INTO tblcontact (username, email, phone_no,message)
VALUES ('$name', '$email', $phone,'$content')";

if ($db->query($sql) === TRUE) {
    echo "HELLO 	"."<h2>".$name."</h2>"."<br>"."Thanks for contacting us ,you'll soon receive a callback";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

	mysqli_close($db);



?>