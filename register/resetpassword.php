<?php
require 'connect.php';


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$email = $_REQUEST['email'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
while($row = mysqli_fetch_assoc($result)) {
$id = $row['ID'];
$username = $row['username'];
$password = md5($row['password']);
$name = $row['name'];

$to = $email;
$subject = "ELAN 2017 - Reset Password";

$message = "
<html>
<head>
<title>ELAN 2017 - Account details</title>
</head>
<body>
<p>Hi <strong>".$name."</strong>!</p><br><p>Here are your account details : </p>
<table>
<tr>
<td>Elan ID : </td>
<td>".$id."</td>
</tr>
<tr>
<td>Username : </td>
<td>".$username."</td>
</tr>
</table>
<br><a href='http://localhost/Elan2017_main/register/reset.php?user=".$username."&code=".$password."'>Click here</a> to reset your password.<br><br><strong>Cheers!</strong><br>Elan IITH
</body>
</html>
";


require_once './lib/swift_required.php';
require_once 'send_mail.php';


// Create a message
$message = Swift_Message::newInstance($subject)
  ->setFrom(array( 'noreply@elan.org.in' => 'Elan 2017 IITH'))
  ->setTo(array( $email =>  $name ))
  ->addPart($message, 'text/html')
  ->setBody(" ");
 

if($mailer->send($message))
echo "Check your mailbox.";
else
header("Location: reset_password.php?err=Something went wrong.");

}
}
else
header("Location: reset_password.php?err=Email not found.");

?>