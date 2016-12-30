<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://mobile.elan.org.in/events.php'.substr(strrpos($_SERVER['REQUEST_URI'], "#")));
    exit(0);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>ELAN EVENTS</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elan Events 2017" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="../favicon.ico">
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
  <body style="overflow-y: hidden;">



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
        <div  style="position:fixed;right:-15px;top:-5px;" class="qwerDIV">
               <img src="../images/date.png" class="qwer" style="float: left;width: 150px;height:55px;">
        </div>

        </nav>
    </div>



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
                           <a href="../litfest" class="linkBT"><span class="spot"></span>LITFEST</a>
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
 




  <script src="js/contest/techy/techyText.js"></script>
  <script src="js/contest/techy/techy.js"></script>


  <script src="js/contest/infi/infiText.js?version=1.0"></script>
  <script src="js/contest/infi/infi.js?version=1.0"></script>



  <script src="js/contest/online/onlineText.js?version=1.0"></script>
  <script src="js/contest/online/online.js?version=1.0"></script>


  <script src="js/contest/litr/litrText.js?version=1.0"></script>
  <script src="js/contest/litr/litrPageTransitionRegister.js?version=1.0"></script>
  <script src="js/contest/litr/litrLitr.js?version=1.0?version=1.0"></script>
  <script src="js/contest/litr/litr.js?version=1.0"></script>

</html>

