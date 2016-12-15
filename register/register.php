<?php
error_reporting(E_ALL ^ E_WARNING);
session_start();
if(isset($_POST['submit']))
{

if(strlen($_POST['name']) < 2)
{
echo "Enter a valid name";
exit();
}


if(strlen($_POST['username']) < 2)
{
echo "Enter a valid username";
exit();
}



if(strlen($_POST['college']) < 2)
{
echo "Enter a valid college";
exit();
}


if(strlen($_POST['mobile']) < 10)
{
echo "Enter a valid mobile number.";
exit();
}


if(strlen($_POST['email']) < 5 || strpos($_POST['email'], '@') < 1)
{
echo "Enter a valid email address.";
exit();
}


if(strlen($_POST['city']) < 2)
{
echo "Enter your city.";
exit();
}


require 'connect.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE username='$_POST[username]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
header("Location: register.php?err=Username already registered.");
exit();

    
} 

$sql = "SELECT * FROM users WHERE email='$_POST[email]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
header("Location: register.php?err=Email address is already in use.");
exit();

    
} 


$sql = "SELECT * FROM users_unverified WHERE username='$_POST[username]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
header("Location: register.php?err=Username already registered.");
exit();

    
}

$sql = "SELECT * FROM users_unverified WHERE email='$_POST[email]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
header("Location: register.php?err=Email address is already in use.");
exit();

    
} 


$code = md5(rand());

$to = $_POST['email'];
$subject = "ELAN 2017 - Email Verification";

$message = "
<html>
<head>
<title>ELAN 2017 - Email Verification</title>
</head>
<body>
<p>Hi <strong>".$_POST['name']."</strong>!</p><br><p>Please <a href='http://localhost/Elan2017_main/register/confirm.php?username=".$_POST['username']."&code=".$code."'>Click Here</a> to verify your Elan account.</p>
<br><strong>Cheers!</strong><br>Elan IITH
</body>
</html>
";

 

require_once './lib/swift_required.php';
require_once 'send_mail.php';

// Create a message
$message = Swift_Message::newInstance($subject)
  ->setFrom(array( 'noreply@elan.org.in' => 'Elan 2017 IITH'))
  ->setTo(array($_POST['email']  => $_POST['name']))
  ->addPart($message, 'text/html')
  ->setBody(" ");

// Send the email
 $mailer->send($message);

$sql = "INSERT INTO users_unverified (code, name, username, password, college, mobile, email, city)
VALUES ('".$code."', '$_POST[name]', '$_POST[username]', '".md5($_POST['password'])."', '$_POST[college]', '$_POST[mobile]', '$_POST[email]', '$_POST[city]')";

if (mysqli_query($conn, $sql)) {
?>
<html>
<head>
<title>ELAN 2017 Registration</title>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link href="css/register.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="fonts/stylesheet.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<style>
.wrap{
	position:absolute;
	width:100%;
	height:30%;
	left:0;
	top:0;
	display:table;
	text-align:center;
	font-size:150%;
}
.showid{
	height:100%;
	width:100%;
	display:table-cell;
	vertical-align:middle;
	color:#aaa;
}
#elanid{
	font-weight:600;
}

</style>
<style>
.float {
	font-family: 'Open Sans', sans-serif;
	position: fixed;
	width: 23%;
	height: 100%;
	left: 100%;
	top: 0%;
	background-color: #e6e6e6;
	z-index: 100;
	transition: all .3s ease-in-out;
}
.box {
	position: absolute;
	width: 100%;
	left: 0%;
	height: 9.55%;
	font-size: 145%;
	text-align: center;
	cursor: pointer;
	background-color: #e6e6e6;
	color: #222;
}
#box1 {
	top: 0%;
	height: 14%;
	background-color: #202020;
	color: #aaa;
	font-size: 300%;
	font-family: 'maleficent';
	letter-spacing: 2px;
}
#box2 {
	top: 14%;
}
#box3 {
	top: 23.55%;
}
#box4 {
	top: 33.1%;
}
#box5 {
	top: 42.65%;
	font-size: 140%;
}
#box6 {
	top: 52.2%;
}
#box7 {
	top: 61.75%;
}
#box8 {
	top: 71.3%;
}
#box9 {
	top: 80.85%;
}
#box10 {
	top: 90.4%;
}
.hamburger {
	top: 0%;
	position: fixed;
	right: 0%;
	width: 3%;
	z-index: 101;
	cursor: pointer;
}
#filler {
	position: fixed;
	top: 0%;
	left: -100%;
	width: 100%;
	height: 100%;
	background-color: black;
	z-index: 99;
	opacity: 0.7;
}
</style>
<style type="text/css">
#nav-toggle {
	position: absolute;
	left: 50%;
	top: 50%;
}
#nav-toggle {
	cursor: pointer;
	padding: 10px 35px 16px 0px;
}
#nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
	cursor: pointer;
	border-radius: 1px;
	height: 4px;
	width: 40px;
	background: #aaa;
	position: absolute;
	display: block;
	content: '';
}
#nav-toggle span:before {
	top: -10px;
}
#nav-toggle span:after {
	bottom: -10px;
}
#nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
	transition: all 0.3s ease-in-out;
}
#nav-toggle.active span {
	background-color: transparent;
}
#nav-toggle.active span:before, #nav-toggle.active span:after {
	top: 0;
}
#nav-toggle.active span:before {
	transform: rotate(45deg);
}
#nav-toggle.active span:after {
	transform: rotate(-45deg);
}
.contain {
	position: absolute;
	top: 2%;
	right: 1%;
	height: 5%;
	width: 8%;
}
.box {
	display: table;
}
.box span {
	width: 100%;
	height: 100%;
	display: table-cell;
	vertical-align: middle;
}
.box:hover {
	background-color: #aaa;
}
</style>

