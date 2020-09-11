<?php include('db.php') ?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>AUTO REGISTRATION</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<div class="contact1">
<div class="container-contact1">
<div class="contact1-pic js-tilt" data-tilt>
<img src="images/img-01.png" alt="IMG">
</div>
<form method="POST" class="contact1-form validate-form">
<span class="contact1-form-title">Register Your Auto Here!</span>
<div class="wrap-input1 validate-input">
<input class="input1" type="text" name="name" placeholder="Name">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input">
<input class="input1" type="text" name="vehicleno" placeholder="Vehicle Number Ex.TS13AB6622">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input">
<input class="input1" type="text" name="pick" placeholder="Pick Area">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input">
<input class="input1" type="text" name="college" placeholder="Drop Institution/College">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input">
<b><center>Attach Driving License Picture</center></b>
<input class="input1" type="file" name="license">
<span class="shadow-input1"></span>
</div>
<div class="wrap-input1 validate-input">
<b><center>Attach Aadhar Card Picture</center></b>
<input class="input1" type="file" name="aadhar">
<span class="shadow-input1"></span>
</div>
<div class="container-contact1-form-btn">
<button class="contact1-form-btn" name="subbtn">
<span>Submit Details
<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
</span>
</button>
</div>
</form>
</div>
</div>
</body>
</html>
