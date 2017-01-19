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
         ORGANIZER DASHBOARD
     </title>
 </head>
 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/css/bootstrap.min.css">
 <body>
 <br><br><br>
 <div style="text-align: center;"> <h1>ORGANIZER DASHBOARD</h1></div>


<div class="buttons" style="text-align: center;">
 <h2>CUTLI</h2>

       <div class="container">
     <div class="row">
     <div class="col-lg-2"></div>
        <div class="col-lg-2">
        <a href="organizer.php?contest=looseyourfeet">
            <button type="button" class="btn btn-primary looseyourfeet">LOOSE YOUR FEET</button>
        </a>
        </div>

        <div class="col-lg-2">
        <a href="organizer.php?contest=nrityanjali">
            <button type="button" class="btn btn-success nrityanjali">NRITYANJALI</button>
        </a>
        </div>


        <div class="col-lg-2">
        <a href="organizer.php?contest=vibrazione">
            <button type="button" class="btn btn-danger vibrazione">VIBRAZIONE</button>
        </a>
        </div>
        <div class="col-lg-2">
        <a href="organizer.php?contest=octaves">
            <button type="button" class="btn btn-info octaves">OCTAVES</button>
        </a>
        </div>
     </div>
 </div>
 <br>

    <div class="container">
     <div class="row">
     <div class="col-lg-2"></div>
        <div class="col-lg-2">
        <a href="organizer.php?contest=andaazapnapna">
            <button type="button" class="btn btn-default andaazapnapna">ANDAAZ APNA APNA</button>
         </a>
        </div>


        <div class="col-lg-2">
        <a href="organizer.php?contest=picelectic">
            <button type="button" class="btn btn-warning picelectic">PICELECTIC</button>
        </a>
        </div>

          <div class="col-lg-2">
        <a href="organizer.php?contest=artexhibition">
            <button type="button" class="btn btn-success artexhibition">ART EXHIBITION</button>
        </a>
        </div>
        <div class="col-lg-2">
        <a href="organizer.php?contest=djwars">
            <button type="button" class="btn btn-warning djwars">DJ WARS</button>
            </a>
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
        <a href="organizer.php?contest=lendmeurvoice">
            <button type="button" class="btn btn-info lendmeurvoice">LEND ME YOUR VOICE</button>
        </a>
        </div>
     </div>
 </div>
 <br>
 

 <h2>LITR</h2>
   <div class="container">
     <div class="row">
     <div class="col-lg-2"></div>
         <div class="col-lg-2">
         <a href="organizer.php?contest=mrdetective">
            <button type="button" class="btn btn-default mrdetective">Mr. DETECTIVE</button>
        </a>
        </div>
         <div class="col-lg-2">
         <a href="organizer.php?contest=jam">
            <button type="button" class="btn btn-primary jam">JUST A MINUTE</button>
            </a>
        </div>
         <div class="col-lg-2">
         <a href="organizer.php?contest=quizzes">
            <button type="button" class="btn btn-success quizzes">QUIZ CONCLAVE</button>
            </a>
        </div>


     </div>
 </div>


</div>


 </body>
 <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
 <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/bootstrap.min.js"></script>
 <script type="text/javascript">
     $(document).ready(function () {
/*         $(".biggie").click(function () {
             $(".buttons").html(`
        <div class="container">
     <div class="row">
         <div class="col-lg-4">
            <button type="button" class="btn btn-default elanejung">ELAN_E_JUNG</button>
        </div>
         <div class="col-lg-4">
            <button type="button" class="btn btn-primary manthan">MANTHAN</button>
        </div>
         <div class="col-lg-4">
            <button type="button" class="btn btn-success campus_princess">CAMPUS PRINCESS</button>
        </div>
     </div>
 </div>
                `);
         });
*/

         $(".litr").click(function () {
             $(".buttons").html(`
  <div class="container">
     <div class="row">
         <div class="col-lg-3">
         <a href="organizer.php?contest=mrdetective">
            <button type="button" class="btn btn-default mrdetective">Mr. DETECTIVE</button>
        </a>
        </div>
         <div class="col-lg-3">
         <a href="organizer.php?contest=jam">
            <button type="button" class="btn btn-primary jam">JUST A MINUTE</button>
            </a>
        </div>
         <div class="col-lg-3">
         <a href="organizer.php?contest=quizzes">
            <button type="button" class="btn btn-success quizzes">QUIZ CONCLAVE</button>
            </a>
        </div>


     </div>
 </div>
                `);
         });
/*

 $(".culti").click(function () {
             $(".buttons").html(`
   <div class="container">
     <div class="row">
        <div class="col-lg-2">
        <a href="organizer.php?contest=looseyourfeet">
            <button type="button" class="btn btn-primary looseyourfeet">LOOSE YOUR FEET</button>
        </a>
        </div>

        <div class="col-lg-2">
        <a href="organizer.php?contest=nrityanjali">
            <button type="button" class="btn btn-success nrityanjali">NRITYANJALI</button>
        </a>
        </div>


        <div class="col-lg-2">
        <a href="organizer.php?contest=vibrazione">
            <button type="button" class="btn btn-danger vibrazione">VIBRAZIONE</button>
        </a>
        </div>
        <div class="col-lg-2">
        <a href="organizer.php?contest=octaves">
            <button type="button" class="btn btn-info octaves">OCTAVES</button>
        </a>
        </div>
     </div>
 </div>
 <br>

    <div class="container">
     <div class="row">
        <div class="col-lg-2">
        <a href="organizer.php?contest=andaazapnapna">
            <button type="button" class="btn btn-default andaazapnapna">ANDAAZ APNA APNA</button>
         </a>
        </div>


        <div class="col-lg-2">
        <a href="organizer.php?contest=picelectic">
            <button type="button" class="btn btn-warning picelectic">PICELECTIC</button>
        </a>
        </div>

          <div class="col-lg-2">
        <a href="organizer.php?contest=artexhibition">
            <button type="button" class="btn btn-success artexhibition">ART EXHIBITION</button>
        </a>
        </div>
        <div class="col-lg-2">
        <a href="organizer.php?contest=djwars">
            <button type="button" class="btn btn-warning djwars">DJ WARS</button>
            </a>
        </div>

     </div>
 </div>
 <br>


 <div class="container">
     <div class="row">
        <div class="col-lg-2">
        <a href="organizer.php?contest=rjhunt">
            <button type="button" class="btn btn-danger rjhunt">RJ HUNT</button>
        </a>
        </div>
        <div class="col-lg-2">
        <a href="organizer.php?contest=lendmeurvoice">
            <button type="button" class="btn btn-info lendmeurvoice">LEND ME YOUR VOICE</button>
        </a>
        </div>
     </div>
 </div>
 <br><br><br><br>
                `);
         });*/
});
</script>
 </html>