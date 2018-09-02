<?php
	require 'config.php';

	if(isset($_POST['register_btn']))
	{
		session_start();

		//setting value form post
		$fname=($_POST['fname']);
		$lname=($_POST['lname']);
		$username=($_POST['username']);
		$email=($_POST['email']);
		$password1=($_POST['password1']);
		$password2=($_POST['password2']);
		$gender=($_POST['gender']);
		$dob=($_POST['dob']);

		//image
		//path to store the uploaded image
		$target="images/".basename($_FILES['image']['name']);
		$image=$_FILES['image']['name'];
		//---------------

		//checking username exists or not
		$usenameChecking="select * from registration where username='$username'";

		$result_usernameCheck=mysqli_query($conn,$usenameChecking);
		if(mysqli_num_rows($result_usernameCheck)>=1) //if it gets same username 1 or more than 1
		{ 
			echo "username exists.pick a new username";
		}
		else
		{
			$statement="insert into registration(fname,lname,username,email,password,gender,dob,image) values ('$fname','$lname','$username','$email','$password1','$gender','$dob','$image')";

			if($password1==$password2) //checking password and confirm password
			{
				if(mysqli_query($conn,$statement))
				{
					if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
					{
						echo "image uploaded successfully";
					}else{
						echo "there was a problem uploading image";
					}
					echo "<br>";
					$_SESSION['username']=$username;
					echo"registration successful";
					header('location:profile.php');
				}
				else
				{
					mysqli_error($conn);
				}
				mysqli_close($conn);
			}

			else
			{
				echo"password doesnt match";
			}

		}


	}

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
    <link rel="stylesheet" type="text/css" href="styleSheet.css">
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
					<li class="active"> <a href="#"> Registration </a></li> <!--"active" just to highlight the page user is on-->			
				</ul>

				<!-- right allign-->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="login.php"> Login Page </a></li>
				</ul>
			</div>

		</div>
	</nav>
	<!-------NAVBAR DONE!------->

	<div class="content">
		<h1>Welcome To Game Shop Bangladesh</h1>

		<br/><br/>

		<div class="form-data">
			<form  method="post" action="registration.php" enctype="multipart/form-data">
			<table id="table1" value="1">
				<tr>
					<td>First Name:</td>
					<td><input type="text" name="fname"></td>
				</tr>

				<tr>
					<td>Last Name:</td>
					<td><input type="text" name="lname"></td>
				</tr>

				<tr>
					<td>Username:</td>
					<td><input type="text" name="username"></td>
				</tr>

				<tr>
					<td>Email:</td>
					<td><input type="text" name="email"></td>
				</tr>

				<tr>
					<td>Password:</td>
					<td><input type="password" name="password1"></td>
				</tr>

				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="password2"></td>
				</tr>


				<tr>
					<td>Gender:</td>
					<td><input type="radio" name="gender" value="Male">Male</td>
					<td><input type="radio" name="gender" value="Female">Female</td>
				</tr>

				<tr>
					<td>Date of Birth</td>
					<td><input type="date" name="dob"></td>
				</tr>

				<tr>
					<td>Image:</td>
					<td><input type="file" name="image"></td>
				</tr>

				<tr>
					<td><input type="submit" name="register_btn" value="Register"></td>
				</tr>

			</table>
		</form>
		</div>


	</div>

</body>
</html>