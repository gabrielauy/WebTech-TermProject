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
								<h2 style="font-weight: bold;">Java Web Servlets & Java Server Pages</h2>
							</header>
							<p style="text-align:center; color:#9A7D0A">Servlets runs in, and is managed by, a web-tier container called the "Servlet Container". Java Server Pages is simply an HTML web page that contains additional bits of code that execute application logic to generate dynamic content. <br><br>Java Object based on the Servlet API <br>Web-tier components in the Java EE architecture. <br>Runs in, and is managed by, a web-tier container called the "Servlet Container". <br>Mapped to URLs to which clients send requests. </p>

							<p>                   
	                        <strong>Typically asked with (among other things)</strong>
		                        <ul>
		                        	<li>Processing and/or storing data submitted vial HTML forms.</li>
		                        	<li>Generating dynamic content</li>
		                        </ul>
	                        


								<strong>javax.servlet</strong>
		                        <ul>
		                        	<li>Servlet, GenericServlet</li>
		                        	<li>ServletRequest, ServletResponse </li>
		                        	<li>ServletConfig, ServletContext</li>
		                        	<li>RequestDispatcher</li>
		                        </ul>

								<strong>javax.servlet,http</strong>
		                        <ul>
		                        	<li>HttpServlet</li>
		                        	<li>HttpServletRequest</li>
		                        	<li>HttpServletResponse</li>
		                        	<li>HttpSession</li>
		                        	<li>Cookie</li>
		                        </ul>

								<strong>Servlet Processing</strong>
		                        <ul>
		                        	<li>Client sends a request to a web server URL that is mapped to a servlet. Web server passes on the request to the servlet container</li>
		                        	<li>Servlet container checks if servlet is already loaded</li>
		                        	<li>If it is not yet loaded, servlet container loads the servlet class and instantiates the servlet, and calls its init method.</li>
		                        	<li>Servlet container invokes the servlet‟s service method, passing request and response objects as arguments</li>
		                        	<li>Servlet processes the request using the response object to create the response, which is returned by the servlet container to the web server, which in turn sends the response to the client</li>
		                        	<li>Subsequent request to the servlet will not require servlet re-instantiation, unless the servlet has been unloaded; before a servlet is unloaded, the servlet container invokes its destroy method.</li>
		                        </ul>
	                        

								<strong>init(config)</strong>
	 							<ul>
		                        	<li>Invoked once on the servlet by the servlet container when the servlet is instantiated; can be used by the servlet for one-time startup initialization</li>
		                        </ul>

								<strong>service(request,response</strong>
	                        	<ul>
		                        	<li>Invoked each time the servlet is called upon to process a request (typically on a separate thread for each call)</li>
		                        	<li>In HttpServlet, the default Service implementation maps the call to a specific doXXX() method (e.g. doGet, doPost) which is typically overridden to affect the servlet‟s functionality</li>
		                        </ul>

								<strong>Destroy()</strong>
	                        	<ul>
		                        	<li>Invoked on the servlet by the servlet container when the servlet is to be unloaded (e.g. when the application is stopped or undeployed); can be used by the servlet for clean-up processing (e.g. resource deallocation)</li>
		                        </ul>
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
