<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://m.elan.org.in');
    exit(0);
}
?>
<!doctype html>
<html lang="en">
<head>
<title>ELAN ARCHIVES</title>
        <meta charset=utf-8>
        <meta name=viewport content="width=device-width, initial-scale=1.0">
        <meta name=description content="Elan 2017 Website">
        <meta name="Web Coordinators" content=elan> 
        <meta property=og:url content='http://elan.org.in/' />
        <meta property=og:type content=website />
        <meta property=og:title content="ELAN 2017"/>
        <meta property=og:description content="ELAN 2017 Beta Website"/>
        <meta property=og:image content="http://elan.org.in/assets/img/bg/bg.jpg"/>
        <meta name="theme-color" content="#000000">
        <link rel='shortcut icon' href=../favicon.ico type='image/x-icon'/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../navbar/navbar.css">
        <link rel="stylesheet" href="../styles/footer.css">
        <!-- pre loader link sheets -->
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">
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
</head>
<body style="background-image: url('archives images/bg_archive.png');  
        background-repeat: no-repeat;
        background-position: right top;
        background-attachment: fixed;
        background-size: cover;
        overflow-x: hidden;
        ">

          <!-- Preloader with Bootstrap Progress Bar -->
<div class='loader'>
<div class="warrior">
    <img src="../images/warrior.gif" style='width:100%;' border="0" alt="Null"></div>
     
  <div class='loader-container'>

<br><br><br><br>
     <br>
    <div class='progress progress-striped active'>
      <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
    </div>
    <h3><b>Please wait a moment while we are preparing the content !</b></h3>
  </div>
</div>


<!-- Landing Page -->
    <div id="nav-outter"  style="z-index: 1;">
        <nav id="topNavBar">
        <div  style="position:fixed;left:4px;top:-5px;">
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
            <img src="../images/logo6.png" style="float: left;margin-top: 50px; margin-left: -105px;width: 400px;height: 145px;" id="logo" usemap="#mapname">
            <map name="mapname">
              <area shape="rect" coords="20,0,380,160" href="../" alt="alttext" style="outline: none;">
            </map>
            </div>
            <div class="right"  style="float: right;">
                        <a class="scroll" href="../sponsors">Sponsor</a>
                        <a class="scroll" href="../team">Team</a>
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
                        <div id="text2">
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
                           <a href="../litfest" class="linkBT"><span class="spot"></span>LITFEST</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv" >
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text1">
                           <a href="../archives"  class="linkBT"><span class="spot"></span>ARCHIVES</a>
                        </div>
                     </svg>
                  </div>
               </div>
    
    <div class="bottomLinkDiv">
        <div class="svg-wrapper1" >
        <svg height="40" width="150">
        <rect id="shape1" height="40" width="150" />
        <div id="text3">
          <a href="../workshops" class="linkBT"><span class="spot"></span>&nbsp;&nbsp;WORKSHOP&EML</a>
        </div>
        </svg>
        </div>
    </div>

    <div class="bottomLinkDiv">
        <div class="svg-wrapper1" >
        <svg height="40" width="150">
        <rect id="shape1" height="40" width="150" />
        <div id="text4">
          <a href="http://blog.elan.org.in" target="_blank" class="linkBT"><span class="spot"></span>BLOG</a>
        </div>
        </svg>
        </div>
    </div>

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

    <script src="js/index.js"></script>
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