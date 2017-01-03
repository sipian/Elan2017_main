<?php 
session_start();
 ?>
<!doctype html>
<html lang="en-IN">
  <head>
      <meta charset="utf-8">
        <title>Events | ELAN 2017 | Techno cultural fest of IIT Hyderabad</title>

      <meta name="description" content="IIT Hyderabad Techno Cultural Fest">

      <meta name="author" content="ELAN 2017">

      <meta name="keyword" content="elan,vision,techno,cultural,management,technical,iit hyderabad, iit,fest, competitions,events,event,hyderabad,iith,students,dance,song , drama , dj , informal , fun,sponsors,games,awesome,workshops,biggies,culti,techy,infi,online,litr , workshop , android , app , development , andro , engine , quadcopter , auto mobile , autonomous , robotics , team">  

      <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimal-ui">  
      <link rel='shortcut icon' href=favicon.ico type='image/x-icon'/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>

      <meta name="theme-color" content="#000000">
      <meta property=og:url content='http://elan.org.in/' />
      <meta property=og:type content=website />
      <meta property=og:title content="ELAN 2017"/>
      <meta property=og:description content="ELAN IIT Hyderabad Techno Cultural Fest">
      <meta property=og:image content="https://i.ytimg.com/vi/66HbC68mk2o/hqdefault.jpg"/>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/galleryeffect.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="event.js"></script>
<script type="text/javascript">

      var track=<?php if(isset($_SESSION['id']))echo "1"; else echo "0"; ?>;
      var _id="<?php echo $_SESSION['id']; ?>";
      var email="<?php echo $_SESSION['email']; ?>";
      var name="<?php echo $_SESSION['name']; ?>";
      var elanId="<?php echo $_SESSION['elanId']; ?>";
      var college="<?php echo $_SESSION['college']; ?>";
      var events="<?php echo $_SESSION['events']; ?>".split(",");
      var verified=
      <?php 
      if(isset($_SESSION['id']))
          echo $_SESSION['verified']; 
        else echo 3;
      ?>;
      
  </script>

</head>
	
<body>
<!-- banner -->
  <div class="banner-1 wthree-1">
    <div class="container">
      <div class="banner_top">
        <div class="logo">
          <h1><a href="index.php"><img src="images/logo5.png"></a></h1>
        </div>
        <div class="banner_top_right">
          <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav cl-effect-14">
            <li><a href="index.php">Home</a></li>
            <li><a href="events.php" class="active">Events</a></li>
            <li><a href="sponsors.php">Sponsors</a></li>
          <li>
          <?php 
          if(isset($_SESSION["id"]))
                echo "<a href=\"dashboard.php\">Dashboard</a>";
          else
                echo "<a href=\"https://id.nvision.org.in/signin?url=http://mobile.elan.org.in/token.php\" >Register</a>";
           ?>
            </li>
            <li><a href="hospitality.php">Hospitality</a></li>
            <li><a href="workshops.php">Workshops</a></li>
            <li><a href="http://blog.elan.org.in/">Blog</a></li>
            <li><a href="team.php">Team</a></li>
            <li><a href="literanza">Literanza</a></li>
            <?php 
          if(isset($_SESSION["id"]))
                echo "<li><a href=\"signout.php\">Sign Out</a></li>";
           ?>
          </ul>
        </div><!-- /.navbar-collapse -->  
        
      </nav>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
  </div>
<!-- //banner -->
<!-- gallery -->
<div class="gallery agile-1">
		<div class="container">
			<h2 class="tittle">Events</h3>
			<section>
				<ul class="lb-album">

				<h1 style="text-align: center;background-color: brown;font-size: 35px;padding-top: 2px;padding-bottom: 4px" id="biggies_events">Biggies</h1>

					<li class="grid">
						<a href="#elanejung">
							<figure class="effect-apollo">
								<img src="images/biggies/elan-e-jung.jpg" alt="image2">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
						<h3>Elan-E-Jung</h3>
							<div class="lb-overlay" id="elanejung">
									<img src="images/biggies/elan-e-jung.jpg" alt="image2" />
									<div class="gal-info">							
										<h3>Elan-E-Jung</h3>
										<p>Distorted guitars, emphatic rhythms, dense bass and drums, vigorous vocals, epic riffs and wild headbanging. Elan is back with its signature event, the metal battle. Get ready to turn up your amps and set the stage on fire at Elan-e-Jung! 
										<br>

 <button type="button" class="btn btn-primary btn-sm elanejungButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".elanejungButton").html((events.indexOf('elanejung')>-1)?"UNREGISTER":"REGISTER");
            </script>
 </button>
<br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>22nd January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Prizes worth Rs 45000 
         <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;A chance to record their music in Soundkraft Recording Studio 
         (Hyderabad) 
         <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;A chance to perform at any Hard Rock Cafe across india for one 
         time 
         <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;A chance to get featured in the main event of Mtv Xtreme or on 
         MTV Indies Channel 
            <br>
<br>
<strong>No. of Band members allowed :</strong> Maximum 7
<br>
<strong>Event Format</strong>
<br>
Consists of two rounds.<br>

<strong>PRELIMS</strong><br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;In first Round of Screening participants have to upload their music performance on <a href='#'>SongDew.com</a> by downloading the app and use the college code 
that will be given once the event registration will be done.
                        <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Deadline to upload videos is <strong>15th January 2017 , 11:59PM</strong>
                        <br>


<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;No videos will be considered after the deadline</strong>
                        <br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Only team leader needs to register at elan.org.in
                        <br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Shortlisted bands get to perform at Elan-e-Jung finals, Elan 2017.
                         <br>

<strong>FINALS</strong><br>
	 		
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;6 bands will be shortlisted after the preliminary round to perform at the 	Biggies Stage.<br>
		 		
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Each band will be given <strong>20</strong> mins to perform on stage including sound 	check (subjected to changes).<br>
 		
<br>


<strong>JUDGING CRITERIA</strong><br>

	
	
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The winners will be announced by the judges immediately after the event. Judge’s decision is considered final and should be abided by everyone.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;All the finalists will be given the participation certificates.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The prize money will be distributed only among the top 2 teams.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The crowd‘s response is considered important.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The following will be looked in the teams/bands performance:<br>
Entertainment<br>
Public involvement<br>
Energy<br>
Attitude<br><br>

<strong>RULES AND REGULATIONS</strong><br>



<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Any non-professional band is allowed to register. You need not be a college band to participate in this event.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Language of songs is not a criterion. The band can be fully instrumental as 	well. The genre of the band can be any variation of metal. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Registering team should send/upload only one demo in the process of registration. The demo need not be a studio recording.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Bands cannot have more than 7 members. Also, no person can play for more than 2 different bands. 	<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Bands cannot share the same frontman. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;ELAN reserves the right to shift any band's slot timings at any point of time before the prelims.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;In case of any damage to the provided equipment, the band will be fined 	for the damage and may be disqualified. <br>	
	
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The decision is dependent on the nature of the damage and the judge's discretion. 	<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;ELAN reserves the right to cancel the event in case of some unforeseen circumstances. 	<br>
	
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;In case of any dispute the decision of the judges and the organizers will be final and binding.
		<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Consumption of Alcohol and Drugs is strictly prohibited on Campus.<br>
	
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The decision of the organizers with respect to line-up is final and abiding.
	<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The Elan 2017 team holds the right to change the rules at any moment of time.
<br>

<strong>CONTACT PERSON</strong>
<br>
<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Yash Pitroda	<br>					
Email : <a href="mailto:yash@elan.org.in">yash@elan.org.in</a><br>					
Mob : 9505464597	<br>		

<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Harshwardhan Praveen <br>	

Email : <a href="mailto:me15btech11015@iith.ac.in">me15btech11015@iith.ac.in</a><br>

Mob : 9515223051

</p>
									</div>

									<a href="events.php#biggies_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>



					<li class="grid">
						<a href="#manthan">
							<figure class="effect-apollo">
								<img src="images/biggies/manthan.jpg" alt="image1">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
						<h3>Manthan</h3>
							<div class="lb-overlay" id="manthan">
									<img src="images/biggies/manthan.jpg" alt="image1" />
									<div class="gal-info">							
										<h3>Manthan</h3>
										<p>Every band has a dream. A dream of performing live, on a global scale, in front of fans screaming for more. But the journey of a mile begins with the first step. ELAN 2017 presents Manthan, the ultimate Fusion band contest.
