<?php
	session_start();
?>

<html>
<head>
	<title>Webtech 2018</title>
	<link rel="icon" href="images/Logo.png">
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="slider">
		<div class="content">
			<div class="principal">
				<table>
				<th><p>Study hard now. Be proud later.</p></th>
				</table>
					<h2>Login Now</h2>
					<?php
							if (isset($_SESSION['username'])){
								include 'home.php';
							}else{
								echo '<form action="phpinclude/login-dbase.php" method="POST">
										<input type="text" name="username" placeholder="ID Number">
										<input type="password" name="password" placeholder="Password"><br>
										<button type="submit" name="submit">Login</button>
									</form><br>
									<a href ="signup.php">Do not have an account? Register now!</a>';
							}
					?>
			</div>
		</div>
	</div>
</body>
</html> 
