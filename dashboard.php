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
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        DASHBOARD
    </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elan Events 2017" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="navbar/navbar2.css">
    <link rel="stylesheet" href="styles/footer2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- pre loader link sheets -->
        <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
        <link rel="stylesheet" href="css/loader.css">
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

        </style>
</head>
<body  style="
    background-image: url('images/dashboard.jpg');  
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    ">


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
                        <a class="scroll" hresf="sponsors">Sponsors</a>
        </div>
        
        <div class="center1">
        <a href="./index.php">
            <img src="images/logo6.png" style="float: left;margin-top: 23px; margin-left: -105px;width: 300px;height: 120px;" id="logo" usemap="#mapname">
        </a>
        </div>
        
        <div class="right">
                        <a class="scroll" href="team">Team</a>
                        <a class="scroll" href="hospitality">Hospitality</a>
                            <div class="dropdown">
                                <a class="scroll dropbtn" href="#">Hi <?php  echo $_SESSION["name"];?><span class="caret"></span></a>
                                <div class="dropdown-content">
                                    <a class="scroll" href="dashboard.php">Dashboard</a>
                                    <a class="scroll" href="signout.php">Sign Out</a>
                                </div>
                        </div>
        </div>
       <!--  <div  style="position:fixed;right:4px;top:-5px;" class="qwerDIV">
               <img src="images/date.png" class="qwer" style="float: left;width: 150px;height:55px;">
        </div> -->

        </nav>
    </div>

<br><br><br><br>
<br>

<h1 style="text-align: center;">DASHBOARD</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2"></div>
        
        <div class="col-lg-3">
            <h3>Name&nbsp;:&nbsp;<?php echo $_SESSION["name"]; ?></h3>
            <h3>Email&nbsp;:&nbsp;<?php echo $_SESSION["email"]; ?></h3>
            <h3 id="elId"></h3>
            <script type="text/javascript">
            document.getElementById('elId').innerHTML='ELAN ID&nbsp;:&nbsp;IITH17'+
            "0000".substring(0, "0000".length - '<?php echo $_SESSION["elanId"]; ?>'.length) + '<?php echo $_SESSION["elanId"]; ?>';</script> 
            
            <h3>College&nbsp;:&nbsp;<?php echo $_SESSION["college"]; ?></h3>
            <h3>Mobile&nbsp;:&nbsp;<?php echo $_SESSION["mobile"]; ?></h3>
        </div> 
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
            <h2 style="text-align: center;">REGISTERED&nbsp;EVENTS</h2>

            <?php 
                if($_SESSION["verified"] == 2)
                    echo('<h4>Email is not verified. Check your mail for verification email.</h4>');
                else{
                        $answer = "<ul class='list-group'>";
                        if(isset($_SESSION["events"])){
                                $array = explode(",",$_SESSION["events"]);
                             foreach ($array as $value) {
                                $answer .= "<li class='list-group-item'><a href='events/#$value'>$value</a></li>";
                                } 
                                $answer .= "</ul>";  
                        }
                        else{
                        $sql = "SELECT * FROM users WHERE ID='$_SESSION[id]'";
                        $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) == 1){
                        while($row = mysqli_fetch_assoc($result)){                 
                          $_SESSION["events"] = $row['registered_events'];
                          $array = explode(",",$row['registered_events']);
                          
                          $answer = "<ul>";
                         foreach ($array as $value) {
                                $answer .= "<li class='list-group-item'><a href='events/#$value'>$value</a></li>";
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

<div class="footer"></div>


</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
     <script src="scripts/footer.js"></script>
    <script src="js/index.js"></script>
  <script src="navbar/navbar2.js?version=1.0"></script>

</html>