<!DOCTYPE html> 
<html>
<head>
	<title>Journals</title>
	<head>
	<!-- meta data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!--font-family-->
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
	
	<!-- title of site -->
	<title>Sufferer</title>

	<!-- For favicon png -->
	<link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>
   
	<!--font-awesome.min.css-->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!--bootstrap.min.css-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
	<!--style.css-->
	<link rel="stylesheet" href="assets/css/style_table.css">
   
	<link href="https://fonts.googleapis.com/css?family=Nunito:900|Raleway" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
		<!-- top-area Start -->
		<header class="top-area">
			<div class="header-area">
				<!-- Start Navigation -->
			    <nav class="navbar navbar-default bootsnav navbar-fixed dark no-background">

			        <div class="container">

			            <!-- Start Header Navigation -->
			            <div class="navbar-header">
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
			                    <i class="fa fa-bars"></i>
			                </button>
			                <a class="navbar-brand" href="index.html">PainBlog</a>
			            </div>
			            <!-- End Header Navigation -->

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
			                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="smooth-menu"><a href="public.php">Public</a></li>
                                <li class="smooth-menu"><a href="log.php">User</a></li>
                               
			                </ul>
			            </div>
			        </div>
			    </nav>
			    <!-- End Navigation -->
			</div>
                <div class="clearfix"></div>
    
            </header><!-- /.top-area-->
            <!-- top-area End -->
            
		<!--welcome-hero start -->
		<section id="welcome-hero" class="welcome-hero">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="header-text">
                                <p>Public Journals</p>
                            </div><!--/.header-text-->
                        </div><!--/.col-->
                    </div><!-- /.row-->
                </div><!-- /.container-->
            </section><!--/.welcome-hero-->
            <!--welcome-hero end -->
            <section id="log-table" class="logtable">
				<table>
					<tr>
						<th>Reflection</th>
						<th colspan="2">Reactions</th>
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
            </section>


            
</body>
</html>   



