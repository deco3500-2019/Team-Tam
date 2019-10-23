<?php
include("connectDB.php");
try {
	
    $conn = $_SESSION['DBlink'];
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE public SET heart = heart + 1 WHERE ID = $_POST[idchosen]";
    
    $sql2 = "UPDATE public SET smile = smile + 1 WHERE ID = $_POST[idchosen]";
    
    $sql3 = "UPDATE blog, public SET blog.smile = public.smile WHERE blog.miniblog = public.miniblog";
    $sql4 = "UPDATE blog, public SET blog.heart = public.heart WHERE blog.miniblog = public.miniblog";
    
    
//     $sql = "UPDATE bodyparts SET miniblog = '$_POST[reflection]', type = '$_POST[optiontype]' 
//     WHERE user_ID = '1' ";
    // use exec() because no results are returned

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    echo "insert" ;
    if ($_POST['optiontype'] == "heart") {
        $conn->exec($sql);
        $conn->exec($sql4);
        Header('Location: public.php');
    }
    if ($_POST['optiontype'] == "smile") {
    	$conn->exec($sql2);
    	$conn->exec($sql3);
    	Header('Location: public.php');
    }
    //Header('Location: log.php');
	//echo "<a href="log.php">Private Log</a>";
include("inc/disconnectDB.php");

?>