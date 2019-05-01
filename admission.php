<!DOCTYPE html>
<html>
  <head>
<title>Admissions|Study Campus</title>
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
   <style type="text/css">
    .jumbotron
  {
    padding: 0px;
    margin-bottom: 0px;
    color: #4CAF50;
  }
  .head
  {
    margin-left: 0px;
  }</style>
  
	
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
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="head display-3 font-weight-bold">Admission</h1>
  </div>
</div>
<body>
<div class="container">
  <div class="row">
    <div class="col-md-9 text-justify">

	<div id="documents">
	<p>
    <h2>Documents to be submitted for admission</h2><br>
	<ul >
    <li>Two recent passport size unattested colour photographs of the students</li><br>
    <li>Original hall tickets of Std.X board exam / school ID for identification</li><br>
    <li>A photocopy of the original marksheet, after the results are declared</li><br>
    </ul>
    <br>
	</p>
	</div>
	<div id="payment">
	<p>
     <h2>Payment of fees</h2><br>
	<ul>
    <li>Fees can be paid in lumpsum or in installments. The first installment, payable at the time of admission, can be paid by Cash / Local Cheque I Demand Draft I Pay Order in the name of 'Study Space Pvt. Ltd.' For the other installments, PDCs must be deposited with the office at time of admission.</li><br>
    <li>All payments must be made in the Centre office. Timings: 8.30 am - 8.30 pm on all days.</li><br>
    <li>Preferred mode of payment: Cheque/ Pay Order I RTGS / NEFT / Paytm and online bank transfer.</li><br>
    <li>It is compulsory to submit all PDCs during admission, when the payment is being done in installments.</li><br>
    <li>Admission form will not be accepted without all PDCs.</li><br>
    <li>Parents will be given an acknowledgment slip with the details of all PDCs submitted.</li><br>
  
	
	
	
	<li>Those students who fail to pay subsequent installments by the due dates will have their admission declared null and void, and the monies paid earlier will be forfeited. The Management does not take responsibility of reminding parents/ students about ensuing payment of subsequent installments.</li><br>
    </ul>
	</p>
	</div>
</div>
<div class="col-md-3">
  <h3>REQUEST A CALLBACK FORM</h3>
  <div class="form-container">
        <form name="frmContact" id="frmContact" method="post"
            action="contact-info.php" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Contact-no</label> <span id="contact-no-info"
                    class="info"></span><br /> <input type="text" class="input-field" id="phone" name="phone" maxlength="10"/>
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

  </div>
</div>
</div>
	
	
<div class="container">
  <h2>Reach us </h2>
            
  <table class="table table-dark table-hover">
  
  <tr>
    <th>City</th>
    <th>Address</th>
    <th> Telephone No </th>
  </tr>
  <tr>
    <td>Borivali </td>
    <td>D-10/2, TTC Industrial Area, MIDC Industrial Area, Sanpada, Borivali, Maharashtra 400706</td>
    <td>768-567</td>
  </tr>
  <tr>
    <td>Thane</td>
    <td>D-10/2, TTC Industrial Area, MIDC Industrial Area, Sanpada, Navi Mumbai, Maharashtra 400706</td>
    <td>789-906</td>
  </tr>
  <tr>
    <td>Dadar</td>
    <td>D-10/2, TTC Industrial Area, MIDC Industrial Area, Sanpada, Navi Mumbai, Maharashtra 400706</td>
    <td>567-987</td>
  </tr>
  
</table>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (phone == "") {
                $("#contact-no-info").html("Required.");
                $("#phone").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>

  


	<footer>
    <p>Copyright&copy reserved to Study Campus<br>Made with <span style="color:red;">&hearts;</span> by Manasi and Vinal</p>

    
    </footer>
</body>
</html>
