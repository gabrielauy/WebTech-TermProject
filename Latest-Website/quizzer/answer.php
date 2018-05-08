<?php
session_start();
include 'database.php';
$ans = new database;
$answer =$ans->answer($_POST);
$total_ans= $answer['right']+$answer['wrong']+$answer['no_answer'];
?>

<html>
	<head>
		<title>Webtech 2018</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="../index.html">Webtech <span>2018</span></a></div>
				<a href="#menu">Menu</a>
			</header>
			
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="../index.html">Home</a></li>
					<li><a href="../notes.html">Notes</a></li>
					<li><a href="../quizzer.php">Quizzer</a></li>
					<li><a href="glossary.html">Glossary</a></li>
				</ul>
			</nav>
		<!--Body -->
		
		<div id="score" style="background-color:#FCF3CF;height:80%;width:40%;margin-top:5%;margin-bottom:5%;padding:3%;color:white;border-radius: 25px;margin-left:30%;
		margin-right:25%;color:#2C3E50  ">
			<center>
				<h2>You have completed the test!</h2>
				<hr>
				<p>Correct: <?php echo $answer['right']; ?> </p>
				<p>Wrong: <?php echo $answer['wrong']; ?> </p>
				<p>No answer: <?php echo $answer['no_answer']; ?> </p>
				<br>
				<p>You got: <?php echo $answer['right'];?> / <?php echo $total_ans; ?> </p><hr>
			<a href ="../quizzer.php" name="submit" style="color:#222;font-size:100%;font-style: italic;"><strong> Take a quiz again </strong></a>
			<br><br>
			</center>
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
			
	</html>