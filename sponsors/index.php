<?php include '../Mobile-Detect-master/Mobile_Detect.php';
 $detect=new Mobile_Detect(); 
 if ($detect->isMobile())
  { header('Location: http://mobile.elan.org.in/sponsors.php'); exit(0); } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sponsors | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

    <meta name="description" content="IIT Hyderabad Techno Cultural Fest">

    <meta name="author" content="ELAN 2017">

    <meta name="keyword" content="elan,vision,techno,cultural,management,technical,iit hyderabad, iit,fest, competitions,events,event,hyderabad,iith,students,dance,song , drama , dj , informal , fun,sponsors,games,awesome,workshops,biggies,culti,techy,infi,online,litr , workshop , android , app , development , andro , engine , quadcopter , auto mobile , autonomous , robotics , team">

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimal-ui">
    <link rel='shortcut icon' href=../favicon.ico type='image/x-icon' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

    <meta name="theme-color" content="#000000">
    <meta property=og:url content='http://elan.org.in/' />
    <meta property=og:type content=website />
    <meta property=og:title content="ELAN 2017" />
    <meta property=og:description content="ELAN IIT Hyderabad Techno Cultural Fest">
    <meta property=og:image content="https://i.ytimg.com/vi/66HbC68mk2o/hqdefault.jpg" />

    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../navbar/navbar2.css">
    <link rel="stylesheet" href="../styles/footer3.css">
    <link rel="stylesheet" href="../css/loader.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            text-align: center;
            background-image: url(../images/aboutus1.png);
            background-size: contain;
            color: #aaa;
            font-family: 'Josefin Sans', sans-serif;
            overflow-x: hidden;
            overflow-y: hidden;
        }
        #myModal {
            color: black;
            text-align: left;
        }
        @font-face {
            font-family: chelsea;
            src: url('../fonts/chelsea2/ChelseaAlternates.ttf');
        }
        .row {
            margin: 4% 0%;
        }
        @media screen and (max-width: 768px) {
            .col-xs-12 {
                margin: 4% 0%;
            }
        }
        img {
            width: 55%;
            margin: 0 auto;
        }
        h3 {
            color: white;
            font-family: chelsea;
        }
    </style>
    <style type="text/css">
        #nav-toggle {
            position: absolute;
            left: 50%;
            top: 50%;
        }
        #nav-toggle {
            cursor: pointer;
            padding: 10px 35px 16px 0px;
        }
        #nav-toggle span,
        #nav-toggle span:before,
        #nav-toggle span:after {
            cursor: pointer;
            border-radius: 1px;
            height: 4px;
            width: 40px;
            background: #aaa;
            position: absolute;
            display: block;
            content: '';
        }
        #nav-toggle span:before {
            top: -10px;
        }
        #nav-toggle span:after {
            bottom: -10px;
        }
        #nav-toggle span,
        #nav-toggle span:before,
        #nav-toggle span:after {
            transition: all 0.3s ease-in-out;
        }
        #nav-toggle.active span {
            background-color: transparent;
        }
        #nav-toggle.active span:before,
        #nav-toggle.active span:after {
            top: 0;
        }
        #nav-toggle.active span:before {
            transform: rotate(45deg);
        }
        #nav-toggle.active span:after {
            transform: rotate(-45deg);
        }
        .contain {
            position: absolute;
            top: 2%;
            right: 1%;
            height: 5%;
            width: 8%;
        }
        .box {
            display: table;
        }
        .box span {
            width: 100%;
            height: 100%;
            display: table-cell;
            vertical-align: middle;
        }
        .box:hover {
            background-color: #aaa;
        }
        body::-webkit-scrollbar {
            width: 0.6em;
        }
        body::-moz-scrollbar {
            width: 0.6em;
        }
        body::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px white;
        }
        body::-moz-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px white;
        }
        body::-webkit-scrollbar-thumb {
            background-color: brown;
            outline: 1px solid black;
        }
        body::-moz-scrollbar-thumb {
            background-color: green;
            outline: 1px solid black;
        }
        <?php session_start();
        if(isset($_SESSION["id"])) echo ".right{
 margin-right: 9.5%;
        margin-top: 1.15%;
    }
    @media screen and (max-width: 1000px) {}";
 ?>
    </style>
</head>

