<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://mobile.elan.org.in/hospitality.php');
    exit(0);
}
?>
<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>Hospitality | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

      <meta name="description" content="IIT Hyderabad Techno Cultural Fest">

      <meta name="author" content="ELAN 2017">

      <meta name="keyword" content="elan,vision,techno,cultural,management,technical,iit hyderabad, iit,fest, competitions,events,event,hyderabad,iith,students,dance,song , drama , dj , informal , fun,sponsors,games,awesome,workshops,biggies,culti,techy,infi,online,litr , workshop , android , app , development , andro , engine , quadcopter , auto mobile , autonomous , robotics , team">  

      <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimal-ui">  
      <link rel='shortcut icon' href=../favicon.ico type='image/x-icon'/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

      <meta name="theme-color" content="#000000">
      <meta property=og:url content='http://elan.org.in/' />
      <meta property=og:type content=website />
      <meta property=og:title content="ELAN 2017"/>
      <meta property=og:description content="ELAN IIT Hyderabad Techno Cultural Fest">
      <meta property=og:image content="https://i.ytimg.com/vi/66HbC68mk2o/hqdefault.jpg"/>


    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
    <link rel="stylesheet" href="../navbar/navbar2.css">
    <link rel="stylesheet" href="../styles/footer3.css">
    <link rel="stylesheet" href="../css/loader.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
    @font-face {
    font-family: chelsea;
    src: url('../fonts/chelsea2/ChelseaAlternates.ttf');
    }
    @font-face {
    font-family: monte;
    src: url('../fonts/montserrat/Montserrat-Regular.ttf');
    }
body {
  background: url(../images/aboutus1.png) no-repeat 0% 0% fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  overflow-x: hidden;
  overflow-y: hidden;
}
.info {
  width: 80%;
  margin: 0 auto;
  font-family: 'chelsea', sans-serif;
}
.aboutimg {
    font-family: 'chelsea', sans-serif;
    color: #F06D06; 
}
h2{
  font-family: 'chelsea';
      color: #F06D06; 

}
.aboutcontent {
  padding: 10%;
  padding-top: 2%;
  overflow-x: hidden;
  color: black;
  font-size: 130%;
  text-align: justify;
}
.video-wrap {
  position: absolute;
  left: 10%;
  top: 76%;
  width: 80%;
  padding-bottom: 4%;
}
.vid {
  border: none;
  box-shadow: 5px 5px 5px rgba(0,0,0,0.6);
}
body::-webkit-scrollbar {
    width: 0.6em;
}
body::-moz-scrollbar  {
    width: 0.6em;
}

body::-webkit-scrollbar-track{
    -webkit-box-shadow: inset 0 0 6px white;
}
body::-moz-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px white;
}
body::-webkit-scrollbar-thumb{
  background-color: brown;
  outline: 1px solid black;
}
body::-moz-scrollbar-thumb{
  background-color: green;
  outline: 1px solid black;
}

</style>


<?php
                        session_start();
                             if(isset($_SESSION["id"]))
                             echo "
                                <style>
                                        .right{
                                        margin-right: 9.5%;
                                        margin-top: 1.15%;
                                        }
                                        @media screen and (max-width: 1000px) {

                                        }
                                </style>";
                        ?>

</head>
<body>

<?php include '../analyticstracking.php'; ?>
<?php include '../header.php'; ?>

<div style="margin-bottom: -10%;">&nbsp;</div>
<br><br><br>
<br><br><br>
   <div class="back_cover">
      <br><br><br><br>
      <br><br>
         <div class="container">
            <h1 style="font-family: chelsea;font-size:400%;color: #F06D06;text-align: center;" >Hospitality<br></h1>
      

          
     <div style="color: white;text-align: center;font-weight: bold;font-family: monte;">
     <div class="container">
       <div class="row">
         <div class="col-lg-2"></div>
         <div class="col-lg-8" >
           The hospitality team of ELAN-2017 upholds the code of conduct 'Atithi Devo Bhavah'.
           <br>
            In ELAN, we ensure that you celebrate undiluted awesomeness while we take care of the rest. 
            <br>
            We assure that your short stay with us will be fun, secure and comfortable.
            <br> Our team will be available round the clock to address your every need. 
            <br><br>

            <h2 style="margin-left: -55px;">VENUE</h2>
            ELAN-2017 is being organized in the permanent campus of IIT Hyderabad (Kandi campus).
            <br>
            <h2>HOSPITALITY DESK</h2>
We will be there to help you throughout ELAN. Our team will address your queries at the Hospitality Desk available near the fest area. On-spot registrations along with team & event registrations would be done here where everyone will be provided with a unique fest ID. We also provide other informations regarding accommodation, event results, certificates, daily events schedule, updates etc., at the Hospitality Desk.
            <h2 style="margin-left: -55px;">TRANSPORT</h2>
Buses will be provided on the days of the festival. Specific bus details will be updated by 17th Jan 2017.
                  <h2 style="margin-left: -10px;">ACCOMMODATION DETAILS</h2>
      <div style="text-align: left;"  >

<span class="glyphicon glyphicon-star"></span> Accommodation would be provided only on first come first serve basis due to limited availability.
<br>

