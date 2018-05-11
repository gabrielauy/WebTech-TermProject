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
								<h2 style="font-weight: bold;">Open Web Application Security Project</h2>
							</header>
							<p style="text-align:center; color:#9A7D0A">OWASP also known as Open Web Application Security Project is a non-profit organization that promotes to educate people about the risks associated with the most common Web application security vulnerabilities.</p>
								<h4 style="text-align:center; font-size:150%;">The OWASP Top 10 - 2017</h4>
								<table>
									<tr>
										<th>Rank</th>
										<th>Description</th>
									</tr>

									<tr>
										<td>1</td>
										<td><a href="#openModal1" style="color: black;">Injection</a><td>

<div id="openModal1" class="modalDialog">
<div class="modal-content">
    <a href="#close" title="Close" class="close" style="color:#cc0000";>&times;</a>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 25px;">Injection</p>
    <p align="center" style="color:#9A7D0A; font-size: 16px;">Injection flaws, such as SQL, OS, XXE, and LDAP injection occur when untrusted data is sent to an interpreter as part of a command or query. The attacker’s hostile data can trick the interpreter into executing unintended commands or accessing data without proper authorization.</p>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 17px;">How to Prevent 'Injection'?</p>
	<p align="center" style="font-size: 16px;">1) The preferred option is to use a safe API which avoids the use of the interpreter entirely or provides a parameterized interface. Be careful with APIs, such as stored procedures, that are parameterized, but can still introduce injection under the hood.
	<br><br>
	2) If a parameterized API is not available, you should carefully escape special characters using the specific escape syntax for that interpreter. OWASP’s Java Encoder and similar libraries provide such escaping routines.
	<br><br>
	3) Positive or “white list” input validation is also recommended, but is not a complete defense as many situations require special characters be allowed. If special characters are required, only approaches (1) and (2) above will make their use safe.</p>
</div>
</div>
</tr>

									<tr>
										<td>2</td>
										<td><a href="#openModal2" style="color: black;">Broken Authentication</a><td>

<div id="openModal2" class="modalDialog">
<div class="modal-content">
    <a href="#close" title="Close" class="close" style="color:#cc0000";>&times;</a>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 25px;">Broken Authentication</p>
    <p align="center" style="color:#9A7D0A; font-size: 16px;">Application functions related to authentication and session management are often implemented incorrectly, allowing attackers to compromise passwords, keys, or session tokens, or to exploit other implementation flaws to assume other users’ identities (temporarily or permanently).</p>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 17px;">How to Prevent 'Broken Authentication and Session Management'?</p>
	<p align="center" style="font-size: 16px;">1) A single set of strong authentication and session management controls. Such controls should strive to:<br>
	a) meet all the authentication and session management requirements defined in OWASP’s Application Security Verification Standard (ASVS) areas V2 (Authentication) and V3 (Session Management).<br>
	b) have a simple interface for developers. Consider the ESAPI Authenticator and User APIs as good examples to emulate, use, or build upon.
	<br><br>
	2) Strong efforts should also be made to avoid XSS flaws which can be used to steal session IDs.</p>
</div>
</div>
</tr>

									<tr>
										<td>3</td>
										<td><a href="#openModal3" style="color: black;">Sensitive Data Exposure</a><td>

<div id="openModal3" class="modalDialog">
<div class="modal-content">
    <a href="#close" title="Close" class="close" style="color:#cc0000";>&times;</a>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 25px;">Sensitive Data Exposure</p>
    <p align="center" style="color:#9A7D0A; font-size: 16px;">Many web applications and APIs do not properly protect sensitive data, such as financial, healthcare, and PII. Attackers may steal or modify such weakly protected data to conduct credit card fraud, identity theft, or other crimes. Sensitive data deserves extra protection such as encryption at rest or in transit, as well as special precautions when exchanged with the browser.</p>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 17px;">How to Prevent 'Sensitive Data Exposure'?</p>
	<p align="center" style="font-size: 16px;">1) Considering the threats you plan to protect this data from (e.g., insider attack, external user), make sure you encrypt all sensitive data at rest and in transit in a manner that defends against these threats.
	<br><br>
	2) Don’t store sensitive data unnecessarily. Discard it as soon as possible. Data you don’t retain can’t be stolen.<br><br>
	3) Ensure strong standard algorithms and strong keys are used, and proper key management is in place. Consider using FIPS 140 validated cryptographic modules.<br><br>
	4) Ensure passwords are stored with an algorithm specifically designed for password protection.<br><br>
	5) Disable autocomplete on forms requesting sensitive data and disable caching for pages that contain sensitive data.</p>
