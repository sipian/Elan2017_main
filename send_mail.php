<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'connect.php';
require_once 'lib/swift_required.php';


function FunctionName($row,$answer,$count)
{
    require 'connect.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);

    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('noreply@elan.org.in')
  ->setPassword('elan2017');
// Create the message
$mailer = Swift_Mailer::newInstance($transport);

    $message = Swift_Message::newInstance()
  ->setFrom(array('noreply@elan.org.in' => 'Elan 2017 & Nvision 2017'))
  ->setSubject('ELAN 2017 REGISTRATION')
  ->setContentType("text/html")
  ->setTo(array(     $row["email"] =>  $row["name"] ))
  ->setBody('
 <!DOCTYPE html>
 <html>
 <body> 
 <div style="text-align: center;">
     <img src="https://id.nvision.org.in/img/all_logo.png" style="width:50%;height:50%;">
    <h1><strong>Welcome to Elan and &eta;vision 2017</strong></h1>
    <h3>Hi '.$row["name"].'</h3>
    <h3>Here is the list of events you have registered for in ELAN 2017</h3>
    '.$answer.'
 </div>
 </body>
 </html>
');

// Send the message
  print_r("<br><br>*******************<br><br>");
  print_r($message);
    print_r("<br><br>*******************<br><br>");

$result = $mailer->send($message);
if($result){
    print_r ("successfully sent mail to $row[email] ***  ".$row["ID"]);
    $sql = " update users set sent='YES' where ID='".$row["ID"]."'";
    if(mysqli_query($conn, $sql)){
        print_r ("+++  changed successfully in database <br>");
     }
    else {
            print_r ("+++  changed failed in database <br>");
            die("Update Database failed: @@@@@@@@@@@@@@@@@@@ ".$row["email"]."<br>".$row);
          }
}
else {
    print_r ("failed sent mail to $row[email] ***  ".$row["ID"]);
    die("Emai Sending failed: @@@@@@@@@@@@@@@@@@@ ".$row["email"]."<br>".$row);
  }
}


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from users where sent='NO'";
 $name = json_decode(file_get_contents('name.json') , true);

$result = mysqli_query($conn, $sql);
$count=1;
if (mysqli_num_rows($result) > 1){
    while($row = mysqli_fetch_assoc($result)){
        if(strlen($row["email"])==0)
          continue;

        print_r($row);
        $answer="<ul style=\"list-style-type: none;\">";
        $temp = explode(",",$row["registered_events"]);
        $len = sizeof($temp);
        if($len==1){
         $answer="<h3>No Events Registered Yet.<br><a href='http://elan.org.in/events/'>Click Here To Know About The Events In Elan</a> </h3>";        
        }
        else {
        for ($loop=1;$loop<$len;$loop+=4) {
            $answer.="<li>";
            for ($i=$loop; $i<$loop+4 && $i<$len ; $i++) { 
                $answer.= '
    <a href="http://www.elan.org.in/events/#'.$temp[$i].'" style="cursor:pointer;">
        <button style="background-color:#44c767;
                -moz-border-radius: 28px;
                -webkit-border-radius: 28px;
                border-radius: 28px;
                border:1px solid #18ab29;
                display:inline-block;
                cursor:pointer;
                color:#ffffff;
                font-family:Arial;
                font-size:17px;
                padding:10px 10px;
                width:180px;
                word-spacing:-1px;
                text-decoration:none;
                text-shadow:0px 1px 0px #2f6627;">'.$name[$temp[$i]].'</button></a>';
            }
           $answer.= "</li><br>";
       }
       $answer.="<br></ul>";
   }
   //print_r($answer);
   FunctionName($row,$answer,$count);
   $count++;
}
}
else echo "No entries in user table.";

 ?>

