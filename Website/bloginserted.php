<?php
include("connectDB.php");
try {
	
    $conn = $_SESSION['DBlink'];
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT into blog (user_ID, miniblog, type, heart, smile)
    VALUES ('1','$_POST[reflection]', '$_POST[optiontype]', '0', '0')";
    
    $sql2 = "INSERT into public (user_ID, miniblog)
    VALUES ('1','$_POST[reflection]')";
    
//     $sql = "UPDATE bodyparts SET miniblog = '$_POST[reflection]', type = '$_POST[optiontype]' 
//     WHERE user_ID = '1' ";
    // use exec() because no results are returned
    $conn->exec($sql);
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    if ($_POST['optiontype'] == "Private Log") {
    	Header('Location: log.php');
    }
    if ($_POST['optiontype'] == "Share") {
    	$conn->exec($sql2);
    	Header('Location: share.html');
    }
    //Header('Location: log.php');
	//echo "<a href="log.php">Private Log</a>";
include("inc/disconnectDB.php");

?>





<!-- 
"INSERT INTO blog (miniblog, type)
    VALUES ('$_POST[reflection]', '$_POST[optiontype]')"
 -->