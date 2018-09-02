<?php

	//connect to database
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="gamingshop";

	$conn=mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn)
	{
		die("Connection failed: ".mysqlil_connet_error());
	}
?>
