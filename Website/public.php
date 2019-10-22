<!DOCTYPE html> 
<html>
<head>
	<title>Journals</title>
</head>
<body>
<table>
	<tr>
		<th>Reflection</th>
		<th>Reactions</th>
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
	
	$sql = "SELECT * FROM blog WHERE type = 'Share' ";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>". $row["miniblog"] . "</td><td><input type='button' value='Heart'></td><td><input type='button' value='Smile'></td></tr>";
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

<!-- 
<?php
include_once('credentials.php');
$servername = "localhost";
$username = UN;
$password = PW;
$dbname = "testdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM blog WHERE type = 'Share' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "reflection: " . $row["miniblog"]. " " . $row["type"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
 -->


