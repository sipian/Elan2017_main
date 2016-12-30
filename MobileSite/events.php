<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Elan Events</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel='shortcut icon' href=../favicon.ico type='image/x-icon'/>
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
          <h1><a href="index.html"><img src="images/logo5.png"></a></h1>
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
                echo "<a href=\"https://id.nvision.org.in/signin?url=http://trial.elan.org.in/token.php\" >Register</a>";
           ?>
            </li>
            <li><a href="hospitality.php">Hospitality</a></li>
            <li><a href="workshops.php">Workshops</a></li>
            <li><a href="http://blog.elan.org.in/">Blog</a></li>
            <li><a href="team.php">Contact US</a></li>
            <li><a href="litfest">Litfest</a></li>
            <li><a href="literanza">Literanza</a></li>
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
<strong>Event Format</strong> : Consists of two rounds.<br>

<strong>PRELIMS</strong><br>

Upload your band’s demos/videos and register .		<br>	 		
Shortlisted bands get to perform at Elan-e-Jung prelims, Elan 2017.<br>
		
Each band will be given ‘m’ minutes to perform including sound check.<br>


<strong>FINALS</strong><br>
	 		
x bands will be shortlisted after the preliminary round to perform at the 	Biggies Stage.<br>
		 		
Each 	band will be given ‘m’ mins to perform on stage including sound 	check (subjected to changes).<br>
 		
The winner and the first runner up will be given prizes. (Not yet decided). <br>
<br>


<strong>JUDGING CRITERIA</strong><br>

	
	
The winners will be announced by the judges immediately after the event. Judge’s decision is considered final and should be abided by everyone.<br>

All the finalists will be given the participation certificates.<br>

The prize money will be distributed only among the top 2 contestants.<br>

The crowd‘s response is considered important.<br>

The following will be looked in the contestants/bands performance:<br>
Entertainment<br>
Public involvement<br>
Energy<br>
Attitude<br><br>

<strong>Rules and Regulations</strong><br>



Any non-professional band is allowed to register. You need not be a college band to participate in this event.<br>

Language of songs is not a criterion. The band can be fully instrumental as 	well. The genre of the band can be any variation of metal. <br>

Registering team should send/upload only one demo in the process of registration. The demo need not be a studio recording.<br>

Bands cannot have more than 7 members. Also, no person can play for more than 2 different bands. 	<br>

Bands cannot share the same frontman. <br>

IIT Hyderabad reserves the right to shift any band's slot timings at any point of time before the prelims.<br>

In case of any damage to the provided equipment, the band will be fined 	for the damage and may be disqualified. <br>	
	
The decision is dependent on the nature of the damage and the judge's discretion. 	<br>

IIT Hyderabad reserves the right to cancel the event in case of some unforeseen circumstances. 	<br>
	
In case of any dispute the decision of the organizers will be final and binding.
		<br>
Consumption of Alcohol and Drugs is strictly prohibited on Campus.<br>

The Judges' decision shall be final and binding for all.<br>
	
The decision of the organizers with respect to line-up is final and 	abiding.
	<br>
The Elan 2017 team holds the right to change the rules at any moment of 	time.
	

<br>
<strong>Contact Person</strong>
<br>
1.Yash Pitroda	<br>					
Email : yash@elan.org.in<br>					
Mob : 9505464597	<br>					
2.Siddharth Sonkamble<br>	
Email : siddharth@elan.org.in<br>

Mob : 9619497727

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
										<p>Every band has a dream. A dream of performing live, on a global scale, in front of fans screaming for more. But the journey of a mile begins with the first step. ELAN 2017 presents Manthan, the ultimate Fusion band contest. //to be changed  
(Are you not into Heavy Metal Music? ELAN 2017 brings to you the ultimate Fusion Band Contest, Manthan. This is where you perform live competing with other bands trying to live the dream. )
<br><br>
 <button type="button" class="btn btn-primary btn-sm manthanButton" style="text-align:center;margin-left: 35%;">
            <script type="text/javascript">
            	            $(".manthanButton").html((events.indexOf('manthan')>-1)?"UNREGISTER":"REGISTER");
            </script>
 </button>
<
	<br>
 <strong>Event format</strong> :  Consists of two rounds.<br><br>


                   <strong>PRELIMS</strong><br>

	
Each band interested in participating should upload their demos/videos	<br>	
	 		
Out of this ‘x’ bands will be shortlisted, and will be performing at Manthan prelims, Elan 2017.<br>
		
Each band will be given ‘m’ minutes to perform including sound check.<br><br>


                   <strong>FINALS</strong><br>
	 		
‘x’ bands will be shortlisted from the prelims round to perform at the 		Biggies stage.<br>
		 		
Each 	band will be given ‘m’ mins to perform on stage including sound 	check (subjected to changes);<br>
 		
The winner and the first runner up will be given prizes. (Not yet decided). 		<br><br>

                   <strong>JUDGING CRITERIA</strong><br>	

The winners will be announced by the judges immediately after the event. Judge’s decision is considered final and should be abided by everyone.<br>

All the finalists will be given the participation certificates.<br>

The prize money will be distributed only among the top 2 contestants.<br>

The crowd‘s response is considered important.
	<br>
The following will be looked in the contestants/bands performance:<br>
Entertainment<br>
Originality<br>
Public involvement<br>
Energy<br>
Attitude<br>

The winner and the first runner up will be given prizes. (Not yet decided). 	

<br>	<br>

                   <strong>Rules and Regulations</strong><br>	


Any non-professional band is allowed to register. You need not be a college band to participate in this event.<br>

Language is no criterion. We are looking for bands that play fusion music (anything except metal) and in any language.<br>

Registering team should send/upload one demo in the process of registration. The demo need not be a studio recording.<br>

No band can have more than 7 members. Also, no person can play for more than 2 different bands. 	<br>

The bands cannot share the same frontman. 	<br>

IIT Hyderabad reserves the right to shift any band's slot timings at any point of time before the prelims.<br>

In case of any damage to the provided equipment, the band will be fined 	for the damage and may be disqualified. <br>	
	
The decision is dependent on the nature of the damage and the judge's discretion. 	<br>

IIT Hyderabad reserves the right to cancel the event in case of some unforeseen circumstances. 	<br>
	
In case of any dispute the decision of the organizers will be final and binding.<br>
		
Consumption of Alcohol and Drugs is strictly prohibited on Campus.<br>

The Judges' decision shall be final and binding for all.<br>
	
The decision of the organizers with respect to line-up is final and abiding.<br>
	
The Elan 2017 team holds the right to change the rules at any moment of time.<br><br>
	

<strong>Contact Person</strong>
<br>
1.Yash Pitroda	<br>					
Email :yash@elan.org.in	<br>				
Mob : 9505464597	<br>					
Email :siddharth@elan.org.in<br>
Mob :9619497727<br>
2.Siddharth Sonkamble<br>	
Email : siddharth@elan.org.in<br>

Mob : 9619497727
</p>
									</div>
									
									<a href="events.php#biggies_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
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
EVENT FORMAT<br>

● The Event will be conducted in 2 rounds - Prelims and finals<br>

● Minimum size of the team-6.<br>

● All the registered teams shall participate in prelims.<br>

● Six teams will be shortlisted from the prelims and will be performing in the finals.<br>

● During the whole competition, at any given time, minimum of 4 performers should be on the stage.<br>

● During the prelims each team will be given 3-5mins to perform.<br>

● The song must be of 6-9 minutes long for finale.<br>

● Participants should not perform the song (or part of the song) which was performed.<br>

during the prelims in the finals. This means, they cannot use the movement sequences of<br>

duration greater than 15 secs/music of their previous performances in coming rounds.<br>1st position : Rs 25000<br>

2nd position: Rs 15000 + goodies<br>
...........<br>***********</p>
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
EVENT FORMAT<br>

● The event comprises of eliminations followed by finals. ( prelims, semi-final and final).<br>

● Registration can be done online or on the spot.<br>

● Performance duration should be 3-5 min for prelims, 5-7 min for semi-final and for 2-3 min final.<br>

● For prelims and semi-final you have to bring your own song. You cannot repeat dance

steps or moves. You can get similar music beats... but not similar dance steps.<br>

● For final round you will be given a random song and also some time to prepare and you

have to perform at least 2 min on that song.<br>

● Final score will be combined score of semi-final and final.<br>

● Prelims will be on first day. Semi-finals and final will be on next day depending on the participation**.<br>

● Participants should bring their music/song in CD/DVD or a pen drive.<br>

● Number of participants for final will depend on participation as well as judges opinion.<br>

● You can perform any type of non-classical dance like hip-hop, stepping, popping, etc.<br>.............<br>*********</p>
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



<br>EVENT FORMAT<br>

● Event consists of only one round and the results are decided by the judge.<br>

● The competition is open only to college students with a valid ID card.<br>

● You can perform in any Indian classical dance form [we'd love to see Bharatanatyam,

Kuchipudi, Odissi, Mohiniyattam and others].<br> However there are no separate judging

categories for the different forms<br>.............<br>**********</p>
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
<br>RULES AND REGULATIONS<br>

● The team should consist of two participants irrespective of their gender.<br>

● The event consists of two rounds.<br>

● Round 1(preliminary round):<br>

○ Participants can perform any style of dance for any song of their choice.<br>

○ Time of performance should not exceed 4 minutes.<br>

○ Participants will be given an extra time of 1 minute for settling down.<br>

○ A total of 7 teams will get selected for the final round.<br>

● Round 2(final round):<br>

○ Participants should dance to the tracks given by the Organizers<br>

○ Each team will be given time to choreograph for the song, which will not exceed

15 minutes.
<br>
○ An additional time of 2 minutes will be given for settling.<br>

○ Time of performance should not exceed 3 minutes.<br>

● Decision taken by the judges will be final.<br>............<br>*********</p>
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

<br>EVENT FORMAT<br>

● It is solo singing competition.<br>

● Registrations can be online or On Spot during ELAN<br>

