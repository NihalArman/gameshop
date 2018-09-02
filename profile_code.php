	<?php
		require 'config.php';
		session_start();
		$whoLoggedIn=$_SESSION['username'];
		echo "<link rel='stylesheet' type='text/css' href='styleSheet.css'>";
		echo "<div class='content'>";
		echo "<h2>welcome! $whoLoggedIn,</h2>";


		$statement= "select * from registration where username='$whoLoggedIn'";
		$result=mysqli_query($conn,$statement);

		if(mysqli_num_rows($result)==1)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					//storing the value
					$firstname=$row['fname'];
					$lastname=$row['lname'];
					$email=$row['email'];
					$gender=$row['gender'];
					$dateOfBirth=$row['dob'];
					$image=$row['image'];

					//printing the values
					echo "<div class='form-data'>";
						echo "<table id='table1' border=0>";

						echo "<tr>";
							echo "<th>Image:</th>";
							echo "<td><image src='images/".$image."' width='200' height='150'></td>";
						echo "</tr>";

						echo "<tr>";
							echo "<th>Name:</th>";
							echo "<td>$firstname $lastname</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<th>Email:</th>";
							echo "<td>$email</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<th>Gender:</th>";
							echo "<td>$gender</td>";
						echo "</tr>";

						echo "<tr>";
							echo "<th>Date Of Birth</th>";
							echo "<td>$dateOfBirth</td>";
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


