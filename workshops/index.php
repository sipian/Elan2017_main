
<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://mobile.elan.org.in/workshops.php');
    exit(0);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WORKSHOPS</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">


<!-- workshop Link sheets Begins -->
 <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" type="text/css" href="css/animations.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/frankcss.css">
    <link rel="stylesheet" type="text/css" href="css/junk.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    <link rel="stylesheet" href="../navbar/navbar2.css">
    <link rel="stylesheet" href="../styles/footer3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Amatic+SC'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/animatecss/2.1.0/animate.min.css">
    <link href="css/text/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="scroll/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- pre loader link sheets -->
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="../css/loader.css">
<!-- pre loader link sheets ends  -->


<!-- workshop Link sheets Ends -->

<style>
div.workshop_back{

  background: url(images/workshopBack.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
    @font-face {
    font-family: chelsea;
    src: url('./fonts/chelsea2/ChelseaAlternates.ttf');
    }
    h2,p {
    font: 200 40px/1em chelsea;
    text-align: center;
    color: #F06D06;
    }
    h3 {
    color: #F06D06;
    font: 200 30px/1em chelsea;
    /*Amatic SC*/
    ;
    }
    .contest {
    font-family: chelsea, cursive;
    font-size: 18px;
    letter-spacing: 6px;
    font-weight: bold;
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
    body{
background-image:url(images/workshopBack.jpg);
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
</head>

<body id="page-top">


    <!-- Preloader with Bootstrap Progress Bar -->


<div class='loader'>
   <div class='loader-container'>  
   <img src="../images/loading.png" id="loadImg" style='width:100%;box-shadow: none; ' border="0" alt="Null">
    <div class='progress progress-striped active'>
      <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
    </div>
  </div>
</div>

    <div id="nav-outter"  style="z-index: 3;">
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


    <!-- Nav bar Ends -->



    <!-- Portfolio Grid Section -->


    <section id="portfolio" class="bg-light-gray">
        <div class="workshop_back">
        <div class="container">
        
            <div class="row">
                <div class="col-lg-12 text-xs-center">
                <br><br><br><br><br><br><br><br>
                    <h2 class="section-heading">Workshops</h2>
                   
                </div>

            </div>


  <div class="row">
                <div class="col-lg-12 text-xs-center">
                
                    <h2 class="section-heading">Upcoming Workshops</h2>
                
                </div>

            </div>

            <!-- row starts here -->

            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="Workshop_details/andro_engine.html" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="images/android-app-workshop.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Andro Engine</h4>
                        <p class="text-muted">Workshop<br>14th and 15th jan2017</p>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="Workshop_details/quadcopter.html" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="images/quadcopterSmall.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Quadcopter</h4>
                        <p class="text-muted">Workshop<br>14th and 15th jan2017</p>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="Workshop_details/androApp.html" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="images/android-app-development.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Android App Development</h4>
                        <p class="text-muted">Workshop<br>14th and 15th jan2017</p>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="Workshop_details/autoMob.html" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="images/car.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Automobile Engine Mechanics</h4>
                        <p class="text-muted">Workshop<br>20th and 21st jan2017</p>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="Workshop_details/robot.html" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="images/hqdefault.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Autonomous Robotics</h4>
                        <p class="text-muted">Workshop<br>20th and 21st jan2017</p>
                    </div>
                </div>


          
            </div>
<!-- End Row -->
            
  <div class="row">
                <div class="col-lg-12 text-xs-center">
                
                    <h2 class="section-heading">Previous Workshops</h2>
                
                </div>

            </div>
<!-- previous workshops row -->   
<div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://elan.org.in/aiworkshop" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="images/cloudcomputing.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>VIRTUAL REALITY , ARTIFICIAL INTELIGENCE , CLOUD COMPUTING </h4>
                        <p class="text-muted">Workshop<br>22ND and 23RD OCTOBER 2016</p>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://elan.org.in/ethicalhacking" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="images/hacking.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>ETHICAL  HACKING</h4>
                        <p class="text-muted">Workshop<br>17TH and 18TH SEPTEMBER 2016</p>
                    </div>
                </div>


                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://elan.org.in/hapticsroboarm" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="images/roboticArm2.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>HAPTICS  ROBOARM</h4>
                        <p class="text-muted">Workshop<br>27TH and 28TH AUGUST , 2016</p>
                    </div>
                </div>
            
            </div>          
            
  <!-- previous workshops row ends here -->          


        </div>
        </div>
    </section>
<!-- Footer Begins here -->


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

<!--Footer Ends Here -->




    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Tether -->
    <script src="vendor/tether/tether.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    

    <!-- Theme JavaScript -->




  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/index.js"></script>


</body>

</html>
