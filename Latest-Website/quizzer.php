<?php
	session_start();
	include 'quizzer/database.php';
	$database = new database;
	$database->topic_show();
?>

<!DOCTYPE HTML>
<!--
-->
<html>
	<head>
		<title>Webtech 2018</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">Webtech <span>2018</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="notes.html">Notes</a></li>
					<li><a href="quizzer.php">Quizzer</a></li>
					<li><a href="glossary.html">Glossary</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Test your knowledge</p>
						<h2>My Quizzer</h2>
					</header>
				</div>
			</section>

		<!-- Main -->
		
				<div id="main" class="container">
					<div class="inner">
						<div class="grid-style">
							
								<div class="image fit">
									<img src="images/character-typing.gif" alt="" />
								</div>
									<div class="content">
									<center><h1 style ="font-size:200%;"> Select a Topic here </h1></center>
										<form method="post" action="quizzer/question.php" class="startquiz">
											<select class="startquiz" id="" name="topic">
											<?php
												foreach($database->topic as $topic){
												?>	
												<option value="<?php echo $topic['topic_id'] ?>"><?php echo $topic['topic_name'] ?></option>
												<?php	}
											?>
											</select><br>
											<br>
											<center><button type="submit" name="submit">Start Quiz</button></center>
										</form>
								</div>
							</div>
						</div>
					</div>
				</div>
					
							
								

					

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>