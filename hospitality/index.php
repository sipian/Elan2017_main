<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://m.elan.org.in/about.html');
    exit(0);
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HOSPITALITY</title>
<link rel="shortcut icon" href="../favicon.ico">


<!-- pre loader link sheets -->
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">
<!-- pre loader link sheets ends  -->

<style>
    @font-face {
    font-family: chelsea;
    src: url('../fonts/chelsea2/ChelseaAlternates.ttf');
    }
body {
  background: url(../images/aboutus1.png) no-repeat 0% 0% fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  overflow-x: hidden;
}
.info {
  width: 80%;
  margin: 0 auto;
  font-family: 'chelsea', sans-serif;
}
.aboutimg {
    font-family: 'chelsea', sans-serif;
    color: #F06D06; 
}

.aboutcontent {
  padding: 10%;
  padding-top: 2%;
  overflow-x: hidden;
  color: black;
  font-size: 130%;
  text-align: justify;
}
.video-wrap {
  position: absolute;
  left: 10%;
  top: 76%;
  width: 80%;
  padding-bottom: 4%;
}
.vid {
  border: none;
  box-shadow: 5px 5px 5px rgba(0,0,0,0.6);
}

</style>

</head>
<body>



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
            <div class="center">
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

<div style="margin-bottom: -10%;">&nbsp;</div>
<br><br><br>
<br><br><br>
<div class="info animated fadeIn" style="background-image: url('../images/aboutus.png');  
        background-repeat: no-repeat;
        background-position: bottom;
        background-size:  auto 80%;/*650px 80%*/;">
  
  <div class="aboutcontent" style="margin-top: -40%;margin-left: 15.5%;">
  <div style="margin-top: 30%;" id="hello">
  <div class="aboutimg">
  <h1 style="text-align: center;margin-left: -25%;"><br>HOSPITALITY</h1>
  </div>
  <div id="start">
    
    </div>
 <br>
  <div class="row" style="margin-left: -20.5%;width:100%;height: 55%;" >
  <div class="col-md-4">
    </div>
    <div class="col-md-6">
    <div class="embed-responsive embed-responsive-16by9">
      </div>
    </div>
  </div>

  </div>
</div></div>


<br><br><br>
<div class="footer">
<div class="container"  style="float: left;">
    <div class="row" >
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
        <div id="text2">
          <a href="../hospitality" class="linkBT"><span class="spot"></span>HOSPITALITY</a>
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

<link rel="stylesheet" href="../navbar/navbar.css">
<link rel="stylesheet" href="../styles/footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="../navbar/navbar.js"></script>
<script type="text/javascript">

  $(document).ready(function () {
                $("#start").html(`
                  <br>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong>Coming Soon.</strong></p>
                        `);
               if($(window).height()<500){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"1%"});
                    $("#hello").css("margin-top","38.5%");
                }

                else if($(window).height()<600){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"5%"});
                    $("#hello").css("margin-top","30%");
                }
                else if($(window).height()<700){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"4%"});
                    $("#hello").css("margin-top","30%");
                }
                else if($(window).height()<1000){
                    $(".aboutcontent").css({"margin-left":"18%","margin-top":"4%"});
                    $("#hello").css("margin-top","30%");
                }
                else{
                    $(".aboutcontent").css({"margin-left":"15.5%","margin-top":"1%"});
                    $("#hello").css("margin-top","30%");
                }

            $(window).resize(function () {
                if($(window).height()<500){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"1%"});
                    $("#hello").css("margin-top","38.5%");
                }

                else if($(window).height()<600){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"5%"});
                    $("#hello").css("margin-top","30%");
                }
                else if($(window).height()<700){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"4%"});
                    $("#hello").css("margin-top","30%");
                }
                else if($(window).height()<1000){
                    $(".aboutcontent").css({"margin-left":"18%","margin-top":"4%"});
                    $("#hello").css("margin-top","30%");
                }
                else{
                    $(".aboutcontent").css({"margin-left":"15.5%","margin-top":"1%"});
                    $("#hello").css("margin-top","30%");
                }
            });
  })
</script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
</html>