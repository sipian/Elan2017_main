<?php
   include 'Mobile-Detect-master/Mobile_Detect.php';
   $detect = new Mobile_Detect();

   if ($detect->isMobile()) {
       header('Location: http://mobile.elan.org.in');
       exit(0);
   }
   ?>
    <!doctype html>
    <html lang="en-IN">

    <head>
        <meta charset="utf-8">
        <title>ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>
        <meta name="description" content="IIT Hyderabad Techno Cultural Fest">
        <meta name="author" content="ELAN 2017">
        <meta name="keyword" content="elan,vision,techno,cultural,management,technical,iit hyderabad, iit,fest, competitions,events,event,hyderabad,iith,students,dance,song , drama , dj , informal , fun,sponsors,games,awesome,workshops,biggies,culti,techy,infi,online,litr , workshop , android , app , development , andro , engine , quadcopter , auto mobile , autonomous , robotics , team">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimal-ui">
        <link rel='shortcut icon' href=favicon.ico type='image/x-icon' />
        <meta name="theme-color" content="#000000">
        <meta property=og:url content='http://elan.org.in/' />
        <meta property=og:type content=website />
        <meta property=og:title content="ELAN 2017" />
        <meta property=og:description content="ELAN IIT Hyderabad Techno Cultural Fest">
        <meta property=og:image content="https://i.ytimg.com/vi/66HbC68mk2o/hqdefault.jpg" />
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/footer3.css">
        <link rel="stylesheet" href="navbar/navbar2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet prefetch' href='http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/css/bootstrap.min.css'>
        <link rel="stylesheet" href="css/loader.css">
    </head>

    <body class="site de" style="height: 100%;width: 100%;">
        <?php include 'analyticstracking.php'; ?>
            <!-- Preloader with Bootstrap Progress Bar -->
            <div class='loader'>
                <div class='loader-container'>
                    <div style="text-align: center;">
                        <img src="images/loading.png" id="loadImg" style='width:100%;' border="0" alt="Null">
                    </div>
                    <div class='progress progress-striped active'>
                        <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
                    </div>
                </div>
            </div>
            <div id="nav-outter" style="z-index: 1;">
                <nav id="topNavBar">
                    <div style="position:fixed;left:4px;top:-5px;" class="qwerDIV">
                        <img src="images/cyient.png" class="qwer" style="float: left;width: 150px;height:55px;" usemap="#cyient">
                        <map name="cyient">
                            <area shape="rect" coords="0,0,150,55" href="http://www.cyient.com/" alt="CYIENT" target="_blank" style="outline: none;">
                        </map>
                    </div>
                    <div class="center1">
                        <a href="">
                            <img src="images/logo6.png" style="float: left;margin-top: 23px; margin-left: -105px;width: 300px;height: 120px;" id="logo">
                        </a>
                    </div>
            </div>
            </nav>
            </div>
            <div id="element_to_pop_up_image" style="display: none;">
                <a class="b-close"><span class="glyphicon glyphicon-remove"  style="color:white;font-size: 30px;"></span></a>
            <img class="img-responsive" src="images/pronites.jpg"/>
      </div>
      <div class="responsive" style="height: 90px;">&nbsp;</div>
      <div class="site__main-content scrollable" id="back">

      <section class="main-content__section section__home" data-anchor="home"  >
      <div class="image">
      <img src="images/scroll.png" class="img-responsive" style="width:30%;height:30%;" />
      <span class="text">
      <ul>
      <br>      
      <li  style="list-style-type: none; text-align: left;"><h3>&nbsp;&nbsp;&nbsp;&nbsp;UPDATES</h3></li>
      </ul>
      </span>
      </div>
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
      <br><br><br>
      <?php $main=1; include 'footerMain.php'; ?>

                <img src="images/explosion.png" style="display: none;">
    </body>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
    <script src="scripts/vendor.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
    <script src="scripts/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.center').html(`<img src="images/logo6.png" style="float: left;margin-top: 50px; margin-left: -105px;width: 400px;height: 145px;" id="logo" usemap="#mapname">`);
        })
    </script>
    <script src="scripts/popup.js"></script>
    <script type="text/javascript">
        $(document).ready(function(argument) {

            if ($(window).height() > 700)
                $("#back").css("margin-top", "-80px");
            else
                $("#back").css("margin-top", "-130px");

            $(window).resize(function() {
                if ($(window).height() > 700)
                    $("#back").css("margin-top", "-80px");
                else
                    $("#back").css("margin-top", "-130px");

            });
            $(".home__bg-island-meyer.animation__float_01.js-island-meyer").click(function() {
                $("#about").html("");
                $(".home__bg-island-meyer").html("");
                setTimeout(function() {
                    window.location = "about";
                }, 1000);
            });

            $(".home__bg-island-miller.animation__float_02.js-island-miller").click(function() {
                $("#events").html("");
                setTimeout(function() {
                    window.location = "events";
                }, 1000);
            });

            $(".home__bg-island-smith.animation__float_03.js-island-smith").click(function() {
                $("#sponsors").html("");
                setTimeout(function() {
                    window.location = "sponsors";
                }, 1000);
            });

            $(".home__bg-island-helmet.animation__float_04.js-island-helmet").click(function() {
                $("#team").html("");
                setTimeout(function() {
                    window.location = "team";
                }, 1000);
            });
        })
    </script>
    <script src="js/index_main.js"></script>

    </html>