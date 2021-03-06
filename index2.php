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
      <link rel='shortcut icon' href=favicon.ico type='image/x-icon'/>

      <meta name="theme-color" content="#000000">
      <meta property=og:url content='http://elan.org.in/' />
      <meta property=og:type content=website />
      <meta property=og:title content="ELAN 2017"/>
      <meta property=og:description content="ELAN IIT Hyderabad Techno Cultural Fest">
      <meta property=og:image content="https://i.ytimg.com/vi/66HbC68mk2o/hqdefault.jpg"/>


      <link rel="stylesheet" href="styles/main.css">
      <link rel="stylesheet" href="styles/footer3.css">
      <link rel="stylesheet" href="navbar/navbar2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- pre loader link sheets -->
      <link rel='stylesheet prefetch' href='http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/loader.css">
<!-- pre loader link sheets ends  -->

      <title>ELAN 2017</title>

      <style type="text/css">
         @font-face {
         font-family: chelsea;
         src: url('fonts/chelsea2/ChelseaAlternates.ttf');
         }
         b {
    color: #F06D06;
    font: 200 30px/1em chelsea;
    }
    #element_to_pop_up { 
    background-color:#fff;
    border-radius: 5px;
    color:#000;
    display:none; 
    padding:20px;
    min-width:400px;
    min-height: 180px;
}

  #element_to_pop_up_image  {
    position:fixed;
    top: 50%;
    left: 50%;
    
    margin-top: 3em; /*set to a negative number 1/2 of your height*/
}

.b-close{
    cursor:pointer;
    position:absolute;
    right:10px;
    top:5px;
}

@import url(http://fonts.googleapis.com/css?family=Open+Sans);

.btn {
  border-radius: 5px;
  font-size: 22px;
  text-decoration: none;
  top: -10px;

  color: #fff;
  position: relative;
  display: inline-block;
}

.btn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}


.green {
  background-color: #2ecc71;
  box-shadow: 0px 5px 0px 0px #15B358;
}

.green:hover {
  background-color: #48E68B;
}

.


/* copyright stuffs.. */

p {
  text-align: center;
  color: #55acee;
  padding-top: 20px;
}

      </style>

   </head>
   <body class="site de" style="height: 100%;">
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

    <div id="nav-outter"  style="z-index: 1;">
        <nav id="topNavBar">
        <div  style="position:fixed;left:4px;top:-5px;" class="qwerDIV">
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
<!--         
        <div class="right" style="text-align: center;">

<a href="#" class="btn green" style="font-family: chelsea;letter-spacing: 1.5px;font-weight: lighter;"> 
<p style="margin-top: -5px;">UPDATES</p></a>
        </div> -->

        </nav>
    </div>
<!--     <div id="element_to_pop_up" style="display: none;font-family: chelsea;">
    <a class="b-close"  ><span class="glyphicon glyphicon-remove"  style=" font-size: 30px;"></span></a>
    <h2>UPDATES</h2>
    <ul style="list-style-type: none;float: left;">
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 1 IS Going To HAppen</li>
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 2 IS Going To HAppen</li>
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 3 IS Going To HAppen</li>
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 1 IS Going To HAppen</li>
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 2 IS Going To HAppen</li>
      <li><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;&nbsp;EVENT 3 IS Going To HAppen</li>
    </ul>
</div>


   <div id="element_to_pop_up_image" style="display: none;">
    <a class="b-close"><span class="glyphicon glyphicon-remove"  style="color:white;font-size: 30px;"></span><a/>
    <img src="images/test13.jpg"/>
</div>
 -->

      


      <div class="responsive" style="height: 90px;">&nbsp;</div>
      <div class="site__main-content scrollable" id="back" style="
        background-image: url('images/test13.jpg');  
        background-repeat: no-repeat;
        background-position: center;
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

      
      <br><br><br>
      <div class="footer">
         <div class="container"  style="float: left;">
    <div class="row" >
  
    <div class="bottomLinkDiv">
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text1">
                           <a href="literanza" class="linkBT"><span class="spot"></span>LITERANZA</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv">
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text2">
                           <a href="events/#emblazon" class="linkBT"><span class="spot"></span>EMBLAZON</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv" >
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text3">
                           <a href="archives"  class="linkBT"><span class="spot"></span>ARCHIVES</a>
                        </div>
                     </svg>
                  </div>
               </div>
               <div class="bottomLinkDiv" >
                  <div class="svg-wrapper1" >
                     <svg height="40" width="150">
                        <rect id="shape1" height="40" width="150" />
                        <div id="text4">
                           <a href="hospitality"  class="linkBT"><span class="spot"></span>HOSPITALITY</a>
                        </div>
                     </svg>
                  </div>
               </div>

    <div class="bottomLinkDiv">
  <div class="svg-wrapper1" >
  <svg height="40" width="150">
  <rect id="shape1" height="40" width="150" />
  <div id="text5">
    <a href="workshops" class="linkBT"><span class="spot"></span>&nbsp;&nbsp;WORKSHOPS</a>
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
    else echo "
<div class=\"bottomLinkDiv\">
  <div class=\"svg-wrapper1\"  style=\"background-color:white;\">
  <svg height=\"40\" width=\"150\">
  <rect id=\"shape1\" height=\"40\" width=\"150\" />
  <div id=\"text7\">
    <a href=\"dashboard.php\" class=\"linkBT\" style=\"color:black;\"><span class=\"spot\"></span>DASHBOARD</a>
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
      <img src="images/explosion.png" style="display: none;">
   </body>

   <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>

   <script src="scripts/vendor.js"></script>
   
<!--     <script src="navbar/navbar1.js"></script>
 -->   <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
            <script src="scripts/main.js"></script>

   <script type="text/javascript">
                 $(document).ready(function () {
                  $('.center').html(`<img src="images/logo6.png" style="float: left;margin-top: 50px; margin-left: -105px;width: 400px;height: 145px;" id="logo" usemap="#mapname">`);
        })
                
   </script>
   <script type="text/javascript">
      $(document).ready(function(argument) {

            if($(window).height()>700)
                    $("#back").css("margin-top","-80px");
                else
                    $("#back").css("margin-top","-130px");

            $(window).resize(function () {
                if($(window).height()>700)
                    $("#back").css("margin-top","-80px");
                else
                    $("#back").css("margin-top","-130px");

            });
          $(".home__bg-island-meyer.animation__float_01.js-island-meyer").click(function() {
                $("#about").html("");
                $(".home__bg-island-meyer").html("");
              setTimeout(function(){ 
                window.location = "about"; }, 1000);
          });
      
          $(".home__bg-island-miller.animation__float_02.js-island-miller").click(function() {
                $("#events").html("");
              setTimeout(function(){  window.location = "events"; }, 1000);
          });
      
          $(".home__bg-island-smith.animation__float_03.js-island-smith").click(function() {
                $("#sponsors").html("");
              setTimeout(function(){  window.location = "sponsors"; }, 1000);
          });
      
          $(".home__bg-island-helmet.animation__float_04.js-island-helmet").click(function() {
                $("#team").html("");
              setTimeout(function(){  window.location = "team"; }, 1000);
          });
/*          $(".right").click(function () {
            $('#element_to_pop_up').bPopup({
               modalClose: false,
            opacity: 0.6,
            positionStyle: 'fixed', //'fixed' or 'absolute'

              speed: 650,
            transition: 'slideIn',
      transitionClose: 'slideBack'
            });
          });*/

      })
   </script>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index_main.js"></script>
</html>