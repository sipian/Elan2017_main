<?php
require 'connect.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE username='$_GET[user]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
   echo "FALSE";
else
{
$sql2 = "SELECT * FROM users_unverified WHERE username='$_GET[user]'";
$result2 = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result2) > 0)
   echo "FALSE";
else
  echo "TRUE";
}
    


?>