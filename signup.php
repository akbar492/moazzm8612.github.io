<!DOCTYPE html>
<html>
<head>
	<title>Create New account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale-1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>

<div class="signup-form">
	
	<form action="" method="post">
		<div class="form-header">
	
	<h2>Sign Up</h2>	
	<p>Fill out this form and start chating with your friends.</p>
		</div>

<div class="form-group">
	
	<label>Username</label>
	<input type="text" class="form-controle" name="user_name" placeholder="Example:Akbar Ali" autocomplete="off" required="">

</div>
<div class="form-group">
	
	<label>Password</label>
	<input type="password" class="form-controle" name="user_pass" placeholder="Password" autocomplete="off" required="">
</div>
<div class="form-group">
	
	<label>Email Address</label>
	<input type="email" class="form-controle" name="user_email" placeholder="someone@site.com" autocomplete="off" required="">

</div>
<div class="form-group">
	<label>Country</label>
	<select class="form-controle" name="user_country" required="">
		<option disabled="">Select a Country</option>
		<option>Pakistan</option>
		<option>USA</option>
		<option>UK</option>
		<option>Dubai</option>
		<option>UAE</option>
		<option>Russia</option>
		<option>France</option>
	</select>
</div>
<div class="form-group">
	<label>Gender</label>
	<select class="form-controle" name="user_gender" required="">
		<option disabled="">Select your Gender</option>
		<option>Male</option>
		<option>Female</option>
		<option>Other</option>
	</select>
</div>
<div class="form-group">
	<label class="checkbox-inline"><input type="checkbox" required="">I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primery btn-block btn-lg" name="sign_up">Sign Up</button>
</div>
<?php include('signup_user.php');?>
	</form>
<div class="text-center small" style="color: #674288;">Already have an account? <a href="signin.php">Signin here</a></div>
</div>

</body>
</html>