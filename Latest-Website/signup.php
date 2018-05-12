<?php
	session_start();
?>

<html>
<head>
	<title>My Quizzer</title>
	<link rel="icon" href="images/Logo.png">
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="slider">
		<div class="content">
			<div class="sprincipal">
				<table>
				<th><p>Study hard now. Be proud later.</P>
				</th>
				</table>
					<form action="phpinclude/signup-dbase.php" method="post">
						<input type="text" name="first_name" placeholder="Firstname">
						<input type="text" name="last_name" placeholder="Lastname">
						<input type="text" name="username" placeholder="ID Number">
						<input type="password" name="password" placeholder="Password"><br>
						<button type="submit" name="submit">Sign Up</button>
					</form>
			</div>
		</div>
	</div>
</body>
</html> 
