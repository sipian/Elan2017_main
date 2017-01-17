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
<!-- 		<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
 -->         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../navbar/navbar2.css">
        <link rel="stylesheet" href="../styles/footer3.css">
        <!-- pre loader link sheets -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


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

        #hapom{
          display:inline;
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
<body style="background-image: url('archives images/bg_archive.png');  
        background-repeat: no-repeat;
        background-position: right top;
        background-attachment: fixed;
        background-size: cover;
        overflow-x: hidden;
        overflow-y: hidden;
        ">
<?php include '../analyticstracking.php'; ?>
<?php include '../header.php'; ?>

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
<?php $sponsorPage = 0; include '../footer.php'; ?>

 </body>

<script type="text/javascript" src="./extras/modernizr.2.5.3.min.js"></script>
<script type="text/javascript" src="./lib/hash.js"></script>
<script type="text/javascript" src="./extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="./js/flip.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
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