● This competition consists of 2 rounds- Elimination and Finals<br>

● Elimination Round: To participate in the Vibrazione, you must have 5 songs that you

know very well and must be ready to perform any of those 5 songs for the competition. If

someone else has chosen your song, or something does not work out with your first

choice, you will need to be ready to sing your other choice.<br>

● Finals: For finals participant must sing one slow song and one fast song.<br>

● A "People's Choice" award will be given to the winner with the most audience votes*.<br>...........<br>***********</p>
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

<br>RULES AND REGULATIONS<br>

● Contestants shall use only the paints provided to them by the organizers.<br>

● There will be a time limit of 7 minutes and you should complete in that time<br>

● Judges decision is final and binding<br>

JUDGING CRITERIA<br>

● Neatness<br>

● Time duration<br>

● Attractiveness<br></p>
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

<br>EVENT FORMAT<br>

● Registrations will be on the spot during ELAN<br>

● Mehendi cones will be provided by the organisers.<br>

● Designs are of your own choice.<br>

RULES AND REGULATIONS<br>

● There will be a time limit (1 hour)<br>

● There is no limit on the number of cones. You can use as many as you want<br>

● You will be allowed to put mehendi only one hand.<br>

● Judges' decision is final and binding<br>

JUDGING CRITERIA<br>

● Attractivness<br>

● Creativity<br>

● Neatness<br></p>
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

<br>EVENT FORMAT<br>

● Registrations will be on the spot during ELAN<br>

● The following materials will be provided to you<br><br>

○ Polymer clay<br>

○ Paints (if required)<br>
● One can select his/her own theme or model. Every participant will be given limited amount of clay and time, so one has to really plan out his model so as to not run out of clay.<br>

RULES AND REGULATIONS<br>

● The amount of clay and paint provided will be limited.Team size should be less than 3<br>

● The final results will be announced on the final day of ELAN.<br>

● The decision of the organisers is final and binding to all<br>...........<br>******</p>
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

<br>EVENT FORMAT<br>

● Registrations will be done on the spot during ELAN<br>

● Each Team must consist of 2-3 members<br>

● The following materials will be provided to you<br>

○ Cosmetic grade face paint<br>

○ Brushes<br>

○ Tissues<br>

● Duration of the Event will be 2 hours.<br>

RULES AND REGULATIONS<br>

● There are no theme constraints. All kinds of themes and patterns are allowed.<br>

● Participants should use only the materials provided by the organizers.<br>

● Decision of judge shall be final and binding.<br>...........<br>*********</p>
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
										<h3>18.Nukkad Naatak: A Street play competition</h3>
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

<br>RULES AND REGULATIONS<br>

● Team Size: 5-15 People(Including Music Accompanists)<br>

● Time Limit:10-15 Minutes<br>

● Atleast 5 persons must be included in the play<br>

● Music Accompanists are included in the team<br>

● Teams are expected to perform at the open air venue, on a circular stage with an audience

on all sides.<br>

● Language of Performance Must be in Hindi/English or both<br>

● Plays can be based on any theme.Any content directed against a certain political group or

religious community is strictly prohibited.<br><br>

JUDGING CRITERIA<br>

● Dramatization<br>

● Screenplay<br>

● Script<br>

● Crowd interaction
<br>
● Overall impact<br>

The winner is awarded with prizes worth Rs:10000<br>..........<br>********</p>
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

<br>RULES AND REGULATIONS<br>

● This being a solo competition allows no more than one person per team.<br>

● Registration: On the spot/Online<br>

● Duration of each performance in the first round: 6 min  (empty stage to empty stage)<br>

● Duration of each performance in the second round: as long as the backing track lasts<br>

(empty stage to empty stage)

● There will be two categories. Melody and percussion instruments.<br>

● -Round 1-><br>

○ Participants will be given 6 minutes to play anything they want.<br>

○ Based on the scores of the first round 2 participants from each category

progresses into the second round.<br>

○ Overshooting the time limit will result in a penalty.<br>

● -Round 2-><br>
○ *The second round will be a face-off between the top two from each category. Ie,

the first in melody vs the second in melody and similarly for percussion.<br>

○ After qualification after the first round, the finalists will be given tracks to play

over. Ie, the melody finalists will be given tracks with percussion to play over and

vice-versa. This will be done to ensure fair judging.<br>...........<br>********</p>
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

<br>EVENT FORMAT<br>

● There will be 2 rounds, prelims and final.<br>

● Your performance could either be a "mono-act", or a "stand-up comedy", or both.<br>

● Languages preferred are English, Hindi, and Telugu.<br>

● Duration of act should be 4-7mins for the prelims. It is 6-10mins for final round .<br>

● Registration can be done online or on-spot during Elan-2017.<br>

RULES AND REGULATIONS<br>

● Any kind of fluid or flame is not allowed on stage.<br>

● Time limit should be strictly followed failing which there will be deduction in your

respective score.<br>

● Music/background tracks for the performance, if any, are to be arranged by the

participants itself.<br>

● If you need any props for mono-acting then bring your own.<br>

● Large props like chairs and tables etc. can be arranged, but the participants have to

inform earlier.
<br>
● Judge's decisions are final and binding.<br>........<br>**********</p>
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
<br>EVENT FORMAT<br>

● The event film fare fiesta is spread over two days<br>

● All the entries are judged on the first day to shortlist 6 out of them. These 6 will be

judged on second day by esteemed judges.<br>

● The judging criteria will be:<br>

○ Script<br>

○ Direction<br>

○ Screenplay<br>

○ Costumes<br>

○ Dialogues<br>

○ Cinematography<br>

○ Sound editing/ mixing<br>

○ Visual effects<br>

RULES AND REGULATIONS<br>

● Run time should not be more than 20 minutes<br>

● Movie should be shot at a minimum resolution of 480 pixels. Marks might be reduced<br>

due to poor video/ audio quality.<br>

● Any attempt at copyright infringement can lead to immediate disqualification.<br>

● Plagiarism is accepted with due credits.<br>

● Films in languages other than English, Hindi, and Telugu should be accompanied with

subtitles .<br>
● Participants should send their videos/youtube links of the videos to nanda@elan.org.in

and harsha@elan.org.in<br>

● The decision of the Organizers is final and binding.<br>.........<br>*********</p>
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
<br>RULES AND REGULATIONS<br>

● The captures must be only during the 3 days of the ELAN fest and only inside IIT

Hyderabad premises.<br>

● The pics must be taken only using a Digi-cam or a Bluetooth enabled mobile (for transfer

purpose)<br>

● Winner is judged according to the moments captured in the best way<br>

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

<br>EVENT FORMAT<br>

● Registrations can be done online or on the spot.<br>

● Participants are to submit finished works of art.<br>

● Paintings will be exhibited throughout the fest in ELAN gallery.<br>

● The three best paintings will be selected and prizes will be announced on the last day of

the fest.<br>

JUDGING CRITERIA<br><br>

1. Topic chosen<br>

2. Creativity<br>

3. Coloration Skills<br>

RULES AND REGULATIONS<br>

● Paintings can be either brought in person or can be sent by post*.<br>
● Entries that are received on or before 22 Jan 2017 will be evaluated. Those received

through post during ELAN will not be evaluated, only those received in person are

evaluated.<br>

● The painting should be at least of A3 size.<br>

● Judges decision is final and binding.<br>

(Note: Organizers are not responsible for any delay or damage caused to the entries.)<br>...................<br>****************</p>
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
<br>INFRASTRUCTURE SUPPLIED<br>

● A DJ console(Mark I) and mixer<br>

● 4 bin DJ sound system<br>

