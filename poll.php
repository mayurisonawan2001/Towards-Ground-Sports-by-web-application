# Towards-Ground-Sports-by-web-application
<?php
	require_once("conn.php");
		
		$em = $_GET['email'];
		$tsnm = $_GET['tsnm'];
		$pin = $_GET['pin'];
		$sp = $_GET['sp'];
		
		//SELECT * FROM `poll` WHERE `email` = '$em'

		$sql = "SELECT * FROM `poll` WHERE `email` = '$em' ;";
		$result2 = $conn->query($sql);
		if ($result2->num_rows > 0) 
		{
			header("Location: Home.php?msg=poll2&pin=$pin&em=$em");
		}
		else{

			$result=mysqli_query($conn,"INSERT INTO `poll` (`id`, `email`, `Turnament_Name`, `sport`) VALUES (NULL, '$em', '$tsnm', '$sp');");
			
			if($result)
			{
				$sql = "SELECT * FROM `poll_count` WHERE `Tur_name` = '$tsnm' ;";
				$result2 = $conn->query($sql);
				if ($result2->num_rows > 0) 
				{
					$new_count = 0;
					while($row = $result2->fetch_assoc()) 
	   				{
						$new_count = $row["count"];
					}
					$new_count = $new_count + 1;
					echo "Found";
						$result=mysqli_query($conn,"UPDATE `poll_count` SET `count` = '$new_count' WHERE `Tur_name` = '$tsnm';");
					//UPDATE `poll_count` SET `count` = '1' WHERE `Tur_name` = '$tsnm';
						header("Location: Home.php?msg=poll&pin=$pin&em=$em");
				}
				else{
					echo "not found";
					$result=mysqli_query($conn,"INSERT INTO `poll_count` (`id`, `Tur_name`, `count`, `sport`) VALUES (NULL, '$tsnm', '1', '$sp');");
					//INSERT INTO `poll_count` (`id`, `Tur_name`, `count`) VALUES (NULL, '$tsnm', '0');
					header("Location: Home.php?msg=poll&pin=$pin&em=$em");
				}
				//header("Location: Home.php?msg=poll&pin=$pin&em=$em");

			}
			else
			{
				echo '[{"0":"FAILD","query_result":"FAILD"}]';
			}

		}

?>




