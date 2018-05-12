<?php
	session_start();
	include 'phpinclude/database.php';
	$username=$_SESSION['username'];
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
					<li><a href="classmates.php">Classmates</a></li>
					<li><form action = "phpinclude/logout-dbase.php" method="POST">
										<button type ="submit" name ="submit"> Logout </button>
										</form></li>
					
				</ul>
			</nav>
			
			<div class="progress">
				<div class="progress-container">
					<div class="progress-bar" id="myBar"></div>
				</div>  
			</div>
			
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>WHAT IS</p>
								<h2 style="font-weight: bold;">Hypertext Preprocessor</h2>
							</header>
							<p style="text-align:center; color:#9A7D0A">Hypertext Preprocessor also known as PHP is a script language and interpreter, similar to JavaScript sand Microsoft's VBScript, that is freely available and used primarily on Linux Web servers. As with ASP, the PHP script is embedded within a webpage along with its HTML. Also, it is the most famous server-side language found on the web. PHP is drafted to pull and edit database info. It is bundled with SQL language databases. It was designed exclusively for the web. It is straightforward in its installation as well as deploying it. Among the number of content-management systems, this is the foundation.</p>
							<p>
								<h4 style="text-align:center;"><strong>PHP Global Variables - Superglobals</strong></h4>

								<ul>

									<li><strong>PHP $GLOBALS</strong><br>
									&nbsp&nbsp&nbsp&nbspA PHP super global variable that can access variables that are global from any part in the script, including functions and methods of PHP. These are stored in an array called $GLOBALS[index].</li>

			                        <li><strong>PHP $_SERVER</strong><br>
									&nbsp&nbsp&nbsp&nbspThis PHP super global variable holds information, paths, and locations of scripts.</li>

			                        <li><strong>PHP $_REQUEST</strong><br>
									&nbsp&nbsp&nbsp&nbspGathers data after submitting HTML form. An example is submitting data, sending the specified file in the form of an action attribute tag called “form”. </li>

			                        <li><strong>PHP $_POST</strong><br>
									&nbsp&nbsp&nbsp&nbspAn extensively used way to gather form data after sending an HTML form with the method “post”. It is also used to pass variables. </li>
									
			                        <li><strong>PHP $_GET</strong><br>
									&nbsp&nbsp&nbsp&nbspUsed to gather form data after submitting an HTML form with the get method. Sends data to the URL.</li>	
									
									<li><strong>PHP $_FILES</strong><br>
									&nbsp&nbsp&nbsp&nbspRepresents the data available to PHP script HTTP POST file uploads. Using $_FILES is the currently preferred way to handle uploaded files in PHP.</li>
												
									<li><strong>PHP $_COOKIE</strong><br>
									&nbsp&nbsp&nbsp&nbspRepresents data available to a PHP script via HTTP cookies</li>
											
									<li><strong>PHP $_ENV</strong><br>
									&nbsp&nbsp&nbsp&nbspRepresents data available to a PHP script from the environment in which PHP is running.</li>
											
									<li><strong>PHP $_SESSION</strong><br>
									&nbsp&nbsp&nbsp&nbsp Represents data available to a PHP that has previously been stored in a session.</li>
									<p>
								
								<h4 style="text-align:center;"><strong>PHP Session</strong></h4>
								<p style="text-align:center;">Sessions are a simple way to store data for individual users against a unique session ID. 
								This can be used to persist state information between page requests. Session IDs are normally sent to the browser via session cookies and the ID is used to retrieve existing session data.
								The absence of an ID or session cookie lets PHP know to create a new session, and generate a new session ID.
								The absence of an ID or session cookie lets PHP know to create a new session, and generate a new session ID.</p>
							</ul>
								
							<p><strong>These session functions are which to be used:</strong></li></p>
							<li>Session_abort  - discard session array changes and finish session</li>
							<li>Session_cache_expire - return current cache expire</li>
							<li>Session_cache_limiter - get and/or set the current cache limiter</li>
							<li>Session_commit  - alias of session_write_close</li>
							<li>Session_create_id  - create new session id</li>
							<li>Session_decode  - decodes session data from a session encoded string</li>
							<li>Session_decode  - destroys all data registered to a session></li>
							<li>Session_encode - encodes the current session data as a session encoded string</li>
							<li>Session_get_cookie_params - perform session data garbage collection</li>
							<li>Session_id - perform session data garbage collection</li>
							<li>Session_is_registered - find out whether a global variable is registered in a session</li>
							<li>Session-module_name - get and/or set the current session module</li>
							<li>Session_name- get and/or set the current session name</li>
							<li>SSession_regenerate_id - update the current session id with a newly generated on</li>
							<li>Session_register_shutdown - sessions shutdown function</li>
							<li>Session_register - register one or more global variables with the current session</li>
							<li>Session_reset - re-initialize session array with original values</li>
							<li>Session_save_path - get and/or set the current session save path</li>
							<li>Session_set_save_handler - set user-level session storage functions</li>
							<li>Session_start - start new or resume existing session</li>
							<li>Session_status- returns the current session status </li>
							<li>Session_unregister - unregister a global variable from the current session</li>
							<li>Session_unset - free all session variable</li>
							<li>Session_write_close - write session data and end session</li>
							</p>					
							</p>
							<p>
							<li>To learn more about PHP, you can go to this <a href="http://php.net/manual/en/index.php">manual</a> about PHP on which you can learn more about it.</li>
							</p> 
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
			<script>
				// When the user scrolls the page, execute myFunction 
				window.onscroll = function() {myFunction()};

				function myFunction() {
				  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
				  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
				  var scrolled = (winScroll / height) * 100;
				  document.getElementById("myBar").style.width = scrolled + "%";
				}
			</script>

	</body>
</html>
