<?php
	session_start();
	include 'phpinclude/database.php';
	$username=$_SESSION['username'];
	$profile = new database;
	$profile->user_profile($username);
	$profile->show_users();
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>WebTech 2018</title>
		<link rel="icon" href="images/Logo.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="home.php">WebTech <span>2018</span></a></div>
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
					<li><a href="classmates.php">Forum</a></li>
					<li><form action = "phpinclude/logout-dbase.php" method="POST">
										<button type ="submit" name ="submit"> Logout </button>
										</form></li>
					
				</ul>
			</nav>
			
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<h2>Showing Classmates</h2>
							<hr>
							<tbody>
								<?php
									foreach($profile->show_users as $feed){ ?>
								<tr>
								<td><?php echo $feed['first_name'];?></td>
								<td><?php echo $feed['last_name'];?></td><br>
								</tr>
							</tbody>
						<?php } ?>
		</table>
						</div>
					</div>
				</div>
			</section>
			
			
			
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
