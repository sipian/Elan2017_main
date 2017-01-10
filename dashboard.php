<?php
include 'Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://mobile.elan.org.in/dashboard.php');
    exit(0);
}
?>
<?php
session_start();
require 'connect.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!isset($_SESSION["id"])){
        session_unset(); 
        session_destroy(); 
        header("Location: index.php?t=f");
    exit();
}
?>
<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>Dashboard | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

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

    <link rel="stylesheet" href="navbar/navbar2.css">
    <link rel="stylesheet" href="styles/footer3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- pre loader link sheets -->
        <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
        <link rel="stylesheet" href="css/loader.css">
          <style>
    @font-face {
    font-family: chelsea;
    src: url('fonts/chelsea2/ChelseaAlternates.ttf');
    }
    h2,p,h1 {
    font: 200 40px/1em chelsea;
    text-align: center;
    color: #F06D06;
    }
    h3 {
    font: 200 30px/1em chelsea;
    }
  </style>

        <style type="text/css">
                <style>
.dropbtn {
    color: white;
    padding: 1px;
/*    font-size: 16px;
*/    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 0px;
    text-decoration: none;
    display: block;
}


.dropdown:hover .dropdown-content {
    display: block;
}

</style>
<?php
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

        </style>
</head>
<body  style="
    background-image: url('images/dashboard.jpg');  
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    ">
<?php include 'analyticstracking.php'; ?>


<div class='loader'>
   <div class='loader-container'>  
   <img src="images/loading.png" style='width:100%;' border="0" alt="Null">
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
        <div class="left">
                        <a class="scroll" href="about">About</a>
                        <a class="scroll" href="events">Events</a>
                        
        </div>
        
        <div class="center1">
        <a href="index.php">
            <img src="images/logo6.png" style="float: left;margin-top: 23px; margin-left: -105px;width: 300px;height: 120px;" id="logo">
        </a>
        </div>
        
        <div class="right">
                        <a class="scroll" href="team">Team</a>
                        <a class="scroll" href="sponsors">Sponsors</a>
                        <?php
                        session_start();
                             if(isset($_SESSION["id"]))
                             echo "
                                <div class=\"dropdown\">
                                    <a class=\"dropbtn\" href=\"#\"><span class=\"glyphicon glyphicon-user\"></span></a>
                                    <div class=\"dropdown-content\">
                                        <a class=\"scroll\" href=\"dashboard.php\">Dashboard</a>
                                        <a class=\"scroll\" href=\"signout.php\">Sign Out</a>
                                    </div>
                                </div>";
                        ?>
        </div>


        </nav>
    </div>

<br><br><br><br>
<br>

<h1 style="text-align: center;">DASHBOARD</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-1"></div>
        
        <div class="col-lg-4">
            <h3>Name&nbsp;:&nbsp;<?php echo $_SESSION["name"]; ?></h3>
            <h3>Email&nbsp;:&nbsp;<?php echo $_SESSION["email"]; ?></h3>
            <h3 id="elId"></h3>
            <script type="text/javascript">
            document.getElementById('elId').innerHTML='Elan&nbsp;ID&nbsp;:&nbsp;IITH17'+
            "0000".substring(0, "0000".length - '<?php echo $_SESSION["elanId"]; ?>'.length) + '<?php echo $_SESSION["elanId"]; ?>';</script> 
            
            <h3>College&nbsp;:&nbsp;<?php echo $_SESSION["college"]; ?></h3>
            <h3>Mobile&nbsp;:&nbsp;<?php echo $_SESSION["mobile"]; ?></h3>
        </div> 
        <div class="col-lg-1"></div>
        <div class="col-lg-4">
            <h2 style="text-align: center;">REGISTERED&nbsp;EVENTS</h2>

            <?php 
                if($_SESSION["verified"] == 2)
                    echo('<h4>Email is not verified. Check your mail for verification email.
                        <br>
                       P.S. If you did\'nt receive the mail , please check your spam or promotion or updates or social folder!
                       </h4>');
                else{
                      $name = json_decode(file_get_contents('name.json') , true);
                        $answer = "<ul class='list-group'>";
                        if(isset($_SESSION["events"])){
                                $array = explode(",",$_SESSION["events"]);
                                if(sizeof($array) == 1)
                                  $answer .= "<li class='list-group-item'><strong>No Registered Events</strong></li>";
                                else  foreach ($array as $value)
                                        $answer .= "<li class='list-group-item'><a href='events/#$value'>$name[$value]</a></li>";
                                $answer .= "</ul>";  
                        }
                        else{
                        $sql = "SELECT * FROM users WHERE ID='$_SESSION[id]'";
                        $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) == 1){
                        while($row = mysqli_fetch_assoc($result)){                 
                          $_SESSION["events"] = $row['registered_events'];
                          $array = explode(",",$row['registered_events']);
                          
                          $answer = "<ul class='list-group'>";
                          if(sizeof($array) == 1)
                                  $answer .= "<li class='list-group-item'><strong>No Registered Events</strong></li>";
                          else
                         foreach ($array as $value) {
                                $answer .= "<li class='list-group-item'><a href='events/#$value'>$name[$value]</a></li>";
                        }
                          $answer .= "</ul>";
                  }             
             }
          } 
                        echo $answer;    
                }
             ?>
        </div>
    </div>
</div>
<br><br><br><br>
<br><br><br><br>

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
                           <a href="litfest" class="linkBT"><span class="spot"></span>LITFEST</a>
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

</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</html>