<?php

require 'connect.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



require_once('vendor/autoload.php');
use \Firebase\JWT\JWT;

JWT::$leeway = 900; // $leeway in seconds

$key = "varyverysecrettokenithinkso";
try{
    $decoded = JWT::decode($_GET["token"], $key, array('HS256'));

}

catch(Exception $e){
     header("Location: error.php?err=Invalid Tokens. ");
     exit();
}
$decoded_array = (array) $decoded;
$array = json_decode(json_encode($decoded_array["user"]), True);


//print_r($array);

//print_r("<br><br><br><br><br><br><br>");
//print_r("<br><br><br>*******************************************<br><br><br><br>");
//print_r("<br><br><br>*******************************************<br><br><br><br>");

$id = $array[0]["_id"];
$userId = $array[0]["userid"];
$password = "none";
$college = $array[0]["college"];
$mobile = $array[0]["phone"];
$email = $array[0]["email"];
$name = $array[0]["name"]["first"];

//print_r("<br><br><br>*******************************************<br><br><br><br>");

//print_r($id);
//print_r('expression');
//print_r($userId);
//print_r("<br><br><br>*******************************************<br><br><br><br>");
//print_r("<br><br><br>*******************************************<br><br><br><br>");



$sql = "SELECT * FROM users WHERE elanId = \"".$userId."\" ";

$result = mysqli_query($conn, $sql);
//print_r($sql);
//print_r("<br><br><br><br><br><br><br>");

//print_r($result);
if (mysqli_num_rows($result) == 0){
$sql = "insert into users values('$id' , '$userId' , '$name' , '$password' , '$college' , '$mobile' , '$email' , '','NO');";
                if(mysqli_query($conn, $sql))
                        echo "success";
                else
                        echo "fail";
}
else  echo "already exists";

?>
