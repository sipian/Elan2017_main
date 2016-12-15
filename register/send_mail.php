<?php 
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('harsh@elan.org.in')
  ->setPassword('elan2016');
// Create the message
$mailer = Swift_Mailer::newInstance($transport);
 ?>