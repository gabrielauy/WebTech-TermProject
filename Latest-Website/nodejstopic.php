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
		<style>
			.progress{
				position:fixed;
				z-index: 1;
				width: 100%;
			}
			
			.progress-container {
				  width: 100%;
				  height: 8px;
				  background: #ccc;
				  
			}

			.progress-bar {
				  height: 8px;
				  background:#9A7D0A;;
				  width: 0%;
			}
		</style>
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">WebTech <span>2018</span></a></div>
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
								<h2 style="font-weight: bold;">Server Side JavaScript<br>WITH NODE JS</h2>
							</header>
							<p style="text-align:center; color:#9A7D0A">Node.js is a server side JavaScript built on Google Chrome's V8 JavaScript engine. It is an open source programming language that was developed by Ryan Dahl in 2009. It allows us to build scalable network applications, and is very fast when compared with other server side programming languages because it is written in C and the non-blocking I/O model that makes it lightweight and efficient (Joseph,2016). </p>
							<p>
								<strong>Node.js is a platform:</strong>
		                        <ul>
		                        	<li>It’s a JavaScript runtime environment. Assuming that Node.js is installed, it will execute my-code.js: <i>node my-code.js</i> </li>
		                        	<li>It has core modules (i.e. JavaScript packages) available for your code as imports. For example: <i>fs for filesystem, http for handling requests-responses </i> etc.</li>
		                        </ul>

		                        <strong>npm (Node Package Manager) – Basics</strong><br><br>
		                        <ul>
		                        	<li>Npm provides a command line tool to install Node.js packages.</li>
		                        	<li>Dependencies with version numbers are listed in a file called package.json.</li>
		                        	<li>Npm also has a registry on the internet where the published packages are available.</li><br>
		                        	<i>Npm can be used natively with Node.js, but it also has a Maven plugin (packaged together with Node.js) making it possible to bundle it into your Java application.</i>
		                        </ul>

		                        <strong>Express server</strong><br><br>
		                        <ul>
		                        	This is a Node.js based HTTP server. You just import it as a module and add one line of code to listen to HTTP requests on any port you want. In your code, you map URL paths to different functions to be invoked when the incoming path matches. Express builds up a routing table based on your mapping code, and invokes the mapped function by passing the request data (query strings, form data etc.) to it. While your function is preparing the response, it can do networking, I/O operations etc.; so everything you expect from a considerable programming language and runtime environment. After processing, another one-liner is called to pass the processed data (web page, JSON content etc.) to the response. The rest – i.e. sending back the response on HTTP to the client – is done by Express and Node.js.
		                        </ul>
		                        <ul>
		                        	Express makes parameters in the path available as a JavaScript variable (:name → req.params.name). A few features of Express routing:
		                        	<li>It makes it possible to add regexp in the path: app.get('/ab*cd', ...)</li>
		                        	<li>It handles different HTTP methods: app.put, app.delete etc.</li>
		                        	<li>Easy implementation of static files serving: app.use(express.static('public')).</li>
		                        </ul>
							</p>
							<p>
							<li>To learn more about Node.js, you can go to this <a href="https://nodejs.org/api/http.html">manual</a> about Node.js on which you can learn more about it.</li>
							<li>Reference: https://techblog.topdesk.com/coding/javascript-based-server-javascript-java-based-server-java/ </li>
							</p> 
						</div>
					</div>
				</div>
			</section>


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
