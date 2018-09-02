<?php
	require 'config.php';
	session_start();

	$whoLoggedIn = $_SESSION['username'];

	$statement="SELECT * FROM gamestore ORDER BY id ASC";
	$result=mysqli_query($conn,$statement);
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
    <link rel="stylesheet" type="text/css" href="StyleGameStore.css">
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
					<li class="active"> <a href="gamestore.php"> Store </a></li> <!--"active" just to highlight the page user is on-->
					<li> <a href="library.php"> Library </a></li>
					<li> <a href="#"> Community </a></li>


					<!-- dropdown menu-->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">My Profile <span class="caret"></span></a>

						<ul class="dropdown-menu">
							<li> <a href="profile.php"> View My Profile </a></li>
							<li> <a href="#"> Account Details </a></li>
							<li> <a href="#"> Settings </a></li>
						</ul>
					</li>
				</ul>

				<!-- right allign-->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="profile.php"><?php echo $whoLoggedIn;?></a></li>
					<li> <a href="login.php"> Logout </a></li>
				</ul>
			</div>

		</div>
	</nav>
	<!-------NAVBAR DONE!------->
	
	<!-------main content---->
	<div class="gameButton">
		<h3>Search Game by Name</h3>
		<button class="btn btn-success">
			<a href="searchAjax.php">
				Search Game
			</a>
		</button>
	</div>
	
	<div class="wrapper">
	<?php
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
	?>

		<div>
			<form method="post" action="storedgame.php?action=add&id=<?php echo $row["id"];?>">
				
				<img src="admin/images/<?php echo $row["image"]; ?>" class="img-responsive"/>

				<h3 class="text-info">
					<a href="gameDetails.php?action=add&id=<?php echo $row["id"];?>">
						<?php 
							echo $row["gameName"];
						?> 
					</a>

				</h3>

				<h4 class="text-danger">Price =$<?php echo $row["price"]; ?></h4>

				<button type="button" class="btn btn-success">
					<a href="addGame.php?action=add&id=<?php echo $row["id"];?>">
						Add to Cart
					</a>
				</button>

			</form>
		</div>



	<?php
				

			}
		}

	?>

	</div>


	
	

</body>
</html>
