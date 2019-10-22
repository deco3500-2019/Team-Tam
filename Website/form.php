<!DOCTYPE html>
<?php
session_start();
include("connectDB.php");
?>

<html class="no-js" lang="en">

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
        <link rel="stylesheet" href="assets/css/style.css">
       
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
                                <li class="smooth-menu"><a href=#>Private</a></li>
                                <li class="smooth-menu"><a href="public.php"#>Public</a></li>
                                <li class="smooth-menu"><a href=#>User</a></li>
                               
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
                                <p>Check your pain area refering to the image below</p>
                            </div><!--/.header-text-->
                        </div><!--/.col-->
                    </div><!-- /.row-->
                </div><!-- /.container-->
            </section><!--/.welcome-hero-->
            <!--welcome-hero end -->


		<!--image-hero start -->
		<section id="serex" class="serex">
                <div class="container">
                        <div class="service-img">
                            <img src="assets/images/about/body.png"/></a>
                        </div>
                </div><!-- /.container-->
        </section><!--/.welcome-hero-->
            <!--image-hero end -->
            

            <section id="selection-hero" class="selection-hero">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="heade-text">
                                    <p>Please select the regions where you are feeling pain:</p>
                                </div><!--/.header-text-->
                            </div><!--/.col-->
                        </div><!-- /.row-->
                    </div><!-- /.container-->
                </section><!--/.welcome-hero-->
                <!--welcome-hero end -->
    
        <section id="select" class="select">
            <div class="container">
                <div class="row">
		<iframe name="votar" style="display:none;"></iframe>
		<div id="form1" class="form1">
            <ul>        
            <li>       
			<form name = "headslect" action="inserted.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Head"></input>
            </form>
            </li>

            <li>       
			<form name = "bodyselect" action="inserted1.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Neck"></input>
			</form>
            </li>

            <li>
			<form name = "bodyselect" action="inserted1.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Back"></input>
            </form>
            </li>

            <li>
			<form name = "bodyselect" action="inserted1.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Waist"></input>
            </form>
            </li>

            <li>
			<form name = "bodyselect" action="inserted1.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Shoulder"></input>
            </form>
            </li>

            <li>
			<form name = "bodyselect" action="inserted2.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Arm"></input>
			</form>
            </li>
            </ul>        
            <ul>        

            <li>
			<form name = "bodyselect" action="inserted2.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Wrist"></input>
			</form>
            </li>  

            <li>
			<form name = "bodyselect" action="inserted4.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Caudal"></input>
			</form>
			</li>

            <li>
			<form name = "bodyselect" action="inserted3.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Knee"></input>
			</form>
            </li>
            
            <li>
			<form name = "bodyselect" action="inserted4.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Leg"></input>
			</form>
            </li>
            
            <li>
			<form name = "bodyselect" action="inserted5.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Ankle"></input>
            </form>
            </li>
            
            <li>
			<form name = "bodyselect" action="inserted5.php" method = "POST" target="votar">
			<input name="secret" type="hidden" value="my hidden value"></input>
			<input name="product-id" type="hidden" value="1"></input>
			<input type="submit" class = "button" value="Others"></input>
            </form>
            </li>
        </ul>
        </div>
         </div>
    </div>
    </section>
      		<!--Change hide to change colour-->
  
              <section id="selection-hero" class="selection-hero">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="heade-text">
                                        <p><a href="post.html">Done</a></p>
                                    </div><!--/.header-text-->
                            </div><!--/.col-->
                        </div><!-- /.row-->
                    </div><!-- /.container-->
                </section><!--/.welcome-hero-->
                <!--welcome-hero end -->

        




		<!--footer-copyright start-->
		<footer id="footer-copyright" class="footer-copyright">
                <div class="container">
                    <div class="hm-footer-copyright text-center">
                        <p>Copyright &copy; 2019. TeamTam All rights reserved.</p>
                    </div><!--/.text-center-->
                </div><!--/.container-->
    
    
            </footer><!--/.footer-copyright-->

			
 <script>
 	$('.button').click(function() {
 		var r = confirm('Select body part?');
 		if (r == true) {
 			$(this).hide();
 		}
 	});
 </script>
	</body>
</html>


<!-- 
		<div class="wrapper">
			<div id="nav">
				<a href="index.html">Home</a>
				<a href="post.html">Test Posting</a>
				<a href="public.php">Test public log page</a>
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
 -->


