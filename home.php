<?php
	require_once("conn.php");

	 // Turn off all error reporting
	 error_reporting(0);
		
		$pin = $_GET['pin'];
		$sql = "SELECT * FROM `area_codes` WHERE `code` = '$pin' ;";
		

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Group</title>
</head>
  <style> 
   body{
	   background-image:url("Image/bg2.jpg");
	   background-color:black;
	   background-size: cover;
	}
   .main{
	   font-size: 40px;
	   color:white;
	   padding: 1px;
	   display: flex;
	   box: 6px;
	   padding-left: 580px;
	   }
	.main1{
	   color:white;
	   font-size: 40px;
	   padding: 1px;
	   display: auto;
	   box: 2px;
	   padding-left: 582px;
	   opacity:100%;
	   }
	.main2{
	   color:white;
	   padding: 3px;
	   display: auto;
	   box: 2px;
	   padding-left: 550px;
	   opacity:100%;
	   }
	.main3{
	   color:white;
	   padding: 3px;
	   display: auto;
	   box: 2px;
	   padding-left: 450px;
	   opacity:100%;
	   }

	
	}
	
	

  </style>
<body>
      

     
	<?php

     $result2 = $conn->query($sql);
     if ($result2->num_rows > 0) 
     {
	  while($row = $result2->fetch_assoc()) 
	   {
		$city = $row["city"];
		echo "<h1 class='main'>CITY : ".$city."</h1>";
	   }
     }

     echo "<h1 class='main1'>    PIN : ".$pin."</h1>";


     echo "</br></br></br><h1 class='main2'>Group Members : </h1>";
	
		$sql = "SELECT * FROM `pi` WHERE `pincode` = '$pin' ;";
		$g = "";
		$result2 = $conn->query($sql);
		if ($result2->num_rows > 0) 
		{
			while($row = $result2->fetch_assoc()) 
			{
				//echo "Emails : ".$row["Email"];
				echo "<h2 class='main3'>Name : ".$row["name"]."&nbsp&nbsp Age : ".$row["age"]."&nbsp&nbsp Phone : ".$row["phone"]." &nbsp&nbspSport : ".$row["sport"]."</h2>";
				$g = $row["sport"];
			}
		}
		else{
		}
        
		$sql2 = "SELECT * FROM `tur` WHERE `game` = '$g'";
		$result2 = $conn->query($sql2);
     	if ($result2->num_rows > 0) 
     	{
	  		while($row = $result2->fetch_assoc()) 
	   		{
				$name_t = $row["tur_name"];
				$date = $row["tur_date"];
				$place = $row["place"];
				$time = $row["tur_time"];
				echo "
				<div class='box'>
					<h1 class='nm'>Upcomming Turnament</h1>
					<h1 class='nm'>$name_t</h1>
					<h2 class='nm'>Date : $date</h2>
					<h2 class='nm'>Place : $place</h2>
					<h2 class='nm'>Time : $time</h2>
				</div>
				";
	   		}
     	}	 
	
	?>

	
	<style>
		.box{
			float:left;
			margin:1%;
			background-color:red;
			width:30%;
			height:300px;
		}
		.nm{
			color:white;
			padding-left:10px;
			padding-right:10px;
		}
	</style>
</body>
</html>
