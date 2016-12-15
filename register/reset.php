<?php

require 'connect.php';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{

if($_GET['newpassword'] != $_GET['confirmpassword'])
{
echo "New and confirm password don't match.";
exit();
}


$sql1 = "SELECT * FROM users WHERE username='$_GET[user]'";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    
while($row1 = mysqli_fetch_assoc($result1)) {
if(md5($row1['password']) == $_GET['code']) {
$pass = md5($_POST['newpassword']);
$sql2 = "UPDATE users SET password='$pass' WHERE username='$_GET[user]'";
if( mysqli_query($conn, $sql2))
echo "Password updated successfuly";

}

}
}
}
else
{

$sql1 = "SELECT * FROM users WHERE username='$_GET[user]'";
$result1 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($result1) > 0) {
    
while($row1 = mysqli_fetch_assoc($result1)) {
if(md5($row1['password']) != $_GET['code'])
echo "Invalid link";
else
{
?>

<form method="post">
New password : <input type="password" name="newpassword"><br>
Confirm password : <input type="password" name="confirmpassword"><br>
<input type="submit" name="submit">
</form>
<?php

}


}

}
}
?>