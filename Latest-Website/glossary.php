<?php
	session_start();
	include 'phpinclude/database.php';
	$username=$_SESSION['username'];
	$profile = new database;
	$profile->user_profile($username);
?>

<!DOCTYPE HTML>
<html lang = "en">
    <head>
        <title>Glossary of Terms</title>
		    <meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="icon" href="images/Logo.png">
 		    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		    <link rel="stylesheet" media="screen" href="assets/css/styles.css" />
		    <script src="assets/js/search.js"></script>
	  </head>
<body>
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
         
	<div class="arrowup" id="arrow" >
		<a href = "#start" >
		<img src = "images/arrowupp.png" alt="arrow">
		</a>
	</div>
  <div class = "glossary" id="start">
		<h1> GLOSSARY OF TERMS </h1>
		<div class="searchbar">
		<input type="text" id="glossarysearch" name="search" placeholder="Search..." onkeyup="myFunction()"> 
  </div>
	 <div class="glossarybody">
	 <h3> ACRONYMS </h3>
	 <table id="glossarytable" class="table">
			<tr>
        <th>ACRONYMS</th>
        <th>MEANING</th>
        <th>DEFINITION</th>
      </tr>

  <tr>
    <td>AJAX</td>
    <td>Asynchronous JavaScript and XML</td>
    <td>  is a new technique for creating better, faster, and more interactive web applications with the help of XML, HTML, CSS, and Java Scrip</td>
  </tr>

  <tr>
    <td>ASP</td>
    <td>Active Server Pages</td>
    <td>Microsoft's first server-side script engine for dynamically generated web pages.</td>
  </tr> 
  <tr>
    <td>BOM</td>
    <td>Browser Object Model</td>
    <td>It is a set of objects that comprises various elements of the browser.</td>
  </tr>
  <tr>
    <tr>
    <td>CERN</td>
    <td>CERN</td>
    <td>The World Wide Web was developed at CERN, a company Sir Tim Berners-Lee works for.</td>
  </tr> 
  <tr>
    <tr>
    <td>CSS</td>
    <td>Cascading Stylesheets</td>
    <td>It is used to specify how websites/documents are displayed/presented. It is purposely used for presentation aspects such as for fonts, colors, and screen layouts of HTML, XML, SVG, MathML documents and other documents using a markup language .</td>
  </tr>

  <tr>
    <td>DOM</td>
    <td>Document Object Mode</td>
    <td>An API that allows access to the HTML document from within scripts associated with the Web page.</td>

 
    <tr>
    <td>HTML</td>
    <td>Hyper Text Markup Language</td>
    <td>It is a language used to mark-up documents in the World Wide Web which is initially used for structure and content but in the modern Web, HTML is solely used for semantics and content.</td>
	</tr> 
  <tr>
    <td>HTTP</td>
    <td>Hyper Text Transfer Protocol</td>
    <td>A communication protocol used to fetch the hypertext and hypermedia resources such as HTML documents from the Web.</td> 
