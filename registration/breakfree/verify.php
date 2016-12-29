<?php
if(isset($_POST['submit']))
{
$servername = "localhost";
$dbname = "elanorg_Elan2016";
$username = "elanorg_ayush";
$password = "cricIt123";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$code = md5(rand());


$sql = "SELECT * FROM users WHERE ID='$_POST[leader]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
while($row = mysqli_fetch_assoc($result)) {
	$to = $row['email'];
        $name = $row['name'];
}
}
else
{
echo "Elan ID not found.";
exit();
}
$participants = "";
$data = serialize( $_POST['participants'] );
foreach(unserialize($data) as $p)
{
$participants .= $p.", ";
}

$participants = rtrim($participants, ", ");



$sql = "INSERT INTO breakfree (ID, ParticipantIDs, Verified, code)
VALUES ('$_POST[leader]', '".$participants."', 0, '".$code."')";

if (mysqli_query($conn, $sql)) {



$subject = "ELAN 2016 - Confirm Participation";

$message = "
<html>
<head>
<title>ELAN 2016 - Confirm Participation</title>
</head>
<body>
<p>Hi <strong>".$name."</strong>!</p><br><p>Please <a href='http://elan.org.in/register/breakfree/confirm.php?ID=".$_POST['leader']."&code=".$code."'>Click Here</a> to confirm your participation in Breakfree.</p>
<table>
<tr><td>Learder ID : </td><td>".$_POST['leader']."</td></tr>
<tr><td>Participants : </td><td>".$participants."</td></tr>
</table>
<br><strong>Cheers!</strong><br>Elan IITH
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Elan IITH <noreply@elan.org.in>' . "\r\n";

mail($to,$subject,$message,$headers);




?>
<html>
<head>
<title>ELAN 2016 - DJ Wars</title>
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,600" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
<link href="../css/register.css" rel="stylesheet" type="text/css" />
<link href="../css/animate.css" rel="stylesheet" type="text/css" />
<link href="../fonts/stylesheet.css" rel="stylesheet" type="text/css" />
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

<div class="wrap"><p class="showid">A confirmation mail has been sent to your email ID. Please click on the link there to confirm your participation in Breakfree.</span></p></div>


<script type="text/javascript">function menu(){if (document.getElementById("float").style.left=="77%"){document.getElementById("float").style.left="100%";document.getElementById("filler").style.left="-100%";}else{document.getElementById("float").style.left="77%";document.getElementById("filler").style.left="0%";}}function nomenu(){document.getElementById("float").style.left="100%";document.getElementById("filler").style.left="-100%";}</script>
 <script type="text/javascript">document.querySelector( "#nav-toggle" ) .addEventListener( "click", function(){this.classList.toggle( "active" );});</script> 
 
</body>
</html>



<?php
}
else
{
echo "You are already registered.";
}

 
}

?>