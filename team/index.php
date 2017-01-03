<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://m.elan.org.in/team.php');
    exit(0);
}
?>
<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>Team | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

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
<!--Adobe Edge Runtime-->

<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

<link rel="stylesheet" href="../navbar/navbar2.css">
<link rel="stylesheet" href="../styles/footer3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


      <link rel="stylesheet" href="../css/loader.css">


    
	<style>
		   @font-face {
    font-family: chelsea;
    src: url('../fonts/chelsea2/ChelseaAlternates.ttf');
    }
     b {
    color: #F06D06;
    font: 200 30px/1em chelsea;
    }
		video#bgvid{

			min-width: 100%;
			min-height: 100%;
			width: auto;
			height: auto;
/*			background: url(http://movie.miestilomag.com/wp-content/uploads/2014/03/temp-screenshot.png) no-repeat;
*/			background-size: cover;
		}

		.edgeLoad-EDGE-58749904 { visibility:hidden; }

        div.footer_social{

            position: absolute;
            top: 120%;
            left:70%;
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
	

	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
   
<!--Adobe Edge Runtime End-->
</head>
<body style="margin:0;padding:0;height:100%;">







<div class='loader'>
   <div class='loader-container'>  
   <img src="../images/loading.png" id="loadImg" style='width:100%;' border="0" alt="Null">
    <div class='progress progress-striped active'>
      <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
    </div>
  </div>
</div>

    <div id="nav-outter"  style="z-index: 1;">
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
<div class="responsive" id="jump" style="font-size: 50px;">
<div id="Stage" class="EDGE-58749904">


<video id="bgvid" autoplay loop muted >
	<source src="main2.mp4" type="video/mp4">
</video>

</div>
</div>


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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript" charset="utf-8" src="http://animate.adobe.com/runtime/5.0.0/edge.5.0.0.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="Elan2017_Team_edgePreload.js"></script>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="../js/index.js"></script>

</html>