<!DOCTYPE html>
<?php
session_start();
include("connectDB.php");
?>

<html>
	<head>
		<meta charset = 'utf-8'>
		<title> Form test </title>
		<link href="https://fonts.googleapis.com/css?family=Nunito:900|Raleway" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/formcss.css">
	</head>
	<body>
		<div class="wrapper">
			<div id="nav">
				<a href="index.html">Home</a>
				<a href="post.html">Test Posting</a>
			</div>
			<div id="form">
				<p>The product is still under development.</p>
				<p>We will keep you updated!</p>
				<form name ="purchase" action="inserted.php" onsubmit="return validation()" method="POST">
					<div id="first_name">
						<p><label>First name</Label><p>
						<p><input type="text" class="txtfield" name="firstname"></p>
						<div id="first_name_error" class="error"></div>
					</div>
					<div id="last_name">
						<p><label>Last name</label></p>
						<p><input type="text" class="txtfield" name="lastname"></p>
						<div id="last_name_error" class="error"></div>
					</div>
					<div id="email_div">
						<Label>Email</label>
						<p><input type="text" class="txtfield" name="email"></p>
						<div id="email_error" class="error"></div>
					</div>
					<div id="comments">
						<p><label>Comments</label></p>
						<p> <input type="text" class="txtfield" name="comments"></p>
					</div>
						<p> <input type="submit" id="submit" value="Submit"></p>
					</form>
					</div>
			</div>	
	</body>
</html>
<script type ="text/javascript" src="validation.js"></script>