</head>
<body>

<div class="contain"><a id="nav-toggle" onclick="menu()" class="hamburger"><span></span></a></div>
<div id="filler"></div>
<div class="float" id="float"> <a href="../home.html">
  <div id="box1" class="box"><span>ELAN</span></div>
  </a> <a href="../about.html">
  <div id="box2" class="box"><span>About Us</span></div>
  </a> <a href="register.php">
  <div id="box3" class="box"><span>Register</span></div>
  </a> <a href="../events.html">
  <div id="box4" class="box"><span>Events</span></div>
  </a> <a href="../workshops.html">
  <div id="box5" class="box"><span>Workshops and EML's</span></div>
  </a> <a href="../live.html">
  <div id="box6" class="box"><span>Live Blog</span></div>
  </a> <a href="../hospitality.html">
  <div id="box7" class="box"><span>Hospitality</span></div>
  </a> <a href="../sponsors.html">
  <div id="box8" class="box"><span>Sponsors</span></div>
  </a> <a href="../team.html">
  <div id="box9" class="box"><span>Team</span></div>
  </a> <a href="../archives.html">
  <div id="box10" class="box"><span>Archives</span></div>
  </a> </div>

<div class="wrap"><p class="showid">A verification mail has been sent to your email ID. Please click on the link there to get your Elan ID.</span></p></div>


<?php 

/*
if(isset($_SESSION['redirect']))
{
echo "<script>window.location.assign('".$_SESSION['redirect']."');</script>";
unset($_SESSION['redirect']);
}
*/


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



// $_SESSION['ID'] = $id;




}
else
{
?>

<html>
<head>
<title>ELAN 2017 Registration</title>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link href="css/register.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="fonts/stylesheet.css" rel="stylesheet" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<SCRIPT type="text/javascript">
var taken = 0;
$(document).ready(function(){

$("#username").change(function() { 

var usr = $("#username").val();

if(usr.length >= 4)
{

 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
  var resp = xhttp.responseText.trim();
      if(resp == "FALSE")
        {
           taken = 1;
           alert("Username is already taken.");
        }
      else
       taken = 0;
    }
  };
  xhttp.open("GET", "checkuser.php?user="+usr, true);
  xhttp.send();    


 } 
   
  }); 


});

</SCRIPT>
<style>
.wrap{
	position:absolute;
	width:100%;
	height:30%;
	left:0;
	top:0;
	display:table;
	text-align:center;
	font-size:150%;
}
.showid{
	height:100%;
	width:100%;
	display:table-cell;
	vertical-align:middle;
	color:#aaa;
}
#elanid{
	font-weight:600;
}

