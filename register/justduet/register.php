<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register for Just Duet</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register for Just Duet</h2>
  <form role="form" method="post" action="verify.php">
    <div class="form-group">
      <label for="id1">ELAN ID 1 :</label>
      <input type="text" class="form-control" id="ID1" name="ID1" placeholder="Enter ELAN ID 1">
    </div>
    <div class="form-group">
      <label for="id2">ELAN ID 2 :</label>
      <input type="text" class="form-control" id="ID2" name="ID2" placeholder="Enter ELAN ID 2">
    </div>
    
   
    <button type="submit" name="submit" class="btn btn-default">Submit</button><br><a href="http://mobile.elan.org.in/register/register.php">Don't have an Elan ID? Click here to register.</a>
    
  </form>
</div>

</body>
</html>