<span class="glyphicon glyphicon-star"></span> 
<button class="btn btn-primary">
<a href="https://id.nvision.org.in/signin?url=/accommodation" target="_blank" style="color: white">Click here</a> 
</button> &nbsp;to register for accommodation.

<br>

<span class="glyphicon glyphicon-star"></span> You will get a confirmation mail once your accommodation is confirmed. Kindly bring the e-copy/printout of the confirmation mail while coming to the fest. Accommodation will be provided solely on sharing basis.
<br>

<span class="glyphicon glyphicon-star"></span> In case you don’t receive a confirmation mail regarding your accommodation due to unavailability, you can always make arrangements for your stay outside the IITH campus.
<br>

<span class="glyphicon glyphicon-star"></span> If you have registered for accommodation earlier but have a change of mind, kindly send a mail regarding cancellation of accommodation to the above stated email ID .
<br>

<span class="glyphicon glyphicon-star"></span>  Mattress, bed sheets and pillows would be provided in accommodation. Please bring your own blankets if needed.
<br>

<span class="glyphicon glyphicon-star"></span>  Accommodation charges - INR 300/night. <br>

<span class="glyphicon glyphicon-star"></span> Safety deposit of INR 200 has to be paid at the registration desk. It would be reimbursed at the time of check out. 
<br>
</div>

                  <h2 style="margin-left: -55px;">RULES</h2>
      <div style="text-align: left;"  >

<span class="glyphicon glyphicon-star"></span> Kindly carry your college ID cards and registration cards (provided during on-spot registration) in the campus.
<br>

<span class="glyphicon glyphicon-star"></span>  Any kind of misbehavior will not be tolerated and will be dealt with strictly.
<br>

<span class="glyphicon glyphicon-star"></span> Security personnel are not responsible for any of your personal belongings. 
<br>

<span class="glyphicon glyphicon-star"></span> Security personnel reserve the right to refuse your entry at any point of time if they deem it unsafe. 
<br>

<span class="glyphicon glyphicon-star"></span> Kindly cooperate with the Hospitality Team. 
<br>

<span class="glyphicon glyphicon-star"></span> Students are advised not to keep large amounts of cash or valuables in the provided accommodation. The student is responsible for the safety of his/her belongings. Cloak rooms will be provided where you can keep your luggage.
<br>

<span class="glyphicon glyphicon-star"></span> Any damage/breakage to hostel property will be charged to the occupants of the block with a fine. Disciplinary action will also be initiated. 
<br>

<span class="glyphicon glyphicon-star"></span> Substance abuse, consumption of alcohol and smoking or chewing of tobacco and related products are strictly banned in the campus. 
<br>

<span class="glyphicon glyphicon-star"></span> Water should be used carefully and should not be wasted. Keep the campus clean. 
<br>
</div>
<br><br>
                  <h2>CONTACT US</h2>

<div class="row">

  <div class="col-lg-4">
    R. Prathima  
    <br>
    Hospitality Coordinator
    <br>
    +91-95-4216-0701     
    <br>
     prathima@elan.org.in
  </div>

  <div class="col-lg-4">
    Ashutosh Sharma
    <br>
    Hospitality Coordinator
    <br>
    +91-70-3240-1213
    <br>
    ashutosh@elan.org.in
  </div>

    <div class="col-lg-4">
    Medha Kasula
    <br>
    Hospitality Core
    <br>
    +91-97-0496-9799
    <br>
    medha@elan.org.in
  </div>
</div>





         </div>
       </div>
     </div>
       
     </div>
       
         
           
           
         </div>
      </div>



<br><br><br>
<?php $sponsorPage = 0; include '../footer.php'; ?>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/index.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

  $(document).ready(function () {
                $("#start").html(`
                  <br>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <strong>Coming Soon.</strong></p>
                        `);
               if($(window).height()<500){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"1%"});
                    $("#hello").css("margin-top","38.5%");
                }

                else if($(window).height()<600){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"5%"});
                    $("#hello").css("margin-top","30%");
                }
                else if($(window).height()<700){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"4%"});
                    $("#hello").css("margin-top","30%");
                }
                else if($(window).height()<1000){
                    $(".aboutcontent").css({"margin-left":"18%","margin-top":"4%"});
                    $("#hello").css("margin-top","30%");
                }
                else{
                    $(".aboutcontent").css({"margin-left":"15.5%","margin-top":"1%"});
                    $("#hello").css("margin-top","30%");
                }

            $(window).resize(function () {
                if($(window).height()<500){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"1%"});
                    $("#hello").css("margin-top","38.5%");
                }

                else if($(window).height()<600){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"5%"});
                    $("#hello").css("margin-top","30%");
                }
                else if($(window).height()<700){
                    $(".aboutcontent").css({"margin-left":"11%","margin-top":"4%"});
                    $("#hello").css("margin-top","30%");
                }
                else if($(window).height()<1000){
                    $(".aboutcontent").css({"margin-left":"18%","margin-top":"4%"});
                    $("#hello").css("margin-top","30%");
                }
                else{
                    $(".aboutcontent").css({"margin-left":"15.5%","margin-top":"1%"});
                    $("#hello").css("margin-top","30%");
                }
            });
  })
</script>


</html>