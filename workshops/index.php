<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://m.elan.org.in');
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
    <link rel="stylesheet" href="../navbar/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Amatic+SC'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/animatecss/2.1.0/animate.min.css">
    <link href="css/text/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="scroll/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- pre loader link sheets -->
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">
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



</head>

<body id="page-top">


    <!-- Preloader with Bootstrap Progress Bar -->
<div class='loader'>
<div class="warrior">
    <img src="images/warrior.gif" style='width:100%;' border="0" alt="Null"></div>
     
  <div class='loader-container'>
    


    <div class='progress progress-striped active'>
      <div class='progress-bar progress-bar-color' id='bar' role='progressbar' style='width: 0%;'></div>
    </div>
    <h3><b>Please wait a moment while we are preparing the content !</b></h3>
  </div>
</div>


<!-- Landing Page -->

<!-- Nav bar Begins -->

<div id="nav-outter"  style="z-index: 1;">
       <nav id="topNavBar">
    <div  style="position:fixed;left:4px;top:-5px;">
           <img src="../images/cyient.png" class="qwer" style="float: left;width: 150px;height:55px;" usemap="#cyient">
           <map name="cyient">
          <area shape="rect" coords="0,0,150,55" href="http://www.cyient.com/" alt="CYIENT" target="_blank" style="outline: none;">
           </map>
        </div>

        <div class="left1">

        
            <a class="scroll" href="../about" id="about_nav1">About</a>

            <a class="scroll" href="../events" id="events_nav1">Events</a>
            <a class="scroll" href="../sponsors" id="sponsors_nav1">Sponsor</a>
            <a class="scroll" href="../team" id="team_nav1">Team</a>

        </div>

      

        <div class="center">
        <img src="../images/logo6.png" style="float: left;margin-top: 50px; margin-left: -105px;" id="logo" usemap="#mapname">

        <map name="mapname">
          <area shape="rect" coords="30,0,370,160" href="../" alt="alttext" style="outline: none;">
        </map>
        </div>

<div class="center2">
    <a class="scroll" id="date_nav">20th - 22nd january</a>
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
                        <h4>Android Engine</h4>
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

   

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Project Heading</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="img/portfolio/startup-framework-preview.png" alt="">
                                <p><a href="http://designmodo.com/startup/?u=787">Startup Framework</a> is a website builder for professionals. Startup Framework contains components and complex blocks (PSD+HTML Bootstrap themes and templates) which can easily be integrated into almost any design. All of these components are made in the same style, and can easily be integrated into projects, allowing you to create hundreds of solutions for your future projects.</p>
                                <p>You can preview Startup Framework <a href="http://designmodo.com/startup/?u=787">here</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="img/portfolio/treehouse-preview.png" alt="">
                                <p>Treehouse is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. This is bright and spacious design perfect for people or startup companies looking to showcase their apps or other projects.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/treehouse-free-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="img/portfolio/golden-preview.png" alt="">
                                <p>Start Bootstrap's Agency theme is based on Golden, a free PSD website template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Golden is a modern and clean one page web template that was made exclusively for Best PSD Freebies. This template has a great portfolio, timeline, and meet your team sections that can be easily modified to fit your needs.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/golden-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="img/portfolio/escape-preview.png" alt="">
                                <p>Escape is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Escape is a one page web template that was designed with agencies in mind. This template is ideal for those looking for a simple one page solution to describe your business and offer your services.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/escape-one-page-psd-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid img-centered" src="img/portfolio/dreams-preview.png" alt="">
                                <p>Dreams is a free PSD web template built by <a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a>. Dreams is a modern one page web template designed for almost any purpose. It’s a beautiful template that’s designed with the Bootstrap framework in mind.</p>
                                <p>You can download the PSD template in this portfolio sample item at <a href="http://freebiesxpress.com/gallery/dreams-free-one-page-web-template/">FreebiesXpress.com</a>.</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<! Footer Begins here -->


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
          <a href="" class="linkBT"><span class="spot"></span>HOSPITALITY</a>
        </div>
        </svg>
        </div>
    </div>
    
    <div class="bottomLinkDiv">
        <div class="svg-wrapper1" >
        <svg height="40" width="150">
        <rect id="shape1" height="40" width="150" />
        <div id="text3">
          <a href="" class="linkBT"><span class="spot"></span>&nbsp;&nbsp;WORKSHOP&EML</a>
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
     <div class="bottomLinkDiv">
        <div class="svg-wrapper1" >
        <svg height="40" width="150">
        <rect id="shape1" height="40" width="150" />
        <div id="text4">
          <a href="../litfest" target="_blank" class="linkBT"><span class="spot"></span>Litfest</a>
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
        <a href="https://www.instagram.com/elan.iith/" target="_blank" style="text-decoration: none;">
            <div class='fa fa-instagram'></div>
        </a>
    </li>
  </ul>
</main>
</div>

<!Footer Ends Here -->




    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Tether -->
    <script src="vendor/tether/tether.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>




  <script src="../navbar/navbar.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>


</body>

</html>
