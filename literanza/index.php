<?php
include '../Mobile-Detect-master/Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: http://m.elan.org.in/litfest');
    exit(0);
}
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>LITERANZA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
    	<link rel="shortcut icon" href="../favicon.ico">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper"  style="outline: none;">

				<!-- Header -->
					<header id="header" style="text-decoration: none;outline: none;">
					<a href="../" style="text-decoration: none;outline: none;">
						<div class="logo"  style="outline: none;">
						HOME
					</div>
						</a>
						<div class="content">
							<div class="inner">
								<h1>LITERANZA</h1>
								<p>
								Date: 7th January , 2017 
 									<br>
								Venue: --- </p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#open">Open&nbsp;General&nbsp;Quiz</a></li>
								<li><a href="#school">School&nbsp;Quiz</a></li>
								<li><a href="#jam">Just&nbsp;A&nbsp;Minute</a></li>
								<li><a href="#detective">Mr.&nbsp;Detective</a></li>
								<li><a href="#contact">Contact&nbsp;Us</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">


							<article id="open">
								<h2 class="major">OPEN&nbsp;GENERAL&nbsp;QUIZ</h2>
								<p>
								A general quiz by K-Circle, Hyderabad's legendary quizzing group. 
								<br>
								Quizmaster Lokesh is sure to send your brain cells firing with his questions.
								</p>
							</article>


							

						
							<article id="school">
								<h2 class="major">SCHOOL&nbsp;QUIZ</h2>
								<p>
								A quiz specially for school students, by the Quiz Club IITH.
								<br>
								 For students of classes 7-12.
								 <br>
								  The questions will be on everything from Wagon-R to West Indies, to Terracotta and toffee.
								</p>
							</article>

							<article id="jam">
								<h2 class="major">JUST&nbsp;A&nbsp;MINUTE</h2>
								<p>
								A standard JAM session.
								<br>
								 For the uninitiated, this is a speaking event in which you get to speak on a given topic for a minute, unless someone else does.
								 <br>
								  Still don't get it? Well, just join us and you'll find out for yourself!
								</p>
							</article>

							
							<article id="detective">
								<h2 class="major">MR.&nbsp;DETECTIVE</h2>
								<p>
									To all those Sherlocks, the masters of deductive reasoning, here is your chance to prove your skills.
									<br>
									 Solve the mystery, win the prize. Simple? 
								</p>
							</article>

	
						<!-- Contact -->
								<!-- Hospitality -->
							<article id="contact">
								<h2 class="major">For Any Queries ,<br> Feel Free To Contact Us</h2>
								
								<p>Siddharth Sonkamble  <br>
									Workshop Co-ordinator <br>
					siddharth@elan.org.in  <br>
+91-96-1949-7727</p>
<p>Kasula Medha  <br>
Publicity & Hospitality Core <br>
medha@elan.org.in  <br>
+91-97-0496-9799</p>
</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; ELAN 2017 </p>
					</footer>

			</div>
						<div id="bg"></div>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
