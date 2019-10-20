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
		<p> Please select the region(s) where you are feeling pain </p>
		<div id="nav">
			<a href="index.html">Home</a>
			<a href="post.html">Test Posting</a>
			<a href="public.php">Test public log page</a>
		</div>
		<iframe name="votar" style="display:none;"></iframe>
		<div id="form1">
			<form name = "headslect" action="inserted.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" value="head"></input>
			</form>
			
			<form name = "bodyselect" action="insertedbod.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" value="body"></input>
			</form>
		</div>
<!-- 
		<div id="form">
			<form name = "bodyselect" action="inserted.php" method = "POST">
				<p><input type = "button" class="sal" name="head" value="head"></p>
				<p><input type = "button" class="sal" name="body" value="Body"></p>
				<p><input type = "button" class="sal" name="rightarm" value="Right Arm"></p>
				<p><input type = "button" class="sal" name="leftarm" value="Left Arm"></p>
				<p><input type = "button" class="sal" name="rightleg" value="Right Leg"></p>
				<p><input type = "button" class="sal" name="leftleg" value="Left Leg"></p>
				<p> <input type="submit" id="submit" value="Submit"></p>
			</form>
		</div>
<script>
var values = []; // declare it outside document.ready
    $( document ).ready(function() {   
        $('.sal').click(function(i) {
             values.push($(this).val()); // add value to array
             console.log(values)
        }); 
    }); 
</script>
 -->
	</body>
</html>


<!-- 
		<div class="wrapper">
			<div id="nav">
				<a href="index.html">Home</a>
				<a href="post.html">Test Posting</a>
				<a href="public.php">Test public log page</a>
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
 -->


