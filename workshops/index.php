
<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://mobile.elan.org.in/workshops.php');
    exit(0);
}
?>
<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>Workshops | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

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
overflow-y: hidden;
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
</head>

<body id="page-top">
<?php include '../analyticstracking.php'; ?>
<?php include '../header.php'; ?>


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
                    <a href="Workshop_details/andro_engine.html" class="portfolio-link" >
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                
                            </div>
                        </div>
                        <img src="images/android-app-workshop.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Andro Engine</h4>
                        <p class="text-muted">Workshop<br>14th and 15th Jan 2017</p>
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
                        <p class="text-muted">Workshop<br>14th and 15th Jan 2017</p>
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
                        <p class="text-muted">Workshop<br>14th and 15th Jan 2017</p>
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
                        <p class="text-muted">Workshop<br>20th and 21st Jan 2017</p>
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
                        <p class="text-muted">Workshop<br>20th and 21st Jan 2017</p>
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
                    <a href="#" class="portfolio-link" >
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
                    <a href="#" class="portfolio-link" >
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
                    <a href="#" class="portfolio-link" >
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
<?php $sponsorPage = 0; include '../footer.php'; ?>


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
