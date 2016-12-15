<!DOCTYPE html>
<html lang="en">
<head>
  <title>Elan 2016</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron" style="text-align:center">
<p>
<?php


$event = $_GET['event'];

switch ($event) {
    case "andaazapnaapna":
        $ename = "Andaaz Apna Apna";
	break;
    case "arts":
        $ename = "Arts Exhibition";
        break;
    case "djwars":
        $ename = "DJ Wars";
        break;
    case "lendyourvoice":
        $ename = "Lend Your Voice";
        break;
    case "looseyourfeet":
        $ename = "Loose Your Feet";
        break;
    case "nrithyanjali":
        $ename = "Nrithyanjali";
        break;
    case "octave":
        $ename = "Octaves";
        break;
    case "rjhunt":
        $ename = "RJ Hunt";
        break;
    case "vibrazione":
        $ename = "Vibrazione";
        break;
    case "walktheramp":
        $ename = "Walk the Ramp Online";
        break;
    default:
        $ename = "Invalid";
}



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

$sql2 = "SELECT * FROM ".$event." WHERE ID='$_GET[ID]' AND code='$_GET[code]'";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    

$sql = "UPDATE ".$event." SET Verified=1 WHERE ID='$_GET[ID]' AND code='$_GET[code]'";

if (mysqli_query($conn, $sql)) {
    echo "Thank you for registering for ".$ename.".";
} 

}
else {
    echo "Invalid confirmation link.";
}

?>
</p>

 </div>
 
</div>

</body>
</html>
