# Towards-Ground-Sports-by-web-application
<?php
	require_once("conn.php");
		
		$nm = $_GET['name'];
		$ci = $_GET['city'];
		$add = $_GET['address'];
		$pin = $_GET['pincode'];
		$ag = $_GET['age'];
		$gen = $_GET['gender'];
		$em = $_GET['email'];
		$ph = $_GET['phone'];
		$sp = $_GET['sport'];
		$date = "1/1/1";


		//Check City and pin code

		$sql = "update ";

		$sql = "SELECT * FROM `area_codes` WHERE `code` = '$pin' ;";
		$result2 = $conn->query($sql);
		if ($result2->num_rows > 0) 
		{
			while($row = $result2->fetch_assoc()) 
			{
				//echo "Emails : ".$row["Email"];
				$pin_ck = $row["code"];
			}
		}
		else{
			$result3=mysqli_query($conn,"INSERT INTO `area_codes` (`id`, `code`, `city`) VALUES (NULL, '$pin', '$ci');");
		}

		//-----------


		if($pass == $pass2)
		{
	
		$result=mysqli_query($conn,"INSERT INTO `pi` (`id`, `name`, `city`, `address`, `pincode`, `age`, `gender`, `email`, `phone`, `sport`, `dt`) VALUES (NULL, '$nm', '$ci', '$add', '$pin', '$ag', '$gen', '$em', '$ph', '$sp', '$date');");
			
		if($result)
		{

			$result1=mysqli_query($conn,"UPDATE `user` SET `Status` = 'YES' WHERE `Email` = '$em';");
			if($result1)
			{
				echo '<script>alert("Personal Information add Successfully");</script>';
				header("Location: Home.php?pin=$pin");				
			}
			else
			{
				echo '<script>alert("Error....! \n Email address not found in DataBase");</script>';
				echo '<script>window.history.back();</script>';
			}

		}
		else
		{
			echo '[{"0":"FAILD","query_result":"FAILD"}]';
		}
		}
		else{
			echo '<script>alert(" Not Found ")</script>';
			echo '<script>window.history.back();</script>';
		} 
		
		
		
?>
