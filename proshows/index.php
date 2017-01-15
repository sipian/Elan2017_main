<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://mobile.elan.org.in/proshows.php');
    exit(0);
}
?>

    <!doctype html>
    <html lang="en-IN">

    <head>
        <meta charset="utf-8">
        <title>Proshows | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>
        <meta name="description" content="IIT Hyderabad Techno Cultural Fest">
        <meta name="author" content="ELAN 2017">
        <meta name="keyword" content="elan,vision,techno,cultural,management,technical,iit hyderabad, iit,fest, competitions,events,event,hyderabad,iith,students,dance,song , drama , dj , informal , fun,sponsors,games,awesome,workshops,biggies,culti,techy,infi,online,litr , workshop , android , app , development , andro , engine , quadcopter , auto mobile , autonomous , robotics , team">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimal-ui">
        <link rel='shortcut icon' href='../favicon.ico' type='image/x-icon' />
        <meta name="theme-color" content="#000000">
        <meta property=og:url content='http://elan.org.in/' />
        <meta property=og:type content=website />
        <meta property=og:title content="ELAN 2017" />
        <meta property=og:description content="ELAN IIT Hyderabad Techno Cultural Fest">
        <meta property=og:image content="https://i.ytimg.com/vi/66HbC68mk2o/hqdefault.jpg" />
        <link rel="stylesheet" href="../styles/footer3.css">
        <link rel="stylesheet" href="../navbar/navbar2.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet prefetch' href='http://ajax.aspnetcdn.com/ajax/bootstrap/3.3.5/css/bootstrap.min.css'>
        <link rel="stylesheet" href="../css/loader.css">
</head>
<style type="text/css">
   @font-face {
    font-family: chelsea;
    src: url('../fonts/chelsea2/ChelseaAlternates.ttf');
    }
    body{
    background-image: url('images/bg.jpg');  
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
    overflow-y: hidden;
    }
    <?php
                        session_start();
                             if(isset($_SESSION["id"]))
                             echo ".right{
                                        margin-right: 9.5%;
                                        margin-top: 1.15%;
                                        }
                                        @media screen and (max-width: 1000px) {

                                        }";
                        ?>
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
<body>

<?php include '../analyticstracking.php'; ?>
<?php include '../header.php'; ?>

<div style="margin-bottom: -2%;">&nbsp;</div>
<br><br><br><br>
<br><br><br>
<div class="container">
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-2"><button type="button" id="benny" class="btn btn-primary btn-block">BENNY DAYAL</button></div>
    <div class="col-lg-2"><button type="button" id="nikhil" class="btn btn-primary btn-block">DJ NIKHIL CHINAPPA</button></div>
    <div class="col-lg-2"><button type="button" id="flutes" class="btn btn-primary btn-block">MAGIC FLUTES</button></div>
    <div class="col-lg-2"><button type="button" id="mind" class="btn btn-primary btn-block">MINDSHIFT</button></div>
    <div class="col-lg-2"><button type="button" id="echo" class="btn btn-primary btn-block">ECHO & TITO</button></div>
</div>
<br>

<div class="content" style="color: white;"></div>
</div>
<br><br>
<div style="display: none;">
  <img src="images/benny.jpg">
  <img src="images/nikhil.jpg">
  <img src="images/echo.jpg">
  <img src="images/flutes.jpg">
  <img src="images/mind.jpg">
