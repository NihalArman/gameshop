<?php
	require 'config.php';
	session_start();

	$whoLoggedIn = $_SESSION['username'];

	$statement="SELECT * FROM userlibrary WHERE username='$whoLoggedIn' ORDER BY id ASC";
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
    <link rel="stylesheet" type="text/css" href="StyleLibrary.css">
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
					<li> <a href="gamestore.php"> Store </a></li> <!--"active" just to highlight the page user is on-->
					<li class="active"> <a href="library.php"> Library </a></li>
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
					<li> <a href="logout.php"> Logout </a></li>
				</ul>
			</div>

		</div>
	</nav>
	<!-------NAVBAR DONE!------->
	
	<!-------main content---->
	
	<h1> <?php echo $whoLoggedIn;?>'s library</h1>
	<div class=userList>
		
		<table class=table>
			<tr class="info">
				<th>
					Username
				</th>
				<th>
					Game Name
				</th>
				<th>
					Price
				</th>
				<th>
					Purchase Date
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
					<?php echo $row["username"]; ?>
				</td>
				
				<td>
					<!--printing game name form another db table-->
					<?php 
						$temp=$row["gameid"];
						$statementId="SELECT * FROM `gamestore` WHERE id='$temp'";

						$resultId=mysqli_query($conn,$statementId);
						if(mysqli_num_rows($resultId)==1)
						{

							while($rowId=mysqli_fetch_assoc($resultId)){

								echo $rowId["gameName"];
							} 
						}
						//echo $row["gameid"];
					 ?>
				</td>

				<td>
					<!--printing game PRICE form another db table-->
					<?php 
						$temp=$row["gameid"];
						$statementId="SELECT * FROM `gamestore` WHERE id='$temp'";

						$resultId=mysqli_query($conn,$statementId);
						if(mysqli_num_rows($resultId)==1)
						{

							while($rowId=mysqli_fetch_assoc($resultId)){

								echo $rowId["price"];
							} 
						}
						//echo $row["gameid"];
					 ?>
				</td>


				<td>
					<?php echo $row["date"]; ?>
				</td>
			</tr>

			<?php
				}
			}else{echo "if not working";}

			?>
		</table>

		<br/>

		
	</div>


	
	

</body>
</html>
