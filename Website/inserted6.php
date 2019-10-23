<?php
include("connectDB.php");
try {
	
    $conn = $_SESSION['DBlink'];
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE bodyparts SET arm = '1' WHERE user_ID = '1'";
    // use exec() because no results are returned
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
	echo "successfully added to database";
include("inc/disconnectDB.php");

?>