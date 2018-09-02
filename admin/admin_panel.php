<!DOCTYPE html>
<html lang="en">
<head>
    <title>GameStore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="AdminStyle.css">
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
					<li class="active"> <a href="#"> Admin Panel </a></li> <!--"active" just to highlight the page user is on-->
					<li> <a href="gameList.php"> Game List </a></li>
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
	
	<div class="adminPanel">
		<h1>Game Shop Bangladesh</h1>
		<h2>Admin Panel</h2>
		<br/> <br/>

		<div class="well">
			Welcome to the admin panel of Game Shop Bangladesh. Admins can make any changes from here.
		</div>

		<div class="alert alert-danger">
			Caution: Think before you change. A simple change can have big impact on database.
		</div>

	</div>

</body>
</html>