</tr> 	
<tr>
    <td>HTTPS</td>
    <td>Hyper Text Mark-up Language Secure</td>
    <td>the protocol over which data is sent between your browser and the website that you are connected to.</td>
  </tr>
    <tr>
    <td>IANA</td>
    <td>Internet Assigned Numbers Authority</td>
    <td>is the organization under the Internet Architecture Board (IAB) of the Internet Society that, under a contract from the U.S.</td>
  </tr>
    <tr>
    <td>IoT</td>
    <td> Internet of Things</td>
    <td>equiping our common household appliance to the internet</td>
  </tr>  
    <tr>
    <td>IP</td>
    <td>Internet Protocol</td>
    <td>is the principal communications protocol in the Internet protocol suite for relaying datagrams across network boundaries.</td>
  </tr>  
    <tr>
    <td>JAR</td>
    <td>Java ARchive</td>
    <td> is a package file format typically used to aggregate many Java class files and associated metadata and resources (text, images, etc.) into one file for distribution.</td>
  </tr> 
    <tr>
    <td>JS</td>
    <td>JavaScript</td>
    <td>It provides code in which users can interact with the webpage.</td>
  </tr>
    <tr>
    <td>JSTL</td>
    <td>JavaServer Pages Standard Tag Library</td>
    <td>is a collection of useful JSP tags which encapsulates the core functionality common to many JSP applications.</td>
  </tr>

    <tr>
    <td>JSON</td>
    <td>JavaScript Object Notation</td>
    <td>is an open-standard format that uses human-readable text to transmit data objects consisting of attribute–value pairs.</td>
  </tr>
    <tr>
    <td>JSP</td>
    <td>Java Server Pages</td>
    <td> A JSP page is a text document that has two types: Static Data and JSP elements. Static data can be expressed through any text-format like HTML, SVG, XML etc. while JSP elements build up on content that is dynamic.</td>
  </tr>

  <tr>
    <td>LESS</td>
    <td>Less</td>
    <td> a dynamic style sheet language that can be compiled
	into Cascading Style Sheets (CSS) and run on the client side or server side.</td>
  </tr>
  <tr>
    <td>MIME</td>
    <td>Multipurpose Internet Mail Extensions</td>
    <td>A standardized way to indicate the nature and format of a document.</td>
  </tr> 

  <tr>
    <td>PHP</td>
    <td>Hypertext Preprocessor</td>
    <td>The most famous server-side language found on the web. PHP is drafted to pull and edit database info. It is bundled with SQL language databases. It was designed exclusively for the web. It is straightforward in its installation as well as deploying it. </td>
  </tr>  
  <tr>
    <td>RFC</td>
    <td>Request For Comments or Remote Function Call</td>
    <td>is a formal document from the Internet Engineering Task Force ( IETF ) that is the result of committee drafting and subsequent review by interested parties.</td>
  </tr>
 <tr>
    <td>SASS</td>
    <td>Syntactically Awesome Style Sheets</td>
    <td>An extension of CSS that adds power and elegance to the basic language. It allows to use variables, 
	nested rules, mixins, inline imports, and more.</td>
  </tr>  

