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
    <link rel="stylesheet" type="text/css" href="styleSearch.css">
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
	
	
	<div class="container">
		<br/>
		<h2 align="center">Live Game Search</h2>

		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Search</span>
				<input type="text" name="search_text" id="search_text" placeholder="search by game name" class="form-control"/>
			</div>
		</div>
		<br/>
		<div id="result"></div>
	</div>

</body>
</html>

<!--jQuery-->
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