● Effect lights[sprinklers, lasers, cans, and smoke<br>
● Sound Monitors<br>

● 2 mics<br>..............<br>*******</p>
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
<br>EVENT FORMAT<br>

● Online Round:<br>

○ This round will be an online as well as a spot round for spot registered candidates.<br>

○ People who have registered online have to send a recorded file (.mp3 or .wav

format) where they have to speak on a topic for about two minutes and the people

who are selected go to the interview round directly. The recording should be done

either in Telugu ,English or Hindi.<br>

● Spot Round:<br>

○ This round is like the preliminary round for the spot registered candidates.<br>

○ Participants will be given a random topic to speak on for about 2 minutes.<br>
○ Finally, about 10 people will be selected for interview round (including the online

and spot round).<br>


● Interview Round:<br>


○ These 10 candidates will be interviewed by asking questions and giving them

situations.<br>


○ 5 candidates will be selected for the final round.<br>


● Final Round<br>


In final round, the contestant will have to host a show like an actual RJ does . The

Contestants are expected to entertain the audiences by telling stories, current affairs (about

ELAN 2017), cinema news, etc. Each contestant has to perform for maximum of 20 minutes. <br>...........<br>************
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
<br>EVENT FORMAT<br>

● The contestants are provided with an option of a few ACTION HERO VIDEOS<br>

● They will be given half hour to choose the video<br>

● After choosing the video the participants will be given another half hour for preparation

in which they are supposed to come up with a humorous and entertaining version of the

video by putting their own voice into the characters.<br>

● They are then supposed to perform it on stage while the video is being played, with the

actual dialogues muted<br>

● All the videos will be 1 min long.<br>

RULES AND REGULATIONS<br>

● It consists of only one round.<br>

● The participants will be given a given a movie clipping one hour before the competition.<br>

● During the competition, the audio of the clipping will be muted, and the participants have

to make out their own dialogues and deliver it parallel in sequence with the video and

must make it as funny as possible.<br>

● The clippings will be given in English, Telugu or Hindi as per your choice.<br>

● You will be judged based on the dialogues you make and the way you present it.<br>

● Use of unparliamentary language is strictly prohibited and will lead to disqualification<br>

● The decision of the judges and organizers is final and binding<br>............<br>***********</p>
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
										<h5>excitement in a minute</h5>
										<p>
										<h4>Note:</h4>
Will update everyone’s contact number as soon as possible.<br>

Fun and Goodies, What a great combination. Isn’t it? Nvision presents you all the traditional games with a little twist. Get ready to grab some goodies!  <br><br>

<h4>RULES AND REGULATIONS</h4>
The events can be performed single or in a group depending on the event
No malpractices
The decision of the organizers is final
<br><br>
<h4>Contact:</h4><br>

Akhil Ashref:  <br>

Akshita ramya: <br><br>................<br>*************<br>
</p>
									</div>
									<a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
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
										<h3>Lan Gaming<br>
										<h4>“Fire in the hole”.</h4></h3>

								<p>

 If you know what I mean, Come join us for a fun filled day of gaming. Let’s find out, who is the pro! <br><br>
<h4>Games to be held are :</h4><br>
DoTA 2<br>
CS:GO<br>
Call of Duty: Modern Warfare 3<br><br>

<h4>RULES AND REGULATIONS</h4> <br>
The teams for DoTA 2, CS:GO need to consist of five members each.
The games will be held in a tournament style format.
In case of malpractice the concerned team will be disqualified or faced with a penalty.
Organiser’s decision final and binding to all

<br><br>
<h4>Contact:</h4><br>
Ayush Negi:
8280032282
<br>
Supreet Singh
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
										<h3>Final Destination
										<p>Treasure hunt</p></h3>
										<p>

Ever dreamt of finding Blackbeard’s Treasure. If yes then you are just in the right place. 

Nvision brings to you a real treasure, If you can find it!!<br><br><br>  

<h4>RULES AND REGULATIONS</h4>
<p>
<ul >
<li>1.Teams should consist of 4 members</li><br>
<li>2.The teams should assemble 30 min before the start of the game</li>
<li>3.There will be different clues to be solved at the different checkpoints</li>
<li>4.The first team coming at each checkpoint will get the opportunity to perform the task first</li>
<li>5.Without solving one clue you can't move to the next</li><br><br>
<li>6.The first two teams to complete every task and bag maximum points will be rewarded</li>
<li>7.Malpractice will lead to disqualification</li><br>
<li>8.Organiser’s decision final and binding to all</li><br></ul>
</p>
<h4>Contact:</h4><br>
Aswin Kumar
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

Well, look no more, coz you’ve come to the perfect place. Whether it’s the spin of the roulette wheel that catches your eye, or the shouts of ‘hit’ and ‘stay’ from the blackjack table that draw you in, the excitement in the air just won’t let you leave. May the odds be ever in your favour!<br><br>

Contact:<br>

Vidhan Jain<br>

Mayank Hooda<br>.............<br>**************

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
Organiser’s decision final and binding to all<br><br>

Contact:<br>
Jeel Bhavsar<br>
Mayank Hooda<br>.............<br>**************

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
Detils
Date : 20th , 21st and 22nd of January 2016
Venue : IIT Hyderabad Permanent Campus
Prize : Coming Soon 

      Rules And Regulations
Individual participation
Onspot registration with limited number of entries
Organiser’s decision final and binding to all<br><br>

Contact:<br>
Deepak Nathani<br>
9177289949
<br>.............<br>**************

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
										<p>Mad Ads is all about having fun, it’s about laughing and having a good time. Entertain the audience with some hilarious and innovative ads! Well you may get something in return, but
only if you are hilarious enough!<br>Details<br>Date : 20th , 21st and 22nd of January 2016
Venue : IIT Hyderabad Permanent Campus
Prize : Coming Soon 
</p>
<br><br>
<h3>RULES AND REGULATIONS</h3>
This is a group event-group of 4-5<br>
Every member of the group should participate<br>
The Product will be given by the organizers and in no case it can be exchanged<br>
The group will be given 30 minutes for preparing the AD<br>
The AD should be 3 min in length<br>
No vulgarity allowed and sportsmanship to be followed
Organiser’s decision final and binding to all<br>
</p><br>
<h3>Contact:</h3>
Deepika Gonela<br>

Tejas Anand

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
<br><br>
DETAILS<br>


Date : 20th , 21st and 22nd of January 2016<br>
Venue : IIT Hyderabad Permanent Campus<br>
Prize : Coming Soon <br>
<br>RULES AND REGULATIONS<br>

Partners will be assigned by random chits. <br>

Participants will be given 10 minutes with their partners. <br>

The most correct answers will win. 
<br> ..........<br>***********</p>
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
										

												<h4 style="text-align: center;font-size: 25px">About</h4>
										<p style="">
										You got the confidence to set the ramp on fire? 
Think you have the presence of mind to impress the judges? 
Then walk the plank, i mean, the ramp. 
A ramp walk, followed by a Q&A session with the judges.
Winners take home the titles of Mr and Ms Elan. 

 <br>

										
</p>
<span style="text-align: center;"><h4 style="position: absolute;top: 320px;text-align: center;font-size: 30px">Details</h4	></span>
<p style="position: absolute;top: 380px;" >

Date : 20th , 21st and 22nd of January 2016<br>
Venue : IIT Hyderabad Permanent Campus<br>
Prize : Coming Soon <br>

 <br><br>
<span style="font-size: 20px">Rules </span><br><br>
Online as well as on-spot registration. (3 hours before the event) <br>

Judges decision is final. <br>..............<br>**************
 <br>

									</div>
									<a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>

					 <li class="grid">
						<a href="#campus_princess">
							<figure class="effect-apollo">
								<img src="images/infi/campus_princess.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Campus Princess</h3>
							<div class="lb-overlay" id="campus_princess">
									<img src="images/infi/campus_princess.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Campus Princess</h3>
										

												<h4 style="text-align: center;font-size: 25px">About</h4>
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
<span style="text-align: center;"><h4 style="position: absolute;top: 320px;text-align: center;font-size: 30px">Details</h4	></span>
<p style="position: absolute;top: 380px;" >

Date : 20th , 21st and 22nd of January 2016<br>
Venue : IIT Hyderabad Permanent Campus<br>
Prize : Coming Soon <br>
 <br>..............<br>**************
 <br>

									</div>
									<a href="events.php#infi_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    
                    


<!-- Online Events -->


<h1 style="text-align: center;background-color: brown;font-size: 35px;padding-top: 2px;padding-bottom: 4px" id="online_events">Online</h1>


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

Prizes worth 15,000/- at stake! 
<br>RULES AND REGULATIONS<br>

Emblazon is the online photography contest organized by nvision and Elan IIT Hyderabad together. <br>

Upload your entry with the hashtag #Emblazon_IITH. Deadline for uploading your picture is 10th January, 2017. <br>

While you upload, nominate at least two other friends who you think can challenge you. <br>

There is no entry fee or any age restriction to participate in this contest. <br>

While you upload, nominate at least two other friends who you think can challenge you. <br>

The theme for this year is VACATION. One can put any pictures taken in his/her vacation of any time. <br>

A maximum of three pictures will only be accepted per participant. <br>

Photographs will be judged on Originality, Composition, and Overall aesthetics. <br>

Only original photos are allowed. If any photo is found to be copied, that participant will be disqualified. <br>

However, one can edit or use any filter as per his choice but too much editing leading to the loss of originality may cause the points deduction. <br>

Any changes to the contest will be notified to entrants as soon as possible. <br>

The winner will be declared by nvision and ELAN IITH on the set date on our official facebook page, also the winner will be intimated personally via an email.<br>
											ORGANIZERS<br>

Atul Raj <br>
cs15btech11006@iith.ac.in<br>
+91-7779915930<br> Chander Dev <br>
ee15btech11006@iith.ac.in<br>
+91-9494527690<br>Use this content while you participate for a clear understanding :<br> 

"As a part of the Emblazon photography contest conducted by 
Elan and ηvision, IIT Hyderabad, here is my photograph. 
I further nominate ___ and ___ to take the challenge. #Emblazon_IITH"<br> ..........<br>***********</p>
									</div>
									<a href="events.php#online_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>

					<li class="grid">
						<a href="#image-53">
							<figure class="effect-apollo">
								<img src="images/techy/poster_presentation.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Poster Presentation</h3>
							<div class="lb-overlay" id="image-53">
									<img src="images/techy/poster_presentation.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Poster Presentation</h3>
										<p>Coming Soon....</p>
									</div>
									<a href="events.php" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
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
										<p>Organizer - Sahil Yerawar<br>
Put your deerstalkers on and get ready to solve the mystery
</p><br>
 <button type="button" class="btn btn-primary btn-sm mrdetectiveButton" style="text-align:center;margin-left: 5%;">
            <script type="text/javascript">
            	            $(".mrdetectiveButton").html((events.indexOf('mrdetective')>-1)?"UNREGISTER":"REGISTER");
            	            </script>
            </button>	
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
										<p>Organizer - Vedhamoorthy
Just being right won’t help you. Test your luck in this game of chance!
</p>

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
										<h4>General Quiz</h4> - We know you haven’t been living under a rock, so this quiz should be an easy one for you. Or should it? <br>Organizer - Arjun D’Cunha
<br><h4>Sci Tech Quiz</h4> - Come one, this is an IIT. We were bound to explore developments in the world of science and technology. Organizers - Asvin Kumar, Shashank Varanasi<br>
<h4>MELAS Quiz</h4> - Enter the world of pop culture. This quiz spans exactly five domains - Music, Entertainment, Literature, Art, Sports.<br> Organizers - Rama Krishna, Aisha Dantuluri<br>
<h4>Harry Potter Quiz</h4> - Calling all potterheads. Can’t get enough of the world of the boy who lived? Well, we couldn’t either, so we made a quiz about it.<br> Organizer - Tanya Marwah<br>
<h4>Tollywood Quiz </h4>- Think you know everything about the world of South Indian cinema? Think you’d like to win some prizes? Well then, this is the place to be!<br> Organizer - Prasad Thota<br>
<h4>Automobile Quiz</h4> - The greatest human invention was the wheel. Probably the second greatest invention would be quizzes. So, as they say, we just added one and two, and we bring you a quiz on anything that would run on wheels; and then some. <br>Organizer - Kushagra Saxena
</p>
 <button type="button" class="btn btn-primary btn-sm quizzesButton" style="text-align:center;margin-left: 5%;">
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
										<p>Organizers - Shashank Varanasi, Gitanjali M
Participants are given topics on the spot and they have to speak on them. Err and you will be buzzed and relinquished of the mic

</p>
<br><br>
 <button type="button" class="btn btn-primary btn-sm jamButton" style="text-align:center;margin-left: 10%;">
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
                    
                      <li class="grid">
						<a href="#roboSoccer">
							<figure class="effect-apollo">
								<img src="images/techy/robo_soccer.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Robo Soccer</h3>
							<div class="lb-overlay" id="roboSoccer">
									<img src="images/techy/robo_soccer.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Robo Soccer</h3>
												<h4 style="text-align: center;font-size: 25px">PROBLEM STATEMENT:</h4>
										<p style="">
										Build two bots that can kick a table tennis ball into the opponent’s Goalpost following the rules. Use your creativity and come up with innovative kicking mechanisms to smash the ball into the goal post. 
 <br>

										
</p>
<br>
<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/robosoccer" target="_blank" style="color: white;">REGISTER</a>
</button>

<p style="position: absolute;top: 280px;" >

<span style="font-size: 30px;color: red; text-decoration: underline;text-align: center">Event Format
</span><br><br>
<span style="font-size: 20px">GAME FIELD: ll 
</span><br>
[The picture of the arena will be uploaded later] <br>
<span style="font-size: 20px">The Arena: 1</span><br>
 1.The soccer field is 2 m x 1 m. <br>
 2. Blue field is 50 cm x 50 cm.<br>
  3. Goal post is 40 cm in length and 30 cm in height.<br>
   4. Boundary of the field will be covered by 15cms high wall<br>
   5.There are two regions in the field, green field and blue field.<br>
   6. Plastic Table Tennis ball will be used. <br>
 <br>
<span style="font-size: 20px">Bot Specifications:</span><br>
1. Each team is allowed to have a maximum of two bots. <br>2. Bot must fit into a cube of (25 X 25 X 24)cm at all times. It may not expand beyond these dimensions during any point of the match. Violating this will cause immediate disqualification. <br>3. 10% tolerance will be allowed in any one dimension. <br>4. A battery with the voltage rating not exceeding 12 volts is allowed. This is an on-board power supply. <br> 5. The weight of the bot should not exceed 3 kgs(this is including battery, motors etc., except spare components and the remote to control)<br> 6. The remote control for the bot could be a wired or a wireless one.<br> 7. Grabbing the ball is not allowed. So, any such mechanisms are not allowed. <br>8. In case of a  wireless Bot, you must be able to control it with two different frequencies. <br><br>
<span style="font-size: 20px">RULES for game play:</span><br>
 1. Every match is 5 minutes in the first round. The duration for the matches in the next rounds will be decided by the organizers. <br>2. In case of a tie, an extra time of 90 seconds will be given, the winner will be the one who first scores a goal. If no one scores a goal, another tie breaker of 90 seconds will<br> be held. Still if no one scores, the team with more negative points will lose. 3. <br>Match will start from the center of the field with the TT ball kept in the yellow circle. <br>4. A goal will be considered only if the ball crosses the goal line completely.<br> 5. Two manual bots of each team can enter into the green field at any time, once the match starts.<br><br>
<span style="font-size: 20px">Fouls and Penalties:</span><br>

1. Any kind of intentional damage to the opponent bot(s) will be considered as a foul. <br>
2. Two bots should not be in contact for more than 5 seconds, in any case, otherwise a penalty of –2 points will be awarded to the team which blocked the other bot.<br>
3. Two manual bots of the same team should not enter into any of the blue fields together. Only one at a time from each team can enter into the blue field. In the blue field, it is entirely one on one match. If more than 50% of the second Bot enters the blue region a penalty of -5 points will be given, and opponent bot which is outside blue region gets the ball, and the game is continued from the same position. If one Bot gets ‘pushed’ into the blue region which already has another Bot of the same team, penalty won’t be given.<br>
4. The bot should not cross the opponent’s field before the start of the match. Violation leads -5 points. <br>
5. Teams have to take care of their wirings. The wirings should be at the height of at least 30cms from the game field. Wirings shouldn’t touch the game field. If any team tries to disturb the game intentionally using wires or if wires are in contact with the arena for 5 seconds continuously penalty of -2 points will be given, and the opponent gets the ball and the game is continued from the same position.  <br>
 6. None of the bots should grab the ball and hold it for more than 5secs. If it holds more than the prescribed time ball a penalty of -5 will be awarded, and the ball will be passed to opponent team and game restarts from center.<br><br>
<span style="font-size: 20px">General Rules:</span><br>

1. At the starting of the match, one of the bots should be in the blue field. The other Bot of the same team should be in the green field.<br>
 2. For every goal, 20 points will be awarded.<br>
3. Any bot can score a goal from anywhere on the game field following all the above mentioned rules.<br>
4. If the ball goes outside the field then opponent will start the match from that point without any timeout. <br>
5. Finally, the winner is the team who scores more points at the end of the match. The winning team will be qualified to the next rounds<br>
 
P.S:<br>
​ In case of any discrepancy, organizers’ decision is final. Arguing with organizer will lead to immediate disqualification. <br>>br>

<span style="font-size: 20px"> Eligibility: </span><br>

All students with a valid identity card of their respective educational institutes are eligible to participate. A team should consist of 2 members. Students from different educational institutes can form a team. <br>
<span style="font-size: 20px">Certificate Policy:  </span><br>
The top 3 teams emerging from this competition will be awarded a Certificate of Excellence. All teams who have registered online will be awarded a Participation Certificate, and for on spot registered teams, participation certificate will be awarded if they have a minimum of 40 points( including all games they have played ).
 

Organizers: <br> Kola Sai Dileep<br>(7702693104)<br>
                      Shivarag Reddy<br>(9010774589)
<br>
................<br>***********</p>

									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>


                      <li class="grid">
						<a href="#roboWars">
							<figure class="effect-apollo">
								<img src="images/techy/robo_wars.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Robo War</h3>
							<div class="lb-overlay" id="roboWars">
									<img src="images/techy/robo_wars.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Robo War</h3>
												<h4 style="text-align: center;font-size: 25px;text-decoration: underline">PROBLEM STATEMENT:</h4>
										<p style="">
										The challenge is to create a robot (manually controlled / autonomous) whose sole purpose is to immobilize or otherwise move your opponent out of the arena within a stipulated time. This event aims to test your Robot against another in a field of combat where brute strength and cat-like reflexes hold the key to success.


<br>
<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/robowars" target="_blank" style="color: white;">REGISTER</a>
</button>
										
</p>
<span style="text-align: center;"><h4 style="position: absolute;top: 320px;text-align: center;font-size: 30px;text-decoration: underline">SPECIFICATIONS:</h4	></span>
<p style="position: absolute;top: 380px;" >
<span style="font-size: 20px">Bot Specifications
</span><br>
1.The bot should not exceed the dimension 750mm x 750mm x 1000mm (l x b x h) at any point during the match. <br>
2.External device used for control are not included in the size constraint. <br>
3.The weight of bot should not exceed 60kg , including the weight of pneumatic sourse/tanks <br>
4.The weight of adapters and the remote controller will not be included in this constraint Mobility <br>
5.All robots must have easily visible and controlled mobility in order to compete. <br><br>

Methods of mobility include: <br>

1.Rolling (wheels, tracks or the whole robot).<br> 
2.Walking (linear actuated legs with no rolling or cam operated motion). <br>
3.Ground effect air cushions (hovercrafts) 
Jumping and hopping is NOT allowed. <br>
4.Flying (airfoil using, helium balloons, ornithopters, etc.) is NOT allowed<br>
IC engines, Inflammable, chemical, explosive weapons should not be used. Pneumatic devices are allowed.

 <br><br>
<span style="font-size: 20px">Control Requirements </span><br>
 1.Bot can be controlled wirelessly or with wires. <br>
2.In case of wired bot, wires should be stacked into a single unit and should be slack at every moment of the competition. <br>
3.All the robots with wireless control should be able to change frequencies (if required) or coded channels to prevent any radio conflicts , it may be changed before the start of the match to avoid frequency interference with other teams.<br> 
4.Remote controls available in market can also be used. <br>

 <br>
<span style="font-size: 20px">Power Source</span><br>
1.Batteries, if used, should not be damaged and non-leak proof as it may lead to disqualification. <br>
2.Special care should be taken for protecting the on-board batteries. <br>
3.You won’t be allowed to change batteries during the match. <br>
4.It is suggested to have extra battery ready and charged up during competition so that the team, on advancing to next level, have their robots ready on time. <br>
5.The machine can be powered electrically only. Use of an IC engine in any form is not allowed. On board batteries if used, must be sealed, immobilized-electrolyte types (such as gel cells, lithium, NiCad, NiMH, or dry cells). 
 <br><br>


<span style="font-size: 20px">Pneumatics : </span><br>
1.Robot can use pneumatic devices actuated by pressurized non-inflammable gases. Maximum allowed outlet nozzle pressure is 8 bar. The storage tank and pressure regulators used by teams need to be certified. <br>
2.Participants must be able to indicate the used pressure with integrated or temporarily fitted pressure gauge. Also there should be provision to check the cylinder pressure on the bot. <br>
3.The maximum pressure in cylinder should not exceed the rated pressure at any point of time. <br>
4.Entire pneumatic setup should be on-board, no external input (from outside the arena) can be given to the robot for functioning of its pneumatic system. 

<br><br>


<span style="font-size: 20px">Weapons:</span><br>
1.Wedge bots and pneumatic flippers are allowed.<br>
2.Drums, vertical spinners, cutters, horizontal spinners and any other harmful weapon is not allowed due to safety problems.<br><br>


<span style="font-size: 20px">Gameplay: </span><br>

1. A robot is declared victorious if its opponent is immobilized. <br>
2. A robot will be declared immobile if it cannot display linear motion of at least two inches in a timed period of 30 seconds. <br>
3. In case both the robots remain mobile after the end of the round then the winner will be decided based on the points(criteria for points allocation is mentioned below). <br>
4. Every match will consist of 3 rounds of 3 min each and each subsequent round will have a time gap of 1 min. <br>
5. If a robot is thrown out of the arena, that particular round will stop immediately, and the robot still inside the arena will automatically be declared as the winner of that round and the other rounds will continue as usual.<br>
6. Robots cannot win by merely lifting their opponents. Organizers will allow lifting for a maximum of 20 seconds for each lift and then the attacker robot will be instructed to release the opponent. If, after being instructed to do so, the attacker is unable to release, they will be awarded -10 points. <br>
7. If two or more robots become entangled due to any reason and becomes trapped within another robot, then the competitors should make the timekeeper aware and the fight should be stopped and the robots should be separated by the safest means. <br>
8. Points will be given on the basis of attack and defense.

<br><br>
<span style="font-size: 20px">Aggression and attack-</span><br>

Aggression is judged by the frequency, severity, boldness and effectiveness of attacks deliberately initiated by the robot against its opponent. If a robot appears to have accidentally attacked an opponent or if the attack doesn’t have any impact on the enemy bot, that act will not be considered Aggression. For every attack, the bot will be given 15 points. Once a round is finished, whichever bot, the organizers feel is aggressive in that particular round, that bot is given 50 points.

<span style="font-size: 20px"> Defense</span><br>

 A good defense means, being able to escape or minimize the damage caused by the opponent or its weapons. For every successful defense performed, the bot will be given 10 points.
 <br><br>
<span style="font-size: 20px">Note:  </span><br>
1. A robot that is unsafe, as deemed by the judges, will be disqualified immediately and the opponent robot will be declared as the winner. <br>
2. The bot is not allowed to leave anything behind during the run. It should not leave any mark on the arena. Any bot found damaging the arena will be immediately disqualified. <br>
3. If there is any kind of ambiguity in selection of weapon systems, please clarify the same with the event organizers to avoid further confusion. <br><br>

Organizers: <br>  Akhil Ashref<br>(9177285214)<br>
                       Emil Joseph<br>(9446328940)
<br>
................<br>***********</p>
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    
                    
                      <li class="grid">
						<a href="#pirates">
							<figure class="effect-apollo">
								<img src="images/techy/pirates.png" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Pirates</h3>
							<div class="lb-overlay" id="pirates">
									<img src="images/techy/pirates.png" alt="image4" />
									<div class="gal-info">							
										<h3>Pirates</h3>
										
												<h4 style="text-align: center;font-size: 25px">Event description:</h4>
										<p style="">
										Too bored with ground based robot events, you have come to the right place. Pirates is a ‘one of a kind’ event where you are given the platform to create your own robot which floats and navigates on water. Starting from scratch, you get the chance to showcase your creativity and awaken the little engineer in you.


<br>
<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/pirates" target="_blank" style="color: white;">REGISTER</a>
</button>							
</p>


<p style="position: absolute;top: 300px;" >
<span style="font-size: 20px">Task </span><br>
Make a wired/wireless which can float on water and can perform pick-n-place task …Like manipulating cubes and balls…….


 <br><br>
<span style="font-size: 20px">Arena: </span><br><br>

<img src="images/techy/pirates1.png" style="width: 100%">

<br>
<span style="font-size: 20px"> Arena Specifications:
</span><br>
Arena consists of two zones:<br>

 A: Deposit zone: This zone is specific for each team, in which they have to store their treasure.<br>
B: Treasure zone: This zone is further divided into two zone i.e.<br>
B1: This is the common treasure zone from where both teams can collect the treasure. This zone is a floating platform as a ship. 	<br>
B2: This treasure zone is specific for each team from where they can collect their treasure without the intervention of other team.  This zone is the fixed surface just above the water level at the opposite side of the participant’s start zone indicated by the respective color.   


 <br>
<span style="font-size: 20px"> Arena Dimensions:</span><br>
1.   The size of arena is 1800mm X 1200mm, completely filled with water.<br>
2.   The height of arena is more than the 300 mm.<br>
3.   There are two start zones for each team at diagonally opposite corners indicated by RED and BLUE color.  <br>
4.   The zone B1 will have four (4) cubes as a common treasure and B2 will have 5 cubes as treasure with color respective to the team.<br>
5.   The size of Deposit zone is 300mm X 300 mm. This is exactly at the center of the participant’s start zone and the zone B2 corresponding to the participant.<br>
6.   The size of cubes is of size (80mm X 80mm X 80mm). The color of cubes at common zone is white and the cubes at fixed zone B2 are of the same color as that of the starting zone. 

<img src="images/techy/pirates2.png" style="width: 100%">

<!-- pu one image here -->
 <br><br>


<span style="font-size: 20px">Bot specifications: </span><br>

<span style="font-size: 20px">1. Dimensions and Fabrication </span><br>
 a. The machine must fit within an area of dimensions 250mm X 250mm X 250mm at the beginning of the game.<br>
b. The external remote control is not included in this size constraint.<br>
c. The onboard power on the machine must fit within the aforementioned box.<br>
d. During the game, the machine cannot detach itself into multiple parts nor damage the arena in any way. The judges hold the right to subjectively determine if the machine violates this clause.<br>
e. The machine cannot be constructed using readymade Lego kits or any readymade mechanism. But you can make use of readymade gear assemblies. Violating this clause will lead to the disqualification of the machine.<br>
f. The bot shouldn’t sink at any point of time. This malfunction will lead to immediate disqualification.<br>

<span style="font-size: 20px">2. Power Supply and Propulsion </span><br>
a. In case of using electric energy for propulsion and drive, the potential difference between any two points of the machine should not exceed 24 Volts, at any time.<br>
b. Use of air compressors is not allowed. However, the power supply must be non-polluting and must satisfy the safety constraints determined by the judges.
c. In case the machine is using a non-electric power supply, kindly get it <br>approved from the organizers beforehand via email. Organizers are not responsible for inconvenience if approval is not sought.

<br><br>


<span style="font-size: 20px">3. Controls</span><br>
a. The machine can be both wired as well as wireless. However those bringing a wireless machine will be given extra points on completing the task at least once, but this point are considered only for the best design category.<br>
b. The participants building a wireless machine have to bring 2 remote controls of distinct frequencies or a dual-frequency remote control, which can be switched to either frequency just before the start of the run. This is done to avoid frequency interference with competing machines.<br>
c. The controller for the single bot is not allowed.<br>
d. Wired bots should have the wire of length greater enough to cover the entire arena and the wire should remain slack during the complete run.
<br><br>


<span style="font-size: 20px">Gameplay</span><br><br>
<span style="font-size: 20px">1. Game Procedure:</span><br>
a. The participant will be given a time limit of 3 minutes for the entire game.<br>
b. The time will begin when the machine begins its run for the first time from the starting zone.<br>
c. The game will start from the starting zone.<br>
d. They have to collect the treasure from the zone B1 and B2 to score maximum points.<br>
e. Teams are allowed to collect the cubes from the water if they are dropped in water.<br>
f. In allotted time if both of the teams are unable to score then both will be disqualified.<br><br>
<span style="font-size: 20px">2. Rounds:</span><br>
There will be two rounds for the competition.<br>
<span style="font-size: 20px">Round 1</span><br>
a.   Round 1 will be the qualifying round in which the team must be able to score to qualify. This will be of
2 minutes.<br>
b.   In this Round only the treasure of zone B2 is present in the arena. 
<br>
<span style="font-size: 20px">Round 2</span><br>
a.   Round 2 will be the knockout round; it will proceed in the format specified above.<br>
b.   The winners will be advanced to the further rounds.<br>
c.   In round 2 all the treasure zones are available.<br>

<span style="font-size: 20px">3. Scoring and Penalty</span><br>


    a. The treasure at zone B1 will carry 40 points for each cube.<br>
    b. The treasure at zone B2 will carry 50 points for each cube.<br>
    c. If any team drops the cube in the water the 20 points will be deducted from their total.<br>  

    <span style="font-size: 20px">4. Winning criterion</span><br>
    a. The team who score maximum points in 4 minutes will be the winner of that knockout round.<br>
b. If at any moment score of any team exceeds 350 then it will be the winner. <br>
c. In case of TIE, teams will be given extra time, during which the team who scores first will be the winner of that round.<br>

    <span style="font-size: 20px">5. General Rules</span><br>
    a. The teams must adhere to the spirit of healthy competition. The teams must not damage the opponent's machine in any way. Judges reserve the right to disqualify any team indulging in misbehavior.<br>
b. The mechanism used cannot be changed completely during the competition. Only parts can be replaced in case of repair.  <br>
c. Any team that is not ready at the time specified will be disqualified from the competition automatically.<br>
d. The machine would be checked for its safety before the race and would be discarded if found unsafe for other teams and spectators.<br>
e. Decision of the judges shall be treated as final and binding on all.<br>


    <span style="font-size: 20px">6. Team Specification:</span><br>

A team must consist of 3 or less participants. Students from different educational institutes can form a team.<br>
 <span style="font-size: 20px">7. Eligibility:</span><br>
 All students with a valid identity card of their respective educational institutes are eligible to participate in the event.<br>
  <span style="font-size: 20px">8. Certificate Policy</span><br>
  8. Certificate Policy<br>
   <span style="font-size: 20px">6. Team Specification:</span><br>
   Certificate of Excellence will be awarded to all winners (only first and second).Certificate of best design will also be awarded. Certificates of Participation will be given to all the teams who have qualified. Disqualified teams will not be considered for any certificates.

<br><br>

Organizers: <br>  Sahil<br>(9822977832)<br>
                        Sambit Rath<br>(8895942346)
<br>
................<br>***********</p>
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                      <li class="grid">
						<a href="#RoboQuidditch">
							<figure class="effect-apollo">
								<img src="images/techy/robo_epic.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Robo quidditch</h3>
							<div class="lb-overlay" id="RoboQuidditch">
									<img src="images/techy/robo_epic.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Robo quidditch</h3>
										

												<h4 style="text-align: center;font-size: 25px;text-decoration: underline;">General description:</h4>
										<p style="">
										Gryffindor or Slytherin? Fascinated by seeing quidditch in Harry potter anytime? Then this one is surely for you. Make a bot that can play quidditch for you. We will make your task easy here, your bot need not fly. It's Quidditch, but on ground :)


<br>
<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/roboquidditch" target="_blank" style="color: white;">REGISTER</a>
</button>

										
</p>
<span style="text-align: center;"><h4 style="position: absolute;top: 300px;text-align: center;font-size: 30px">Game play:</h4	></span>
<p style="position: absolute;top: 350px;" >

• Each team has to make two manually controlled bots : A ‘Seeker Bot’ and a ‘Thrower Bot’. <br>
 • There are two halves of 10 mins each. Each half begins with the ‘snitch’ in possession of one of the teams <br>
. • The Arena has 4 fixed hoops ( Poles with a circular ring on top of them) at different spots with rings of different radius .  <br>
• The Thrower bot should throw the snitch into any of the hoops by standing outside the circular region around hoop.  <br>
• Seeker bot should catch the snitch thrown by opponent. 


 <br><br>
<span style="font-size: 20px">Points Scheme : </span><br><br>
<span style="font-size: 20px">  Throwing :</span><br>
  • Hoop 1 : 30 points<br>
 • Hoop 2 : 25 points <br>
• Hoop 3 : 20 points<br>
 • Hoop 4 : 15 points <br>
• Partial collision with the ring : 5 points
 <br>
<span style="font-size: 20px"> Catching :</span><br>
 • Before ball touches ground: 40 points <br>
• After one collision with ground: 20 points <br>
• If ball touches ground more than once: 0 points • Foul : All the following actions are considered as foul <br>
• If a bot disturbs other team’s bot while throwing or catching (-20 points)<br>
 • Possession of the snitch for more than 20 seconds without throwing/passing (-10 points) <br>
• If ball goes out of arena (-10 points to the thrower bot team) <br>
• If more than one fourth of the thrower bot lies in the circular region around the hoop it is throwing at (-5 points) and no points will be awarded even if the ball passes through hoop. 

 <br><br>


<span style="font-size: 20px">Guidelines and restrictions: </span><br>
 • The objective of the game is to score as many points as you can in 20 minutes of gameplay. <br>
• In case of any foul, ball will be passed to opponent team. <br>
• You’re allowed to pass the snitch to your thrower bot manually after catching, at a cost of -2.5 points.


<br><br>


<span style="font-size: 20px">Arena:</span><br>
pic<br><br>


<span style="font-size: 20px">Bot specifications:</span><br>

• Max bot dimensions : <br>
25cm x 25cm x 25cm<br>
No restrictions on weight.<br>
 
• Wired / Non - wired ( Preferred ). In case of wireless bots, operational frequencies should be adjustable, so as to not cause interference with other team’s bot frequencies.


<br><br>

Organizers: <br>  Jayasimha Reddy(<br>(7382923814)<br>
                       Siddhartha Mishra<br>(9556412669)
<br>
................<br>***********</p>
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    

                      <li class="grid">
						<a href="#image-46">
							<figure class="effect-apollo">
								<img src="images/techy/drift_king.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Drift King</h3>
							<div class="lb-overlay" id="image-46">
									<img src="images/techy/drift_king.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Drift King</h3>
										<h4 style="text-align: center;font-size: 25px">Task:</h4>
										<p style="">In this event ,the contestants are expected to make to an IC engine powered machine ,that can be controlled remotely using a wireless remote controller, which can race against machines of similar construct on an all-terrain track packed with a number of obstacles. <br><br>

<br>
<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/driftking" target="_blank" style="color: white;">REGISTER</a>
</button>

										<span style="font-size: 20px;">Please follow the below link for the complete details about the event.</span><br>

										<a href="Driftking.pdf" style="font-size: 25px">Clik here</a>
<br>

Organizers:<br>  Sekhar Kuruva<br>(7660082174)<br>
Sarbhav Mittal<br>(9640157759)<br>
................<br>***********</p>
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                      <li class="grid">
						<a href="#cadPro">
							<figure class="effect-apollo">
								<img src="images/techy/ojo_cada.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Cad pro</h3>
							<div class="lb-overlay" id="cadPro">
									<img src="images/techy/ojo_cada.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Cad Pro</h3>
										<h4 style="text-align: center;font-size: 25px">INTRODUCTION:</h4>
										<p style="">
										BE A PRO Design Challenge will test your designing skills in 3D design software and here, you have to prove your expertise in a challenging scenario where you race against time.<br>
										<span style="font-size: 20px">Event Description:</span>
										It will be an on-spot designing round. Participants will be given a problem statement at the time of event and they have to submit their design in the specified time limit. 


<br>
<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/cadpro" target="_blank" style="color: white;">REGISTER</a>
</button>
										
</p>
<span style="text-align: center;"><h4 style="position: absolute;top: 350px;text-align: center;font-size: 30px">Rules:</h4	></span>
<p style="position: absolute;top: 380px;" >
 1.Each team can have a maximum of two participants.<br>
 2.Each Question will carry some points according to the type of question and its level of difficulty.<br>
 3.Models can be prepared in any CAD software (CATIA/ProE/AutoCad/Solidworks/Solidedge) and the final file must be prepared in IGES or STEP format.<br>
 4.Computers will be provided, in which Solid edge is installed. If you want to use other software you can bring you own laptop.<br>
5.There will be a prelim round in case the participation exceeds 20.<br>
6.Decision of Judges will be final and binding.<br>

<br>

<span style="font-size: 20px">Judging criteria:</span><br>

  1.Any sign of plagiarism from internet or from other participant will lead to direct disqualification.<br>
 2.Participant can only submit once. In case of multiple submissions only the first entry will be considered for evaluation.<br>
3.The design will be evaluated on the following aspects :<br>
 a.Originality of the Design<br>
  b.Clear and easily comprehensible design<br>
c.Time Taken<br>
 4.Decision of the organizers will be final and binding. No claim will be entertained against the announced results.<br><br>

<span style="font-size: 20px">Organisers</span><br> <br> Kushagra<br>(9451382264)
<br>
                       Divya bala<br>(8978706500)

<br>
................<br>***********</p>
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    
                      <li class="grid">
						<a href="#bridgeBuilder">
							<figure class="effect-apollo">
								<img src="images/techy/bridge_builder.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Bridge Builder</h3>
							<div class="lb-overlay" id="bridgeBuilder">
									<img src="images/techy/bridge_builder.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Bridge Builder</h3>
											<h4 style="text-align: center;font-size: 25px">Event description:</h4>
										<p style="">
										Civil Engineering is an art; a profession of creative ability and logic. Architect provides an opportunity for participants to unleash their innovation in designing an object of significance and splendour .This event aims to harness practical design and constructional abilities of the participants.
Participants have to design a Bridge using Popsicle sticks (icecream sticks) satisfying the given constraints
<br>
										<span style="font-size: 20px">Event Format:</span>
										There will be only one round in which bridges will be tested. Participants have to come with their bridges.

<br>
<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/bridgebuilder" target="_blank" style="color: white;">REGISTER</a>
</button>

										
</p>
<span style="text-align: center;"><h4 style="position: absolute;top: 350px;text-align: center;font-size: 30px">Material Used:</h4	></span>
<p style="position: absolute;top: 380px;" >
 1.Popsicle sticks with dimensions (11cm X 1.2cm X 0.2cm).
2.Only Fevicol can be used as adhesive, use of other adhesives may lead to disqualifications.
3.Use of thread is not allowed.


<br>

<span style="font-size: 20px">Dimensions of Bridge:</span><br>

 <span style="font-size: 20px;color: red" >1.Length:</span> 56-60 cm<br>
<span style="font-size: 20px;color: red">2.Width:</span> 10-11 cm<br>
<span style="font-size: 20px;color: red">3.Height:</span> 11-15 cm<br>
<span style="font-size: 20px;color: red">4.Clearance:</span> A minimum clearance of 8 cm high and 5 cm wide should be provided for the passage of a small toy car.<br>
<span style="font-size: 20px;color: red">5.Weight:</span> Not More than 450gm 
<br><br>
<span style="font-size: 20px">Rules:</span><br>


1.Team size could be of 3-5 members.<br>

2.All sticks must be visible to inspection and may not be painted or stained in anyway.<br>

3.All members of the team should be enrolled as students in an educational institute.<br>

4.No person can be a part of more than one team.<br>

5.No other reinforcement material (like steel wires, wire mesh) will be allowed.<br>

6.Bridges not meeting the requirements listed in these rules will be subject to disqualification<br>

7.Each bridge must be able to hold the weight of the testing equipment which is about 4 kg.<br>

8.Loading will be done at the centre of Bridge.<br>

Decision of Judges will be final and binding.<br>
<span style="font-size: 20px">Judging criteria:</span><br>
Each bridge will be scored in accordance to an Efficiency Rating (ER) which will be calculated by the following equation:
ER = (Load carried by bridge at failure)/(Weight Of Bridge)



<span style="font-size: 20px">Organisers</span><br> <br> Joseph<br>(9133139048)
<br>
                       Jayanth<br>(9494296400)<br>
                         Ravi Teja<br>(9100403979)

<br>
................<br>***********</p>
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
					
					<li class="grid">
						<a href="#eBloopers">
							<figure class="effect-apollo">
								<img src="images/techy/electronic_champ.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
										<h3>Electronic Bloopers</h3>
							<div class="lb-overlay" id="eBloopers">
									<img src="images/techy/electronic_champ.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Electronic Bloopers</h3>
											<h4 style="text-align: center;font-size: 25px">Event Description</h4>
										<p style="">Passionate about Electronics? Then this one is for you. This January, come and get immersed in
an exciting world of electronics. Prove your mettle by participating in this quiz.
 <br>

<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/electronicbloopers" target="_blank" style="color: white;">REGISTER</a>
</button>

</p><h4 style="position: absolute;top: 350px;text-align: center;font-size: 30px">Rules and regulation:</h4	>
<p style="position: absolute;top: 380px;" >
1.It is an offline quiz event.<br> 2.Team size is 1 or 2.<br>
3.The event consists of two rounds. Top three teams based on the points are declared as winners.<br>
4.Participation certificates are given for all those who register online and for on the spot registered people, certificates are given if they have a minimum score of 20.<br><br>
Organizers:<br>  Tejas<br>(7032396350)<br>Maroju Rahul<br>9573132671<br>
................<br>***********</p>
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    

                          <li class="grid">
						<a href="#dtmfRace">
							<figure class="effect-apollo">
								<img src="images/techy/dtmf_race.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>DTMF Race</h3>
							<div class="lb-overlay" id="dtmfRace">
									<img src="images/techy/dtmf_race.jpg" alt="image4" />
									<div class="gal-info">							
                        <h3>DTMF Race</h3>
											<h4 style="text-align: center;font-size: 25px">Event Description</h4>
										<p style="">
										Gear up with your wireless bot. Here comes the race which will test the strength, stability, and cruelty of your bot. It's all about racing towards the finish line through tough terrain by crushing your opponents. Let's see who’s bot is better equipped, better designed to win. 
										 <br>

<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/dtmfrace" target="_blank" style="color: white;">REGISTER</a>
</button>

</p><h4 style="position: absolute;top: 350px;text-align: center;font-size: 30px">Rules</h4	>
<p style="position: absolute;top: 380px;" >

The team cannot have more than 3 participants. <br>
The teams will be revealed the race circuit on the day of the event.<br>
The organisers reserve the right to make changes to the event as/when necessary.
 <br>


Organizers:<br>  Shashank Gupta(<br>(8989883801)<br>Narayan Kothari<br>9016545412<br>
................<br>***********</p>
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>

                      <li class="grid">
						<a href="#hack_a_maze">
							<figure class="effect-apollo">
								<img src="images/techy/hack_a_maze.png" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Hack A Maze</h3>
							<div class="lb-overlay" id="hack_a_maze">
									<img src="images/techy/hack_a_maze.png" alt="image4" />
									<div class="gal-info">							
										<h3>Hack A Maze</h3>
										<h4 style="text-align: center;font-size: 25px">Event Description</h4>
										<p style="">Compete against others hackers in exploring different levels of a challenge maze with your hacking skills. You will have to find your way to victory to defeat others. It’s an on the spot event, in which there will a website/portal hosted locally and all the teams will have to navigate the website solving a series of puzzles and challenges. The first team to reach the goal or go the farthest in the time limit bags the prize. <br>
 <br>

<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/hackamzae" target="_blank" style="color: white;">REGISTER</a>
</button>
										
</p><h4 style="position: absolute;top: 350px;text-align: center;font-size: 30px">Rules</h4	>
<p style="position: absolute;top: 380px;" >1. Max Team Size - 2 (Individual participants are welcome) <br>
2. There will be only a single round.<br>
3. The first team to reach the goal or go the farthest in the time limit bags the prize. <br>
4. Incase no team is able to clear the maze then team to reach the highest level will be declared winner. <br>5. The decision of the organizers will be final and binding. <br>
Organizers:<br>  Ayush Pateria<br>(9424040016)<br>
................<br>***********</p>

									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>


<!-- Paper Plane -->
  <li class="grid">
						<a href="#paperPlane">
							<figure class="effect-apollo">
								<img src="images/techy/paperplane.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Paper Plane</h3>
							<div class="lb-overlay" id="paperPlane">
									<img src="images/techy/paperplane.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Paper Plane</h3>
										<h4 style="text-align: center;font-size: 25px">Event Description</h4>
										<p style="">
										With no technical prerequisite, paper plane is an event in which participants from any age group can participate. All they have to do is to fly a plane made from standard A4 sheet according to the undermentioned conditions.


										
</p>
 <br>

<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/paperplane" target="_blank" style="color: white;">REGISTER</a>
</button>
<span style="text-align: center;"><h4 style="position: absolute;top: 350px;text-align: center;font-size: 30px">Event Format</h4	></span>
<p style="position: absolute;top: 380px;" >
The event shall be conducted in two categories :-
<br>
1.Long Distance Category<br>
2.Longest Airtime Category<br>
This is an individual event, where one can participate in both the events separately. Each participant shall be provided with two pieces of plain A4 paper (297x210mm). Paper planes must only be constructed out of one piece of plain A4 paper on site, and two trials per participant are allowed
<br>

<span style="font-size: 20px">1.Long Distance Category</span><br>

A.The aircraft must be launched by one person throwing the aircraft unaided from behind a straight launch line marked on the floor. Passing over the launch line leads to an invalid attempt. Touching the launch line or any point beyond during the launch, leads to an invalid attempt.<br>
B.The distance is measured from the starting line to the furthermost part of the plane after it has come to rest. Planes may strike inanimate objects (wall, ceiling, fixtures, floor, etc) along the way. We measure the horizontal displacement (e.g. if a plane gets hung up on the ceiling or flies into a corner, we will not measure a diagonal distance).
<br>
<span style="font-size: 20px">2.Longest Airtime Category</span><br>
C.The aircraft must be launched by one person throwing the aircraft unaided from a reasonably static position. The participant needs to have both feet firm on the ground during the attempt.
D.Decisive for measurement are the moments when the paper plane leaves the hand and the first time it hits the ground or any object.
<br>
<span style="font-size: 20px">Event Rules:</span><br>
1.Paper planes must only be constructed out of one piece of plain A4 paper (297x210mm) weighing no more than 100 gms.<br>
2.The plane must be made by folding the sheet only! No ripping, gluing, cutting or stapling is allowed!<br>
3.Paper planes have to be built on site on event day with the provided official paper.<br>
4.A run-up or fast walk as part of the launch is not permitted, nor the use of ramps or like devices.<br>
5.Two trials per participant are allowed. Different planes can be used, the better attempt counts.
<br>
<span style="font-size: 20px">Judgement Criteria:</span><br>
1.First Category - The plane having longest traveled distance will be the winner.<br>
2.Second Category -  The plane having largest airtime will be the winner.<br>
3.All final abiding decisions resides with the Organizers of the event.<br>

<span style="font-size: 20px">Organisers</span><br> <br> Sameer<br>(9503317412)
<br>
                       Divya bala<br>(7032400396)

<br>
................<br>***********</p>

									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>

			<!-- Galileo Project -->		

  <li class="grid">
						<a href="#galileo">
							<figure class="effect-apollo">
								<img src="images/techy/galileo.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>The Galileo Project</h3>
							<div class="lb-overlay" id="galileo">
									<img src="images/techy/galileo.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>The Galileo Project</h3>
										<h4 style="text-align: center;font-size: 25px">Event Description</h4>
										<p style="">
										“By taking the sense our sense of sight far beyond the realm of our forebear’s imagination, these wonderful instruments, the telescopes, open the way to a deeper and more perfect understanding of nature.”   -  Rene Descartes.<br>
Make your own Optical tube.   <br>                                                                                                                
This event is based on building of a simple terrestrial telescope with given components.
 <br>

										
</p>
 <br>

<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/thegalileoproject" target="_blank" style="color: white;">REGISTER</a>
</button>

<span style="text-align: center;"><h4 style="position: absolute;top: 350px;text-align: center;font-size: 30px">Event Format</h4	></span>
<p style="position: absolute;top: 380px;" >
<span style="font-size: 20px">Round 1:</span><br>
A quiz will be conducted to screen the participants. This quiz is based mostly on optics and physics of light.<br>
<span style="font-size: 20px">Round 2:</span><br>
Another quiz will be conducted to screen the participants. This quiz is based on Skymap and a few stellar objects.<br>
<span style="font-size: 20px">Round 3:</span><br>
The top ten teams from the quizzes will qualify to the third round. The teams have to make a terrestrial telescope with the components and infrastructure provided by the organizers.<br>
<span style="font-size: 20px">Judgement Criteria:</span><br>
 1.Magnification<br>
 2.Clarity of the image<br>
 3.Overall Design<br>
<span style="font-size: 20px">Rules and Regulations:</span><br>
1.Each team is allowed to have a maximum of three members.<br>
2.Members of a team can be from different colleges<br>
3.If a member is found using any other components, other than the ones provided by the organizers, the team shall be disqualified<br>
4.The Organizers reserve all rights to change any of the mentioned rules as they deem fit.<br>
5.Changes in the rules, if any, will be highlighted on the website.<br>
6.In case of any discrepancy, the decision of the organizers shall be final.<br>
Organizers: <br> Siddharth Gautham<br>(9494598849)<br>
                       Akanksha Dhaygude<br>(9421269720)
<br>
................<br>***********</p>

									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>

                      <li class="grid">
						<a href="#enigma">
							<figure class="effect-apollo">
								<img src="images/techy/enigma.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Engima</h3>
							<div class="lb-overlay" id="enigma">
									<img src="images/techy/enigma.jpg" alt="image4" />
									<div class="gal-info">							
                        <h3>Engima</h3>
										<h4 style="text-align: center;font-size: 25px">Event Description</h4>
										<p style="">Find the mysterious​ ​secret techniques to decrypt the given texts/messages. Clear all the levels in the allotted time to become the ultimate “cryptacker”. It’s a pen and paper event. Each team has to decode a series of crypted messages.  <br>

										
</p>
 <br>

<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/enigma" target="_blank" style="color: white;">REGISTER</a>
</button>
<h4 style="position: absolute;top: 350px;text-align: center;font-size: 30px">Rules</h4	>
<p style="position: absolute;top: 380px;" >1. Max Team Size - 2 (Individual participants are welcome)<br>
2. Event will be conducted as a single timed round. <br>
3. Tie breakers would be conducted if necessary. <br>
4. There are points associated with each message and the team to accumulate maximum number of points wins. <br>
5. The decision of the organizers will be final and binding. <br>
Organizers:<br>   Krishna Priya<br>7032257433<br>Saurabh Gangwar<br>9422333180<br>
................<br>***********</p>

									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                    
                      <li class="grid">
						<a href="#Algorithma">
							<figure class="effect-apollo">
								<img src="images/techy/algo.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Algorithma</h3>
							<div class="lb-overlay" id="Algorithma">
									<img src="images/techy/algo.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Algorithma</h3>
										<h4 style="text-align: center;font-size: 25px">Event Description</h4>
										<p style="">Algorithma is the perfect event for those who like to solve mathematical and logical puzzles as well as design algorithms, regardless of your knowledge of programming. Here we will test your problem solving ability in a series of steps. You will be given a set of puzzles and algorithmic problems. You have to write pseudocode or steps for solving a problem in words or draw a flowchart highlighting the approach for solving the problem anything which clearly describes your logic.

<br>
It’s an on spot event.
 <br>

<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/algorithma" target="_blank" style="color: white;">REGISTER</a>
</button>
										
</p><h4 style="position: absolute;top: 350px;text-align: center;font-size: 30px">Rules and Regulations</h4	>
<p style="position: absolute;top: 380px;" >
1.This is an individual event. No teams are allowed.<br>
2.The organisers reserve the right to make any change to the event whenever deemed necessary.<br>
3.Any participants indulging in plagiarism or sharing code with others in any form will be immediately disqualified.<br>
4.All programs will be judged in person and winners will be announced before the fest ends.<br>
5.All decisions made by the judges will be final and binding.<br>

Organizers: <br>Amarnath<br>(8500280547)<br>Sumanth<br>(9642612358)
<br>............<br>*************
								
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>


					       <li class="grid">
						<a href="#proQuest">
							<figure class="effect-apollo">
								<img src="images/techy/pro_quest.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Pro Quest</h3>
							<div class="lb-overlay" id="proQuest">
									<img src="images/techy/pro_quest.jpg" alt="image4" />
									<div class="gal-info">							
										<h3>Pro Quest</h3>
										<h4 style="text-align: center;font-size: 25px">Event Description</h4>
										<p style="">Proquest is a competitive programming competition composed of three levels, for participants of all levels of expertise. Experience the beginner, medium and advance levels of programming from pen and paper programming to a truly challenging problem statement.<br>
It’s an on spot event.
 <br>


<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/proquest" target="_blank" style="color: white;">REGISTER</a>
</button>
										
</p><h4 style="position: absolute;top: 350px;text-align: center;font-size: 30px">Rules</h4	>
<p style="position: absolute;top: 380px;" >
1.This is an individual event. No teams are allowed.<br>
2.The organisers reserve the right to make any change to the event whenever deemed necessary.<br>
3.Any participants indulging in plagiarism or found looking into each others <br>4.papers will be disqualified.<br>
5.Winners will be announced before the fest ends.<br>
6.All decisions made by the judges will be final and binding.<br>
7.It will be a 3 hour event.<br>


Organizers:<br> Nishant Nivas <br>(8332000710)<br> Srinivas<br>(8978918823)<br>............<br>*************
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
                      
                    
                      <li class="grid">
						<a href="#Junkyard">
							<figure class="effect-apollo">
								<img src="images/techy/junkyard_wars.png" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Junkyard Wars</h3>
							<div class="lb-overlay" id="Junkyard">
									<img src="images/techy/junkyard_wars.png" alt="image4" />
									<div class="gal-info">							
										<h3>Junkyard Wars</h3>
										<h4 style="text-align: center;font-size: 25px">Event Description</h4>
										<p style="">
										"Engineers like to solve problems .If there are no problems handily available, they will create their own problems"-Scott Adams.
It’s time for your team to dive into innovation and creativity, find a good solution and emerge as jugaads. So, pile up your enthusiasm to win the battle.
 <br>
 <br>

<br>
<button type="button" class="btn btn-primary btn-sm" style="text-align:center;margin-left: 0%;">
<a href="https://nvision.org.in/events/junkyardwars" target="_blank" style="color: white;">REGISTER</a>
</button>
										
</p><h4 style="position: absolute;top: 350px;text-align: center;font-size: 30px">Event Format:</h4	>
<p style="position: absolute;top: 380px;" >
1.This is a on the spot event where participants will asked to make model using the given components..<br>
2.There are two rounds to this event..<br>
<span style="font-size: 20px;color: red">A.First Round:</span><br>
i) Teams have to present their design in two hours. .<br>
ii) Teams will be allowed to use the internet facilities available in forming ideas..<br>
iii) Five teams will be shortlisted for next round..<br>
<span style="font-size: 20px;color: red">B.Second Round:</span><br>
i) The shortlisted teams will have to manufacture their product (on the design provided by them) using only the materials from a pile of junk within a certain time limit.<br>

