<?php
	require 'admin_config.php';

	if(isset($_POST['login_btn']))
	{
		session_start();
		$username=($_POST['username']);
		$password1=($_POST['password1']);

		if($username=="admin" & $password1=="admin")
		{
			echo "<script>alert('Login Successful');</script>";
			echo "<script>window.location = 'admin_panel.php';</script>";
		}
		else
		{
			echo "<script>alert('Login Failed. Check username or password');</script>";	
		}
	}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
    <script src="scripts/main.js"></script>
</head>
<body>
	<!-------NAVBAR------->
	<nav class="navbar navbar-inverse">		
		<div class="container-fluid"> <!--take up the whole page-->

			<!--LOGO-->
			<div class="navbar-header">
				<a href"#" class="navbar-brand">GAME SHOP </a>
			</div>

			<!--MENU ITEMS-->
			<div>
				<ul class="nav navbar-nav">
					<li class="active"> <a href="#"> Login </a></li> <!--"active" just to highlight the page user is on-->			
				</ul>

				<!-- right allign-->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="login.php"> Login Page </a></li>
				</ul>
			</div>

		</div>
	</nav>
	<!-------NAVBAR DONE!------->

	<div class="content">
		<h1>Game Shop Bangladesh</h1>
		
		<br/><br/>

		<div class="form-data">
			<h2>Admin Panel</h2>
			<form  method="post" action="admin_login.php">
			<table id="table1" value="1">

				<tr>
					<td>Username:</td>
					<td><input type="text" name="username"></td>
				</tr>

				<tr>
					<td>Password:</td>
					<td><input type="password" name="password1"></td>
				</tr>

				<tr>
					<td><input type="submit" name="login_btn" value="Login"></td>

					
				</tr>


			</table>
		</form>
		</div>


	</div>

</body>
</html>