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

$code1 = md5(rand());

$code2 = md5(rand());

$sql = "SELECT * FROM users WHERE ID='$_POST[ID1]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {


    
while($row = mysqli_fetch_assoc($result)) {
	$to1 = $row['email'];
        $name1 = $row['name'];
}
}
else
{
echo "Elan ID 1 not found.";
exit();
}



$sql = "SELECT * FROM users WHERE ID='$_POST[ID2]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {


    
while($row = mysqli_fetch_assoc($result)) {
	$to2 = $row['email'];
        $name2 = $row['name'];
}
}
else
{
echo "Elan ID 2 not found.";
exit();
}


$sql = "SELECT * FROM justduet";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

while($row = mysqli_fetch_assoc($result)) {
$n = $row['TeamID'];
}
}
else
$n = 0;


$n++;

$sql = "INSERT INTO justduet (TeamID, ID1, ID2, Verified, code1, code2)
VALUES ($n, '$_POST[ID1]', '$_POST[ID2]', '0', '".$code1."', '".$code2."');";

if (mysqli_query($conn, $sql)) {



$subject = "ELAN 2016 - Confirm Participation";

$message = "
<html>
<head>
<title>ELAN 2016 - Confirm Participation</title>
</head>
<body>
<p>Hi <strong>".$name1."</strong>!</p><br><p>Please <a href='http://elan.org.in/register/justduet/confirm.php?ID=".$n."&code1=".$code1."'>Click Here</a> to confirm yours and ".$name2."'s participation in Just Duet. Please make sure ".$name2." also confirms the participation.</p>
<br><strong>Cheers!</strong><br>Elan IITH
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Elan IITH <noreply@elan.org.in>' . "\r\n";

mail($to1,$subject,$message,$headers);




$subject = "ELAN 2016 - Confirm Participation";

$message = "
<html>
<head>
<title>ELAN 2016 - Confirm Participation</title>
</head>
<body>
<p>Hi <strong>".$name2."</strong>!</p><br><p>Please <a href='http://elan.org.in/register/justduet/confirm.php?ID=".$n."&code2=".$code2."'>Click Here</a> to confirm yours and ".$name1."'s participation in Just Duet. Please make sure ".$name1." also confirms the participation.</p>
<br><strong>Cheers!</strong><br>Elan IITH
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Elan IITH <noreply@elan.org.in>' . "\r\n";

mail($to2,$subject,$message,$headers);



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
    <p>A confirmation mail has been sent to you and your partner. Please click on the link there to confirm your participation in Just Duet. Make sure both of you confirm your participation.</p>

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