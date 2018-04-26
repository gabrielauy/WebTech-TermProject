<html>
<head>
	<title>Finals</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class="slider">
		<div class="load">
		</div>
		<div class="content">
			<div class="principal">
					<?php
						if (isset($_SESSION['username'])){
							include 'home.php';
						}else{
							echo '<div class="container">
								<center><img src="css/finals.png"/></center>	
								<form action = "include/login-dbase.php" method="POST">
								<div class="form_input">
										<input type="text" name="username" placeholder="Enter Username"/>
								</div>
									<div class="form_input">
										<input type="password" name="password" placeholder="Enter Password"/>
									</div>
									<button type="submit" name="submit"> Login </button>
								</form>
								<a href ="signup.php">Do not have an account? Register now!</a>	
							</div>';
					} ?>	
			</div>
		</div>
</div>

</html>

