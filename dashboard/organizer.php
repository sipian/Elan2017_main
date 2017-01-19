<?php 
session_start();

if(!isset($_SESSION["id"])){
        session_unset(); 
        session_destroy(); 
        header("Location: err.php?err=Login First To Access This Page");
    exit();
}


if(  (!isset($_SESSION["canAccessKeystone"])) || $_SESSION["canAccessKeystone"] != 2){
     header("HTTP/1.0 403 Access Denied");
    exit();
}

require '../connect.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
$err = '';
$answer='';
if(! isset($_GET['contest']))
    $err = 'INVALID URL';
else {

/*if(isset($_GET['id']))
    echo "<script>alert('Successfully Changed For ELAN ID $_GET[id] In $_GET[contest] ')</script>";*/
$name = json_decode(file_get_contents('../name.json') , true);

$err = $name[$_GET['contest'] ];
$answer= "";

$contest = $_GET['contest'];
$sql = "SELECT * from $contest ";

$result = mysqli_query($conn, $sql);

if($result){
if (mysqli_num_rows($result) > 0){   
    while($row = mysqli_fetch_assoc($result)){

       $answer .=  "
       <tr>
       <form method='post' action='change.php'>
       <input type='hidden' name='contest' value='$contest'>
        <td><input type='text' name='id' value='$row[elanId]' readonly></td>
        <td>$row[name]</td>
        <td>$row[mobile]</td>
        <td>$row[email]</td>";

        if($row['attendance'] == 'YES') $answer .= "
          <td><input type='checkbox' name='attendance' value='Attendance' checked> </td>";
        else  $answer .= "<td><input type='checkbox' name='attendance' value='Attendance'> </td>";

        if($row['winner'] == 'YES') $answer .= "
          <td><input type='checkbox' name='winner' value='isWinner' checked> </td>";
        else  $answer .= "<td><input type='checkbox' name='winner' value='isWinner'> </td>";
        $answer .= "
        <td>
        <textarea name='comment' >$row[comment]</textarea>
        <td><input type='submit' class='btn btn-primary' value='Submit'></td>
        ";
        if(isset($_GET['id'])){
                if($_GET['id']==$row['elanId'])
                        $answer .= "<td><span class='glyphicon glyphicon-thumbs-up' style='color : green;font-size: 35px;'></span></td>";
        }
        $answer .= "</form></tr>"; 

     }
    }
  }
  else 
        $err = 'INVALID URL';
}
?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>
     </title>
       <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
<link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>

      <link rel='stylesheet' href='css/style.css'>
 </head>
 <body>
 <span class='glyphicon glyphicon-thumbs-up' style='display: none;'></span>
    <h2  style="text-align: center;"><a href="index.php">Go To Dashboard</a></h2>
    <h1 style="text-align: center;"> <?php echo $err; ?> </h1>
    <div class="table-responsive">          
    <table class='table table-condensed table-hover table-bordered'>
    <thead>
         <tr>
        <th>ELAN ID</th>
        <th>Name</th>
        <th>Phone No.</th>
        <th>E Mail</th>
        <th>Attendance</th>
        <th>isWinner</th>
        <th>Comments</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        <?php echo $answer; ?>
    </tbody>
    </table>
    </div>
  </div>
 </body>
 </html>