<span style="font-size: 20px">Certification Policy:</span><br>
1.Certificate of Merit will be given to all the winners..<br>
2.Certificates of Excellence will be given to all the teams who qualify for the second round..<br>
3.Rest of the Participants will be given Certificate of Participation..<br>
4.The teams which get disqualified due to disobeying any of the competition rules will not be considered for the certificate..<br>

<span style="font-size: 20px">Rules and Regulations:</span><br>
The teams must have at least 3 members and a maximum of 5 members.<br>
Every member on the team must register for the event on the website<br>
The decision made by the judges will be final and binding.<br>
The organisers reserve the right to make changes to the event as/when necessary.<br><br>

<span style="font-size: 20px">Judging criteria:
</span><br>
1.Originality of the design<br>
2.Its simplicity<br>
3.The science involved<br>
4.The efficiency of the machine<br>

Organizers:<br> Vamshi<br>(9515235789)<br>
Neti rajesh<br>(9177426872)<br>
Vivek<br>(7382725409)<br>

................<br>***********</p>
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>

					      <li class="grid">
						<a href="#quadcopter">
							<figure class="effect-apollo">
								<img src="images/techy/quadcopter.jpg" alt="image4">
								<figcaption>
								</figcaption>			
							</figure>
						</a>
                        <h3>Quadcopter Challenge</h3>
							<div class="lb-overlay" id="quadcopter">
									<img src="images/techy/quadcopter.jpg" alt="image4" />
									<div class="gal-info">							
                        <h3>Quadcopter Challenge</h3>
												
										<p style=" text-align: left;position: absolute;top: 80px">
										<span style="font-size: 25px;">Problem Statement</span><br>
										The event is based on finding the most agile and fastest drone. The problem statement is simple:- pass through three rounds and the team with maximum number of points wins.

 <br>

										