</style>
<style>
.float {
	font-family: 'Open Sans', sans-serif;
	position: fixed;
	width: 23%;
	height: 100%;
	left: 100%;
	top: 0%;
	background-color: #e6e6e6;
	z-index: 100;
	transition: all .3s ease-in-out;
}
.box {
	position: absolute;
	width: 100%;
	left: 0%;
	height: 9.55%;
	font-size: 145%;
	text-align: center;
	cursor: pointer;
	background-color: #e6e6e6;
	color: #222;
}
#box1 {
	top: 0%;
	height: 14%;
	background-color: #202020;
	color: #aaa;
	font-size: 300%;
	font-family: 'maleficent';
	letter-spacing: 2px;
}
#box2 {
	top: 14%;
}
#box3 {
	top: 23.55%;
}
#box4 {
	top: 33.1%;
}
#box5 {
	top: 42.65%;
	font-size: 140%;
}
#box6 {
	top: 52.2%;
}
#box7 {
	top: 61.75%;
}
#box8 {
	top: 71.3%;
}
#box9 {
	top: 80.85%;
}
#box10 {
	top: 90.4%;
}
.hamburger {
	top: 0%;
	position: fixed;
	right: 0%;
	width: 3%;
	z-index: 101;
	cursor: pointer;
}
#filler {
	position: fixed;
	top: 0%;
	left: -100%;
	width: 100%;
	height: 100%;
	background-color: black;
	z-index: 99;
	opacity: 0.7;
}
</style>
<style type="text/css">
#nav-toggle {
	position: absolute;
	left: 50%;
	top: 50%;
}
#nav-toggle {
	cursor: pointer;
	padding: 10px 35px 16px 0px;
}
#nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
	cursor: pointer;
	border-radius: 1px;
	height: 4px;
	width: 40px;
	background: #aaa;
	position: absolute;
	display: block;
	content: '';
}
#nav-toggle span:before {
	top: -10px;
}
#nav-toggle span:after {
	bottom: -10px;
}
#nav-toggle span, #nav-toggle span:before, #nav-toggle span:after {
	transition: all 0.3s ease-in-out;
}
#nav-toggle.active span {
	background-color: transparent;
}
#nav-toggle.active span:before, #nav-toggle.active span:after {
	top: 0;
}
#nav-toggle.active span:before {
	transform: rotate(45deg);
}
#nav-toggle.active span:after {
	transform: rotate(-45deg);
}
.contain {
	position: absolute;
	top: 2%;
	right: 1%;
	height: 5%;
	width: 8%;
}
.box {
	display: table;
}
.box span {
	width: 100%;
	height: 100%;
	display: table-cell;
	vertical-align: middle;
}
.box:hover {
	background-color: #aaa;
}
</style>

</head>
<body>

<div class="contain"><a id="nav-toggle" onclick="menu()" class="hamburger"><span></span></a></div>
<div id="filler"></div>
<div class="float" id="float"> <a href="../home.html">
  <div id="box1" class="box"><span>ELAN</span></div>
  </a> <a href="../about.html">
  <div id="box2" class="box"><span>About Us</span></div>
  </a> <a href="register.php">
  <div id="box3" class="box"><span>Register</span></div>
  </a> <a href="../events.html">
  <div id="box4" class="box"><span>Events</span></div>
  </a> <a href="../workshops.html">
  <div id="box5" class="box"><span>Workshops and EML's</span></div>
  </a> <a href="../live.html">
  <div id="box6" class="box"><span>Live Blog</span></div>
  </a> <a href="../hospitality.html">
  <div id="box7" class="box"><span>Hospitality</span></div>
  </a> <a href="../sponsors.html">
  <div id="box8" class="box"><span>Sponsors</span></div>
  </a> <a href="../team.html">
  <div id="box9" class="box"><span>Team</span></div>
  </a> <a href="../archives.html">
  <div id="box10" class="box"><span>Archives</span></div>
  </a> </div>

<form method="post" name="regForm" class="animated zoomIn" onsubmit="return validateForm()">
<h1 class="heading">REGISTER</h1>
<label>Name: </label><input type="text" name="name" required><br>
<label>Username:</label> <input type="text" name="username" id="username" required><br>
<label>Password: </label><input type="password" name="password" required><br>
<label>Email:</label> <input type="text" name="email" required><br>
<label>Mobile: </label><input type="text" name="mobile" required><br>
<label>College: </label><input type="text" name="college" required><br>
<label>City: </label><input type="text" name="city" required><br>
<?php
if(isset($_GET['err']))
echo '<div style="color: #222"> '.$_GET['err'].' </div>';

?>

<input id="sbutton" type="submit" name="submit" value="SUBMIT">
<div id="bot"><p style="display: inline;">Already a member? </p><a href="login.php">Login here</a></div>
</form>
<script>
function validateForm() {
    var pass = document.forms["regForm"]["password"].value;
    var username = document.forms["regForm"]["username"].value;
    var x = document.forms["regForm"]["mobile"].value;
    var email = document.forms["regForm"]["email"].value;
	var MN = /^\d{10}$/;
	var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
	
	if(!MN.test(x))
	{
	alert("Mobile number is not valid.");
	return false;
	}
	else if(!re.test(email))
	{
	alert("Email address is not valid.");
	return false;
	}

	else if(username.length < 4)
	{
	alert("Username should be of atleast 4 characters.");
	return false;
	}
	else if(taken == 1)
	{
	alert("The username is already taken");
	return false;
	}
	else
	return true;
}
</script>



<?php
}
?>
<script type="text/javascript">function menu(){if (document.getElementById("float").style.left=="77%"){document.getElementById("float").style.left="100%";document.getElementById("filler").style.left="-100%";}else{document.getElementById("float").style.left="77%";document.getElementById("filler").style.left="0%";}}function nomenu(){document.getElementById("float").style.left="100%";document.getElementById("filler").style.left="-100%";}</script>
 <script type="text/javascript">document.querySelector( "#nav-toggle" ) .addEventListener( "click", function(){this.classList.toggle( "active" );});</script> 
 
</body>
</html>
