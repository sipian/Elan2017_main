<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://mobile.elan.org.in/events.php'.substr(strrpos($_SERVER['REQUEST_URI'], "#")));
    exit(0);
}
?>

<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>Events | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

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

    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/animations.css" />

    <link rel="stylesheet" type="text/css" href="css/frankcss.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
        <link rel="stylesheet" type="text/css" href="css/junk.css">

    <link rel="stylesheet" href="../navbar/navbar2.css">
    <link rel="stylesheet" href="../styles/footer3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://cdn.jsdelivr.net/animatecss/2.1.0/animate.min.css">

    <!-- pre loader link sheets -->
        <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
        <link rel="stylesheet" href="../css/loader.css">
    <!-- pre loader link sheets ends  -->

  </head>
  <style>
    @font-face {
    font-family: chelsea;
    src: url('fonts/chelsea2/ChelseaAlternates.ttf');
    }
    @font-face {
    font-family: monte;
    src: url('fonts/montserrat/Montserrat-Regular.ttf');
    }
    h2,p {
    font: 200 40px/1em chelsea;
    text-align: center;
    color: #F06D06;
    }
    h3 {
    color: #F06D06;
    font: 200 30px/1em chelsea;
    }
    .contest {
    font-family: monte, cursive;
    font-size: 18px;
    letter-spacing: -1px;
    word-spacing: 3px;
    font-weight: 10;
    color: white;
    }
    .table-responsive {
    overflow-y: hidden;
    }
    .hide-text {
    visibility: hidden;
    }
    .contestName {
    font: 200 40px/1em chelsea;
    /*Amatic SC*/
    ;
    font-size: 26px;
    color: #a6a6a6;
    }
    .short_description {
    font-size: 26px;
    color: black;
    }
    .buttonDivTop {
    color: #e6ac00;
    }
    .borderImg {
    width: 250px;
    height: 20px;
    box-shadow: none;
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

div::-webkit-scrollbar {
    width: 0.6em;
}
div::-moz-scrollbar  {
    width: 0.6em;
}

div::-webkit-scrollbar-track{
    -webkit-box-shadow: inset 0 0 6px white;
}
div::-moz-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px white;
}
div::-webkit-scrollbar-thumb{
  background-color: brown;
  outline: 1px solid black;
}
div::-moz-scrollbar-thumb{
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


  <body style="overflow-y: hidden;">

<?php include '../analyticstracking.php'; ?>
<?php include '../header.php'; ?>



    <div id="pt-main" class="pt-perspective container-fluid">
      <div class="pt-page pt-page-1" style="
	background-image: url('images/web8_jpg.jpg');  
	background-repeat: no-repeat;
	background-position: right top;
	background-attachment: fixed;
	background-size: cover;
	margin-bottom: 10px;
	">
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="container competitionArea biggiesBigDiv" style="
	margin-left:auto;
	margin-bottom:50px;
	">
          <p>
            <br>
          </p>
<div class="table-responsive animated bounceInUp biggiesDiv" style="
            padding-left:-100px;
            padding-bottom: 350px;
            background-image: url('images/event_biggies.png');  
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: contain; 
            max-height: 1100px;
            ">
  <h2 style="margin-left: 15px;margin-top: 35px; margin-bottom: 10px;">
    <br>
    <br>
    <br>
    <br>
              BIGGIES
            </h2>
            <table class="table">
              <tbody>
                <tr>
                  <div class="row">
                    <td class="col-lg-4" style="padding-left: 0%;">
                      <div class="animated bounceInUp col-sm-8 text-center biggiesDiv">
                        <div class="flip-container hvr-float-shadow" ontouchstart="this.classList.toggle('hover');" style="margin-left: 40px;">
                          <div class="flipper">
                            <div class="front">
                              <img class="img-responsive pop" src="images/biggies/elan-e-jung.jpg" style="width: 250px;height: 300px;">
                            </div>
                            <div class="back">
                              <div id="text">
                                <br>
                                <h3 class="short_description">
                                  Watch As The Stage Is Converted Into A Battlefield As The Bands Sweat It Out In A Winner-get-all-no-holds-barred Contest
                                </h3>
                                <button type="button" class="btn btn-info elan-e-jung clickButton">
                                More&nbsp;Details
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="col-lg-4" style="padding-left: 0%;">
                      <div class="animated bounceInUp col-sm-8 text-center biggiesDiv">
                        <div class="flip-container hvr-float-shadow" ontouchstart="this.classList.toggle('hover');" style="margin-left: 40px;">
                          <div class="flipper">
                            <div class="front">
                              <img class="img-responsive" src="images/biggies/manthan.jpg" style="width: 250px;height: 300px;">
                            </div>
                            <div class="back">
                              <div id="text">
                                <br>
                                <br>
                                <h3 class="short_description">
                                  Lose yourself in the
                                  lilting guitar 
                                  music dished out by the score.
                                </h3>
                                <br>
                                <br>
                                <button type="button" class="btn btn-info manthan clickButton">
                                More&nbsp;Details
                                </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="col-lg-4" style="padding-left: 0%;">
                    <div class="animated bounceInUp col-sm-8 text-center biggiesDiv">
                     <div class="flip-container hvr-float-shadow" ontouchstart="this.classList.toggle('hover');" style="margin-left: 40px;">
                        <div class="flipper">
                           <div class="front">
                              <img class="img-responsive" alt="CAMPUS PRINCESS" src="images/biggies/campus_princess.jpg" style="width: 250px;height: 300px;">
                           </div>
                           <div class="back">
                              <div id="text">
                                 <br>
                                 <h3 class="short_description">
                                  An Event For All Those Pretty Ladies Out There!!
                                 </h3>
                                 <br><br>
                                 <button type="button" class="btn btn-info campus_princess">
                                 More&nbsp;Details
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                    </td>
                  </div>
                </tr>
                <tr>
                  <div class="row">
                    <td class="col-lg-4">
                      <div class="animated bounceInUp col-sm-9 text-center biggiesDiv">
                        <span style="margin-left: 30px;">
                        <img src="images/borderImg1.png" class="borderImg"
                          style="margin-bottom: -5px; ">
                        </span>
                        <br>
                        <span class="contestName" style="margin-left: -5px;
                          margin-right: -90px;">Elan-E-jung 
                        </span>
                        <br>
                        <span style="margin-left: 30px;">
                        <img src="images/borderImg2.png" class="borderImg"
                          style="margin-bottom: -3px; ">
                        </span>
                      </div>
                    </td>
                    <td class="col-lg-4 manthan">
                      <div class="animated bounceInUp col-sm-9 text-center biggiesDiv">
                        <span style="margin-left: 30px;">
                        <img src="images/borderImg1.png" class="borderImg"
                          style="margin-bottom: -5px; ">
                        </span>
                        <br>
                        <span class="contestName" style="margin-left: 25px;margin-right: -60px;">Manthan 
                        </span>
                        <br>
                        <span style="margin-left: 30px;">
                        <img src="images/borderImg2.png" class="borderImg"
                          style="margin-bottom: -3px; ">
                        </span>
                      </div>
                    </td>
                    <td class="col-lg-4 fmi">
                    <div class="animated bounceInUp col-sm-9 text-center biggiesDiv">
                        <span style="margin-left: 30px;">
                        <img src="images/borderImg1.png" class="borderImg"
                          style="margin-bottom: -5px; ">
                        </span>
                        <br>
                        <span class="contestName" style="margin-left: 25px;margin-right: -60px;">Campus&nbsp;Princess 
                        </span>
                        <br>
                        <span style="margin-left: 30px;">
                        <img src="images/borderImg2.png" class="borderImg"
                          style="margin-bottom: -3px; ">
                        </span>
                      </div>

                    </td>
                  </div>
                </tr>
                <tr>
                  <div class="row">
                    <td class="col-lg-4"></td>
                    <td class="col-lg-4 angasutra" style="padding-left: 1%;" id="attakkalariposter">
                    </td>
                  </div>
                  </td>
                  <td class="col-lg-4"></td>
          </div>
        </tr>
        <tr>
                <div class="row">
                        <td class="col-lg-4"></td>
                        </td>
                        <td class="col-lg-4"></td>
                </div>
        </tr>
        </tbody>
</table>
</div>
      </div>
    </div>
    <div class="pt-page pt-page-2">
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="container competitionArea cultiBigDiv" style="margin-left:auto;margin-bottom:50px;"></div>
    </div>
    <div class="pt-page pt-page-3">
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="container competitionArea infiBigDiv" style="margin-left:auto;"></div>
    </div>
    <div class="pt-page pt-page-4">
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="container competitionArea onlineBigDiv" style="margin-left:auto;"></div>
    </div>
    <div class="pt-page pt-page-5">
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="container competitionArea litrBigDiv" style="margin-left:auto;margin-bottom:50px;">
      </div>
    </div>
    <div class="pt-page pt-page-6">
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="container competitionArea techyBigDiv" style="margin-left:auto;margin-bottom:50px;">
      </div>
    </div>
    </div>

<?php $sponsorPage = 0; include '../footer.php'; ?>

<div style="display: none;">
    <img src="images/event_biggies.png">
    <img src="images/event_culti7.png">
    <img src="images/event_details.png">
    <img src="images/event_infi.png">
    <img src="images/event_litr.png">
</div>
  </body>
  <script type="text/javascript">

      var track=<?php if(isset($_SESSION['id']))echo "1"; else echo "0"; ?>;
      var _id="<?php echo $_SESSION['id']; ?>";
      var email="<?php echo $_SESSION['email']; ?>";
      var name="<?php echo $_SESSION['name']; ?>";
      var elanId="<?php echo $_SESSION['elanId']; ?>";
      var college="<?php echo $_SESSION['college']; ?>";
      var events="<?php echo $_SESSION['events']; ?>".split(",");
      var verified=
      <?php 
      if(isset($_SESSION['id']))
          echo $_SESSION['verified']; 
        else echo 3;
      ?>;
      
  </script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/index.js"></script>

  <script src="js/modernizr.custom.js"></script>

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script type="text/javascript">
    $(".pt-page-1 , .pt-page-2 , .pt-page-3 , .pt-page-4 , .pt-page-5 , .pt-page-6").prepend(`
      <br><br><br><br>
	<ul id="nav" style="margin-top:100px;">
	  <li class="biggies" style="margin-left:0px;">
	  <a href="#">
	    <div  style=" 
	  background-image: url('images/button.png');  
	  background-repeat: no-repeat;
	  background-position:right;
	  background-attachment: scroll;
	  background-size:150px 200px;">
	  <p style="padding:30px;font-size:27px;" class="buttonDivTop">BIGGIES</p>
	    </div>
	     </div>
	   </a>
	  </li>
	
	
	  <li class="culti" style="margin-left: 10px;">
	  <a href="#">
	    <div  style=" 
	  background-image: url('images/button.png');  
	  background-repeat: no-repeat;
	  background-position:right;
	  background-attachment: scroll;
	  background-size:150px 200px;">
	  <p style="padding:30px;font-size:27px;" class="buttonDivTop">CULTI</p>
	    </div>
	     </div>
	   </a>
	  </li>
	  
	  <li class="techy" style="margin-left: 10px;">
	  <a href="#">
	    <div  style=" 
	  background-image: url('images/button.png');  
	  background-repeat: no-repeat;
	  background-position:right;
	  background-attachment: scroll;
	  background-size:150px 200px;">
	  <p style="padding:30px;font-size:27px;" class="buttonDivTop">TECHY</p>
	    </div>
	  </div>
	   </a>
	  </li>   
	  
	  <li class="infi" style="margin-left: 10px;">
	  <a href="#">
	    <div  style=" 
	  background-image: url('images/button.png');  
	  background-repeat: no-repeat;
	  background-position:right;
	  background-attachment: scroll;
	  background-size:150px 200px;">
	  <p style="padding:30px;font-size:27px;" class="buttonDivTop">INFI</p>
	    </div>
	     </div>
	   </a>
	  </li>
	  
	  <li class="online" style="margin-left: 10px;">
	  <a href="#">
	    <div  style=" 
	  background-image: url('images/button.png');  
	  background-repeat: no-repeat;
	  background-position:right;
	  background-attachment: scroll;
	  background-size:150px 200px;">
	  <p style="padding:30px;font-size:27px;" class="buttonDivTop">ONLINE</p>
	    </div>
	     </div>
	   </a>
	  </li>
	
	  
	  <li class="litr" style="margin-left: 10px;">
	  <a href="#">
	    <div  style=" 
	  background-image: url('images/button.png');  
	  background-repeat: no-repeat;
	  background-position:right;
	  background-attachment: scroll;
	  background-size:150px 200px;">
	  <p style="padding:30px;font-size:27px;" class="buttonDivTop">LITR</p>
	    </div>
	     </div>
	   </a>
	  </li>   
	</ul>
	  `);
  </script>



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js?version=1.0"></script>
  <script src="js/animate.js?version=1.0"></script>
  <script src="js/changeBiggiesContent.js?version=1.0"></script>
  <script src="js/changeCultiContent.js?version=1.0"></script>
  <script src="js/changeTechyContent.js"></script>
  <script src="js/changeInfiContent.js?version=1.0"></script>
  <script src="js/changeLitrContent.js?version=1.0"></script>
  <script src="js/changeOnlineContent.js?version=1.0"></script>
  <script src="js/pagetransitions.js?version=1.0"></script>
  <script src="js/contest/biggies/biggiesText.js?version=1.0"></script>
  <script src="js/contest/biggies/biggies.js?version=1.0"></script>



   <script src="js/contest/culti/culti.js?version=1.0?version=1.0"></script>
   <script src="js/contest/culti/cultiPageTransitionRegister.js?version=1.0"></script>
  <script src="js/contest/culti/cultiCulti.js?version=1.0?version=1.0"></script>
  <script src="js/contest/culti/cultiText.js?version=1.0"></script>
 




  <script src="js/contest/infi/infi.js?version=1.0"></script>
  <script src="js/contest/infi/infiPageTransitionRegister.js?version=1.0"></script>
  <script src="js/contest/infi/infiInfi.js?version=1.0?version=1.0"></script>
  <script src="js/contest/infi/infiText.js?version=1.0"></script>




  <script src="js/contest/online/onlineText.js?version=1.0"></script>
  <script src="js/contest/online/online.js?version=1.0"></script>


  <script src="js/contest/litr/litrText.js?version=1.0"></script>
  <script src="js/contest/litr/litrPageTransitionRegister.js?version=1.0"></script>
  <script src="js/contest/litr/litrLitr.js?version=1.0?version=1.0"></script>
  <script src="js/contest/litr/litr.js?version=1.0"></script>
</html>

