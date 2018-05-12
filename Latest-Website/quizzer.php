<?php
	session_start();
	include 'phpinclude/database.php';
	$database = new database;
	$database->topic_show();
	$username=$_SESSION['username'];
	$profile = new database;
	$profile->user_profile($username);
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
				<div class="logo"><a href="home.php">Webtech <span>2018</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
			<h2>Hello <?php 
						foreach($profile->data as $prof)
						{ ?>						
							<?php echo $prof['first_name'];?>
							<?php echo $prof['last_name'];?>
							<?php } ?> !
					</h2>
				<ul class="links">
					<li><a href="home.php">Home</a></li>
					<li><a href="notes.php">Finals</a></li>
					<li><a href="quizzer.php">Quizzer</a></li>
					<li><a href="glossary.php">Glossary</a></li>
					<li><a href="todolist.php">To do list</a></li>
					<li><a href="forum.php">Forum</a></li>
					<li><form action = "phpinclude/logout-dbase.php" method="POST">
										<button type ="submit" name ="submit"> Logout </button>
										</form></li>
					
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

	</body>
</html>