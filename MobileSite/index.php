<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Elan 2017 Mobile</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="theme-color" content="#283389">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel='shortcut icon' href=./favicon.ico type='image/x-icon'/>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->

<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
	
<body>
<!-- banner -->
  <div class="banner-1 wthree-1">
    <div class="container">
      <div class="banner_top">
        <div class="logo">
          <h1><a href="index.php"><img src="images/logo5.png"></a></h1>
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
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="sponsors.php">Sponsors</a></li>
          <li>
          <?php 
          if(isset($_SESSION["id"]))
                echo "<a href=\"dashboard.php\">Dashboard</a>";
          else
                echo "<a href=\"https://id.nvision.org.in/signin?url=http://mobile.elan.org.in/token.php\">Register</a>";
           ?>
            </li>
            <li><a href="hospitality.php">Hospitality</a></li>
            <li><a href="workshops.php">Workshops</a></li>
            <li><a href="http://blog.elan.org.in/">Blog</a></li>
            <li><a href="team.php">Contact US</a></li>
            <li><a href="litfest">Litfest</a></li>
            <li><a href="literanza">Literanza</a></li>
            <?php 
          if(isset($_SESSION["id"]))
                echo "<li><a href=\"signout.php\">Sign Out</a></li>";
           ?>
          </ul>
        </div><!-- /.navbar-collapse -->  
        
      </nav>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //banner -->
<div class="banner-bottom agile">
	<div class="container">
		<h3 class="tittle-one wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">About Us</h3>
		
		<div class="bottom-grids agileinfo">
			
			<div class="col-md-6 bottom-grid grid-one wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
				
				<p>Energy , Style And Enthusiasm
ELAN, a mesmerizing unification of Energy, Style and Enthusiasm is all set to hold Hyderabad spellbound once again, with its eighth edition being launched at the start of 2017.
This Annual Inter­College “Techno­Cultural” festival of IIT Hyderabad promises a plethora of events to stupefy and ensorcell both epicurean and boisterous tastes alike. Since its dawn in 2009 by dreadfully talented students, Elan has left a special memory in the hearts of each and every participant, visitor and organizer</p>
			</div>

			<div class="col-md-6 bottom-grid grid-one wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
				
				<p>Keeping up with the sucessful 3­ day model, ELAN 2017 is well stocked with events from the Biggies , Cultural (Culti), Technical (Techy), Informal (Infi) , Literary (Litr) , Online domains. </p><p>Each event is finely crafted to reflect the avid ardor in appreciating and experiencing genuine inspiration in art, music and technology that is the culture of Elan.
Elan is an adventure filled with Energy , Tashaan and Enthusiasm.
Its an odyssey worth enduring !!!.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- <div class="feature1 agileits">
	<div class="container">
		<h3 class="tittle-one">Archives</h3>
		<div class="feature-grids">
			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">



				<div class="feature-grid-two">
					<img class="hi-icon" src="images/archives/1.jpg">

					<h4>2011</h4>
					<p> Web link to our site</p>
				</div>
			</div>

			<div class="col-md-3 feature-grid text-center wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				<div class="feature-grid-two">
					<img class="hi-icon" src="images/archives/2.jpg">

					<h4>2012</h4>
					<p> Web link to our site</p>
				</div>
			</div>

=======
>>>>>>> d2967a48fce9c99858b3da7b6fa177716f1e5e76


<<<<<<< HEAD
					<h4>2015</h4>
					<p> Web link to our site</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div> -->



			<div class="footer">
		<div class="container">
				
			<div class="footer-info">
			<div class="col-md-3 col-sm-3 footer-info-grid wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
					<h4>FOLLOW US</h4>
					
					<div class="social">
						<ul>
							<li><a href="https://www.facebook.com/elan.iithyderabad/?fref=ts" class="facebook"> </a></li>
								<li><a href="https://twitter.com/ELAN_IITH" class="facebook twitter"> </a></li>
								<li><a href="https://www.youtube.com/user/ElanIITHyderabad" class="facebook chrome"> </a></li>
						</ul>		
						</div>
					
				</div>
				

				
			
				<div class="clearfix"> </div>
			</div>
			
		</div>
		<div class="copyright wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
			<p>© 2017 ELAN . All Rights Reserved | Design by WebTeam</p>
		</div>
	</div>
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>