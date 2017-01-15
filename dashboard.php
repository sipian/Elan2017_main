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
if(isset($_GET["sent"]) && $_GET["sent"]==true)
  echo('<script>alert("Verification Mail Sent Again.");</script>')
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
    overflow-y: hidden;
    overflow-x: hidden;
    ">
<?php include 'analyticstracking.php'; ?>
<?php include 'headerMain.php'; ?>

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
                        <a href="https://id.nvision.org.in/resendemail?url=http://elan.org.in/dashboard.php">
                        Resend Verification Link</a>
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
<?php $main=0; include 'footerMain.php'; ?>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</html>