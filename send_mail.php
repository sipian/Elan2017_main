<?php 

require_once 'lib/swift_required.php';
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('harsh@elan.org.in')
  ->setPassword('elan2016');
// Create the message
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array('no-reply@elan.org.in' => 'ELAN 2017'))
  ->setTo(array('cs15btech11019@iith.ac.in'  => 'A name'))
  ->setBody('<p>Here is the message itself</p>')
  ->setContentType("text/html");
// Send the message

$result = $mailer->send($message);
if($result)
    echo "success";
else 
    echo "failure";
 ?>