</div>
<?php $sponsorPage = 0; include '../footer.php'; ?>
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script type="text/javascript">
    $(document).ready(function () {
      $("#benny").click(function () {
        $("#benny").attr('class', 'btn btn-danger btn-block');
        $("button").not("#benny").attr('class', 'btn btn-primary btn-block');
        
        $('.content').fadeOut("fast" ,function () {
            $('.content').html(`
<div >
    <div class="col-lg-3"></div>
    <div class="col-lg-6" style="text-align: center;">
        <p>Cyient presents ELAN and ηvision, IIT Hyderabad in association with F Productions brings to you one of the most upcoming Indian playback singer Benny Dayal. Get ready to experience an evening full of entertainment and fun. 
        The best part, you get to experience all this for free. All you need to do is get yourself here.</p>
        <img class="img-responsive img-thumbnail" src="images/benny.jpg" style="width:50%;height: 50%;" />
    </div>
</div>`);
        $('.content').fadeIn("fast");
        });  
          });

      $("#nikhil").click(function () {
        $("#nikhil").attr('class', 'btn btn-danger btn-block');
        $("button").not("#nikhil").attr('class', 'btn btn-primary btn-block');
       
        $('.content').fadeOut("fast" ,function () {
            $('.content').html(`
<div >
    <div class="col-lg-3"></div>
    <div class="col-lg-6" style="text-align: center;">
        <p>Presenting to you Nikhil Chinapa, one of the best Disco and Video Jockey and a popular presenter on MTV India. With a massive fan following among EDM enthusiasts, he is indeed the best best. Don't miss your chance to see him live at IIT Hyderabad on 21st January. And as always there is no entry fee !</p>
        <img class="img-responsive img-thumbnail" src="images/nikhil.jpg" style="width:50%;height: 50%;" />
    </div>
</div>`);
        $('.content').fadeIn("fast");
        });  
          });

      $("#mind").click(function () {
        $("#mind").attr('class', 'btn btn-danger btn-block');
        $("button").not("#mind").attr('class', 'btn btn-primary btn-block');
       
        $('.content').fadeOut("fast" ,function () {
            $('.content').html(`
<div >
    <div class="col-lg-3"></div>
    <div class="col-lg-6" style="text-align: center;">
        <p>Embracing the "Stokholm-Sound" with heavy riffs and powerful melodies! Kicks you in the face and leaves you wanting more!
The elite Swedish band MindShift is here at Cyient presents ELAN and ηvision, IIT Hyderabad in association with MetamorphiK Productions to enthrall the crowd with their remarkable performance!</p>
        <img class="img-responsive img-thumbnail" src="images/mind.jpg" style="width:100%;height: 100%;" />
    </div>
</div>`);
        $('.content').fadeIn("fast");
        });  
          });

      $("#echo").click(function () {
        $("#echo").attr('class', 'btn btn-danger btn-block');
        $("button").not("#echo").attr('class', 'btn btn-primary btn-block');

        $('.content').fadeOut("fast" ,function () {
            $('.content').html(`
<div>
    <div class="col-lg-3"></div>
    <div class="col-lg-6" style="text-align: center;">
        <p>Want to rock and roll your head?
Want to experience a really fun night?
Cyient presents ELAN & ηvision , IIT Hyderabad in association with Israel in India gives you the chance to experience the pinnacle of electronic bass music, dub, and hip-hop. We are delighted to announce that we are inviting ECHO & TITO, one of the premier bass music producers in Israel to mesmerize the crowd with their outstanding performances.</p>
        <img class="img-responsive img-thumbnail" src="images/echo.jpg" style="width:60%;height: 60%;" />
    </div>
</div>`);
        $('.content').fadeIn("fast");
        });  
          });

      $("#flutes").click(function () {
        $("#flutes").attr('class', 'btn btn-danger btn-block');
        $("button").not("#flutes").attr('class', 'btn btn-primary btn-block');

        $('.content').fadeOut("fast" ,function () {
            $('.content').html(`
<div >
    <div class="col-lg-3"></div>
    <div class="col-lg-6" style="text-align: center;">
        <p>Life is like a flute, it may have many holes and emptiness but if you work on it carefully it can play magical melodies.
So here at Cyient presents ELAN & ηvision , IIT Hyderabad in association with Af Hyderabad we are inviting one of the top french flutes band MAGIC FLUTES to startle the crowd at our fest with their splendid performance.</p>
        <img class="img-responsive img-thumbnail" src="images/flutes.jpg" style="width:100%;height: 100%;" />
    </div>
</div>`);
        $('.content').fadeIn("fast");
        });  
          });
      $("#benny").click();
      })
  </script>
    <script src="../js/index.js"></script>
</html>