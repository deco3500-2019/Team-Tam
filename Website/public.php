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