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
        <title>About | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

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


<!-- pre loader link sheets -->
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

    <link rel="stylesheet" href="../navbar/navbar2.css">
    <link rel="stylesheet" href="../styles/footer3.css">
            <link rel="stylesheet" href="../css/loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  overflow-y: hidden;
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

body::-webkit-scrollbar {
    width: 0.6em;
}
body::-moz-scrollbar  {
    width: 0.6em;
}

body::-webkit-scrollbar-track{
    -webkit-box-shadow: inset 0 0 6px white;
}
body::-moz-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px white;
}
body::-webkit-scrollbar-thumb{
  background-color: brown;
  outline: 1px solid black;
}
body::-moz-scrollbar-thumb{
  background-color: green;
  outline: 1px solid black;
}

    <?php
                        session_start();
                             if(isset($_SESSION["id"]))
                             echo ".right{
                                        margin-right: 9.5%;
                                        margin-top: 1.15%;
                                        }
                                        @media screen and (max-width: 1000px) {

                                        }";
                        ?>
 
</style>


</head>
<body>


<?php include '../analyticstracking.php'; ?>
<?php include '../header.php'; ?>

<div style="margin-bottom: -10%;">&nbsp;</div>
<div class="info animated fadeIn" style="background-image: url('../images/aboutus.png');  
        background-repeat: no-repeat;
        background-position: bottom;
        background-size:  auto 80%;/*650px 80%*/;">
  
  <div class="aboutcontent" style="margin-top: -40%;margin-left: 15.5%;">
  <div style="margin-top: 30%;" id="hello">
  <div class="aboutimg">
  <br><br>
  <h1 style="text-align: center;margin-left: -16%;">ABOUT&nbsp;ELAN</h1>
  </div>

<!-- inforamation of about us -->


  <div class="about_rock" id="start" style="margin-left: 4%;">
    
    </div>

<!-- inforamation of about us -->
 <br>
  <div class="row" style="margin-left: -20.5%;width:100%;height: 55%;" >
  <div class="col-md-4">
    </div>
    <div class="col-md-6">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/biXkTjJI9zA" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  </div>
</div></div>

<br><br><br>
<?php $sponsorPage = 0; include '../footer.php'; ?>
</body>

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../js/index.js"></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

  $(document).ready(function () {
    $("#start").html(`
    <p> <strong>Energy , Style And Enthusiasm</strong></p>
    <p> <strong>ELAN</strong> , a mesmerizing unification of Energy, Style and Enthusiasm <br> is all set to hold Hyderabad spellbound once again, with it's <br> <strong>eighth edition</strong> being launched at the <strong>start of 2017.</strong></p>
    <p> This Annual Inter­College <strong>“Techno­Cultural”</strong> festival of IIT Hyderabad 
    <br>promises a plethora of events to stupefy and ensorcell
    <br> both epicurean and boisterous tastes alike.</p>

    <p> Since its dawn in 2009 by deradfully talented students <br><strong> ELAN</strong> has left a special memory in the hearts of each and every 
    <br>participant, visitor and organizer.</p>
    
    <p> Keeping up with the successful <strong>3­ day</strong> model, 
    <br>ELAN 2017 is well stocked with events from
    <br> the Cultural <strong>(Culti)</strong>, Technical <strong>(Techy)</strong>, Informal <strong>(Infi)</strong> <br>and Literary <strong>(Litr)</strong> domains. 
    <br>Each event is finely crafted to reflect the avid ardor in
    <br> appreciating and experiencing genuine inspiration in 
    <br><strong>art, music and technology</strong> that is the <strong>culture of Elan.</strong></p>
    <p>Its an odyssey worth enduring !!!</p>
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
</html>