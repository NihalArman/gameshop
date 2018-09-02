<?php
	require 'admin_config.php';
	//post values
	function getPosts(){
		$posts = array();
		$posts[0] = $_POST['gameName'];
		$posts[1] = $_POST['about'];
		$posts[2] = $_POST['releaseDate'];
		$posts[3] = $_POST['price'];
		$posts[4] = $_POST['trailer'];
		$posts[5] = $_POST['requirements'];
		//$posts[6] = $_POST['image'];
		return $posts;
	}
	//----------------------------
	
	//insert
	if(isset($_POST['insert']))
	{
		$data=getPosts();
		//image
		//path to store the uploaded image
		$target="images/".basename($_FILES['image']['name']);
		$image=$_FILES['image']['name'];
		//---------------
		$insert_query="INSERT INTO `gamestore`(`gameName`,`about`,`releaseDate`,`price`,`trailer`,`requirements`,`image`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$image')";
		try{
			$insert_Result=mysqli_query($conn,$insert_query);
			/*image*/
			if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
					{
						echo "<script>alert('Data Insert Successful');</script>";

						echo "<script>
							window.location = 'addgame.php';
						</script>";
					}else{
						echo "<script>alert('Error: Image Upload Failed');</script>";
					}
			/*image done*/
			if($insert_Result)
			{
				if(mysqli_affected_rows($conn)>0)
				{
					echo "<script>alert('Data Insert Successful');</script>";
					echo "<script>
							window.location = 'addgame.php';
						</script>";
				}
				else{
					echo "<script>alert('ERROR:Data insert failed');</script>";
				}
			}
		}catch(Exception $ex){
			echo 'Error Insert'.$ex->getMessage();
		}
	} //insert ends


	


	//update
    if(isset($_POST['update']))
    {
        $data= getPosts();

        $update_Query="UPDATE `gamestore` SET `about`='$data[1]', `releaseDate`='$data[2]', `price`='$data[3]', `trailer`='$data[4]', `requirements`='$data[5]' WHERE `gameName` = '$data[0]'";


        try{
            $update_Result = mysqli_query($conn, $update_Query);

            if($update_Result)
            {
                if(mysqli_affected_rows($conn)>0)
                {
                    echo "<script>alert('Data Updated');</script>";
                    echo "<script>
							window.location = 'storedgame.php';
						</script>";

                }else{
                    echo "<script>alert('ERROR:Data update failed');</script>";
                }
            }

        }catch(Exception $ex)
        {
            echo 'Error Update '.$ex->getMessage();
        }
	}//update ends


	//delete game
    if(isset($_POST['delete']))
    {
        $deleteGame = $_POST['gameName'];
        $delete_Query="DELETE FROM gamestore WHERE `gameName` = '$deleteGame'";

        try{
            $delete_Result = mysqli_query($conn, $delete_Query);

            if($delete_Result)
            {
                if(mysqli_affected_rows($conn)>0)
                {
                    echo "<script>alert('Data Deleted');</script>";
                    echo "<script>
							window.location = 'storedgame.php';
						</script>";
                }else{
                    echo "<script>alert('ERROR:Data remove failed');</script>";
                }
            }

        }catch(Exception $ex)
        {
            echo 'Error Delete '.$ex->getMessage();
        }
    } //delete ends

    //delete user
    if(isset($_POST['deleteUser']))
    {
        $deleteUser = $_POST['userName'];
        $delete_Query="DELETE FROM registration WHERE `username` = '$deleteUser'";

        try{
            $delete_Result = mysqli_query($conn, $delete_Query);

            if($delete_Result)
            {
                if(mysqli_affected_rows($conn)>0)
                {
                    echo "<script>alert('Data Deleted');</script>";
                    echo "<script>
							window.location = 'userList.php';
						</script>";
                }else{
                    echo "<script>alert('ERROR:Data remove failed');</script>";
                }
            }

        }catch(Exception $ex)
        {
            echo 'Error Delete '.$ex->getMessage();
        }
    } //delete ends


	
?>