</div>
</div>
</tr>


									<tr>
										<td>4</td>
										<td><a href="#openModal4" style="color: black;">XML External Entities (XXE)</a><td>

<div id="openModal4" class="modalDialog">
<div class="modal-content">
    <a href="#close" title="Close" class="close" style="color:#cc0000";>&times;</a>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 25px;">XML External Entities (XXE)</p>
    <p align="center" style="color:#9A7D0A; font-size: 16px;">Many older or poorly configured XML processors evaluate external entity references within XML documents. External entities can be used to disclose internal files using the file URI handler, internal file shares, internal port scanning, remote code execution, and denial of service attacks.</p>
</div>
</tr>

									<tr>
										<td>5</td>
										<td><a href="#openModal5" style="color: black;">Broken Access Control</a><td>

<div id="openModal5" class="modalDialog">
<div class="modal-content">
    <a href="#close" title="Close" class="close" style="color:#cc0000";>&times;</a>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 25px;">Broken Access Control</p>
    <p align="center" style="color:#9A7D0A; font-size: 16px;">Restrictions on what authenticated users are allowed to do are not properly enforced. Attackers can exploit these flaws to access unauthorized functionality and/or data, such as access other users' accounts, view sensitive files, modify other users’ data, change access rights, etc.</p>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 17px;">How to Prevent 'Broken Access Control'?</p>
	<p align="center" style="font-size: 16px;">1) Check access. Each use of a direct reference from an untrusted source must include an access control check to ensure the user is authorized for the requested resource.
	<br><br>
	2)Use per user or session indirect object references. This coding pattern prevents attackers from directly targeting unauthorized resources. For example, instead of using the resource’s database key, a drop down list of six resources authorized for the current user could use the numbers 1 to 6 to indicate which value the user selected. OWASP’s ESAPI includes both sequential and random access reference maps that developers can use to eliminate direct object references.<br><br>
	3) Automated verification. Leverage automation to verify proper authorization deployment. This is often custom.<br><br>
</div>
</tr>

									<tr>
										<td>6</td>
										<td><a href="#openModal6" style="color: black;">Security Misconfiguration</a><td>

<div id="openModal6" class="modalDialog">
<div class="modal-content">
    <a href="#close" title="Close" class="close" style="color:#cc0000";>&times;</a>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 25px;">Security Misconfiguration</p>
    <p align="center" style="color:#9A7D0A; font-size: 16px;">Good security requires having a secure configuration defined and deployed for the application, frameworks, application server, web server, database server, platform, etc. Secure settings should be defined, implemented, and maintained, as defaults are often insecure. Additionally, software should be kept up to date.</p>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 17px;">How to Prevent 'Security Misconfiguration'?</p>
	<p align="center" style="font-size: 16px;">1)A repeatable hardening process that makes it fast and easy to deploy another environment that is properly locked down. Development, QA, and production environments should all be configured identically (with different passwords used in each environment). This process should be automated to minimize the effort required to setup a new secure environment.
	<br><br>
	2) A process for keeping abreast of and deploying all new software updates and patches in a timely manner to each deployed environment. This process needs to include all components and libraries as well.<br><br>
	3) A strong application architecture that provides effective, secure separation between components.<br><br>
	4) An automated process to verify that configurations and settings are properly configured in all environments.</p>
</div>
</div>
</tr>

									<tr>
										<td>7</td>
										<td><a href="#openModal7" style="color: black;">Cross-Site Scripting (XSS)</a><td>

