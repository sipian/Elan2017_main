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
?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>
         ON SPOT REGISTRATION
     </title>
 </head>
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/css/bootstrap.min.css">
 <body>
 <br><br><br>
  <div style="text-align: center;"><a href="index.php"><h1>BACK TO DASHBOARD</h1></a> </div>

 <div style="text-align: center;"> <h1>ON SPOT REGISTRATION</h1></div>


<div class="buttons" style="text-align: center;">
 <h2>CUTLI</h2>

       <div class="container">
     <div class="row">
     <div class="col-lg-2"></div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-primary looseyourfeet">LOOSE YOUR FEET</button>
        </div>

        <div class="col-lg-2">
            <button type="button" class="btn btn-success nrityanjali">NRITYANJALI</button>
        </div>


        <div class="col-lg-2">
            <button type="button" class="btn btn-danger vibrazione">VIBRAZIONE</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-info octaves">OCTAVES</button>
        </div>
     </div>
 </div>
 <br>

    <div class="container">
     <div class="row">
     <div class="col-lg-2"></div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-default andaazapnapna">ANDAAZ APNA APNA</button>
        </div>


        <div class="col-lg-2">
            <button type="button" class="btn btn-warning picelectic">PICELECTIC</button>
        </div>

          <div class="col-lg-2">
            <button type="button" class="btn btn-success artexhibition">ART EXHIBITION</button>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-warning djwars">DJ WARS</button>
        </div>

     </div>
 </div>
 <br>


 <div class="container">
     <div class="row">
     <div class="col-lg-2"></div>
     <div class="col-lg-2"></div>
        <div class="col-lg-2">
        <a href="organizer.php?contest=rjhunt">
            <button type="button" class="btn btn-danger rjhunt">RJ HUNT</button>
        </a>
        </div>
        <div class="col-lg-2">
            <button type="button" class="btn btn-info lendmeurvoice">LEND ME YOUR VOICE</button>
        </div>
     </div>
 </div>
 <br>
 

 <h2>LITR</h2>
   <div class="container">
     <div class="row">
     <div class="col-lg-3"></div>
         <div class="col-lg-2">
            <button type="button" class="btn btn-default mrdetective">Mr. DETECTIVE</button>
        </div>
         <div class="col-lg-2">
            <button type="button" class="btn btn-primary jam">JUST A MINUTE</button>
        </div>
         <div class="col-lg-2">
            <button type="button" class="btn btn-success quizzes">QUIZ CONCLAVE</button>
        </div>


     </div>
 </div>



 <h2>BIGGIES</h2>
   <div class="container">
     <div class="row">
     <div class="col-lg-2"></div>
     <div class="col-lg-2"></div>
     <div class="col-lg-1"></div>
         <div class="col-lg-2">
            <button type="button" class="btn btn-primary campus_princess">CAMPUS PRINCESS</button>
        </div>
     </div>
 </div>



</div>



  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog  modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ON SPOT REGISTRATION</h4>
      </div>
      <div class="modal-body">
        <p>
                        <div class="form-group">
                        <pre id="eventName"></pre>
                                <label for="usr">ELAN ID (last 4 digits) : </label>
                                <br>
                                <label for="usr">ex : for IITH170037 , enter 37 </label>                                
                                <input type="text" class="form-control elanId" name="elanId" id="usr" required> 
                                <br><br><br>
                                <pre id="status"></pre>
                                <button class="btn btn-warning btn-block answer" type="submit">
                                        SUBMIT
                                </button>

                                <br><br>
                                <a href="notfound.php" target="_blank">
                                <button class="btn btn-danger">
                                        NOT FOUND
                                </button>
                                </a>
                        </div>
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
<script type="text/javascript">
  
  $(document).ready(function () {

    $(".elanId").focus(function () {
        $("#status").html(""); 
    })
    var contest="";
    $(".looseyourfeet").click(function () { $(".elanId").val("");$("#eventName").html("Loose Your Feet"); $("#status").html(""); contest="looseyourfeet"; $("#myModal").modal("show");});
    $(".nrityanjali").click(function () { $(".elanId").val(""); $("#eventName").html("Nrityanjali"); $("#status").html(""); contest="nrityanjali"; $("#myModal").modal("show");});
    $(".vibrazione").click(function () { $(".elanId").val("");$("#eventName").html("Vibrazione"); $("#status").html("");  contest="vibrazione"; $("#myModal").modal("show");});
    $(".octaves").click(function () { $(".elanId").val(""); $("#eventName").html("Octaves"); $("#status").html(""); contest="octaves"; $("#myModal").modal("show");});
    $(".andaazapnapna").click(function () { $(".elanId").val(""); $("#eventName").html("Andaaz Apna Apna"); $("#status").html(""); contest="andaazapnapna"; $("#myModal").modal("show");});
    $(".picelectic").click(function () { $(".elanId").val("");$("#eventName").html("Picelectic"); $("#status").html("");  contest="picelectic"; $("#myModal").modal("show");});
    $(".artexhibition").click(function () { $(".elanId").val(""); $("#eventName").html("Art Exhibition"); $("#status").html(""); contest="artexhibition"; $("#myModal").modal("show");});
    $(".djwars").click(function () { $(".elanId").val(""); $("#eventName").html("Dj Wars"); $("#status").html(""); contest="djwars"; $("#myModal").modal("show");});
    $(".rjhunt").click(function () { $(".elanId").val(""); $("#eventName").html("Rj Hunt"); $("#status").html(""); contest="rjhunt"; $("#myModal").modal("show");});
    $(".lendmeurvoice").click(function () { $(".elanId").val(""); $("#eventName").html("Lend Me Your Voice"); $("#status").html(""); contest="lendmeurvoice"; $("#myModal").modal("show");});
    $(".mrdetective").click(function () { $(".elanId").val("");$("#eventName").html("Mr Detective"); $("#status").html("");  contest="mrdetective"; $("#myModal").modal("show");});
    $(".jam").click(function () { $(".elanId").val("");$("#eventName").html("Just A Minute"); $("#status").html("");  contest="jam"; $("#myModal").modal("show");});
    $(".quizzes").click(function () { $(".elanId").val(""); $("#eventName").html("Quiz Conclave"); $("#status").html(""); contest="quizzes"; $("#myModal").modal("show");});
    $(".campus_princess").click(function () { $(".elanId").val(""); $("#eventName").html("Campus Princess"); $("#status").html(""); contest="campus_princess"; $("#myModal").modal("show");});

$(".answer").click(function () { 
  var id = $(".elanId").val();
  if (id=="" || id==null){alert("Enter Id First;")}
  else{
        $.post("register.php", {
            elanId: id,
            contest: contest
        }, function(e) {
            if(e=="none")
              $("#status").html("No Entry With Given Id Found.");
            else if(e=="more")
              $("#status").html("More than 1 Entry With The Given Id Found.");
            else if(e=="success")
              $("#status").html("onspot Registration done successfully");
            else if(e=="update")
              $("#status").html("Error In user table");
            else if(e=="failure")
              $("#status").html("User Already Registered For This Event");
        });
  }
  });
});

</script>
 </html>