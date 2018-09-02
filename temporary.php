<!DOCTYPE html>
<html lang="en">
<head>
    <title>GameStore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="sidebar.css">
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
					<li class="active"> <a href="#"> Store </a></li> <!--"active" just to highlight the page user is on-->
					<li> <a href="#"> Library </a></li>
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
					<li> <a href="login.php"> Logout </a></li>
				</ul>
			</div>

		</div>
	</nav>
	<!-------NAVBAR DONE!------->
	<a href="#" class="btn btn-success" id="menu-toggle">Browse Games</a>
	<!-------SIDEBAR------->
	<div id="wrapper">

		<!---sidebar-->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li><a href="#">FPS Games</a></li>
				<li><a href="#">RPG Games</a></li>
				<li><a href="#">Battle Royale Games</a></li>
				<li><a href="#">Indie Games</a></li>
			</ul>
		</div>

		<!---page content--->
		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="col-lg-12">
					<br/><br/>
					<!-------------main profile code------>
					<?php
						include "profile.php";
					?>

					<!-------------main profile code ends------>
				</div>
			</div>
		</div>

	</div>

	<!-----Menu Toggle Script--->
	<script>
		/*jquery used*/
		$("#menu-toggle").click(function(e){
			e.preventDefault(); /*eta just bujhanor jnno je button e click korle kono website e jaaabe naa. link e joaya bondho.etai default action*/

		$("#wrapper").toggleClass("menuDisplayed"); /* eta toggle/not toggle korbe*/

		})
	</script>
	<!-------SIDEBAR ends------->

</body>
</html>