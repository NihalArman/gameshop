<?php
	require 'admin_config.php';
	session_start();

	$statement="SELECT * FROM registration ORDER BY id ASC";
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
					<li> <a href="gameList.php"> Game List </a></li>
					<li class="active"> <a href="userList.php"> User List </a></li>
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

	<div class=userList>
		<table class=table>
			<tr class="info">
				<th>
					First Name
				</th>
				<th>
					Last Name
				</th>
				<th>
					username
				</th>
				<th>
					Email
				</th>
				<th>
					Gender
				</th>
				<th>
					Date of Birth
				</th>
				<th>
					Action
				</th>
			</tr>
		<?php
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_array($result))
			{
	?>
		
			<tr class="success">
				<td>
					<?php echo $row["fname"]; ?>
				</td>
				<td>
					<?php echo $row["lname"]; ?>
				</td>
				<td>
					<?php echo $row["username"]; ?>
				</td>
				<td>
					<?php echo $row["email"]; ?>
				</td>
				<td>
					<?php echo $row["gender"]; ?>
				</td>
				<td>
					<?php echo $row["dob"]; ?>
				</td>
				<td>
					<button type="button" class="btn btn-success">
					<a href="deleteUser.php?action=add&id=<?php echo $row["id"];?>">
						Delete
					</a>
					</button>
				</td>
			</tr>
			<?php
				}
			}

		?>
		</table>

		<br/>

		
	</div>

	

</body>
</html>