<body>
    <?php include '../analyticstracking.php'; ?>
    <?php include '../header.php'; ?>

    <div style="margin-bottom: -2%;">&nbsp;</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <h1 style="font-family: chelsea;color:#F06D06;font-size:400%">SPONSORS</h1>


        <div class="row">
            <h3>TITLE SPONSOR</h3>
            <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                <a href="www.cyient.com" target="_blank"><img src="images/cyient.jpg" alt="CYIENT" style="width: 80%;" />
                </a>
            </div>
        </div>
                <div class="row">
            <h3>ASSOCIATE SPONSOR</h3>
            <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                <a href="http://www.telanganatourism.gov.in/" target="_blank"><img src="images/tourism.png" alt="TELANGANA TOURISM" style="width: 80%;" />
                </a>
            </div>
        </div>
        <div class="row">
            <h3>POWERED BY</h3>
            <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                <a href="http://www.mtvindia.com/campusdiaries/" target="_blank">
                    <img src="images/mtv_campus_diaries.png" alt="MTV CAMPUS PRINCESS" style="width: 60%;" />
                </a>
            </div>
        </div>

        <div class="row">


            <div class="col-xs-12 col-sm-4">
                <h3>ELAN-E-JUNG TITLE SPONSOR</h3>
                <a href="http://www.mtvixtreme.com/" target="_blank"><img src="images/mtvixtreme.jpg" alt="MTV EXTREME" />
                </a>
            </div>
            <div class="col-xs-12 col-sm-4">
                <h3>TALENT PARTNER</h3>
                <a href="http://mtvindia.com/labs/" target="_blank"><img src="images/MTV_Nescafe_Labs.png" alt="MTV Nescafe Labs">
                </a>
            </div>
            <div class="col-xs-12 col-sm-4">
                <h3>RADIO PARTNER</h3>
                <a href="https://www.redfmindia.in/mumbai" target="_blank"><img src="images/red.jpg" alt="RED FM" />
                </a>
            </div>




        </div>

        <div class="row">

             <div class="col-xs-12 col-sm-4">
                <h3>MEDIA COVERAGE PARTNER</h3>
                <a href="http://telanganatoday.news/" target="_blank"><img src="images/telanganatoday.jpg" alt="TELANGANA TODAY" />
                </a>
            </div>



            <div class="col-xs-12 col-sm-4">
                <h3>FASHION PARTNER</h3>
                <div style="   vertical-align: middle;">
                    <br>
                    <a href="https://www.facebook.com/RelianceTrends/?__mref=message_bubble" target="_blank"><img src="images/reliance.png" alt="RELIANCE RETAIL" style="width:65%;height: 65%;" />
                    </a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4">
                <h3>CAB SPONSOR</h3>
                <a href="https://www.olacabs.com/" target="_blank"><img src="images/ola.jpg" alt="OLA CAB" />
                </a>
            </div>

          
        </div>

    </div>
    <div class="row">

      

            <div class="col-xs-12 col-sm-4">
                <h3>MEDIA PARTNER</h3>
                <a href="http://www.eenadu.net/" target="_blank"><img src="images/eenadu.png" alt="EENADU" />
                </a>
            </div>

      <div class="col-xs-12 col-sm-4">
                <h3>FURNITURE SPONSOR</h3>
                <a href="https://www.godrejinterio.com/Godrejinterio/index.aspx" target="_blank"><img src="images/INTERIO.jpg" alt="GODREJ INTERIO">
                </a>
            </div>

        <div class="col-xs-12 col-sm-4">
            <h3>EDUCATION PARTNER</h3>
            <a href="http://aceenggacademy.com/" target="_blank"><img src="images/ACE.jpg" alt="ACE ENGINERRING ">
            </a>
        </div>
      


    </div>
    <div class="row">

  <div class="col-xs-12 col-sm-4">
            <h3>ONLINE GAMING PARTNER</h3>
            <a href="https://www.adda52.com/" target="_blank"><img src="images/adda50.jpg" alt="ADDA 52">
            </a>
        </div>

        <div class="col-xs-12 col-sm-4">
            <h3>ONLINE PHOTOGRAPHY EVENT PARTNER</h3>
            <a href="http://www.nikon.co.in/en_IN" target="_blank"><img src="images/nikon.png" alt="NIKON" />
            </a>
        </div>

        <div class="col-xs-12 col-sm-4">

            <h3>STUDY ABROAD PARTNER</h3>
            <br>
            <br>
            <a href="http://www.manyagroup.com/" target="_blank"><img src="images/manaya-logo-new.png" alt="MANYA GROUP" />
            </a>
        </div>


    </div>
    <div class="row">

        <div class="col-xs-12 col-sm-4">
            <h3>DIGITAL TALENT SPONSOR</h3>
            <a href="https://artistaloud.wordpress.com/" target="_blank"><img src="images/ArtistAloud.jpg" alt="ARTIST ALOUD" />
            </a>
        </div>



        <div class="col-xs-12 col-sm-4">
            <h3>GIFTING PARTNER</h3>
            <a href="http://www.lovelychocos.com/" target="_blank"><img src="images/lovelychocos.jpg" alt="LOVELY CHOCOS" />
            </a>
        </div>

        <div class="col-xs-12 col-sm-4">
            <h3>ONLINE TICKETING PARTNER</h3>
            <a href="http://www.meraevents.com/" target="_blank"><img src="images/meraenevts.jpg" alt="MERA EVENTS">
            </a>
        </div>




    </div>
    <div class="row">

        <div class="col-xs-12 col-sm-4">
            <h3>WEB HOSTING SPONSOR</h3>
            <a href="https://www.bigrock.in" target="_blank"><img src="images/big_rock.jpg" alt="BIG ROCK" />
            </a>
        </div>

       


 <div class="col-xs-12 col-sm-4">
            <h3>DARE PARTNER</h3>
            <a href="http://www.stichio.co.in/" target="_blank"><img src="images/Stichio_Full_Logo_Red.png" alt="STICHIO">
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <h3>OFFICIAL SUPPLY CHAIN PARTNER</h3>
            <a href="http://www.safexpress.com/" target="_blank"><img src="images/safeexpress.jpg" alt="safexpress" />
            </a>
        </div>



    </div>
    <div class="row">

        <div class="col-xs-12 col-sm-4">
            <h3>YOUTH MAGAZINE PARTNER</h3>
            <a href="http://www.youthincmag.com/" target="_blank"><img src="images/Youth-Incorporated.jpg" alt="YOUTH INCORPORATED" />
            </a>
        </div>
     

       <div class="col-xs-12 col-sm-4">
            <h3>PHOTOGRAPHY PARTNER</h3>
            <a href="https://www.facebook.com/felectrikk/" target="_blank"><img src="images/felectrikk.jpg" alt="F-ELECTRIKK" />
            </a>
        </div>

        <div class="col-xs-12 col-sm-4">
            <h3>AFTERMOVIE PARTNER</h3>
            <a href="http://www.flyingdreamfilmerz.com/" target="_blank"><img src="images/flyingdreamfilmerz.png" alt="FLYING DREAM FILMERZ" />
            </a>
        </div>



    </div>
    <div class="row">


        <div class="col-xs-12 col-sm-4">
            <h3>CULTURAL PARTNER</h3>
            <a href="http://embassies.gov.il/delhi/Pages/default.aspx" target="_blank"><img src="images/israel.jpg" alt="EMBASSY OF ISRAEL" />
            </a>
        </div>
      



  <div class="col-xs-12 col-sm-4">
            <h3>CULTURAL PARTNER</h3>
            <a href="https://hyderabad.afindia.org/" target="_blank"><img src="images/alliance-francaise.jpg" alt="ALLIANCE FRANCAISE" />
            </a>
        </div>
        <div class="col-xs-12 col-sm-4">
            <h3>OUTREACH WORKSHOP PARTNER</h3>
            <a href="http://www.techtrontechnologies.com/" target="_blank"><img src="images/techtron.jpg" alt="TECHTRON TECHNOLOGIES">
            </a>
        </div>

    </div>
    <div class="row">

        <div class="col-xs-12 col-sm-4">
            <h3>OUTREACH WORKSHOP PARTNER</h3>
            <a href="http://entrench.in/" target="_blank"><img src="images/entrench.jpg" alt="ENTRENCH ELECTRONICS">
            </a>
        </div>
     

   <div class="col-xs-12 col-sm-4">
            <h3>OUTREACH WORKSHOP PARTNER</h3>
            <a href="http://azureskynet.com/" target="_blank"><img src="images/azure.jpg" alt="AZURE SKYNET">
            </a>
        </div>

        <div class="col-xs-12 col-sm-4">
            <h3>SMS SPONSOR</h3>
            <a href="http://www.wegusinfotech.com/" target="_blank"><img src="images/wegus_infotech.jpg" alt="WEGUS INFOTECH" style="height: 170px;">
            </a>
        </div>



      



    </div>
    <div class="row">

        <div class="col-xs-12 col-sm-4">
            <h3>ONLINE QUIZZING SPONSOR</h3>
            <a href="http://dare2compete.com/" target="_blank"><img src="images/dare2compete.png" alt="DARE 2 COMPETE">
            </a>
        </div>


  <div class="col-xs-12 col-sm-4">
            <h3>MEDIA PARTNER</h3>
            <a href="http://www.etv.co.in/channels/home;jsessionid=C00A882DA45B91F0448E91465A26DEC4?channelId=2" target="_blank"><img src="images/ETV-Telangana Logo.jpg" alt="ETV TELANGANA">
            </a>
        </div>

        <div class="col-xs-12 col-sm-4">
            <h3>MUSIC MEDIA PARTNER</h3>
            <a href="https://songdew.com/" target="_blank"><img src="images/songdew.png" alt="SONG DEW">
            </a>
        </div>

      


    </div>

    <div class="row">


        <div class="col-xs-12 col-sm-4">
            <h3>ONLINE MUSIC PARTNER</h3>
            <a href="http://awesong.in/" target="_blank"><img src="images/Awesong_logo_White.png" alt="AWESONG" style="width: 80%;" />
            </a>
        </div>


  <div class="col-xs-12 col-sm-4">
            <h3>ONLINE MUSIC PARTNER</h3>
            <a href="http://www.musicmalt.com/" target="_blank"><img src="images/music_malt.png" alt="MUSICMALT" style="width: 80%;" />
            </a>
        </div>


        <div class="col-xs-12 col-sm-4">
            <h3>LEADS SPONSOR</h3>
            <a href="http://www.dataguru.in/home.do" target="_blank"><img src="images/dataguru.png" alt="DATA GURU" />
            </a>
        </div>


    

    </div>

    <div class="row">

    <div class="col-xs-12 col-sm-4">
            <h3>SPONSORSHIP PARTNER</h3>
            <a href="http://www.onspon.com/index.php" target="_blank"><img src="images/onspon.png" alt="ONSPON" />
            </a>
        </div>
     



   <div class="col-xs-12 col-sm-4">
            <h3>MISS INDIA ORGANISATION</h3>
            <a href="http://beautypageants.indiatimes.com/" target="_blank"><img src="images/femina.jpg" alt="FEMINA MISS INDIA" />
            </a>
        </div>

        <div class="col-xs-12 col-sm-4">
            <h3>ONLINE MEDIA PARTNER</h3>
            <a href="http://www.knowafest.com/college-fests/events" target="_blank"><img src="images/knowAfest.png" alt="KNOW A FEST" />
            </a>
        </div>

 
   




    </div>
    <div class="row">
           <div class="col-xs-12 col-sm-4">
            <h3>ONLINE MEDIA PARTNER</h3>
            <a href="http://www.igniteengineers.com/" target="_blank"><img src="images/ignite.png" alt="IGNITE ENGINEERS" />
            </a>
        </div>


     <div class="col-xs-12 col-sm-4">
            <h3>ONLINE MEDIA PARTNER</h3>
            <a href="http://beingstudent.com/" target="_blank"><img src="images/beingStudent.png" alt="BEING STUDENT" />
            </a>
        </div>

        <div class="col-xs-12 col-sm-4">
            <h3>ONLINE MEDIA PARTNER</h3>
            <a href="https://www.brainbuxa.com/" target="_blank"><img src="images/brainBuxa.png" alt="BRAIN BUXA" />
            </a>
        </div>




    </div>

    <div class="row">



        <div class="col-xs-12 col-sm-4">
            <h3>ONLINE MEDIA PARTNER</h3>
            <a href="https://www.facebook.com/hyddanceadda/" target="_blank"><img src="images/hyd_dance_adda.jpg" alt="HYD DANCE ADDA" />
                <br>
                <br>
            </a>
        </div>


        <div class="col-xs-12 col-sm-4">
            <h3>ONLINE MEDIA PARTNER</h3>
            <a href="https://www.facebook.com/dubsmashyderabad/" target="_blank"><img src="images/dub_smash.png" alt="DUB SMASH HYD" />
            </a>
        </div>



        <div class="col-xs-12 col-sm-4">
            <h3>FASHION PARTNER</h3>
            <a href="http://www.fashionlady.in/" target="_blank"><img src="images/fashionlady.jpg" alt="FASHION LADY" />
            </a>
        </div>


      
      

    </div>
    <div class="row">


        <div class="col-xs-12 col-sm-4">
            <h3>SELF DRIVE PARTNER</h3>
            <a href="https://www.mylescars.com/" target="_blank"><img src="images/myles.png" alt="FASHION LADY" />
            </a>
        </div>


  <div class="col-xs-12 col-sm-4">
            <h3>ONLINE SHOPPING PARTNER</h3>
            <a href="http://www.shopclues.com/" target="_blank"><img src="images/shopclues.jpg" alt="SHOPCLUES" />
            </a>
        </div>


      <div class="col-xs-12 col-sm-4">
            <h3>DRAMA EVENT PARTNER</h3>
            <a href="https://www.facebook.com/VidurActingInstituteOfficialPage/" target="_blank"><img src="images/vidur.png" alt="VIDUR ACTING INSTITUTE" />
            </a>
        </div>



    </div>

        <div class="row">


        <div class="col-xs-12 col-sm-4">
            <h3>ART EXHIBITION SPONSOR</h3>
            <a href="http://nrityadance.com/" target="_blank"><img src="images/nrithya.png" alt="NRITYA DANCE FORUM" />
            </a>
        </div>

    </div>

    </div>
</body>

<?php $sponsorPage=1 ; include '../footer.php'; ?>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="../js/index.js"></script>

</html>