</p>

<p style="position: absolute;top: 280px;" >
<span style="font-size: 25px">Quadcopter Specifications</span><br>
The quadcopter should fit within the dimensions, 60x 60x 30 cm 
The vehicle needs to be controlled by a wireless remote control system at all times during the competition. 
Organizers won’t be responsible if the frequencies of two drones match and there is a frequency interference. Participants must have a secondary remote in such a case. 
Propellers cannot be made of metal. 
Usage of Ready-to-fly kits is strictly prohibited. 

<span style="font-size: 25px">Rounds</span><br>
<span style="font-size: 20px">Round 0</span><br>

1.Participants must submit a video of the working model through e-mail to nvision@iith.ac.in before January 14, 2017. <br>
2.The length of the video should be between 1 and 2 minutes showing the quadcopter taking off and landing and taking a left and a right turn. <br>
3.The video should also cover the pilot. <br><br>


<span style="font-size: 20px">Round 1</span><br>
Pass through all the flags situated at different heights in a sequential manner within stipulated time.
<br>

<span style="font-size: 20px">Round 2:
</span><br>
Rotate the drone by 90 degrees both clockwise and anti-clockwise near the highest flag.Time will be considered while giving points.
<span style="font-size: 20px">Round 2:
</span><br>
Pass through all the hoops situated at different heights and then land at the starting point.
<br>
<span style="font-size: 20px">Point Scheme</span><br>
1.In all the three events, time will be considered while giving points. The average of all timings of each participant will be calculated and points will allocated based on the comparison between participant’s time and average. 
If the drone is more faster than the average, you will get more points!!!
<br>
2.This point scheme will be applied for each event and separate points for each event will be calculated.


