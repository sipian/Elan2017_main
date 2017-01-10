<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require_once 'lib/swift_required.php';

// Create the Transport

    $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('noreply@elan.org.in')
  ->setPassword('elan2017');
  ;

/*
You could alternatively use a different transport such as Sendmail or Mail:

// Sendmail
$transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

// Mail
$transport = Swift_MailTransport::newInstance();
*/

// Create the Mailer using your created Transport
$mailer = Swift_Mailer::newInstance($transport);

// Create a message
$message = Swift_Message::newInstance()
  ->setFrom(array('noreply@elan.org.in' => 'Elan 2017 & Nvision 2017'))
  ->setSubject('ELAN 2017 REGISTRATION')
  ->setContentType("text/html")
  ->setBody('<h1>Here is the message itself</h1>')
  ->setTo(array(   "cs15btech11019@iith.ac.in" =>  "harsh" ));

// Send the message
echo $mailer->send($message);

?>
