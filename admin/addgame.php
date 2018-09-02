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

	<form action="submitGame.php" method="post" enctype="multipart/form-data">
		<div class="addGameContent">
		<h1>Add a new game to inventory!</h1>
		
		<table id="table1" value="1">
			<tr>
				<td>Game Name:</td>
				<td><input type="text" name="gameName" style="color:black"></td>
			</tr>

			<tr>
				<td>About This Game:</td>
				<td>
					<textarea rows="2" cols="25" name="about" style="color:black"></textarea>
				</td>
			</tr>

			<tr>
				<td>Release Date:</td>
				<td><input type="date" name="releaseDate" style="color:black"></td>
			</tr>

			<tr>
				<td>Price:</td>
				<td><input type="text" name="price" style="color:black"></td>
			</tr>

			<tr>
				<td>Trailer Link:</td>
				<td><input type="text" name="trailer" style="color:black"></td>
			</tr>

			<tr>
				<td>Requirements:</td>
				<td>
					<textarea rows="2" cols="25" name="requirements" style="color:black"></textarea>
				</td>
			</tr>

			<tr>
				<td>Image:</td>
				<td><input type="file" name="image"></td>
			</tr>

			<tr>
				<td><input type="submit" name="insert" value="Insert" style="color:green"></td>
			</tr>
		</table>
		</div>

	</form>
	

</body>
</html>