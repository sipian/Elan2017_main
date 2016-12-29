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


$sql = "SELECT * FROM users WHERE ID='$_POST[ID]'";
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

$sql = "INSERT INTO ".$_GET['event']." (ID, Verified, code)
VALUES ('$_POST[ID]', 0, '".$code."')";

if (mysqli_query($conn, $sql)) {



$subject = "ELAN 2016 - Confirm Participation";

$message = "
<html>
<head>
<title>ELAN 2016 - Confirm Participation</title>
</head>
<body>
<p>Hi <strong>".$name."</strong>!</p><br><p>Please <a href='http://elan.org.in/register/events/confirm.php?event=".$event."&ID=".$_POST['ID']."&code=".$code."'>Click Here</a> to confirm your participation in ".$ename.".</p>
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
    <p>A confirmation mail has been sent to your email ID. Please click on the link there to confirm your participation in <?php echo $ename; ?>.</p>

  </div>
 
</div>

</body>
</html>



<?php
}
else
{
echo "You are already registered.";
}

}


/*
if($row['Activation'] == 0) {
echo "You are registered, but you need to confirm your participation by clicking on the link sent to your email earlier. Contact us if you didn't get any email.";
exit();
}
*/

?>