<span style="font-size: 20px">Level 2:
</span><br>
<span style="font-size: 20px">Bonus Points
</span><br>
<span style="font-size: 20px">Round 1:
</span><br>
<span style="font-size: 20px">Round 2:
</span><br>
Special points will be awarded if the drone is capable of doing 360 degrees clockwise and anti-clockwise rotation. Note that if the drone does 360 degrees rotation in either direction, points for both 90 degree and 360 degree(the special points) will be given.<br><br>

<span style="font-size: 20px">Round 3:
</span><br>
Special hoops will be set up offset of the path. Passing through those hoops will result in awarding fixed number of points to that team.<br><br>


<span style="font-size: 20px">Fouls and penalties
</span><br>
Destruction of arena of each round of any type will lead to immediate disqualification.<br>
Obstruction of other participant’s drone in any manner whatsoever will cause huge penalty in their points tally.<br>
In any case of dispute, the decision of organizers will be final.<br>


<span style="font-size: 20px">Organizers:
</span><br>


Prateek(9700389391)<br>
Chandra Kiran(9701589374)    <br>                                                                                
Bhanu prakash(8297129699)<br>


................<br>***********</p>
									</div>
									<a href="events.php#techy_events" class="lb-close"><img style="width: 50px; height: 50px ;top:-10%; " src="images/close.jpg" ></a>
							</div>
					</li>
<!--  -->
                    
                    
                    
                    
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
								<li><a href="https://www.youtube.com/user/ElanIITHyderabad" class="facebook chrome"> </a></li>
								
								
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