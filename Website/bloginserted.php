<?php
include("connectDB.php");
try {
	
    $conn = $_SESSION['DBlink'];
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO blog (miniblog, type)
    VALUES ('$_POST[reflection]', '$_POST[optiontype]')";
    // use exec() because no results are returned
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    echo "insert" ;
    if ($_POST['optiontype'] == "Private Log") {
    	Header('Location: log.php');
    }
    if ($_POST['optiontype'] == "Share") {
    	Header('Location: share.php');
    }
    //Header('Location: log.php');
	//echo "<a href="log.php">Private Log</a>";
include("inc/disconnectDB.php");

?>