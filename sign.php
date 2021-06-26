# Towards-Ground-Sports-by-web-application
<?php
	require_once("conn.php");
		
		$em = $_GET['email'];
		$pass = $_GET['psw'];
		$pass2 = $_GET['psw-repeat'];

		if($pass == $pass2)
		{
	
		$result=mysqli_query($conn,"INSERT INTO `user` (`id`, `Email`, `Password`,`Status`) VALUES (NULL, '$em', '$pass', 'NO');");
			
		if($result)
		{
			echo '<script>alert("User add Successfully");</script>';
			 header("Location: index.php?msg=ok");

		}
		else
		{
			echo '[{"0":"FAILD","query_result":"FAILD"}]';
		}
		}
		else{
			echo '<script>alert(" Error in SignUP....! \n Re - Password is not match")</script>';
			echo '<script>window.history.back();</script>';
		} 
		
?>
