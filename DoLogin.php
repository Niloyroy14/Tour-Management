<!DOCTYPE html>
<html>
<head>
	<title>Do Login</title>
</head>
<body>
	<?php
		$name = '';$password = '';$action = '';
		if($_SERVER["REQUEST_METHOD"] == "POST"){
				$action = $_POST['action'];
				$name = $_POST['name'];
				$password = $_POST['password'];
				if($action == "userLogin"){
					 $link = mysqli_connect("localhost" , "root" , "" , "cse_411");
					 $sql = " select * from userinfo where name = '$name' and password = '$password' ";
					 if($result = mysqli_query($link , $sql)){
					 		if(mysqli_num_rows($result) > 0){
					 			  header("Location: UserHome.php?names=$name");
					 		}
							
							
							
				else{
								
					$link = mysqli_connect("localhost" , "root" , "" , "cse_411");
					 $sql = " select * from admin where name = '$name' and password = '$password' ";
					 if($result = mysqli_query($link , $sql)){
					 		if(mysqli_num_rows($result) > 0){
					 			  header("Location: AdminHome.php");
					 		}
					 		else{
					 			header("Location:Login.php");
					 			exit();
					 		}
					 }
					 else{
					 	 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
					 }
								
					 			
					 		}
					 }
					 
					 
					 
					
					
				}
				
		}
	?>
</body>
</html>