<tr>
    <td>SPDY</td>
    <td>(pronounced speedy)</td>
    <td>manipulates HTTP traffic, with particular goals of reducing web page load latency and improving web security.</td>
  </tr>   

   <tr>
    <td>TCP</td>
    <td>Transmission Control Protocol</td>
    <td>a set of rules that governs the delivery of data over the Internet or other network that uses the Internet Protocol, and sets up a connection between the sending and receiving computers.</td>
  </tr>  
   <tr>
    <td>UA</td>
    <td>User Agents</td>
    <td>a software (a software agent) that is acting on behalf of a user. One common use of the term refers to a web browser telling a web site information about the browser and operating system.</td>
  </tr> 
  <tr>
    <td>URI</td>
    <td>Uniform Resource Identifier</td>
    <td> It is a sequence of characters that provides a uniqueaddress to identify the path/location of a certain HTTP Resource</td>
  </tr> 
   <tr>
    <td>URN</td>
    <td>Uniform Resource Name</td>
    <td>is an Internet resource with a name that, unlike a URL, has persistent significance - that is, the owner of the URN can expect that someone else (or a program) will always be able to find the resource. </td>
  </tr> 
     <tr>
    <td>URL</td>
    <td>Uniform Resource Locator</td>
    <td>the address of a World Wide Web page.</td>
  </tr> 
  <tr>
    <td>W3C</td>
    <td>World Wide Web Consortium</td>
    <td>founded by Sir. Tim Berners-Lee.</td>
  </tr>
    <tr>
    <td>WAIS</td>
    <td>Wide Area Information Server</td>
    <td>is an Internet system in which specialized subject databases are created at multiple server locations, kept track of by a 
	directory of servers at one location, and made accessible for searching by users with WAIS client programs.</td>
  </tr>
    <tr>
    <td>WAP</td>
    <td>Wireless Application Protocol</td>
    <td> is a technical standard for accessing information over a mobile wireless network.</td>
  </tr>
    <tr>
    <td>WAR</td>
    <td>Web Application Archive</td>
    <td>is a JAR file used to distribute a collection of JavaServer Pages, Java Servlets, Java classes, XML files, tag libraries, static web pages (HTML and related files) and other resources that together constitute a web application.</td>
  </tr>
    <tr>
    <td>WebDav</td>
    <td>Web Distributed Authoring and Versioning</td>
    <td> is an extension of the Hypertext Transfer Protocol (HTTP) that allows clients to perform remote Web content authoring operations. </td>
  </tr>

    <tr>
    <td>WWW</td>
    <td>World Wide Web</td>
    <td>The World Wide Web is a collection of Web resources and applications that serves as a tool for users to share and obtain information through the Internet. It is typically known as a representation of human knowledge around the globe. </td>
  </tr>  
  <tr>
    <td>XHTML</td>
    <td>Extesible Hyper Text Mark-up Language</td>
    <td>is part of the family of XML markup languages. It mirrors or extends versions of the widely used Hypertext Markup Language (HTML), 
	the language in which Web pages are formulated.</td>
  </tr>

    <tr>
    <td>XML</td>
    <td>Extesible Mark-up Language</td>
    <td>An easily parsed structure that allows users to create their own tags.</td>
  </tr>

   <tr>
    <td>XSL</td>
    <td>Extesible Stylesheet Language</td>
    <td>a file that describes how to display an XML document of a given type. Itshares the functionality and is compatible with CSS2 (although it uses a different syntax).</td>
  </tr>  
	 </table>


	<div id = "terms" >
	<h3> TERMINOLOGIES </h3> 
	<table class="table">
	<tr>
    <th>TERMINOLOGIES</th>
    <th>DEFINITION</th>
  </tr>

    <tr>
    <td>ActionScript</td>
    <td> is an object-oriented programming language originally developed by Macromedia Inc. (since merged into Adobe Systems).</td>
 </tr>
    <tr>
    <td>Asynchronous Request </td>
    <td>JavaScript does not have to wait for the server response. It can execute other scripts while waiting for server response, and deal with the response when the response is ready.</td>
 </tr>
    <tr>
    <td>Authority</td>
    <td>User/authentication information/ credential</td>
  </tr>
    <tr>
    <td>Cache</td>
    <td>Local storage/copy of resource that is fetched from a server </td>
  </tr>
  <tr>
    <tr>
    <td>Cache Control</td>
    <td>HTTP controls caching allowing Servers to indicate or specify specific resources to be cached. In additional, it allows the Client to choose the actions to be done on the cached resources. </td>
  </tr>
  <tr>
    <td>Client</td>
    <td>An application program that establishes connections for the purpose of sending requests.</td>
 </tr>
   <tr>
    <td>Client-side web scripting </td>
    <td> Allows programs (i.e. scripts) to be downloaded from a web server and executed in the client environment (e.g. browser) </td>
 </tr>
    <tr>
    <td>Connection</td>
    <td>A transport layer virtual circuit established between two application programs for the purpose of communication.</td>
 </tr>
    <tr>
    <td>Cookie </td>
    <td>A very small text file </td>
 </tr>
    <tr>
    <td>CSS Rule </td>
    <td>Consists of a selector, followed by a declaration block, which contains zero or more semi colon (;) separated declarations, which in turn consists of a property name, followed by a property value.  </td>
  </tr>
    <tr>
    <td>CSS Preprocessors </td>
    <td>generates CSS using a custom language syntax that typically includes features that don't exist in pure CSS (e.g., variables, control flows, nesting, mixins, functions, etc.). </td>
  </tr>
    <tr>
    <td>CSS Frameworks </td>
    <td>provides functionality without having to write CSS.</td>
  </tr>

    <tr>
    <td>Dynamic </td>
    <td> Generates or displays information that varies and depends on the client. </td>
 </tr>
 </tr>
    <tr>
    <td>Dynamic (X)HTML </td>
    <td>Page embellishments, visual “effects”, content generation and manipulation, user interaction, document and page navigation </td>
 </tr>
    <tr>
    <td>ECMAScript</td>
    <td>is a trademarked scripting-language specification standardized by the European Computer Manufacturers Association in ECMA-262 and ISO/IEC 16262.</td>
 </tr>
     <tr>
    <td>Empty line</td>
    <td>connects two networks together</td>
 </tr>
 <tr>
    <td>Entity</td>
    <td>A particular representation or rendition of a data resource, or reply from a service resource, that may be enclosed within a 
	request or response message. An entity consists of metainformation in the form of entity headers and content in the form of an entity body.</td>
 </tr>
     <tr>
    <td>Fragment Identifier</td>
    <td> Identifies a specific part of the resource.</td>
 </tr>
    <tr>
    <td>Filters</td>
    <td>Java objects used to intercept incoming requests and outgoing responses in order to perform various tasks such as: Authentication and access control,Logging, auditing, Caching, data compression o Content Transformation</td>
 </tr>
    <tr>
    <td>Flash Animations</td>
    <td> is an animated film that is created with the Adobe Flash platform or similar animation software and often distributed in the SWF file format</td>
 </tr>
      <tr>
    <td>Gateway</td>
    <td>A server which acts as an intermediary for some other server. Unlike a proxy, a gateway receives requests as if it were the origin server for the requested 
	resource; the requesting client may not be aware that it is communicating with a gateway. Gateways are often used as server-side portals through network firewalls 
	and as protocol translators for access to resources stored on non-HTTP systems.</td>
  </tr>
      <tr>
    <td>Gopher (protocol)</td>
    <td> is a TCP/IP application layer protocol designed for distributing, searching, and retrieving documents over the Internet. </td>
  </tr>
    <tr>
    <td>Host</td>
    <td> It is associated with a domain name .</td>
  </tr>
    <tr>
    <td>Idempotent Methods</td>
    <td>The methods GET, HEAD, PUT and DELETE share this property.</td>
 </tr>
  <tr>
    <td>Internet</td>
    <td>It serves as a medium between the Web and the Web browser such that it allowsusers to access information with the use of the Web browser.</td>
  </tr>
      <tr>
    <td>Intranet</td>
    <td>is a private network accessible only to an organization's staff.</td>
  </tr>
    <tr>
    <td>Java Applets</td>
    <td>is a small application which is written in Java or another programming language that compiles to Java bytecode and delivered to users in the form of that bytecode.</td>
 </tr>
    <tr>
    <td>Java EE </td>
    <td> an open, standards-based development and deployment platform for creating distributed, transactional, reliable, secure, multitiered, web-based, server-centric, component-based enterprise applications</td>
 </tr>
    <tr>
    <td>JavaScript</td>
    <td>Developed circa 1995 by Brendan Eich  at Netscape Communications as the scripting language for the Netscape Navigator Browser.</td>
 </tr>
     <tr>
    <td>Java Server Pages</td>
    <td>Simply an HTML web page that contains additional bits of code that execute application logic to generate dynamic content.  </td>
 </tr>
      <tr>
    <td>Java Servlet</td>
    <td>A program in java that further the server capabilities. It can respond to all type of requests. They implement Web hosting applications which were hosted and is the Java equivalent of other dynamic web content technologies.</td>
 </tr>

    <tr>
    <td>Java Virtual Machine (JVM)</td>
    <td>is an abstract computing machine that enables a computer to run a Java program.</td>
 </tr>
   <tr>
    <td>Listeners</td>
    <td>java objects used to “subscribe” to application “events” in order to be “notified” when these events occur </td>
 </tr>
  <tr>
    <td>Message</td>
    <td>The basic unit of HTTP communication, consisting of a structured sequence of octets </td>
 </tr>
     <tr>
    <td>Header</td>
    <td> It includes additional information regarding the Client.</td>
  </tr>
    <tr>
    <td>Message headers</td>
    <td>allow the client and the server to pass additional information with the request or the response.</td>
  </tr>
  <tr>
    <td>Node.js</td>
    <td>A platform that is built on Chrome’s JavaScript runtime for fast building and for scaling network applications without encountering too much difficulties. This is an input output model that uses event-driven and is non-blocking. It is also efficient for real time applications that are intensive and could run across devices that use distribution.</td>
  </tr>
        <tr>
    <td>Payload</td>
    <td>It contains the content the Client wants to upload or send to the server (This is commonly used with the use of POST method). </td>
  </tr>
      <tr>
    <td>Path</td>
    <td> 