<div id="openModal7" class="modalDialog">
<div class="modal-content">
    <a href="#close" title="Close" class="close" style="color:#cc0000";>&times;</a>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 25px;">Cross-Site Scripting (XSS)</p>
    <p align="center" style="color:#9A7D0A; font-size: 16px;">XSS flaws occur whenever an application includes untrusted data in a new web page without proper validation or escaping, or updates an existing web page with user supplied data using a browser API that can create JavaScript. XSS allows attackers to execute scripts in the victim’s browser which can hijack user sessions, deface web sites, or redirect the user to malicious sites.</p>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 17px;">How to Prevent 'Cross-Site Scripting (XSS)'?</p>
	<p align="center" style="font-size: 16px;">1) To avoid Server XSS, the preferred option is to properly escape untrusted data based on the HTML context (body, attribute, JavaScript, CSS, or URL) that the data will be placed into. See the OWASP XSS Prevention Cheat Sheet for details on the required data escaping techniques.
	<br><br>
	2) To avoid Client XSS, the preferred option is to avoid passing untrusted data to JavaScript and other browser APIs that can generate active content. When this cannot be avoided, similar context sensitive escaping techniques can be applied to browser APIs as described in the OWASP DOM based XSS Prevention Cheat Sheet.<br><br>
	3) For rich content, consider auto-sanitization libraries like OWASP’s AntiSamy or the Java HTML Sanitizer Project.<br><br>
	4) Consider Content Security Policy (CSP) to defend against XSS across your entire site.</p>
</div>
</div>
</tr>

									<tr>
										<td>8</td>
										<td><a href="#openModal8" style="color: black;">Insecure Deserialization</a><td>

<div id="openModal8" class="modalDialog">
<div class="modal-content">
    <a href="#close" title="Close" class="close" style="color:#cc0000";>&times;</a>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 25px;">Insecure Deserialization</p>
    <p align="center" style="color:#9A7D0A; font-size: 16px;">Insecure deserialization often leads to remote code execution. Even if deserialization flaws do not result in remote code execution, they can be used to perform attacks, including replay attacks, injection attacks, and privilege escalation attacks.</p>
</div>
</tr>

									<tr>
										<td>9</td>
										<td><a href="#openModal9" style="color: black;">Using Components with Known Vulnerabilities</a><td>

<div id="openModal9" class="modalDialog">
<div class="modal-content">
    <a href="#close" title="Close" class="close" style="color:#cc0000";>&times;</a>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 25px;">Using Components with Known Vulnerabilities</p>
    <p align="center" style="color:#9A7D0A; font-size: 16px;">Components, such as libraries, frameworks, and other software modules, run with the same privileges as the application. If a vulnerable component is exploited, such an attack can facilitate serious data loss or server takeover. Applications and APIs using components with known vulnerabilities may undermine application defenses and enable various attacks and impacts.</p>
</div>
</tr>


									<tr>
										<td>10</td>
										<td><a href="#openModal10" style="color: black;">Insufficient Logging & Monitoring</a><td>

<div id="openModal10" class="modalDialog">
<div class="modal-content">
    <a href="#close" title="Close" class="close" style="color:#cc0000";>&times;</a>
    <p align="center" align="center" style="font-weight: bold; color:#d9d9d9; font-size: 25px;">Insufficient Logging & Monitoring</p>
    <p align="center" style="color:#9A7D0A; font-size: 16px;">Insufficient logging and monitoring, coupled with missing or ineffective integration with incident response, allows attackers to further attack systems, maintain persistence, pivot to more systems, and tamper, extract, or destroy data. Most breach studies show time to detect a breach is over 200 days, typically detected by external parties rather than internal processes or monitoring.</p>
</div>
</tr>

								</table>

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

<style>
/* Modal Content */
.modal-content {
    background-color: black;
    margin: auto;
    padding: 20px;
    border: 4px solid #9A7D0A;
    width: 80%;
}
.modalDialog {
        position: absolute;
        font-family: Arial, Helvetica, sans-serif;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        top: 0;
        overflow: auto;
        background: rgba(0,0,0,0.8);
        z-index: 99999;
        opacity:0;
        -webkit-transition: opacity 400ms ease-in;
        -moz-transition: opacity 400ms ease-in;
        transition: opacity 400ms ease-in;
        pointer-events: none;
    }

    .modalDialog:target {
        opacity:1;
        pointer-events: auto;
    }

    .modalDialog > div {
        width: 80%; /* Full width */
    	height: 60%;
        position: relative;
        margin: 10% auto;
        padding: 5px 20px 13px 20px;
        border-radius: 10px;
        background-color: black;
    }

    .close {
	    color: #cc0000;
	    float: right;
	    font-size: 28px;
	    font-weight: bold;
	    border: 2px solid red;
	    padding: 6px;
	    border-radius: 22px;
    }
    .close:hover,
	.close:focus {

    text-decoration: none;
    cursor: pointer;
	}

    
</style>

	</body>
</html>
