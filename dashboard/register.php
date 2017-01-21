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
    $sql = "select * from users where elanId = '$_POST[elanId]'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 0)
      echo "none";
    else if (mysqli_num_rows($result) > 1)
           echo "more";
    else{
          while($row = mysqli_fetch_assoc($result)){
                $sql = "INSERT INTO $_POST[contest] (ID , elanId , email , name , mobile) VALUES 
                ('$row[ID]', '$row[elanId]' , '$row[email]' , '$row[name]' , '$row[mobile]' )";
                if(mysqli_query($conn, $sql)){
                        $temp = explode(",",$row["registered_events"]);
                        array_push($temp,$_POST["contest"]);
                        $registered_events = implode(",",$temp);
                        $sql = "UPDATE users SET registered_events='$registered_events' WHERE ID='$row[ID]'";
                        if(mysqli_query($conn, $sql))
                             echo "success";
                        else 
                            echo "update";
                        }
                else
                        echo "failure";

          }
    }
}
?>
