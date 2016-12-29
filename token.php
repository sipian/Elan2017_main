<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'connect.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_SESSION["id"])){
    header("Location: dashboard.php");
    exit();
}

if(!isset($_GET["token"])){
    header("Location: error.php?err=Invalid Token.");
    exit();
}

require_once('vendor/autoload.php');
use \Firebase\JWT\JWT;

$key = "varyverysecrettokenithinkso";
try{
$decoded = JWT::decode($_GET["token"], $key, array('HS256'));
}
catch(Exception $e){
     header("Location: error.php?err=Invalid Token");
     exit();
}
$decoded_array = (array) $decoded;
$array = json_decode(json_encode($decoded_array["user"]), True);

print_r($decoded); 
$id = $array["_id"];
$userId = $array["userid"];
$password = "none";
$college = $array["college"];
$mobile = $array["phone"];
$email = $array["email"];
$name = $array["name"]["first"];
$verifiedEmail =$array["emailVerified"];
    $_SESSION["id"] = $id;
    $_SESSION["elanId"] = $userId;
    $_SESSION["email"] = $email;
    $_SESSION["name"] = $name;    
    $_SESSION["mobile"] = $mobile;    
    $_SESSION["college"] = $college;

if ($verifiedEmail == 1)
    $_SESSION["verified"] = 1;
else
     $_SESSION["verified"] = 2;

print_r("HELLO");

$sql = "SELECT * FROM users WHERE ID='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1){
    header("Location: dashboard.php");
}
else if(mysqli_num_rows($result) == 0){
        if($verifiedEmail == 1){
                $sql = "insert into users values('$id' , '$userId' , '$name' , '$password' , '$college' , '$mobile' , '$email' , '');";
                if(mysqli_query($conn, $sql))
                        header("Location: dashboard.php");
                else
                        header("Location: error.php?err=database query failed");
                }
        else header("Location: dashboard.php");
        }
else header("Location: error.php?err=more than 2 entry exist");

?>