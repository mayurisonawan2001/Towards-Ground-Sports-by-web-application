# Towards-Ground-Sports-by-web-application
<?php
	
	require_once("conn.php");

	$em = $_GET['email'];
	$ps = $_GET['pass'];
		
		$sql = "SELECT * FROM `user` WHERE `Email` = '$em' AND `Password` = '$ps' ;";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) 
		{
			while($row = $result->fetch_assoc()) 
			{
				//echo "Emails : ".$row["Email"];
				$status = $row["Status"];
				if($status=='NO')
				{
					header("Location: PerInfo.php");
				}
				else if($status=='YES')
				{
					$sql = "SELECT * FROM `pi` WHERE `email` = '$em' ;";
					$result2 = $conn->query($sql);
					if ($result2->num_rows > 0) 
					{
						while($row = $result2->fetch_assoc()) 
						{
							//echo "Emails : ".$row["Email"];
							$pinpass = $row["pincode"];
							header("Location: Home.php?pin=$pinpass");
						}
					}
					
				}
			}
		}
		else{
			echo '<script>alert(" Error in Login....! \n Your Username and Password is not match")</script>';
			echo '<script>window.history.back();</script>';
		}

?>
