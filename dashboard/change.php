<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../connect.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['attendance']) && $_POST['attendance'] ) {
    if (isset($_POST['winner']) && $_POST['winner'] )
      $sql = "UPDATE $_POST[contest] SET attendance='YES' , winner='YES' , comment='$_POST[comment]' WHERE elanId='$_POST[id]'";
    else 
      $sql = "UPDATE $_POST[contest] SET attendance='YES' , winner='NO' , comment='$_POST[comment]'   WHERE elanId='$_POST[id]'";
  }
  else $sql = "UPDATE $_POST[contest] SET attendance='NO' , winner='NO' , comment='$_POST[comment]'  WHERE elanId='$_POST[id]'";

  if(mysqli_query($conn, $sql)){
        header("Location: organizer.php?contest=$_POST[contest]&id=$_POST[id]");
     }
  else header("Location: err.php?err=Error Occured While Registering for $_POST[contest] for ELAN ID  : $_POST[id]");
}
else echo "Invalid Entry";
?>
