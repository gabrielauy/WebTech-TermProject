<?php
	session_start();
	include 'phpinclude/database.php';
	$username=$_SESSION['student_id'];
	$profile = new database;
	$profile->user_profile($username);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>WebTech 2018</title>
		<link rel="icon" href="images/Logo.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<body>
	
	<div class="mother-container">
		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html">WebTech <span>2018</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="notes.html">Finals</a></li>
					<li><a href="quizzer.php">Quizzer</a></li>
					<li><a href="glossary.html">Glossary</a></li>
					<li><a href="todolist.php">To do list</a></li>
					<li><form action = "phpinclude/logout-dbase.php" method="POST">
										<button type ="submit" name ="submit"> Logout </button>
										</form></li>
					
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/image3.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Study now. <a href="https://templated.co"> Be proud later.</a></p>
							<h2>WebTech</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/image4.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Java Web Servlets & Java Server Pages</p>
							<h2>JWS & JSP</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/image5.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Hypertext Preprocessor</p>
							<h2>PHP</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/image6.jpg"s  alt="" />
					<div class="inner">
						<header>
							<p>Server-Side JavaScript with NODE.js</p>
							<h2>SSJ</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/image7.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Active Server Pages</p>
							<h2>ASP/ASP.Net</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/servlet.png" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>hi <?php echo $username; ?> </p>
										<h2>Hello <?php 
											foreach($profile->data as $prof)
											{ ?>
												
													<?php echo $prof['first_name'];?>
													<?php echo $prof['last_name'];?>
											<?php } ?> !
										</h2>
									</header>
									<p>  </p>
									<footer class="align-center">
										<a href="notes.html" class="button alt">Edit profile</a>
									</footer>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			

			</section>
		
		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<!-- Slideshow container -->
					<div class="slideshow-container">

					  <!-- Full-width slides/quotes -->
					  <div class="mySlides">
						<q>This is the perfect time to go on an adventure and explore!</q>
						<p class="author">- Jo Montez</p>
					  </div>

					  <div class="mySlides">
						<q>Idea is collaboration</q>
						<p class="author">- Maria Conception Clemente</p>
					  </div>

					  <div class="mySlides">
						<q>Design is not just what it looks like & feels like. Design is how it works</q>
						<p class="author">- Steve Jobs</p>
					  </div>

					  <!-- Next/prev buttons -->
					  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					  <a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">Idea is collaboration</p>
						<h2>MEET THE TEAM</h2>
						<p>We are a group of Information Technology students currrently enrolled in Web Systems and Technologies. This website aims to showcase the knowledge using the technologies we have learned throughout the semester.</p>
					</header>
				</div>
			
				<div class ="image-wrapper">
					<div class ="column">
						<div class="imgBx">
							<img src ="images/venessa.jpg">
						</div>
						<div class="details">
							<div class="content">
								<h1>Venessa Antonio<br><span>Designer</span></h1>
								<ul>
									<li><a href="#" class="icon fa-twitter" ></a></li>
									<li><a href="#" class="icon fa-facebook"></a></li>
									<li><a href="#" class="icon fa-instagram"></a></li>
								</ul>
							</div>
						</div>	
					</div>
					
					<div class ="column">
						<div class="imgBx">
							<img src ="images/angelica.jpg">
						</div>
						<div class="details">
							<div class="content">
								<h1>Angelica Grabanzor<br><span>Designer</span></h1>
								<ul>
									<li><a href="#" class="icon fa-twitter" ></a></li>
									<li><a href="https://web.facebook.com/aeiagrbnzr" class="icon fa-facebook"></a></li>
									<li><a href="https://www.instagram.com/jellygrbnzr/?hl=en" class="icon fa-instagram"></a></li>
								</ul>
							</div>
						</div>	
					</div>
					
					<div class ="column">
						<div class="imgBx">
							<img src ="images/albert.jpg">
						</div>
						<div class="details">
							<div class="content">
								<h1>Albert Lacap Jr.<br><span>Developer</span></h1>
								<ul>
									<li><a href="#" class="icon fa-twitter" ></a></li>
									<li><a href="#" class="icon fa-facebook"></a></li>
									<li><a href="#" class="icon fa-instagram"></a></li>
								</ul>
							</div>
						</div>	
					</div>
					
					<div class ="column">
						<div class="imgBx">
							<img src ="images/Stefanie.jpg">
						</div>
						<div class="details">
							<div class="content">
								<h1>Stefanie Reyes<br><span>Designer</span></h1>
								<ul>
									<li><a href="#" class="icon fa-twitter" ></a></li>
									<li><a href="#" class="icon fa-facebook"></a></li>
									<li><a href="#" class="icon fa-instagram"></a></li>
								</ul>
							</div>
						</div>	
					</div>
					
					<div class ="column">
						<div class="imgBx">
							<img src ="images/gab.jpg">
						</div>
						<div class="details">
							<div class="content">
								<h1>Gabriela Uy<br><span>Designer</span></h1>
								<ul>
									<li><a href="#" class="icon fa-twitter" ></a></li>
									<li><a href="#" class="icon fa-facebook"></a></li>
									<li><a href="#" class="icon fa-instagram"></a></li>
								</ul>
							</div>
						</div>	
					</div>	
				</div>
				
			

		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					&copy; WebTech 9331A. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/slide.js"></script>

	</div>
	</body>
</html>

