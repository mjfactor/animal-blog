<?php
   

	$error = " ";
	
	$success = " ";

	if (isset ($_POST ['login_submit'])){
		if($username == "admin"){
			if($password == "password"){
				$error = " ";
				$success = "";
				header("Location: Home.html");
			}
			else {
				$error = " ";
				$success = " ";
			}
		}
		else{
			$error = " ";
			$success = " ";
		}
	}





   

?>













<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'><link rel="stylesheet" href="./style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	
	<div class="screen">
		<div class="screen__content">
			<form class="login" action=" Home.html" > 
			
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" name="uname"  class="login__input" placeholder="User name / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" name="pass" class="login__input" placeholder="Password"> <br>	
				
					
				</div>
				<button class="button login__submit">
					<span class="submit">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
<!-- partial -->
  
</body>
</html>
