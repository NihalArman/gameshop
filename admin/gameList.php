<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GameStore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="StyleGameList.css">
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
					<li> <a href="admin_panel.php"> Admin Panel </a></li> <!--"active" just to highlight the page user is on-->
					<li class="active"> <a href="#"> Game List </a></li>
					<li> <a href="userList.php"> User List </a></li>
				</ul>

				<!-- right allign-->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="admin_login.php"> Logout </a></li>
				</ul>
			</div>

		</div>
	</nav>
	<!-------NAVBAR DONE!------->
	
	<!-------main content---->

	<div class=wrapper>
		<div class=box box1>
			<a href="addgame.php">
				ADD GAME
			</a>
		</div>


		<div class=box box4>
			<a href="storedgame.php">
				VIEW STORED GAMES
			</a>
		</div>
	</div>
	

</body>
</html>