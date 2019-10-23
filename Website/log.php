<!DOCTYPE html> 
<html>
<head>
	<title>Journals</title>
</head>
<body>
<table>
	<tr>
		<th>Reflection</th>
	</tr>
	<?php
	include_once('credentials.php');
	$servername = "localhost";
	$username = UN;
	$password = PW;
	$dbname = "testdata";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "SELECT * FROM blog WHERE type = 'Private Log' AND user_ID = '1' ";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>". $row["miniblog"] . "</td></tr>";
		}
		echo "</table>";
	}
	else {
		echo "0 results";
	}
	$conn->close();
	?>
</table>
</body>
</html>





