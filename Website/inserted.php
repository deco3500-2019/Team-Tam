<?php
include("connectDB.php");
try {
	
    $conn = $_SESSION['DBlink'];
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (firstname, lastname, email, comments)
    VALUES ('$_GET[firstname]', '$_GET[lastname]', '$_GET[email]', '$_GET[comments]')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    echo $_GET['firstname'];
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }


include("inc/disconnectDB.php");

?>

