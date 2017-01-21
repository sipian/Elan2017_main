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

$err = "CAMPUSS PRINCESS FMI 2017";
$answer= "";

$contest = "campus_princess";
$sql = "SELECT * from $contest";

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
                        $answer .= "
                <td><span class='glyphicon glyphicon-thumbs-up' style='color : green;font-size: 35px;'></span></td>";
        }
        $answer .= "</form></tr>";
     }
    }
    $answer .="<tr><td><button type='button' id='newEntry' class='btn btn-success btn-lg' data-toggle='modal' data-target='#myModal'>
    <span class='glyphicon glyphicon-plus'></span>&nbsp;Add New</button></td></tr>";
  }
  else 
        $err = 'INVALID URL';

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

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ADD NEW ENTRY</h4>
      </div>
      <div class="modal-body">
        <p>
                <form  method="post" action="registerCampus.php">
                        <div class="form-group">
                                <label for="usr">ELAN ID (last 4 digits) : </label>
                                <input type="text" class="form-control" name="elanId" id="usr" required> 
                                <br><br><br>
                                <button class="btn btn-warning btn-block" type="submit">
                                        SUBMIT
                                </button>
                        </div>
                </form>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 </html>