<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://m.elan.org.in');
    exit(0);
}
?>
<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>Archives | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

      <meta name="description" content="IIT Hyderabad Techno Cultural Fest">

      <meta name="author" content="ELAN 2017">

      <meta name="keyword" content="elan,vision,techno,cultural,management,technical,iit hyderabad, iit,fest, competitions,events,event,hyderabad,iith,students,dance,song , drama , dj , informal , fun,sponsors,games,awesome,workshops,biggies,culti,techy,infi,online,litr , workshop , android , app , development , andro , engine , quadcopter , auto mobile , autonomous , robotics , team">  

      <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimal-ui">  
      <link rel='shortcut icon' href=../favicon.ico type='image/x-icon'/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

      <meta name="theme-color" content="#000000">
      <meta property=og:url content='http://elan.org.in/' />
      <meta property=og:type content=website />
      <meta property=og:title content="ELAN 2017"/>
      <meta property=og:description content="ELAN IIT Hyderabad Techno Cultural Fest">
      <meta property=og:image content="https://i.ytimg.com/vi/66HbC68mk2o/hqdefault.jpg"/>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../navbar/navbar2.css">
        <link rel="stylesheet" href="../styles/footer3.css">
        <!-- pre loader link sheets -->
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="../css/loader.css">
<!-- pre loader link sheets ends  -->

		<style type="text/css">
            @font-face {
            font-family: chelsea;
            src: url('../fonts/chelsea2/ChelseaAlternates.ttf');
        }
			.region{
		 		  background-color: transparent !important;
			}
			a ,	a:hover , a:visited , a:focus , a:active{
 				display:inline-block;
  	  			width:100%;
   				height:100%;
  			}
            .scroll , .scroll:hover , .scroll:visited , .scroll:focus , .scroll:active{
                display: block;
                width: auto;
                height: auto;
            }
            .linkBT , .linkBT:hover , .linkBT:visited , .linkBT:focus , .linkBT:active{
                display: block;
                width: auto;
                height: auto;
                font-size: 16px;
            }
                     b {
    color: #F06D06;
    font: 200 30px/1em chelsea;
    }
            
</style>
<?php
                        session_start();
                             if(isset($_SESSION["id"]))
                             echo "
                                <style>
                                        .right{
                                        margin-right: 9.5%;
                                        margin-top: 1.15%;
                                        }
                                        @media screen and (max-width: 1000px) {

                                        }
                                </style>";
                        ?>

</head>
<body style="background-image: url('archives images/bg_archive.png');  
        background-repeat: no-repeat;
        background-position: right top;
        background-attachment: fixed;
        background-size: cover;
        overflow-x: hidden;
        ">
<?php include '../analyticstracking.php'; ?>

          <!-- Preloader with Bootstrap Progress Bar -->



<div class='loader'>
   <div class='loader-container'>  
   <img src="../images/loading.png" id="loadImg" style='width:100%;' border="0" alt="Null">
    <div class='progress progress-striped active'>
      <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
    </div>
  </div>
</div>

    <div id="nav-outter"  style="z-index: 2;">
        <nav id="topNavBar">
        <div  style="position:fixed;left:4px;top:-5px;" class="qwerDIV">
               <img src="../images/cyient.png" class="qwer" style="float: left;width: 150px;height:55px;" usemap="#cyient">
               <map name="cyient">
                  <area shape="rect" coords="0,0,150,55" href="http://www.cyient.com/" alt="CYIENT" target="_blank" style="outline: none;">
               </map>
        </div>
        <div class="left">
                        <a class="scroll" href="../about">About</a>
                        <a class="scroll" href="../events">Events</a>
                        
        </div>
        
        <div class="center1">
        <a href="../">
            <img src="../images/logo6.png" style="float: left;margin-top: 23px; margin-left: -105px;width: 300px;height: 120px;" id="logo">
        </a>
        </div>
        
        <div class="right">
                        <a class="scroll" href="../team">Team</a>
                        <a class="scroll" href="../sponsors">Sponsors</a>
                        <?php
                        session_start();
                             if(isset($_SESSION["id"]))
                             echo "
                                <div class=\"dropdown\">
                                    <a class=\"dropbtn\" href=\"#\"><span class=\"glyphicon glyphicon-user\"></span></a>
                                    <div class=\"dropdown-content\">
                                        <a class=\"scroll\" href=\"../dashboard.php\">Dashboard</a>
                                        <a class=\"scroll\" href=\"../signout.php\">Sign Out</a>
                                    </div>
                                </div>";
                        ?>
        </div>

        </nav>
    </div>
    
<div id="check" style="margin-top: 4%;">&nbsp;</div>
<div id="canvas" >
<div class="magazine-viewport" style="z-index: 1;">
	<div class="container">
		<div class="magazine">
			<!-- Next button -->
			<div ignore="1" class="next-button"></div>
			<!-- Previous button -->
			<div ignore="1" class="previous-button"></div>
		</div>
	</div>
