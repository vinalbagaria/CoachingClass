
</html>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link href="s.css" rel ="stylesheet"type="text/css">
	
</head>

    <style>
      *
      {
        padding: 0px;
    margin: 0px;
      }
      
 /* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
input[type=email], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  margin-top:200px;
  margin-bottom: 50px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
} 
.error {color: #FF0000;}
</style>
<script>  
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script>  
 <header>
       
    </header> 
      <nav>
      <ul>
         <li><a href="home.php">HOME</a></li>
         <li><a href="aboutus.php">ABOUT US</a></li>
         <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="courses.php" id="navbardrop" data-toggle="dropdown">
        COURSES
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="courses.php">ENGINEERING</a>
        <a class="dropdown-item" href="courses.php">MEDICAL</a>
        <a class="dropdown-item" href="courses.php">OTHERS</a>
      </div>
    </li>
        <li><a href="admission.php">ADMISSION</a></li>
       <li><a href="contact_us.php">CONTACT US </a></li>
    </ul> 
    </nav>
    
    <br>
        <?php
// define variables and set to empty values
        $firstnameErr =$lastnameErr= $emailErr  = $cityErr = $subjectErr = "";
$firstname =$lastname= $email  = $city = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstname"])) {
    $firstnameErr = "First Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $firstnameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["lastname"])) {
    $lastnameErr = "Last Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

if (empty($_POST["city"])) {
    $city = "";
  } else {
    $city = test_input($_POST["city"]);
  }

  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
    
<body>
 
 <div class="container">
 <form name="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" > 
  <p><span class="error">* required field</span></p>
    <label for="fname">First Name<span class="error">* <?php echo $firstnameErr;?></span></label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name<span class="error">* <?php echo $lastnameErr;?></span></label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>


    <label for="email">Email-id<span class="error">* <?php echo $emailErr;?></span></label>
    <input type="email" id="email" name="email" placeholder="Your Email-id.." required>

    <label for="city">City</label>
    <select id="city" name="city">
      <option value="Mumbai">Mumbai</option>
      <option value="Pune">Pune</option>
      <option value="Delhi">Delhi</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit">

  </form>
</div> 



</body>
 <footer>
    <p>Copyright&copy reserved to Study Campus<br>Made with <span style="color:red;">&hearts;</span> by Manasi and Vinal</p>
    </footer>

</html>