Indicates the path to the location of the resource. </td>
  </tr>
      <tr>
    <td>Protocol</td>
    <td>Set of rules need to be followed. </td>
  </tr>
    <tr>
    <td>Port Number</td>
    <td> It indicates the port of connection. </td>
  </tr>
<tr>
    <td>Polyfills</td>
    <td> 
allows users/developers to make use of the features of the browsers. </td>
  </tr>
  <tr>
    <td>Proxy</td>
    <td>An intermediary program which acts as both a server and a client for the purpose of making requests 
	on behalf of other clients. Requests are serviced internally or by passing them, with possible translation, on to other servers. 
	A proxy must interpret and, if necessary, rewrite a request message before forwarding it. Proxies are often used as client-side 
	portals through network firewalls and as helper applications for handling requests via protocols not implemented by the user agent.</td>
 </tr>
      <tr>	  
    <td>Quirks </td>
    <td>Older ways of rendering documents </td>
  </tr>
   <tr>
    <td>Query</td>
    <td>Provides as key value pairs, with ampersand (&) separators between key/ value pairs</td>
  </tr>
  <tr>
    <td>Request</td>
    <td>An HTTP request message</td>
 </tr>
      <tr>
    <td>Request line</td>
    <td>begins with a method token, followed by the Request-URI and the protocol version, and ending with CRLF. </td>
  </tr>
  <tr>
    <td>Response</td>
    <td>An HTTP response message</td>
 </tr>
 <tr>
    <td>Resource</td>
    <td>A network data object or service which can be identified by a URI </td>
 </tr>
