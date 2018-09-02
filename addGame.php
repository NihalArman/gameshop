<?php 
	$gameid = $_GET['id']; 
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
    <link rel="stylesheet" type="text/css" href="gameViewStyle.css">
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
					<li> <a href="login.php"> Logout </a></li>
				</ul>
			</div>

		</div>
	</nav>
	<!-------NAVBAR DONE!------->
	
	<!-------main content---->
	
	
	<div class="wrapper">
		
		<?php
		require 'config.php';
		session_start();

		$whoLoggedIn=$_SESSION['username'];

		$purchasedDate=date("Y/m/d");

		$insert_query="INSERT INTO `userlibrary`(`username`,`gameid`,`date`) VALUES ('$whoLoggedIn','$gameid','$purchasedDate')";
		

		try{
            $insert_Result = mysqli_query($conn, $insert_query);

            if($insert_Result)
            {
                if(mysqli_affected_rows($conn)>0)
                {
                    echo '<h1>Congratulation! you have purchased this game.</h1>';
                }else{
                    echo 'data not inserted';
                }
            }

        }catch(Exception $ex)
        {
            echo 'Error Insert '.$ex->getMessage();
        }
        ?>

		


	</div>


	
	

</body>
</html>
