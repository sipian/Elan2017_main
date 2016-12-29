<?php
 

if(strlen($_POST['name']) < 2)
{
echo "Enter a valid name";
exit();
}


if(strlen($_POST['username']) < 2)
{
echo "Enter a valid username";
exit();
}



if(strlen($_POST['password']) < 6)
{
echo "Password should be of atleast 6 characters";
exit();
}


if(strlen($_POST['college']) < 2)
{
echo "Enter a valid college";
exit();
}


if(strlen($_POST['mobile']) < 10)
{
echo "Enter a valid mobile number";
exit();
}


if(strlen($_POST['email']) < 5 || strpos($_POST['email'], '@') < 1)
{
echo "Enter a valid email address.";
exit();
}


if(strlen($_POST['city']) < 2)
{
echo "Enter your city.";
exit();
}


$servername = "localhost";
$dbname = "elanorg_Elan2016";
$username = "elanorg_ayush";
$password = "cricIt123";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE username='$_POST[username]'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
echo "Username already registered.";
exit();

    
} 


$sql = "SELECT ID FROM users ORDER BY ID DESC Limit 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
while($row = mysqli_fetch_assoc($result)) {
	
	$id = str_replace("ELAN16F", "", $row['ID']);
	$id++;
	$temp = "ELAN16F";
	for($i = 0; $i < (4-strlen($id)); $i++)
	$temp .= "0";
	
	$id = $temp.$id;
		
	}
    
}
else

$id = "ELAN16F0001";






$sql = "INSERT INTO users (ID, name, username, password, college, mobile, email, city)
VALUES ('$id', '$_POST[name]', '$_POST[username]', '$_POST[password]', '$_POST[college]', '$_POST[mobile]', '$_POST[email]', '$_POST[city]')";

if (mysqli_query($conn, $sql)) {

echo $id;

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}







?>