<tr>
    <td>Servlet </td>
    <td>These are where methods are defined, so all servlets could implement.Servlet is a Java program that runs in a Web server. Servlets accept and acknowledges to requests from Web clients, mainly with HTTP. </td>
</tr>
<tr>
    <td>ServletConfig </td>
    <td>It is an object that uses servlet configuration. It is used by a servlet container where information is passed to a servlet when it is still being initialized </td>
</tr>
<tr>
    <td>ServletContex </td>
    <td>An array of methods are defined and a servlet is utilized to render with its own servlet container(e.g. Getting a MIME file, requests that are dispatched, or file records are written.)</td>
</tr>
<tr>
    <td>ServletContainerInitializer </td>
    <td>It is an interface that allows a library to be declared at the startup phase of a web application. Any needed programmatic registration of servlets, filters, and listeners are performed in response. </td>
</tr>
<tr>
    <td>Standards </td>
    <td>Following the specification by W3C for HTML, CSS </td>
</tr>
    <tr>
    <td>Scheme</td>
    <td>It indicates the protocol usedin accessing the web resource.</td>
 </tr>
    <tr>
    <td>Selector</td>
    <td> structure used as a condition in a CSS rule to determine without element in the doc tree are matched by the selector.</td>
 </tr>
      <tr>
    <td>Selector syntax</td>
    <td> chain of one or more sequences of simple selectors separated by comninators, with 1 pseudo-element possibly appended in the last sequence </td>
  </tr>
  <tr>
    <td>Server</td>
    <td>An application program that accepts connections in order to service requests by sending back responses.</td>
 </tr>
    <tr>
    <td>Servlets</td>
    <td>runs in a server application to answer client requests; technically, servlets are not tied to a specific client-server protocol, but they are most commonly used with HTTP and the term „servlet‟ is often used in the context of an “HTTP Servlet” </td>
 </tr>
  </tr>
    <tr>
    <td>Static</td>
    <td> Information displayed in the website does not change or alter.</td>
 </tr>
     <tr>
    <td>Status code</td>
    <td> A code used to indicate the status of the Client’s request.</td>
 </tr>
      <tr>
    <td>Status message</td>
    <td> It displays a description of the status code.</td>
 </tr>
    <tr>
    <td>Synchronous Request</td>
    <td>Recommended for few small requests. JavaScript will not continue to execute, until the server response is ready. If the server is busy or slow, the application will hang or stop. </td>
 </tr>
  <tr>
    <td>Tunnel</td>
    <td> an intermediary program which is acting as a blind relay between two connections. Once active, a tunnel is not considered a party to the HTTP communication, 
	though the tunnel may have been initiated by an HTTP request. The tunnel ceases to exist when both ends of the relayed connections are closed. Tunnels are used when 
	a portal is necessary and the intermediary cannot, or should not, interpret the relayed communication.</td>
  </tr>
  <tr>
    <td>User Agent</td>
    <td>The client which initiates a request. These are often browsers, editors, spiders (web-traversing robots), or other end user tools.</td>
 </tr>
    <tr>
    <td>VBScript</td>
    <td> is an Active Scripting language developed by Microsoft that is modeled on Visual Basic. It allows Microsoft Windows system administrators to generate powerful tools for managing computers with error handling, subroutines, and other advanced programming constructs.</td>
 </tr>
 <tr>
  <td>Web Browser</td>
  <td>A typical tool used to interact with the Web.</td>
 </tr>
    <tr>
    <td>Web Context (ServletContext) </td>
    <td>a web application is associated with a context, which is an object that provides methods that servlets use to communicate with the servlet container </td>
 </tr>
  </table>
	</div>
	 </div>
	 </div>
	 
	 
	 
	 <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	 
     </body>
	 
	 
 </html> 