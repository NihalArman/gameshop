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
    <link rel="stylesheet" type="text/css" href="styleUpdate.css">
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
	
	
	<div class="gameTable">
	<?php
		require 'admin_config.php';
		session_start();

		$statement= "select * from registration where id='$id'";
		$result=mysqli_query($conn,$statement);

		if(mysqli_num_rows($result)==1)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					$userName=$row['username'];
					
				?>
			<form action="submitGame.php" method="post" enctype="multipart/form-data">
		<div class="addGameContent">
		<h1>Are you sure?</h1>
		
		<table id="table1" value="1">
			<tr>
				<td>User Name:</td>
				<td><input type="text" name="userName" style="color:black" value="<?php echo "$userName" ?>"></td>
			</tr>


			<tr>
				<td><input type="submit" name="deleteUser" value="Delete User" style="color:green"></td>
			</tr>
		</table>
		</div>

	</form>

			<?php
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