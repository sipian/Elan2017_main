<?php

$event = $_GET['event'];

switch ($event) {
    case "andaazapnaapna":
        $ename = "Andaaz Apna Apna";
	break;
    case "arts":
        $ename = "Arts Exhibition";
        break;
    case "djwars":
        $ename = "DJ Wars";
        break;
    case "lendyourvoice":
        $ename = "Lend Your Voice";
        break;
    case "looseyourfeet":
        $ename = "Loose Your Feet";
        break;
    case "nrithyanjali":
        $ename = "Nrithyanjali";
        break;
    case "octave":
        $ename = "Octaves";
        break;
    case "rjhunt":
        $ename = "RJ Hunt";
        break;
    case "vibrazione":
        $ename = "Vibrazione";
        break;
    case "walktheramp":
        $ename = "Walk the Ramp Online";
        break;
    default:
        $ename = "Invalid";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register for <?php echo $ename; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register for <?php echo $ename; ?></h2>
  <form role="form" method="post" action="verify.php?event=<?php echo $event; ?>">
    <div class="form-group">
      <label for="elanid">Your Elan ID</label>
      <input type="text" class="form-control" id="ID" name="ID" placeholder="Enter Elan ID">
    </div>
    <button type="submit" class="btn btn-default" name="submit">Submit</button><br><a href="http://mobile.elan.org.in/register/register.php">Don't have an Elan ID? Click here to register.</a>
  </form>
</div>

</body>
</html>
