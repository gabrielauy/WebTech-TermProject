<?php
	include 'navigation.php';
?>

<!DOCTYPE html>
<html lang ="en">
	<head>
		<title>Finals</title>
		<link rel="icon" href="images/Logo.png">
		<link rel ="stylesheet" type="text/css" href="notes/final.css"> 
	</head>
	
	<body>
		
		<section class ="inner6">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			            <a href="#midcont"><img class="arrow" src="images/arrow.png" alt="arrow-down"></a>

		</section>

				<section id="midcont">
			<div class="CSS">
				<h2>Servlets</h2>

				<main>
                <div id="wrapper">
                	<div id ="header">
                        <h2> What is Servlets?</h2> </div>
                    <ul>
                        <li>
                            Java Object based on the Servlet API</li>

                        <li>
                        	Runs in a server application to answer client requests; technically, servlets are not tied to a specific client-server protocol, but they are most commonly used with HTTP and the term "servlet" is often used in the context of an HTTP Servlet.
                        <li>Web-tier components in the Java EE architecture.</li>
                        <li>Runs in, and is managed by, a web-tier container called the "Servlet Container".</li>
                        <li>Mapped to URLs to which clients send requests.</li>

                        <li><strong>Typically asked with (among other things)</strong>
	                        <ul>
	                        	<li>Processing and/or storing data submitted vial HTML forms.</li>
	                        	<li>Generating dynamic content</li>
	                        </ul>
                        </li>


                        <div id = "header">
                        <h2>javax.servlet</h2> </div>
	                        <ul>
	                        	<li>Servlet, GenericServlet</li>
	                        	<li>ServletRequest, ServletResponse </li>
	                        	<li>ServletConfig, ServletContext</li>
	                        	<li>RequestDispatcher</li>
	                        </ul>

	                    <div id = "header">
                        <h2> javax.servlet.http</h2> </div>
	                        <ul>
	                        	<li>HttpServlet</li>
	                        	<li>HttpServletRequest</li>
	                        	<li>HttpServletResponse</li>
	                        	<li>HttpSession</li>
	                        	<li>Cookie</li>
	                        </ul>

	                    <div id ="header">
                        <h2> Servlet Processing</h2> </div>
	                        <ul>
	                        	<li>Client sends a request to a web server URL that is mapped to a servlet. Web server passes on the request to the servlet container</li>
	                        	<li>Servlet container checks if servlet is already loaded</li>
	                        	<li>If it is not yet loaded, servlet container loads the servlet class and instantiates the servlet, and calls its init method.</li>
	                        	<li>Servlet container invokes the servlet‟s service method, passing request and response objects as arguments</li>
	                        	<li>Servlet processes the request using the response object to create the response, which is returned by the servlet container to the web server, which in turn sends the response to the client</li>
	                        	<li>Subsequent request to the servlet will not require servlet re-instantiation, unless the servlet has been unloaded; before a servlet is unloaded, the servlet container invokes its destroy method.</li>
	                        </ul>
                        </li>

                        <div id ="header">
 						<h2> init(config) </h2> </div>
 							<ul>
	                        	<li>Invoked once on the servlet by the servlet container when the servlet is instantiated; can be used by the servlet for one-time startup initialization</li>
	                        </ul>

	                    <div id ="header">
                        <h2>service(request, response)</h2> </div>
                        	<ul>
	                        	<li>Invoked each time the servlet is called upon to process a request (typically on a separate thread for each call)</li>
	                        	<li>In HttpServlet, the default Service implementation maps the call to a specific doXXX() method (e.g. doGet, doPost) which is typically overridden to affect the servlet‟s functionality</li>
	                        </ul>

	                    <div id ="header">
                        <h2> Destroy() </h2> </div>
                        	<ul>
	                        	<li>Invoked on the servlet by the servlet container when the servlet is to be unloaded (e.g. when the application is stopped or undeployed); can be used by the servlet for clean-up processing (e.g. resource deallocation)</li>
	                        </ul>

	                    <div id ="header">
                        <h2>Servlet Request Processing (HttpServletRequest)</h2> </div>
                            <ul>
	                        	<li>Retrieving user-supplied request parameters</li>
	                        	<li>Retrieving request header values</li>
	                        </ul>

	                    <div id ="header">
                        <h2>Servlet Response Processing (HttpServletResponse)</h2></div>
                        	<ul>
	                        	<li>Setting response status code</li>
	                        	<li>Setting response headers</li>
	                        	<li>Obtaining output object for sending the response</li>
	                        </ul>
		<footer>
			<p>
			
			<a href="">
			<img id="insta" src="images/Instagram.png" width="35" height="35" alt="insta"></a>
			
			<a href="">
			<img id="twitter" src="images/Twitter.png" width="35" height="35" alt="twitter"></a>
			
			<a href="">
			<img id="fb" src="images/Facebook.png" width="35" height="35" alt="fb"></a>
			
			<a href="">
			<img id="weheart" src="images/Github.png" width="35" height="35" alt="weheart"></a>
			
			<br>All rights reserved &copy;</p>	
		</footer>
	</body>
</html>