(Are you not into Heavy Metal Music? ELAN 2017 brings to you the ultimate Fusion Band Contest, Manthan. This is where you perform live competing with other bands trying to live the dream. 
<br><br>
 <button type="button" class="btn btn-primary btn-sm manthanButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".manthanButton").html((events.indexOf('manthan')>-1)?"UNREGISTER":"REGISTER");
            </script>
 </button>
<br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>21st January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>  
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Prizes worth Rs 35000 
         <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;A chance to record their music in Soundkraft Recording Studio 
         (Hyderabad) 

<br>


<strong>No. of Band members allowed :</strong> Maximum 7
<br><br>
<strong>EVENT FORMAT</strong>
<br>
Consists of two rounds.<br>

<strong>PRELIMS</strong><br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;In first Round of Screening participants have to upload their music performance on
 <a href='#'>SongDew.com</a>
 by downloading the app and use the college code 
that will be given once the event registration will be done.
                        <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Deadline to upload videos is <strong>15th January 2017 , 11:59PM</strong>
                        <br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;No videos will be considered after the deadline</strong>
                        <br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Only team leader needs to register at elan.org.in
                        <br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Shortlisted bands get to perform at Elan-e-Jung finals, Elan 2017.
                         <br>

<strong>FINALS</strong><br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;6 bands will be shortlisted from the prelims round to perform at the 		Biggies stage.<br>
		 		
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Each 	band will be given <strong>20</strong> mins to perform on stage including sound 	check (subjected to changes);<br>
 		
<br>

<strong>JUDGING CRITERIA</strong><br>	

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The winners will be announced by the judges immediately after the event. Judge’s decision is considered final and should be abided by everyone.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;All the finalists will be given the participation certificates.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The prize money will be distributed only among the top 2 contestants.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The crowd‘s response is considered important.
	<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The following will be looked in the contestants/bands performance:<br>
Entertainment<br>
Originality<br>
Public involvement<br>
Energy<br>
Attitude<br>


<br>

<strong>RULES AND REGULATIONS</strong>
<br>	


<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Any non-professional band is allowed to register. You need not be a college band to participate in this event.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Language is no criterion. We are looking for bands that play fusion music (anything except metal) and in any language.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Registering team should send/upload one demo in the process of registration. The demo need not be a studio recording.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;No band can have more than 7 members. Also, no person can play for more than 2 different bands. 	<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The bands cannot share the same frontman. 	<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;ELAN reserves the right to shift any band's slot timings at any point of time before the prelims.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;In case of any damage to the provided equipment, the band will be fined 	for the damage and may be disqualified. <br>	
	
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The decision is dependent on the nature of the damage and the judge's discretion. 	<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;ELAN reserves the right to cancel the event in case of some unforeseen circumstances. 	<br>
	
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;In case of any dispute the decision of the organizers will be final and binding.<br>
		
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Consumption of Alcohol and Drugs is strictly prohibited on Campus.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The Judges' decision shall be final and binding for all.<br>
	
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The decision of the organizers with respect to line-up is final and abiding.<br>
	
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The Elan 2017 team holds the right to change the rules at any moment of time.<br><br>
	

<strong>CONTACT PERSON</strong>
<br>
<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Yash Pitroda <br>          
Email : <a href="mailto:yash@elan.org.in">yash@elan.org.in</a><br>          
Mob : 9505464597  <br>    

<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;Harshwardhan Praveen <br>  

Email : <a href="mailto:me15btech11015@iith.ac.in">me15btech11015@iith.ac.in</a><br>

Mob : 9515223051

</p>
									</div>
									
									<a href="events.php#biggies_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
 <li class="grid">
            <a href="#campus_princess">
              <figure class="effect-apollo">
                <img src="images/biggies/campus_princess.jpg"  alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Campus Princess</h3>
              <div class="lb-overlay" id="campus_princess">
                  <img src="images/biggies/campus_princess.jpg" alt="image4" />
                  <div class="gal-info">              
                    <h3>Campus Princess</h3>
                    

                        <h4 style="text-align: left;font-size: 25px"><strong>About</strong></h4>
                    <p style="">
                    An event for all those pretty ladies out there, here is your chance to get selected for the Femina Miss India beauty pageant! 
In this star-studded event, watch as the beauty queens bedazzle you with their grace, 
show their grit in the Q&A round and go on to take the crown.
 <br>


 <button type="button" class="btn btn-primary btn-sm campus_princessButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
                          $(".campus_princessButton").html((events.indexOf('campus_princess')>-1)?"UNREGISTER":"REGISTER");
                          </script>
            </button>             
</p>


<span style="text-align: center;">

<strong style="position: absolute;top: 320px;text-align: left;font-size: 25px">Details</strong  ></span>


<p style="position: absolute;top: 380px;" >

<strong>Date :</strong> 21st January 2016<br>
<strong>Time :</strong> 5:00 PM IST <br>
<strong>Venue :</strong> IIT Hyderabad Permanent Campus<br>
The <strong>WINNER</strong> gets direct entry into the final round of 
Miss India 2017 Mumbai Auditions. 
<br>
 <br>

                  </div>
                  <a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
              </div>
          </li>
                    
                    


<h1 style="text-align: center;background-color: brown;font-size: 35px;padding-top: 2px;padding-bottom: 4px" id="culti_events">Culti</h1>


					<li class="grid">
						<a href="#breakfree">
							<figure class="effect-apollo">
								<img src="images/culti/breakfree.jpg" alt="image5">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
						<h3>BreakFree</h3>
							<div class="lb-overlay" id="breakfree">
									<img src="images/culti/breakfree.jpg" alt="image5" />
									<div class="gal-info">							
										<h3>BreakFree</h3>
										<p>Welcome to the true culture of break dance. Elan 2017 provides a platform for all the passionate

dancers to show their talent and mesmerize the audience.<br>

"Pick your body up and drop it on the floor

We never quit, we never rest on the floor

If I ain't wrong we'll probably die on the floor"

- Lines from Jlo's "on the floor".<br>

If you really dance from the heart, if dance runs through your veins and if dance is in every

minute of your life........................... This is where you should be !
<br>
So rise and shine.
<br>
Dance with energy and Elan!!
<br>
Coordination is what matters when it comes to a group performance. Break free is one such

group dance event ​where one can show off their individual talents or spellbind the crowd with

their coordination. It's time to move n shake n drop.
<br>
 <button type="button" class="btn btn-primary btn-sm breakfreeButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".breakfreeButton").html((events.indexOf('breakfree')>-1)?"UNREGISTER":"REGISTER");
            </script>
 </button>
	<br>

  <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 25000 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 15000 + goodies 
<br>


<strong>EVENT FORMAT</strong>

<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The Event will be conducted in 2 rounds - Prelims and finals<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Minimum size of the team-6.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; All the registered teams shall participate in prelims.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Six teams will be shortlisted from the prelims and will be performing in the finals.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; During the whole competition, at any given time, minimum of 4 performers should be on the stage.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; During the prelims each team will be given 3-5mins to perform.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The song must be of 6-9 minutes long for finale.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Participants should not perform the song (or part of the song) which was performed.During the prelims in the finals. This means, they cannot use the movement sequences of duration greater than 15 secs/music of their previous performances in coming rounds.<br>

									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>


					<li class="grid">
						<a href="#looseyourfeet">
							<figure class="effect-apollo">
								<img src="images/culti/looseyourfeet.jpg" alt="image6">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
						<h3>Loose Your Feet</h3>
							<div class="lb-overlay" id="looseyourfeet">
									<img src="images/culti/looseyourfeet.jpg" alt="image6" />
									<div class="gal-info">							
										<h3>Loose Your Feet</h3>
										<p>Got your own dance style you think you've mastered?

An event for pro solo dancers​, Lose your feet is where you can make the crowd go crazy with

those awesome, super cool moves!.
<br>

 <button type="button" class="btn btn-primary btn-sm looseyourfeetButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".looseyourfeetButton").html((events.indexOf('looseyourfeet')>-1)?"UNREGISTER":"REGISTER");
            </script>
 </button>

  <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 7000 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 3000 + goodies 
<br>


<strong>EVENT FORMAT</strong>

<br>



<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The event comprises of eliminations followed by finals. ( prelims, semi-final and final).<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Registration can be done online or on the spot.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Performance duration should be 3-5 min for prelims, 5-7 min for semi-final and for 2-3 min final.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; For prelims and semi-final you have to bring your own song. You cannot repeat dance

steps or moves. You can get similar music beats... but not similar dance steps.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; For final round you will be given a random song and also some time to prepare and you

have to perform at least 2 min on that song.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Final score will be combined score of semi-final and final.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Prelims will be on first day. Semi-finals and final will be on next day depending on the participation**.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Participants should bring their music/song in CD/DVD or a pen drive.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Number of participants for final will depend on participation as well as judges opinion.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; You can perform any type of non-classical dance like hip-hop, stepping, popping, etc.<br>
</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    
                    
					<li class="grid">
						<a href="#nrityanjali">
							<figure class="effect-apollo">
								<img src="images/culti/nrityanjali.jpg" alt="image7">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Nrityanjali</h3>
							<div class="lb-overlay" id="nrityanjali">
									<img src="images/culti/nrityanjali.jpg" alt="image7" />
									<div class="gal-info">							
										<h3>Nrityanjali</h3>
										<p>Dance, as we know ,is one of the 64 forms of art in the Indian Culture. It embodies all forms of

physical art and learning. It is a kinetic form of body language expressed in unarticulated

emotions.

Classical dance is the fusion of mind's emotions and body's articulate movements. So, we call

upon all the classical dancers to come and produce the medley of most graceful and most

expressive.

Come....drown yourself in divine, grace, beauty, tenderness to delight the eyes and souls of the

viewers.
<br>
 <button type="button" class="btn btn-primary btn-sm nrityanjaliButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".nrityanjaliButton").html((events.indexOf('nrityanjali')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>
<script type="text/javascript">

</script>



  <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 7000 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 3000 + goodies 
<br>


<strong>EVENT FORMAT</strong>

<br>



<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Event consists of only one round and the results are decided by the judge.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The competition is open only to college students with a valid ID card.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; You can perform in any Indian classical dance form [we'd love to see Bharatanatyam,

Kuchipudi, Odissi, Mohiniyattam and others].<br> However there are no separate judging

categories for the different forms<br>
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    
					<li class="grid">
						<a href="#just-duet">
							<figure class="effect-apollo">
								<img src="images/culti/just-duet.jpg" alt="image8">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Just Duet</h3>
							<div class="lb-overlay" id="just-duet">
									<img src="images/culti/just-duet.jpg" alt="image8" />
									<div class="gal-info">							
										<h3>Just Duet</h3>
										<p>A perfect event for a pair of dancers. Participants need to showcase their talent by dancing in

duo. Could be couple or anyone who can dance to the grooves coordinating each other which is

by the way very essential part of this event.
<br>
 <button type="button" class="btn btn-primary btn-sm just_duetButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".just_duetButton").html((events.indexOf('just_duet')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>


  <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 7000 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 3000 + goodies 
<br>


<strong>RULES & REGULATIONS</strong>

<br>


<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The team should consist of two participants irrespective of their gender.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The event consists of two rounds.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Round 1(preliminary round):<br>

○ Participants can perform any style of dance for any song of their choice.<br>

○ Time of performance should not exceed 4 minutes.<br>

○ Participants will be given an extra time of 1 minute for settling down.<br>

○ A total of 7 teams will get selected for the final round.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Round 2(final round):<br>

○ Participants should dance to the tracks given by the Organizers<br>

○ Each team will be given time to choreograph for the song, which will not exceed

15 minutes.
<br>
○ An additional time of 2 minutes will be given for settling.<br>

○ Time of performance should not exceed 3 minutes.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Decision taken by the judges will be final.<br>
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
					<li class="grid">
						<a href="#vibrazione">
							<figure class="effect-apollo">
								<img src="images/culti/vibrazione.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Vibrazione </h3>
							<div class="lb-overlay" id="vibrazione">
									<img src="images/culti/vibrazione.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Vibrazione A Solo Singing Competition</h3><br>
										<h4>DO YOU THINK YOU CAN SING?</h4><br>
										<p>Wanna put your singing skills to the test? Got a versatile voice that can mesmerize everyone? Put

your heart to it and sing your way to glory!

<br>
 <button type="button" class="btn btn-primary btn-sm vibrazioneButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".vibrazioneButton").html((events.indexOf('vibrazione')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>

  <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 3000 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 1000 + goodies 
<br>


<strong>EVENT FORMAT</strong>

<br>


<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; It is solo singing competition.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Registrations can be online or On Spot during ELAN<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; This competition consists of 2 rounds- Elimination and Finals<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Elimination Round: To participate in the Vibrazione, you must have 5 songs that you

know very well and must be ready to perform any of those 5 songs for the competition. If

someone else has chosen your song, or something does not work out with your first

choice, you will need to be ready to sing your other choice.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Finals: For finals participant must sing one slow song and one fast song.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; A "People's Choice" award will be given to the winner with the most audience votes*.<br>
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    
                    <li class="grid">
						<a href="#nailart">
							<figure class="effect-apollo">
								<img src="images/culti/nailart.jpg" alt="image10">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        
						<h3>Nail Art</h3>
							<div class="lb-overlay" id="nailart">
									<img src="images/culti/nailart.jpg" alt="image2" />
									<div class="gal-info">							
										<h3>Nail Art</h3>
										<p>Can you add your intricate details creatively on much smaller canvas like finger nails? Then

come, show up your talent in 'Nail Art' of ELAN 2017!!


<br>
 <button type="button" class="btn btn-primary btn-sm nailartButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".nailartButton").html((events.indexOf('nailart')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>

  <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 750 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 750(worth) + goodies
<br>

<br>
<strong>RULES & REGULATIONS</strong>

<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Contestants shall use only the paints provided to them by the organizers.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; There will be a time limit of 7 minutes and you should complete in that time<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Judges decision is final and binding<br>

JUDGING CRITERIA<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Neatness<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Time duration<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Attractiveness<br></p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>

					<li class="grid">
						<a href="#mehendi">
							<figure class="effect-apollo">
								<img src="images/culti/mehendi.jpg" alt="image11">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
						<h3>Mehindi Art</h3>
							<div class="lb-overlay" id="mehendi">
									<img src="images/culti/mehendi.jpg" alt="image1" />
									<div class="gal-info">							
										<h3>Mehindi Art</h3>
										<p>Mehndi adorns the hands and Life takes on a new color. So let the henna flow out of your cones

and let's see what color it brings to your life.

<br>
 <button type="button" class="btn btn-primary btn-sm mehendiButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".mehendiButton").html((events.indexOf('mehendi')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>

 <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 750 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 750(worth) + goodies
<br>

<br>
<strong>EVENT FORMAT</strong>


<br><br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Registrations will be on the spot during ELAN<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Mehendi cones will be provided by the organisers.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Designs are of your own choice.<br>

RULES AND REGULATIONS<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; There will be a time limit (1 hour)<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; There is no limit on the number of cones. You can use as many as you want<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; You will be allowed to put mehendi only one hand.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Judges' decision is final and binding<br>

JUDGING CRITERIA<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Attractivness<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Creativity<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Neatness<br></p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>


					<li class="grid">
						<a href="#claymodelling">
							<figure class="effect-apollo">
								<img src="images/culti/claymodelling.jpg" alt="image12">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
						<h3>Clay Modelling</h3>
							<div class="lb-overlay" id="claymodelling">
									<img src="images/culti/claymodelling.jpg" alt="image12" />
									<div class="gal-info">							
										<h3>Clay Modelling</h3>
										<p>Come! Bring life to figments of your own thoughts and imaginations by moulding beautiful

structures out of clay! Win exciting prizes!!

<br>
 <button type="button" class="btn btn-primary btn-sm claymodellingButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".claymodellingButton").html((events.indexOf('claymodelling')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>


 <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 750 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 750(worth) + goodies
<br>

<br>
<strong>EVENT FORMAT</strong>
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Registrations will be on the spot during ELAN<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The following materials will be provided to you <br>

○ Polymer clay<br>

○ Paints (if required)<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; One can select his/her own theme or model. Every participant will be given limited amount of clay and time, so one has to really plan out his model so as to not run out of clay.<br>

RULES AND REGULATIONS<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The amount of clay and paint provided will be limited.Team size should be less than 3<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The final results will be announced on the final day of ELAN.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The decision of the organisers is final and binding to all<br>
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>


					<li class="grid">
						<a href="#facepainting">
							<figure class="effect-apollo">
								<img src="images/culti/facepainting.jpg" alt="image13">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Face Painting</h3>
							<div class="lb-overlay" id="facepainting">
									<img src="images/culti/facepainting.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Face Painting</h3>
										<p>Wanna have some fun with painting?. You think you can have a face funkier than infamous

"THE MASK". Then here's something interesting for you. ELAN 2017's infamous Face Painting

is back! . Grab a brush and make your friend's face funny and beautiful.

 <button type="button" class="btn btn-primary btn-sm facepaintingButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".facepaintingButton").html((events.indexOf('facepainting')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>

<br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 1000 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 1000(worth) + goodies
<br>

<br>
<strong>EVENT FORMAT</strong>
<br>


<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Registrations will be done on the spot during ELAN<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Each Team must consist of 2-3 members<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The following materials will be provided to you<br>

○ Cosmetic grade face paint<br>

○ Brushes<br>

○ Tissues<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Duration of the Event will be 2 hours.<br>

RULES AND REGULATIONS<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; There are no theme constraints. All kinds of themes and patterns are allowed.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Participants should use only the materials provided by the organizers.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Decision of judge shall be final and binding.<br>
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>





<li class="grid">
						<a href="#nukkadnatak">
							<figure class="effect-apollo">
								<img src="images/culti/nukkadNatak.jpg" alt="image61">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Nukkad Naatak</h3>
							<div class="lb-overlay" id="nukkadnatak">
									<img src="images/culti/nukkadNatak.jpg" alt="image61" />
									<div class="gal-info">							
										<h3>Nukkad Naatak: A Street play competition</h3>
										<p>Haven't you ever wanted to change the way our country functions? Well, it's time to be the

change you want to see!

Elan 2016 is bringing Forward, Nukkad Natak-A Street Play Competition.

It is all about creating awareness about social problems that plague our soil and bringing about

realization in our youth!.<br>

 <button type="button" class="btn btn-primary btn-sm nukkadnatakButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".nukkadnatakButton").html((events.indexOf('nukkadnatak')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>

<br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 10000 
            <br>

<br>
<strong>RULES AND REGULATIONS</strong>
<br>


<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Team Size: 5-15 People(Including Music Accompanists)<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Time Limit:10-15 Minutes<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Atleast 5 persons must be included in the play<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Music Accompanists are included in the team<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Teams are expected to perform at the open air venue, on a circular stage with an audience

on all sides.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Language of Performance Must be in Hindi/English or both<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Plays can be based on any theme.Any content directed against a certain political group or

religious community is strictly prohibited.<br><br>

JUDGING CRITERIA<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Dramatization<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Screenplay<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Script<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Crowd interaction
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Overall impact<br>


</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>







					<li class="grid">
						<a href="#octaves">
							<figure class="effect-apollo">
								<img src="images/culti/octaves.jpg" alt="image14">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
						<h3>Octaves</h3>
							<div class="lb-overlay" id="octaves">
									<img src="images/culti/octaves.jpg" alt="image5" />
									<div class="gal-info">							
										<h3>Octave:A Solo Instrument Competition</h3>
										<p>This event pits the best against the best on the cultural stage. The name says it all and if you

think you have mastered the instrument of your choice, then this is the stage for you. Not just

that, this also tests your creativity and sees if you can come up with your own tune to wow us.
<br>
 <button type="button" class="btn btn-primary btn-sm octavesButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".octavesButton").html((events.indexOf('octaves')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>




<br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 3000 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 1000(worth) + goodies
<br>

<br>
<strong>RULES AND REGULATIONS</strong>
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; This being a solo competition allows no more than one person per team.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Registration: On the spot/Online<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Duration of each performance in the first round: 6 min  (empty stage to empty stage)<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Duration of each performance in the second round: as long as the backing track lasts (empty stage to empty stage)
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; There will be two categories. Melody and percussion instruments.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; -Round 1 <br>

○ Participants will be given 6 minutes to play anything they want.<br>

○ Based on the scores of the first round 2 participants from each category

progresses into the second round.<br>

○ Overshooting the time limit will result in a penalty.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; -Round 2 <br>
○ *The second round will be a face-off between the top two from each category. Ie,

the first in melody vs the second in melody and similarly for percussion.<br>

○ After qualification after the first round, the finalists will be given tracks to play

over. Ie, the melody finalists will be given tracks with percussion to play over and

vice-versa. This will be done to ensure fair judging.<br>
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>


					<li class="grid">
						<a href="#andaazapnapna">
							<figure class="effect-apollo">
								<img src="images/culti/andaazapnapna.jpg" alt="image15">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
						<h3>Andaz Apna Apna</h3>
							<div class="lb-overlay" id="andaazapnapna">
									<img src="images/culti/andaazapnapna.jpg" alt="image6" />
									<div class="gal-info">							
										<h3>Andaz Apna Apna</h3>
										<p>This one is for all the pro stage performers out there! A perfect place for those who can take over

the crowd with their humorous comedy and exceptional acting skills.

An unprecedented opportunity to showcase your pro skills as a "Stand-up Comedian", or a

"Mono-Actor".A Stage to perform and a huge crowd to be captivated. Step up, and leave the

audience enthralled !.
<br>
 <button type="button" class="btn btn-primary btn-sm andaazapnapnaButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".andaazapnapnaButton").html((events.indexOf('andaazapnapna')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>


<br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 3500 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 1500 + goodies worth 3000
<br>

<br>
<strong>EVENT FORMAT</strong>
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; There will be 2 rounds, prelims and final.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Your performance could either be a "mono-act", or a "stand-up comedy", or both.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Languages preferred are English, Hindi, and Telugu.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Duration of act should be 4-7mins for the prelims. It is 6-10mins for final round .<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Registration can be done online or on-spot during Elan-2017.<br>

<strong>RULES AND REGULATIONS</strong>

<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Any kind of fluid or flame is not allowed on stage.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Time limit should be strictly followed failing which there will be deduction in your

respective score.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Music/background tracks for the performance, if any, are to be arranged by the

participants itself.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; If you need any props for mono-acting then bring your own.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Large props like chairs and tables etc. can be arranged, but the participants have to

inform earlier.
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Judge's decisions are final and binding.<br>
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    
                    
					<li class="grid">
						<a href="#filmfarefiesta">
							<figure class="effect-apollo">
								<img src="images/culti/filmfarefiesta.jpg" alt="image16">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Film Fare Fiesta</h3>
							<div class="lb-overlay" id="filmfarefiesta">
									<img src="images/culti/filmfarefiesta.jpg" alt="image7" />
									<div class="gal-info">							
										<h3>Film Fare Fiesta</h3>
										<p>Do you think you can take after Steven Spielberg, Christopher Nolan and James Cameron? Make

your own short film, enthral and captivate movie buffs with your creativity. The stage at ELAN

is set for you. Get judged by esteemed people in film industry.
<br>
 <button type="button" class="btn btn-primary btn-sm filmfarefiestaButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".filmfarefiestaButton").html((events.indexOf('filmfarefiesta')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>

<br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 1000 + goodies 
        <br>
<br>

<strong>EVENT FORMAT</strong>
<br>



<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The event film fare fiesta is spread over two days<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; All the entries are judged on the first day to shortlist 6 out of them. These 6 will be

judged on second day by esteemed judges.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The judging criteria will be:<br>

○ Script<br>

○ Direction<br>

○ Screenplay<br>

○ Costumes<br>

○ Dialogues<br>

○ Cinematography<br>

○ Sound editing/ mixing<br>

○ Visual effects<br>

RULES AND REGULATIONS<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Run time should not be more than 20 minutes<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Movie should be shot at a minimum resolution of 480 pixels. Marks might be reduced<br>

due to poor video/ audio quality.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Any attempt at copyright infringement can lead to immediate disqualification.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Plagiarism is accepted with due credits.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Films in languages other than English, Hindi, and Telugu should be accompanied with

subtitles .<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Participants should send their videos/youtube links of the videos to <a href="mailto:nanda@elan.org.in">nanda@elan.org.in</a>

and <a href="mailto:harsha@elan.org.in">harsha@elan.org.in</a><br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The decision of the Organizers is final and binding.
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>							</div>
					</li>
                    
					<li class="grid">
						<a href="#picelectic">
							<figure class="effect-apollo">
								<img src="images/culti/picelectic.jpg" alt="image17">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>PicElectic</h3>
							<div class="lb-overlay" id="picelectic">
									<img src="images/culti/picelectic.jpg" alt="image17" />
									<div class="gal-info">							
										<h3>PicElectic</h3>
										<p>Portray your photography skills by shooting pictures in,on and about ELAN 2017. There will be

2 winners announced each day of the 3 days the fest goes on. The pictures can be submitted any

time near the counter that is allocated.

<br>
 <button type="button" class="btn btn-primary btn-sm picelecticButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".picelecticButton").html((events.indexOf('picelectic')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>


<br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 5000 + goodies 
        <br>
<br>

<strong>RULES AND REGULATIONS</strong>
<br>


<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The captures must be only during the 3 days of the ELAN fest and only inside IIT

Hyderabad premises.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The pics must be taken only using a Digi-cam or a Bluetooth enabled mobile (for transfer purpose)<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Winner is judged according to the moments captured in the best way<br>

Note:: Clarity is not considered until there is a tie b/w pics that are similar.</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>	
							</div>
					</li>

                    

					<li class="grid">
						<a href="#artexhibition">
							<figure class="effect-apollo">
								<img src="images/culti/artexhibition.jpg" alt="image20">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Art Exhibition</h3>
							<div class="lb-overlay" id="artexhibition">
									<img src="images/culti/artexhibition.jpg" alt="image8" />
									<div class="gal-info">							
										<h3>Art Exhibition</h3>
										<p>Ever visited an art gallery? Ever checked out those portraits costing so much? Which one of

those trillion random colour strokes on the canvas you think makes it so expensive? It's all about

language of the heart which uses the paints and a brush to put the emotions flowing in a river of

imagination on the canvas. And that is "ART".

<br>"EVERYTHING YOU CAN IMAGINE IS REAL" - Pablo Picasso

Art is an expression,a representation of what a person's vivid thoughts and emotions

speak. Every stroke of the brush dipped, every colour chosen, every shade painted, has its own

meaning. So here is ELAN encouraging you to come up with your meaningful strokes to be a

part of its colourful art gallery. The gallery is open to everyone throughout the fest.


<br>
 <button type="button" class="btn btn-primary btn-sm artexhibitionButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".artexhibitionButton").html((events.indexOf('artexhibition')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>



<br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 2500 
            <br>
        <strong>2nd position :</strong> 
        <br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 1500 + goodies worth 9000
<br>
<br>
<strong>EVENT FORMAT</strong>
<br>



<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Registrations can be done online or on the spot.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Participants are to submit finished works of art.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Paintings will be exhibited throughout the fest in ELAN gallery.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The three best paintings will be selected and prizes will be announced on the last day of

the fest.<br>
<br>
<strong>JUDGING CRITERIA</strong>


<br>

1. Topic chosen<br>

2. Creativity<br>

3. Coloration Skills<br>

<strong>RULES AND REGULATIONS</strong>

<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Paintings can be either brought in person or can be sent by post*.<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Entries that are received on or before 22 Jan 2017 will be evaluated. Those received

through post during ELAN will not be evaluated, only those received in person are

evaluated.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The painting should be at least of A3 size.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Judges decision is final and binding.<br>

(Note: Organizers are not responsible for any delay or damage caused to the entries.)<br>
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>	
					</li>
					<li class="grid">
						<a href="#djwars">
							<figure class="effect-apollo">
								<img src="images/culti/djwars.jpg" alt="image21">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>DJ Wars</h3>
							<div class="lb-overlay" id="djwars">
									<img src="images/culti/djwars.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>DJ Wars</h3>
										<p>The most awaited event!!! Back with a bang in ELAN 2017!!

For all the aspiring DJ's out there!! Can you mix'em good enough?!

Spin'em to own'em!!

Battle with beats! Fight with tunes! May the best one win!This is the War of DJ's, where DJ's

compete with each other, on a huge platform, like never before!
<br>
 <button type="button" class="btn btn-primary btn-sm djwarsButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".djwarsButton").html((events.indexOf('djwars')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>



<br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 20000 + goodies
        <br>


<strong>INFRASTRUCTURE SUPPLIED</strong>
<br>




<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; A DJ console(Mark I) and mixer<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; 4 pin DJ sound system<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Effect lights[sprinklers, lasers, cans, and smoke<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Sound Monitors<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; 2 mics<br>
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>	
							</div>
					</li>
                    
                    
                    
                    
                     
					<li class="grid">
						<a href="#rjhunt">
							<figure class="effect-apollo">
								<img src="images/culti/rjhunt.jpg" alt="image22">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>RJ Hunt</h3>
							<div class="lb-overlay" id="rjhunt">
									<img src="images/culti/rjhunt.jpg" alt="image7" />
									<div class="gal-info">							
										<h3>RJ Hunt</h3>
										<p>Ever been called a chatterbox? If you are good at entertaining your friends with non-stop,

animated, energetic chatter, here's the right platform to test how good you are!

Entertain the crowd, and you might probably find yourself among the RJ legends!

A ramp to your RJ ying future!

<br>
 <button type="button" class="btn btn-primary btn-sm rjhuntButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".rjhuntButton").html((events.indexOf('rjhunt')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>

            <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 20000 + goodies
        <br>


<strong>EVENT FORMAT</strong>
<br>



<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Online Round:<br>

○ This round will be an online as well as a spot round for spot registered candidates.<br>

○ People who have registered online have to send a recorded file (.mp3 or .wav

format) where they have to speak on a topic for about two minutes and the people

who are selected go to the interview round directly. The recording should be done

either in Telugu ,English or Hindi.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Spot Round:<br>

○ This round is like the preliminary round for the spot registered candidates.<br>

○ Participants will be given a random topic to speak on for about 2 minutes.<br>
○ Finally, about 10 people will be selected for interview round (including the online

and spot round).<br>


<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Interview Round:<br>


○ These 10 candidates will be interviewed by asking questions and giving them

situations.<br>


○ 5 candidates will be selected for the final round.<br>


<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Final Round<br>


○ In final round, the contestant will have to host a show like an actual RJ does . 
<br>
○ The Contestants are expected to entertain the audiences by telling stories, current affairs (about ELAN 2017), cinema news, etc. 
<br>
○ Each contestant has to perform for maximum of 20 minutes. <br>
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    
					<li class="grid">
						<a href="#lendmeurvoice">
							<figure class="effect-apollo">
								<img src="images/culti/lendmeurvoice.jpg" alt="image23">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Lend Me Your Voice</h3>
							<div class="lb-overlay" id="lendmeurvoice">
									<img src="images/culti/lendmeurvoice.jpg" alt="image8" />
									<div class="gal-info">							
										<h3>Lend Me Your Voice</h3>
										<p>A perfect opportunity to test your ability to be creative and prompt together with the presence of

mind. Ever thought that you could have delivered the dialogues better than the actors in the movie?

Then this is the right place for you to be. ELAN 2017 presents a unique event "Lend Your Voice".
<br>
 <button type="button" class="btn btn-primary btn-sm lendmeurvoiceButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".lendmeurvoiceButton").html((events.indexOf('lendmeurvoice')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>
                        <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong>
<br>
&nbsp;    <strong>1st position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 750
        <br>

&nbsp;    <strong>2nd position :</strong> 
<br>
         <span class="glyphicon glyphicon-star"></span>&nbsp;&nbsp;&nbsp;Rs 750(worth)
        <br>

<strong>EVENT FORMAT</strong>
<br>



<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The contestants are provided with an option of a few ACTION HERO VIDEOS<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; They will be given half hour to choose the video<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; After choosing the video the participants will be given another half hour for preparation

in which they are supposed to come up with a humorous and entertaining version of the

video by putting their own voice into the characters.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; They are then supposed to perform it on stage while the video is being played, with the

actual dialogues muted<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; All the videos will be 1 min long.<br>

<strong>RULES AND REGULATIONS</strong>

<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; It consists of only one round.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The participants will be given a given a movie clipping one hour before the competition.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; During the competition, the audio of the clipping will be muted, and the participants have

to make out their own dialogues and deliver it parallel in sequence with the video and

must make it as funny as possible.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The clippings will be given in English, Telugu or Hindi as per your choice.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; You will be judged based on the dialogues you make and the way you present it.<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; Use of unparliamentary language is strictly prohibited and will lead to disqualification<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The decision of the judges and organizers is final and binding<br>
</p>
									</div>
									<a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>	
							</div>
					</li>
<!-- 					<li class="grid">
						<a href="#image-24">
							<figure class="effect-apollo">
								<img src="images/infi/walktheramp.png" alt="image24">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Walk The Ramp</h3>
							<div class="lb-overlay" id="image-24">
									<img src="images/infi/walktheramp.png" alt="image4" />
									<div class="gal-info">							
										<h3>Walk The Ramp</h3>
										<p>Coming Soon....</p>
									</div>
									<a href="events.php" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li> -->


<h1 style="text-align: center;background-color: brown;font-size: 35px;padding-top: 2px;padding-bottom: 4px" id="infi_events">Infi</h1>
                    <li class="grid">
						<a href="#minutetowinit">
							<figure class="effect-apollo">
								<img src="images/infi/minutetowinit.jpg" alt="image25">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Minute To Win It</h3>
							<div class="lb-overlay" id="minutetowinit">
									<img src="images/infi/minutetowinit.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Minute To Win It</h3>
									
										<p>
          Fun and Goodies, What a great combination. 
Isn’t it? ELAN presents you all the traditional games with a little twist. 
Get ready to grab some goodies! 

                        <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br>

        <br>
<strong>EVENT FORMAT</strong>
<br>



<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The events can be performed single or in a group depending on the event. 
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; No malpractices. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The decision of the organizers is final. 
<br>
<br>
Organizer : Akhil Ashref , Akshita Ramya 

</p>
         </div>
         <a href="events.php#culti_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a> 
       </div>
     </li>
<!--                     <li class="grid">
						<a href="#image-26">
							<figure class="effect-apollo">
								<img src="images/infi/fieldkings.jpg" alt="image26">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Field Kings</h3>
							<div class="lb-overlay" id="image-26">
									<img src="images/infi/fieldkings.jpg" alt="image26" />
									<div class="gal-info">							
										<h3>Field Kings</h3>
										<p>Coming Soon</p>
									</div>
									<a href="events.php" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                     -->
                    <li class="grid">
						<a href="#langaming">
							<figure class="effect-apollo">
								<img src="images/infi/langaming.png" alt="image27">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Lan Gaming</h3>
							<div class="lb-overlay" id="langaming">
									<img src="images/infi/langaming.png" alt="image4" />
									<div class="gal-info">							
										<h3>Lan Gaming<br></h3>

         
          <p>
          “Fire in the hole”. If you know what I mean, 
Come join us for a fun filled day of gaming. 
Let’s find out, who is the pro! 

                        <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br>

        <br>
<strong>GAMES</strong>
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;DoTA 2 <br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;CS:GO  <br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Call of Duty: Modern Warfare 3  <br>

<strong>RULES</strong>
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The teams for DoTA 2, CS:GO need to consist of five members each. 
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp; The games will be held in a tournament style format. 
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;In case of malpractice the concerned team will be disqualified or faced with a penalty. 
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Organiser’s decision final and binding to all 
<br>
<br>
Organizer : Ayush Negi  (+91-8280032282) , Supreet Singh 

</p>
									</div>
									<a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    <li class="grid">
						<a href="#finaldestination">
							<figure class="effect-apollo">
								<img src="images/infi/finaldestination.jpg" alt="image28">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Final Destination</h3>
							<div class="lb-overlay" id="finaldestination">
									<img src="images/infi/finaldestination.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Final Destination </h3>
									
         
          <p>
          Ever dreamt of finding Blackbeard’s Treasure. 
If yes then you are just in the right place. 
ELAN brings to you a real treasure, If you can find it!! 

                        <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br>

        <br>

<strong>RULES</strong>
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Teams should consist of 4 members. 
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The teams should assemble 30 min before the start of the game. 

<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;There will be different clues to be solved at the different checkpoints. 

<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The first team coming at each checkpoint will get the opportunity to perform the task first. 
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Without solving one clue you can't move to the next. 
 
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The first two teams to complete every task and bag maximum points will be rewarded. 
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Malpractice will lead to disqualification. 

<br>
<br>
Organizer : Aswin Kumar 

</p>
									</div>
									<a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>






  <li class="grid">
						<a href="#casinoRoyale">
							<figure class="effect-apollo">
								<img src="images/infi/casino.jpg" alt="image31">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Casino Royale</h3>
							<div class="lb-overlay" id="casinoRoyale">
									<img src="images/infi/casino.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Casino Royale</h3>
										<p>Who doesn’t love to gamble? Raring to test out that poker face you’ve been practising for so long? 

Well, look no more, coz you’ve come to the perfect place. Whether it’s the spin of the roulette wheel that catches your eye, or the shouts of ‘hit’ and ‘stay’ from the blackjack table that draw you in, the excitement in the air just won’t let you leave. May the odds be ever in your favour!

                        <br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br><br>
Organizer: Vidhan Jain , Mayank Hooda<br>

</p>
									</div>
									<a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>








  <li class="grid">
						<a href="#snakeLader">
							<figure class="effect-apollo">
								<img src="images/infi/snakelad.jpeg" alt="image63">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Human Snake and Ladders</h3>
							<div class="lb-overlay" id="snakeLader">
									<img src="images/infi/snakelad.jpeg" alt="image63" />
									<div class="gal-info">							
										<h3>Human Snake and Ladders</h3>
										<p>The name says it all doesn’t it? Indulge yourself in in the favourite board games of all times… 

Onspot registration
Organiser’s decision final and binding to all<br>

<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br><br>

<strong>RULES</strong>
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Onspot registration
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Organiser’s decision final and binding to all.
<br><br>

Organizer: Jeel Bhavsar<br>


</p>
									</div>
									<a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>








  <li class="grid">
						<a href="#foodathon">
							<figure class="effect-apollo">
								<img src="images/infi/cakeeat.jpeg" alt="image31">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Foodathon</h3>
							<div class="lb-overlay" id="foodathon">
									<img src="images/infi/cakeeat.jpeg" alt="image4" />
									<div class="gal-info">							
										<h3>Foodathon</h3>
										<p>Haters will hate but “Food is not a word, It’s a religion”. Nvision invites all the foodies for a real competition. Let’s see who is the biggest foodie..But wait, Is it so simple!! We don’t think so

<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br><br>

<strong>RULES</strong>
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Individual participation. 
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Onspot registration with limited number of entries. 
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Organiser’s decision final and binding to all. 
<br><br>

Organizer: Deepak Nathani (+91-9177289949)<br>

</p>
									</div>
									<a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>






                    <li class="grid">
						<a href="#madads">
							<figure class="effect-apollo">
								<img src="images/infi/madads.png" alt="image29">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Mad Ads</h3>
							<div class="lb-overlay" id="madads">
									<img src="images/infi/madads.png" alt="image4" />
									<div class="gal-info">							
										<h3>Mad Ads</h3>
                    <p>
                    Mad Ads is all about having fun, it’s about laughing and having a good time. 
Entertain the audience with some hilarious and innovative ads! 
Well you may get something in return, but only if you are hilarious enough! 

<br>

<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br>


<strong>RULES</strong>
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;This is a group event-group of 4-5. 
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Every member of the group should participate. 

<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The Product will be given by the organizers and in no case it can be exchanged. 

<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The group will be given 30 minutes for preparing the AD. 


<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The AD should be 3 min in length. 


<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;No vulgarity allowed and sportsmanship to be followed. 




<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Organiser’s decision final and binding to all. 



<br><br>

Organizer:Deepika Gonela  , Tejas Anand <br>

</p>


									</div>
									<a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>




					<li class="grid">
						<a href="#Conversation">
							<figure class="effect-apollo">
								<img src="images/infi/convcoffee.png" alt="image17">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Conversation Coffee</h3>
							<div class="lb-overlay" id="Conversation">
									<img src="images/infi/convcoffee.png" alt="image17" />
									<div class="gal-info">							
										<h3>Conversation Coffee</h3>
										<p>A hot cuppa to share with a friend may be some people’s idea of heaven. 
They have it made for them in Conversation coffee, where participants 
get to talk with a complete stranger for a stipulated time, 
and have to answer questions about the person they were teamed up with. 
The team that answers most questions correctly wins, but everyone goes home having made a new friend. Cheers!<br>



<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br>


<strong>RULES</strong>
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Partners will be assigned by random chits. 
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Participants will be given 10 minutes with their partners. 


<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The most correct answers will win. 

<br><br>



</p>
									</div>
									<a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
		


			</li>
                      <li class="grid">
						<a href="#walktheramp">
							<figure class="effect-apollo">
								<img src="images/infi/walktheramp.png" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Walk the Ramp</h3>
							<div class="lb-overlay" id="walktheramp">
									<img src="images/infi/walktheramp.png" alt="image4" />
									<div class="gal-info">							
										<h3>Walk the Ramp</h3>
										

										<p style="">
										You got the confidence to set the ramp on fire? 
Think you have the presence of mind to impress the judges? 
Then walk the plank, i mean, the ramp. 
A ramp walk, followed by a Q&A session with the judges.
Winners take home the titles of Mr and Ms Elan. 

 <br>

						<br>


<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br>


<strong>RULES</strong>
<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Online as well as on-spot registration. (3 hours before the event) 

<br>
<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Judges decision is final. 


<br>

<br>


</p>

									</div>
									<a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>

					

<!-- Online Events -->


<h1 style="text-align: center;background-color: brown;font-size: 35px;padding-top: 2px;padding-bottom: 4px" id="online_events">Online</h1>



          <li class="grid">
            <a href="#football">
              <figure class="effect-apollo">
                <img src="images/online/football.png" alt="image17">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Fantasy Football League</h3>
              <div class="lb-overlay" id="football">
                  <img src="images/online/football.png" alt="image17" />
                  <div class="gal-info">              
                    <h3>Fantasy Football League</h3><br><br>
                    <p>Elan & Fanzoo Are Bringing You The Ultimate Football Fan Experience 
<br>
<strong >Powered By</strong>
<br>
<img src="images/online/logo_10_12_2016_17_57.png" alt="image18" />

<br>

<strong>ABOUT</strong>
<br>

Elan, the premier cultural fest of IIT Hyderabad, is partnering up with Fanzoo Sports, 
India’s first completely customizable fantasy sports platform to give you the Elan 
Fantasy Football League. Play for free at <a href="http://www.fanzoosports.com/">fanzoosports.com</a> and stand a chance to win awesome prizes! Game On! 



<br>
<strong>ABOUT FANTASY SPORTS</strong>
<br>

Fantasy Sports are fun filled online games, in which you create and manage a virtual 
team of your favourite professional athletes from a particular sport. These teams 
compete based on the statistical performance of those players. You choose the team, 
the players perform and you get the points! 




<br>
<strong>PRIZES</strong>
<br>

Each Week you have a chance to win upto Rs. 4000 worth of PayTM Vouchers! Even if you team doesn't do well, 
we give you discount coupons. The overall winner of the two week league gets a 
grand prize as well! As we say - At Fanzoo, the Fan always wins! 




<br>
<strong>DATES</strong>
<br>

Week 1 - 14 and 15 Jan 
<br>
Week 2 - 21 and 22 Jan


<br>
<strong>HOW TO PLAY</strong>
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Sign up at <a href="http://www.fanzoosports.com/">www.fanzoosports.com</a> and Join the Elan Fantasy League  <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Choose your Formation. Hint: Formation 4-3-3 gives you most attackers! 
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Choose your Players. Hint: Star players like Zlatan are more costly and you need to 
stay within budget. Choose Wisely! <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Submit your team before the first EPL game on Jan 14th. Your Team is then set for Week 1.  <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Check our Live Leaderboard during and after the games to see how your team did! 
 <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;It's the same simple process for Week 2! Submit your team before the EPL matches begins on 21 Jan.  <br>

<br>
<strong>ABOUT FANZOO SPORTS</strong>
<br>

Fanzoo Sports is an online gaming platform which is revolutionizing fantasy sports in India. 
They offer weekly fantasy sports games where the sports fan can win amazing prizes just for participating. 
With a live and dynamic leaderboard and new smack talk options, Fanzoo has the best Fantasy Gaming Interface in India. 
What’s more, it’s always free to play. 
At Fanzoo, the Fan always wins! See more at <a href="http://www.fanzoosports.com/">www.fanzoosports.com </a



<br>

                  </div>
                  <a href="events.php#online_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
              </div>
          </li>



					<li class="grid">
						<a href="#emblazon">
							<figure class="effect-apollo">
								<img src="images/online/emblazon.jpg" alt="image17">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Emblazon</h3>
							<div class="lb-overlay" id="emblazon">
									<img src="images/online/emblazon.jpg" alt="image17" />
									<div class="gal-info">							
										<h3>Emblazon</h3>
										<p>The Annual Photography Contest Of Elan & Nvision IIT Hyderabad Is Finally Here 
<br>
<strong >Powered By</strong>
<br><br>
<img src="images/online/Nikon_Logo.png" alt="image18" />
<span style="font-size: 25px;">
<br><br>
Prizes worth <strong>15,000/-</strong> at stake!
<br>
Last Date: <strong>January 13, 2017</strong>
 </span>

<br>
<strong>EVENT FORMAT</strong>
<br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Emblazon is the online photography contest organized by nvision and Elan IIT Hyderabad together. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Upload your entry with the hashtag #Emblazon_IITH. Deadline for uploading your picture is 10th January, 2017. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;While you upload, nominate at least two other friends who you think can challenge you. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;There is no entry fee or any age restriction to participate in this contest. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;While you upload, nominate at least two other friends who you think can challenge you. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The theme for this year is <strong>STREETS , FESTIVALS</strong>. One can put any pictures taken in his/her vacation of any time. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;A maximum of two pictures will only be accepted per participant. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Photographs will be judged on Originality, Composition, and Overall aesthetics. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Only original photos are allowed. If any photo is found to be copied, that participant will be disqualified. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;However, one can edit or use any filter as per his choice but too much editing leading to the loss of originality may cause the points deduction. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;Any changes to the contest will be notified to entrants as soon as possible. <br>

<span class="glyphicon glyphicon-asterisk"></span>&nbsp;&nbsp;&nbsp;The winner will be declared by nvision and ELAN IITH on the set date on our official facebook page, also the winner will be intimated personally via an email.<br>
											ORGANIZERS<br>

Atul Raj <br>
<a href="mailto:cs15btech11006@iith.ac.in">cs15btech11006@iith.ac.in</a>
<br>
+91-7779915930<br> Chander Dev <br>
<a href="mailto:ee15btech11006@iith.ac.in">ee15btech11006@iith.ac.in</a>
<br>
+91-9494527690<br>

<br>
<strong>Use this content while you participate for a clear understanding :</strong><br> 

"As a part of the Emblazon photography contest conducted by 
Elan and ηvision, IIT Hyderabad, here is my photograph. 
I further nominate ___ and ___ to take the challenge. #Emblazon_IITH"<br> .
</p>
									</div>
									<a href="events.php#online_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>

                      <li class="grid">
  <a href="https://nvision.org.in/paperpresentation" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/paperpt.png" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Paper&nbsp;Presentation</h3>
            
          </li>

          <li class="grid">
  <a href="litfest">
              <figure class="effect-apollo">
                <img src="images/online/twistit.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Litfest</h3>
            
          </li>

          <li class="grid">
              <figure class="effect-apollo">
                <img src="images/online/got.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
                        <h3>Game Of Thrones Fanatic</h3>
          </li>

				
		


		<!--  Online events end -->	


<!-- Litr events Starts -->

<h1 style="text-align: center;background-color: brown;font-size: 35px;padding-top: 2px;padding-bottom: 4px" id="litr_events">Litr</h1>


                      <li class="grid">
						<a href="#mrdetective">
							<figure class="effect-apollo">
								<img src="images/litr/mrdetective.jpg" alt="image37">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Mr Detective</h3>
							<div class="lb-overlay" id="mrdetective">
									<img src="images/litr/mrdetective.jpg" alt="image37" />
									<div class="gal-info">							
										<h3>Mr Detective</h3>
										<p><br>
Put your deerstalkers on and get ready to solve the mystery

<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br>
Organizer - Sahil Yerawar(+91-9822977832)
</p>
<br><br><br><br><br>
<br><br><br>
 <button type="button" class="btn btn-primary btn-sm mrdetectiveButton" style="text-align:center;margin-left: 5%;">
            <script type="text/javascript">
            	            $(".mrdetectiveButton").html((events.indexOf('mrdetective')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>	
                                    <br>

<br>



									</div>
									<a href="events.php#litr_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    
                     <li class="grid">
						<a href="#wheel_of_fortune">
							<figure class="effect-apollo">
								<img src="images/litr/wheel-of-fortune.jpg" alt="image38">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Wheel Of Fortune</h3>
							<div class="lb-overlay" id="wheel_of_fortune">
									<img src="images/litr/wheel-of-fortune.jpg" alt="image38" />
									<div class="gal-info">							
										<h3>Wheel Of Fortune</h3>
										<p><br>
Like to quiz? Here’s a chance to put those grey cells to work. 
But don’t forget to get your lucky charms because the stakes are high! 
May the odds always be in your favour.
<br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br>
<strong>RULES</strong>
<br>
○ Participation in teams of 2. <br>
○ Organiser’s decision final and binding to all.  <br>
○ Online and Onspot registration with limited number of entries. <br>
<br>
Organizer - Vedhamoorthy(+91-8903900986)
</p>
<br><br><br><br><br>
<br><br><br>
<br><br><br><br><br>
<br><br><br>
<br><br>
 
 <button type="button" class="btn btn-primary btn-sm wheel_of_fortuneButton" style="text-align:center;margin-left: 5%;">
            <script type="text/javascript">
            	            $(".wheel_of_fortuneButton").html((events.indexOf('wheel_of_fortune')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>	
									</div>
									<a href="events.php#litr_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                     <li class="grid">
						<a href="#quizConclave">
							<figure class="effect-apollo">
								<img src="images/litr/quizzes.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
      <h3>Quiz Conclave</h3>
							<div class="lb-overlay" id="quizConclave">
									<img src="images/litr/quizzes.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Quiz Conclave</h3>
          <p>

Like to quiz? Here’s a chance to put those grey cells to work. 
But don’t forget to get your lucky charms because the stakes are high! 
May the odds always be in your favour.
<br><br><br>
<strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br>
<strong>GENERAL QUIZ</strong>
<br>
We know you haven’t been living under a rock, 
so this quiz should be an easy one for you. Or should it? 
<br>
Organizer - Vedhamoorthy(+91-8903900986)

<br>
<strong>SCI TECH QUIZ</strong>
<br>
Come on, this is an IIT. 
We were bound to explore developments in the world of science and technology. 
<br>
Organizer -  Asvin Kumar  , Shashank Varanasi (+91-8179303345)

<br>
<strong>MELAS QUIZ</strong>
<br>
Enter the world of pop culture. 
This quiz spans exactly five domains - Music, Entertainment, Literature, Art, Sports.  
<br>
Organizer - Rama Krishna , Aisha Dantuluri 

<br>
<strong>HARRY POTTER  QUIZ</strong>
<br>
Calling all potterheads. Can’t get enough of the world of the boy who lived? 
Well, we couldn’t either, so we made a quiz about it. 
<br>
Organizer - Tanya Marwah 


<br>
<strong>TOLLYWOOD QUIZ</strong>
<br>
Think you know everything about the world of South Indian cinema? 
Think you’d like to win some prizes? Well then, this is the place to be! 

<br>
Organizer - Prasad Thota 
 


</p>
 <br><br>
 
 <button type="button" class="btn btn-primary btn-sm quizzesButton" style="text-align:center;margin-left: -10%;">
            <script type="text/javascript">
            	            $(".quizzesButton").html((events.indexOf('quizzes')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>	
									</div>
									<a href="events.php#litr_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                     <li class="grid">
						<a href="#jam">
							<figure class="effect-apollo">
								<img src="images/litr/jam.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Just A Minute</h3>
							<div class="lb-overlay" id="jam">
									<img src="images/litr/jam.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Just A Minute</h3>
										<p>

          <strong>DETAILS</strong>
<br>
<strong>Date : </strong>20th , 21st and 22nd of January 2017
                <br>

<strong>Venue :</strong> IIT Hyderabad Permanent Campus
                <br>
<strong>Prize :</strong> Coming Soon
<br>


Participants are given topics on the spot and they have to speak on them. Err and you will be buzzed and relinquished of the mic
<br><br>
Organizers - Shashank Varanasi(+91-8179303345 ) , Gitanjali M (+91-9705512183) 
</p>
<br><br><br><br><br><br><br><br><br><br>
 <button type="button" class="btn btn-primary btn-sm jamButton" style="text-align:center;margin-left: 0%;">
            <script type="text/javascript">
            	            $(".jamButton").html((events.indexOf('jam')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>	
									</div>
									<a href="events.php#litr_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>


<!-- Litr events Ends -->





<!--                     <li class="grid">
						<a href="#image-30">
							<figure class="effect-apollo">
								<img src="images/online/pixeladda.jpg" alt="image30">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Pixel Adda</h3>
							<div class="lb-overlay" id="image-30">
									<img src="images/online/pixeladda.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Pixel Adda</h3>
										<p>Coming Soon...</p>
									</div>
									<a href="events.php" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
					
 -->
                   



<!--  <li class="grid">
						<a href="#image-31">
							<figure class="effect-apollo">
								<img src="images/online/zodiac.jpg" alt="image31">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Zodiac</h3>
							<div class="lb-overlay" id="image-31">
									<img src="images/online/zodiac.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Zodiac</h3>
										<p>Organizer - Abhinau Kumar
 (Second weekend of January)<br>
Online treasure hunt where participants have to solve various clues and puzzles to uncover the grand prize
</p>
									</div>
									<a href="events.php" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
 -->

<!-- 




                    
                     <li class="grid">
						<a href="#image-32">
							<figure class="effect-apollo">
								<img src="images/online/sweetheart.jpg" alt="image32">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Sweet Heart</h3>
							<div class="lb-overlay" id="image-32">
									<img src="images/online/sweetheart.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Sweet Heart</h3>
										<p>Coming Soon....</p>
									</div>
									<a href="events.php" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li> -->
<!--                      <li class="grid">
						<a href="#image-33">
							<figure class="effect-apollo">
								<img src="images/online/tweetatale.jpg" alt="image33">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Tweet A Tale</h3>
							<div class="lb-overlay" id="image-33">
									<img src="images/online/tweetatale.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Tweet A Tale</h3>
										<p>Coming Soon....</p>
									</div>
									<a href="events.php" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li> -->
<!--                      <li class="grid">
						<a href="#image-34">
							<figure class="effect-apollo">
								<img src="images/online/skipit.jpg" alt="image34">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Skip It</h3>
							<div class="lb-overlay" id="image-34">
									<img src="images/online/skipit.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Skip It</h3>
										<p>Coming Soon</p>
									</div>
									<a href="events.php" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li> -->
<!--                      <li class="grid">
						<a href="#image-35">
							<figure class="effect-apollo">
								<img src="images/online/tellatale.jpg" alt="image35">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Tell A Tale</h3>
							<div class="lb-overlay" id="image-35">
									<img src="images/online/tellatale.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Tell A Tale</h3>
										<p>Coming Soon....</p>
									</div>
									<a href="events.php" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li> -->
<!--                      <li class="grid">
						<a href="#image-36">
							<figure class="effect-apollo">
								<img src="images/online/whatsapp.jpg" alt="image36">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>State Your Status</h3>
							<div class="lb-overlay" id="image-36">
									<img src="images/online/whatsapp.jpg" alt="image36" />
									<div class="gal-info">							
										<h3>State Your Status</h3>
										<p>Coming Soon....</p>
									</div>
									<a href="events.php" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li> -->


<!--                      <li class="grid">
						<a href="#image-41">
							<figure class="effect-apollo">
								<img src="images/litr/businessquiz.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Business Quiz</h3>
							<div class="lb-overlay" id="image-41">
									<img src="images/litr/businessquiz.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Business Quiz</h3>
										<p>Coming Soon....</p>
									</div>
									<a href="events.php" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    
                     -->
                    <!-- Techy -->


                    <h1 style="text-align: center;background-color: brown;font-size: 35px;padding-top: 2px;padding-bottom: 4px" id="techy_events">Techy</h1>




 


                    


<h3 style="text-align: center;background-color: red;font-size: 25px;padding-top: 2px;padding-bottom: 4px" id="techy_events">KLUDGE</h3>


   <li class="grid">
            <a href="https://nvision.org.in/events/enigma" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/enigma.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
            <h3>Enigma</h3>
                       
          </li>

                  <li class="grid">
            <a href="https://nvision.org.in/events/hackamaze" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/hack_a_maze.png" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                <h3>Hack A Maze</h3>
          </li>


              


<h3 style="text-align: center;background-color: red;font-size: 25px;padding-top: 2px;padding-bottom: 4px" id="techy_events">CEPHEID</h3>

<!-- Paper Plane -->
  <li class="grid">
            
            <a href="https://nvision.org.in/events/paperplane" target="_blank"> <figure class="effect-apollo">
                <img src="images/techy/paperplane.jpg" alt="image4">                <figcaption>
                </figcaption>     
              </figure></a>

              <h3>Paper Plane</h3>
            
</li>


      <!-- Galileo Project -->    

  <li class="grid">
            <a href="https://nvision.org.in/events/thegalileoproject" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/galileo.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
            <h3>Galileo Project</h3>
                    
          </li>

              


<h3 style="text-align: center;background-color: red;font-size: 25px;padding-top: 2px;padding-bottom: 4px" id="techy_events">INFERO</h3>

     <li class="grid">
            <a href="https://nvision.org.in/events/proquest" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/pro_quest.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                      <h3>Pro Quest</h3>
          </li>
                  

                              <li class="grid">
            <a href="https://nvision.org.in/events/algorithma" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/algo.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Algorithma</h3>
              
          </li>

<!-- ECELL EVENTS -->
<h3 style="text-align: center;background-color: red;font-size: 25px;padding-top: 2px;padding-bottom: 2px" id="techy_events">E-CELL</h3>

                 <li class="grid">
            <a href="https://nvision.org.in/events/crowdpitch" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/pitch.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                      <h3>Crowd Pitch</h3>
          </li>
                  

                              <li class="grid">
            <a href="https://nvision.org.in/events/salesmanoffest" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/salesman.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Salesman Of Fest</h3>
              
          </li>

<h3 style="text-align: center;background-color: red;font-size: 25px;padding-top: 2px;padding-bottom: 4px" id="techy_events">ROBOTICS</h3>

       <li class="grid">
            <a href="https://nvision.org.in/events/roboquidditch" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/robo_epic.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
            <h3>Robo Quidditch</h3>
          </li>

           <li class="grid">
            <a href="https://nvision.org.in/events/robowars" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/robo_wars.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Robo War</h3>
              
          </li>
                  

                      <li class="grid">
            <a href="https://nvision.org.in/events/robosoccer" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/robo_soccer.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Robo Soccer</h3>
            
          </li>


             
                    
                      <li class="grid">
            <a href="https://nvision.org.in/events/pirates" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/pirates.png" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Pirates</h3>


          </li>
               
        


<h3 style="text-align: center;background-color: red;font-size: 25px;padding-top: 2px;padding-bottom: 4px" id="techy_events">EQUILIBRIA</h3>

            <li class="grid">
            <a href="https://nvision.org.in/events/junkyardwars" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/junkyard_wars.png" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Junkyard Wars</h3>
              
          </li>

                  <li class="grid">
            <a href="https://nvision.org.in/events/bridgebuilder" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/bridge_builder.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Bridge Builder</h3>
              
          </li>


                


<h3 style="text-align: center;background-color: red;font-size: 25px;padding-top: 2px;padding-bottom: 4px" id="techy_events">TORQUE</h3>


                      <li class="grid">
            <a href="https://nvision.org.in/events/driftking" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/drift_king.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Drift King</h3>
              
          </li>
                      <li class="grid">
            <a href="https://nvision.org.in/events/cadpro" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/ojo_cada.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Cad pro</h3>
            
          </li>
                    

        


<h3 style="text-align: center;background-color: red;font-size: 25px;padding-top: 2px;padding-bottom: 4px" id="techy_events">ELECTRONICA</h3>

               <!-- DTMF Race -->


                          <li class="grid">
            <a href="https://nvision.org.in/events/dtmfrace" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/dtmf_race.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>DTMF Race</h3>
          </li>


 <!-- Electronic Bloopers -->

              
<li class="grid">
            <a href="https://nvision.org.in/events/electronicbloopers" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/electronic_champ.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                    <h3>Electronic Bloopers</h3>
              
          </li>
        
          <!-- Electri circuit -->
            <li class="grid">
            <a href="https://nvision.org.in/events/bringitback" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/circuit.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                    <h3>Circuit&nbsp;Hunt</h3>
              
          </li>

          <!-- Jugaad it-->

            <li class="grid">
            <a href="https://nvision.org.in/events/jugaadit" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/bringitback.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                    <h3>Jugaad&nbsp;It</h3>
              
          </li>

            


<h3 style="text-align: center;background-color: red;font-size: 25px;padding-top: 2px;padding-bottom: 4px" id="techy_events">LAMBDA</h3>

 <!-- Quadcopter -->

  
      <li class="grid">
            <a href="https://nvision.org.in/events/quadcopterchallenge">
              <figure class="effect-apollo">
                <img src="images/techy/quadcopter.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Quadcopter Challenge</h3>
            
          </li>


   

 <!-- Sci-Tech Quiz -->

<h3 style="text-align: center;background-color: red;font-size: 25px;padding-top: 2px;padding-bottom: 4px" id="techy_events">QUIZ</h3>
        
          <li class="grid">
            <a href="https://nvision.org.in/events/scitechquiz" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/sciencequiz.png" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Sci-Tech&nbsp;Quiz</h3>
            
          </li>
           <!-- AutoMobile Quiz -->

<li class="grid">
  <a href="https://nvision.org.in/events/automobilequiz" target="_blank">
              <figure class="effect-apollo">
                <img src="images/techy/auto_quiz.jpg" alt="image4">
                <figcaption>
                </figcaption>     
              </figure>
            </a>
                        <h3>Automobile&nbsp;Quiz</h3>
            
          </li>

       


<!--END Techy -->
                    
                    
                    
                    
				</ul>
			</section>
		</div>
	</div>
<!-- /gallery -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-3 col-sm-3 footer-info-grid">
					<h4>FOLLOW US</h4>
					<p>Elan IIT-Hyderabad</p>
						<div class="social">
							<ul>
								<li><a href="https://www.facebook.com/elan.iithyderabad/?fref=ts" class="facebook"> </a></li>
								<li><a href="https://twitter.com/ELAN_IITH" class="facebook twitter"> </a></li>
								
								
								
							</ul>		
						</div>
				</div>
				
				
				
					<div class="clearfix"> </div>
			</div>
		</div>
		<div class="copyright">
			<p>© 2017 Elan . All Rights Reserved | Design by WebTeam</p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>