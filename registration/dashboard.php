<?php
session_start();
require 'connect.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if(!isset($_SESSION["id"])){
        session_unset(); 
        session_destroy(); 
        header("Location: ../index.php?t=f");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        DASHBOARD
    </title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elan Events 2017" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="../favicon.ico">

    <link rel="stylesheet" href="../navbar/navbar.css">
    <link rel="stylesheet" href="../styles/footer.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- pre loader link sheets -->
        <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>DASHBOARD</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <h3>Name&nbsp;:&nbsp;<?php echo $_SESSION["name"]; ?></h3>
            <h3>Email&nbsp;:&nbsp;<?php echo $_SESSION["email"]; ?></h3>
            <h3>ELAN ID&nbsp;:&nbsp;<?php echo $_SESSION["elanId"]; ?></h3>
            <h3>College&nbsp;:&nbsp;<?php echo $_SESSION["college"]; ?></h3>
            <h3>Mobile&nbsp;:&nbsp;<?php echo $_SESSION["elanId"]; ?></h3>
        </div> 
        <div class="col-lg-9">
            <?php 
                if($_SESSION["verified"] == false)
                    echo('<h4>Email is not verified. Check your mail for verification email.</h4>');
                else{
                        $answer = "<ul>";
                        if(isset($_SESSION["events"])){
                                $array = explode(",",$_SESSION["events"]);
                             foreach ($array as $value) {
                                $answer .= "<li><a href='../events/#$value'>$value</a></li>";
                                } 
                                $answer .= "</ul>";  
                        }
                        else{
                        $sql = "SELECT * FROM users WHERE ID='$_SESSION[id]'";
                        $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) == 1){
                        while($row = mysqli_fetch_assoc($result)){                 
                          $_SESSION["events"] = $row['registered_events'];
                          $array = explode(",",$row['registered_events']);
                          
                          $answer = "<ul>";
                         foreach ($array as $value) {
                                $answer .= "<li><a href='../events/#$value'>$value</a></li>";
                        }
                          $answer .= "</ul>";
                  }             
             }
          } 
                        echo $answer;    
                }
             ?>
        </div>
    </div>
</div>

</body>
</html>