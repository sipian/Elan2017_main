<?php
include 'Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://m.elan.org.in');
    exit(0);
}
?>
<!doctype html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="utf-8">
      <meta name="description" content="IIT Hyderabad Techno cultural Fest">
      <meta name="author" content="Harsh & Prasanth">
      <meta name="keywords" content="IIT , Hyderabad , elan , nvision , 2017 , techno , cultural , college , fest">
      <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimal-ui">
      <link rel='shortcut icon' href=./favicon.ico type='image/x-icon'/>
      <meta property=og:url content='http://elan.org.in/' />
      <meta property=og:type content=website />
      <meta property=og:title content="ELAN 2017"/>
      <meta property=og:description content="ELAN 2017 Website"/>
      <meta property=og:image content="https://i.ytimg.com/vi/66HbC68mk2o/hqdefault.jpg"/>
      <link rel="stylesheet" href="styles/main.css">
      <link rel="stylesheet" href="styles/footer.css">
      <link rel="stylesheet" href="navbar/navbar.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- pre loader link sheets -->
        <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
        <link rel="stylesheet" href="css/loader.css">
<!-- pre loader link sheets ends  -->

      <title>ELAN 2017</title>

      <style type="text/css">
         @font-face {
         font-family: chelsea;
         src: url('fonts/chelsea2/ChelseaAlternates.ttf');
         }
      </style>

   </head>
   <body class="site de" style="height: 100%;">


  <!-- Preloader with Bootstrap Progress Bar -->
<div class='loader'>
   <div class='loader-container'>  
   <img src="images/loading.png" style='width:100%;' border="0" alt="Null">
    <div class='progress progress-striped active'>
      <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
    </div>
  </div>
</div>

      <div id="nav-outter" style="z-index: 1;">
         <nav id="topNavBar">
            <div  style="position:fixed;left:4px;top:-5px;">
               <img src="images/cyient.png" style="float: left;width: 150px;height:55px;" usemap="#cyient">
               <map name="cyient">
                  <area shape="rect" coords="0,0,150,55" href="http://www.cyient.com/" alt="CYIENT" target="_blank" style="outline: none;">
               </map>
            </div>

                <div class="center1">
      <img src="images/logo6.png" style="float: left;margin-top: 50px; margin-left: -105px;" id="logo" usemap="#mapname">
      <map name="mapname">
        <area shape="rect" coords="30,0,370,160" href="../" alt="alttext" style="outline: none;">
      </map>
      </div>
         </nav>
      </div>
      
      <div class="responsive" style="height: 90px;">&nbsp;</div>
      <div class="site__main-content scrollable" id="back" style="
        background-image: url('images/test13.jpg');  
        background-repeat: no-repeat;
        background-position: top;
        background-attachment: fixed;
        background-size: cover;
        overflow-y: hidden;
        margin-top: -130px;
        ">
         <section class="main-content__section section__home" data-anchor="home"  >
            <div class="home__bg-container" >
               <div class="home__bg-container-left1"  style="text-align:center;z-index: 1;" >
                  <div class="home__bg-island-meyer animation__float_01 js-island-meyer">
                  </div>
               </div>
               <div class="home__bg-container-center1"  style="text-align:center;z-index: 1;">
                  <br>
                  <div class="home__bg-island-miller animation__float_02 js-island-miller">
                  </div>
               </div>
               <div class="home__bg-container-right1"  style="text-align:center;z-index: 1;">
                  <div class="home__bg-island-smith animation__float_03 js-island-smith">
                  </div>
               </div>
               <div class="home__bg-container-left2"  style="text-align:center;z-index: 1;">
                  <div class="home__bg-island-helmet animation__float_04 js-island-helmet">
                  </div>
               </div>
               <div class="home__bg-container-left1 home__bg-container-trans">
                  <div class="home__bg-hole-meyer"></div>
               </div>
               <div class="home__bg-container-center1 home__bg-container-trans">
                  <div class="home__bg-hole-miller"></div>
               </div>
               <div class="home__bg-container-right1 home__bg-container-trans">
                  <div class="home__bg-hole-smith"></div>
               </div>
               <div class="home__bg-container-left2 home__bg-container-trans">
                  <div class="home__bg-hole-helmet"></div>
               </div>
            </div>
         </section>
      </div>

      <div class="footer"></div>
      <img src="images/explosion.png" style="display: none;">
   </body>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="scripts/vendor.js"></script>
   <script src="navbar/navbar1.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
   <script src="scripts/main.js"></script>
   <script src="scripts/footer.js"></script>
   <script type="text/javascript">
                            if($(window).height()>700)
                    $("#back").css("margin-top","-80px");
                else
                    $("#back").css("margin-top","-130px");

            $(window).resize(function () {
                if($(window).height()>700)
                    $("#back").css("margin-top","-80px");
                else
                    $("#back").css("margin-top","-130px");
   </script>
    <script src="js/index.js"></script>
</html>