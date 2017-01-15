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
<body style="margin:0;padding:0;height:100%;overflow-y: hidden;overflow-x: hidden;">
<?php include '../analyticstracking.php'; ?>
<?php include '../header.php'; ?>

<div class="responsive" id="jump" style="font-size: 50px;">
<div id="Stage" class="EDGE-58749904">


<video id="bgvid" autoplay loop muted >
	<source src="main2.mp4" type="video/mp4">
</video>

</div>
</div>

<?php $sponsorPage = 0; include '../footer.php'; ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script type="text/javascript" charset="utf-8" src="http://animate.adobe.com/runtime/5.0.0/edge.5.0.0.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="Elan2017_Team_edgePreload.js"></script>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="../js/index.js"></script>

</html>