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

	<script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-app.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-database.js"></script>

	<script>
  		// Initialize Firebase
  		var config = {
    		apiKey: "AIzaSyCG3L5DEHXiniHO7DtiVvePor0qR4Bx_Bg",
    		authDomain: "learn-audiology-website.firebaseapp.com",
    		databaseURL: "https://learn-audiology-website.firebaseio.com",
    		projectId: "learn-audiology-website",
    		storageBucket: "learn-audiology-website.appspot.com",
    		messagingSenderId: "494668004809"
  		};
  		firebase.initializeApp(config);
	</script>
	
	<script>

		document.getElementById("submit").onclick = function() {
				// code to get the current daily purchases (if it exists)

				var d = new Date();
				var currentDay = d.getDate();

				if (d < 10) {
					currentDay = '0' + currentDay;
				} else {
					currentDay = '' + currentDay;
				}

				var n = d.getMonth() + 1; // gets the current month
				var currentMonth;

				if (n < 10) {
					currentMonth = '0' + n;
				} else {
					currentMonth = '' + n;
				}

				var dateId = currentDay + currentMonth + d.getFullYear();

				console.log(dateId);

				var totalPurchases;
				var newPurchases;
				var dailyRef = firebase.database().ref('dailypurchases/' + dateId);
				dailyRef.once('value').then(function(snapshot) {
					if (snapshot.val() == null) {
						newPurchases = 1;
					} else {
						newPurchases = snapshot.val().purchases + 1;
					}
					firebase.database().ref('dailypurchases/' + dateId).set({
						purchases: newPurchases
					});
					var totalPurchRef = firebase.database().ref('purchases');
					totalPurchRef.once('value').then(function(snapshot) {
						totalPurchases = snapshot.val() + 1;
						firebase.database().ref('purchases').set({
							purchases: totalPurchases
						})
					})
				});
			




				/*return database.ref('dailypurchases/' + dateId).once('value').then(function(snapshot) {
					if (snapshot.val() > 0) {
						newPurchases = snapshot.val() + 1;
					} else {
						newPurchases = 1;
					}
					var updates = {};
					updates['dailypurchases/' + dateId] = newPurchases;
					
					return firebase.database().ref().update(updates);
				});*/
				
			};

  		// updates the number of expressions of interest
		$(document).ready(function() {
			var database = firebase.database();

    		return database.ref('expressionsofinterest').once('value').then(function(snapshot) {
      			var currentExpressions = snapshot.val();
      			// modify it
      			currentExpressions = currentExpressions + 1;

      			var updates = {};
      			updates['expressionsofinterest'] = currentExpressions;
      			return firebase.database().ref().update(updates);
      		});

		});

	</script>

</html>
<script type ="text/javascript" src="validation.js"></script>



