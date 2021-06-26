# Towards-Ground-Sports-by-web-application
<?php
	$db_name = "TSG";
	$mysql_username = "root";
	$mysql_password = "";
	$server_name = "localhost";
	
	
	$conn = mysqli_connect($server_name,$mysql_username,$mysql_password,$db_name);
	
	if($conn)
	{
		//echo "Databse is connected";
	}
	else
	{
		echo "Databsed is not connected";
	}
?>
