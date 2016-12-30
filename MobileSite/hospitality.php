
<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Hospitality</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visceral Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel='shortcut icon' href=../favicon.ico type='image/x-icon'/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->

</head>
	
<body>
<!-- banner -->
  <div class="banner-1 wthree-1">
    <div class="container">
      <div class="banner_top">
        <div class="logo">
          <h1><a href="index.html"><img src="images/logo5.png"></a></h1>
        </div>
        <div class="banner_top_right">
          <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav cl-effect-14">
            <li><a href="index.php">Home</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="sponsors.php">Sponsors</a></li>
          <li>
          <?php 
          if(isset($_SESSION["id"]))
                echo "<a href=\"dashboard.php\">Dashboard</a>";
          else
                echo "<a href=\"https://id.nvision.org.in/signin?url=http://trial.elan.org.in/token.php\">Register</a>";
           ?>
            </li>
            <li><a href="hospitality.php" class="active">Hospitality</a></li>
            <li><a href="workshops.php">Workshops</a></li>
            <li><a href="http://blog.elan.org.in/">Blog</a></li>
            <li><a href="team.php">Contact US</a></li>
            <li><a href="litfest">Litfest</a></li>
            <li><a href="literanza">Literanza</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->  
        
      </nav>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //banner -->
<!-- about -->
<div class="about-page agile-1">
	<div class="container">
		
			<div class="about-grids">
				
				<div class="col-md-6 about-grid">
					<h3 class="tittle">Hospitality</h3>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="history agileits-1">
		<div class="container">
		<h2 class="tittle">Details Comming Soon</h2>
			<div class="col-md-6 history-left">	
				
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- about -->

<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>