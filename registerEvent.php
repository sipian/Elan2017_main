


<?php 

session_start();
require 'connect.php';
require_once 'lib/swift_required.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!isset($_SESSION["id"])){
    header("Location: ../index.php?t=f");
    exit();
}

if(!isset($_SESSION["verified"])){
    header("Location: ../index.php?t=r");
    exit();
}
$sql = "INSERT INTO $_POST[contest] VALUES ('$_POST[id]', '$_POST[elanId]' , '$_POST[email]' )";
if(mysqli_query($conn, $sql)){
    
    $temp = explode(",",$_SESSION["events"]);
    array_push($temp,$_POST[contest]);
    $registered_events = implode(",",$temp);
    $_SESSION["events"]= $registered_events;

    $sql = "UPDATE users SET registered_events='$registered_events' WHERE ID='$_POST[id]';";
    if(mysqli_query($conn, $sql)){
        

        $to = $_POST['email'];
$subject = "ELAN 2017 - $_POST[contest] Successfull Registration";

$message = "
<html>
<head>
<title>ELAN 2017 - $_POST[contest] Successfull Registration</title>
</head>
<body>
<p>
 <img src=\"http://elan.org.in/images/loading.png\" >
 <br>
 You Have Successfully Registered For <span>$_POST[contest]</span>.
 <a href=\"http://elan.org.in/events/#$_POST[contest]\"/>
 <button>
 CLICK TO KNOW MORE ABOUT $_POST[contest]
 </button>
 </a>
</p>
</body>
</html>
"; 

require_once 'send_mail.php';

// Create a message
$message = Swift_Message::newInstance($subject)
  ->setFrom(array( 'noreply@elan.org.in' => 'Elan 2017 IITH'))
  ->setTo(array($_POST['email']  => $_POST['name']))
  ->addPart($message, 'text/html')
  ->setBody(" ");

// Send the email
 if ($mailer->send($message)) {
    echo $registered_events;
 }
 else{
    echo "test";
 }

     }
    else 
        echo "failure";
}
else
    echo "failure";


 ?>