</div>
<!-- Thumbnails -->
<div class="thumbnails">
	<div>
		<ul>
			<li class="d">
				<img src="pages/2-thumb.jpg" width="76" height="100" class="page-2">
				<img src="pages/3-thumb.jpg" width="76" height="100" class="page-3">
				<span>2011</span>
			</li>
			<li class="d">
				<img src="pages/4-thumb.jpg" width="76" height="100" class="page-4">
				<img src="pages/5-thumb.jpg" width="76" height="100" class="page-5">
				<span>2012</span>
			</li>
			<li class="d">
				<img src="pages/6-thumb.jpg" width="76" height="100" class="page-6">
				<img src="pages/7-thumb.jpg" width="76" height="100" class="page-7">
				<span>2013</span>
			</li>
			<li class="d">
				<img src="pages/8-thumb.jpg" width="76" height="100" class="page-8">
				<img src="pages/9-thumb.jpg" width="76" height="100" class="page-9">
				<span>2014</span>
			</li>
			<li class="d">
				<img src="pages/10-thumb.jpg" width="76" height="100" class="page-10">
				<img src="pages/11-thumb.jpg" width="76" height="100" class="page-11">
				<span>2015</span>
			</li>
			<li class="d">
				<img src="pages/12-thumb.jpg" width="76" height="100" class="page-12">
				<img src="pages/13-thumb.jpg" width="76" height="100" class="page-13">
				<span>2016</span>
			</li>
		</ul>
    </div>
</div>
</div>
</div>

<br><br><br><br>



<div class="footer">
<div class="container"  style="float: left;">
    <div class="row" >
  
    <div class="bottomLinkDiv">
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text1">
                           <a href="../literanza" class="linkBT"><span class="spot"></span>LITERANZA</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv">
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text2">
                           <a href="../events/#emblazon" class="linkBT"><span class="spot"></span>EMBLAZON</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv" >
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text3">
                           <a href="../archives"  class="linkBT"><span class="spot"></span>ARCHIVES</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv" >
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text4">
                           <a href="../hospitality"  class="linkBT"><span class="spot"></span>HOSPITALITY</a>
                        </div>
                     </svg>
                  </div>
               </div>

    <div class="bottomLinkDiv">
  <div class="svg-wrapper1" >
  <svg height="40" width="150">
  <rect id="shape1" height="40" width="150" />
  <div id="text5">
    <a href="../workshops" class="linkBT"><span class="spot"></span>&nbsp;&nbsp;WORKSHOPS</a>
  </div>
  </svg>
  </div>
    </div>





  <div class="bottomLinkDiv">
  <div class="svg-wrapper1" >
  <svg height="40" width="150">
  <rect id="shape1" height="40" width="150" />
  <div id="text6">
    <a href="http://blog.elan.org.in" target="_blank" class="linkBT"><span class="spot"></span>BLOG</a>
  </div>
  </svg>
  </div>
    </div>

        <?php
                        session_start();
                             if(!isset($_SESSION["id"]))
                             echo "
<div class=\"bottomLinkDiv\">
  <div class=\"svg-wrapper1\"  style=\"background-color:white;\">
  <svg height=\"40\" width=\"150\">
  <rect id=\"shape1\" height=\"40\" width=\"150\" />
  <div id=\"text7\">
    <a href=\"https://id.nvision.org.in/signin?url=http://elan.org.in/token.php\" class=\"linkBT\" style=\"color:black;\"><span class=\"spot\"></span>REGISTER</a>
  </div>
  </svg>
  </div>
    </div>";
                        ?>


    </div>
</div>
<main>
  <ul id='services'>
    <li>
  <a href="https://www.facebook.com/elan.iithyderabad/?fref=ts" target="_blank" style="text-decoration: none;">
       <div class='fa fa-facebook'></div>
  </a>
    </li>
    <li>
  <a href="https://twitter.com/ELAN_IITH" target="_blank" style="text-decoration: none;">
      <div class='fa fa-twitter'></div>
  </a>
    </li>
    <li>
  <a href="https://www.youtube.com/user/ElanIITHyderabad" target="_blank" style="text-decoration: none;">
      <div class='fa fa-youtube'></div>
  </a>
    </li>
    <li>
  <a href="https://www.instagram.com/elan_iith/" target="_blank" style="text-decoration: none;">
      <div class='fa fa-instagram'></div>
  </a>
    </li>
  </ul>
</main>
</div>


 </body>

<script type="text/javascript" src="./extras/modernizr.2.5.3.min.js"></script>
<script type="text/javascript" src="./lib/hash.js"></script>
<script type="text/javascript" src="./extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="./js/flip.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/index.js"></script>
 <link rel="stylesheet" href="../navbar/navbar.js">
 <script type="text/javascript">

  $(document).ready(function () {

               if($(window).height()<500){
                    $("#check").css("margin-top","17%");
                }

                else if($(window).height()<600){
                    $("#check").css("margin-top","14%");
                }
                else if($(window).height()<700){
                    $("#check").css("margin-top","11%");
                }
                else if($(window).height()<1000){
                    $("#check").css("margin-top","5%");
                }
                else{
                    $("#check").css("margin-top","-2%");
                }

            $(window).resize(function () {

               if($(window).height()<500){
                    $("#check").css("margin-top","17%");
                }

                else if($(window).height()<600){
                    $("#check").css("margin-top","14%");
                }
                else if($(window).height()<700){
                    $("#check").css("margin-top","11%");
                }
                else if($(window).height()<1000){
                    $("#check").css("margin-top","5%");
                }
                else{
                    $("#check").css("margin-top","-2%");
                }
            });
  })
</script>

</html>