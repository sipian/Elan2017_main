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

if(isset($_GET['code1']))
{
$sql2 = "SELECT * FROM justduet WHERE TeamID=".$_GET['ID']." AND code1='$_GET[code1]'";
$c = "code1";
}
else
{
$sql2 = "SELECT * FROM justduet WHERE TeamID=".$_GET['ID']." AND code2='$_GET[code2]'";
$c = "code2";
}
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0) {
    while($row2 = mysqli_fetch_assoc($result2)) {
if($row2['Verified'] == "0" || $row2['Verified'] == $c)
$sql = "UPDATE justduet SET Verified='$c' WHERE TeamID=".$_GET['ID'];
else
$sql = "UPDATE justduet SET Verified=1 WHERE TeamID=".$_GET['ID'];

if (mysqli_query($conn, $sql)) {
if($row2['Verified'] == "0" || $row2['Verified'] == $c)
	echo "Thank you for confirming your participation in Just Duet, but your partner still has to confirm the participation.";
else
    echo "Thank you for registering for Just Duet. You both have successfully confirmed your participation.";
} 

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
