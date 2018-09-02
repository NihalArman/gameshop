<!DOCTYPE html>
	<?php $id = $_GET['id']; 
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
    <link rel="stylesheet" type="text/css" href="StyleDetailsGame.css">
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
					<li> <a href="logout.php"> Logout </a></li>
				</ul>
			</div>

		</div>
	</nav>
	<!-------NAVBAR DONE!------->
	
	<!-------main content---->
	
	
	<div class="gameTable">
	<?php
		require 'config.php';
		session_start();

		$statement= "select * from gamestore where id='$id'";
		$result=mysqli_query($conn,$statement);

		if(mysqli_num_rows($result)==1)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					//storing the value
					
					$gameName=$row['gameName'];
					$about=$row['about'];
					$releaseDate=$row['releaseDate'];
					$price=$row['price'];
					$trailer=$row['trailer'];
					$requirements=$row['requirements'];
					$image=$row['image'];

					//printing the values
					echo "<div class='form-data'>";
						echo "<table id='table1' border=0>";

						echo "<tr>";
							echo "<th>Image:</th>";
							echo "<td><image src='admin/images/".$image."' width='400' height='250'></td>";
						echo "</tr>";

						echo "<tr>";
							echo "<th>Game Name:</th>";
							echo "<td>$gameName</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<th>About:</th>";
							echo "<td>$about</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<th>Release Date:</th>";
							echo "<td>$releaseDate</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<th>Price</th>";
							echo "<td>$price</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<th>Trailer</th>";
							echo "<td>$trailer</td>";
						echo "</tr>";


						echo "<tr>";
							echo "<th>Requirements</th>";
							echo "<td>$requirements</td>";
						echo "</tr>";

					echo "</table>";
					echo "</div>";

				}
			}
		else
		{
			echo"Login identification failed";
		}
		echo "</div>";
		?>


	
	

</body>
</html>