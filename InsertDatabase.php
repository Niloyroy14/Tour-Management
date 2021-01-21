<!DOCTYPE html>
<html>
<head>
	<title>Insert Database</title>
</head>
<body>
	  <?php
	  		$action = '';$name = '';$password = '';$email = '';$phoneNo = '';$age;$gender = '';
	  		if($_SERVER["REQUEST_METHOD"] == "POST"){
	  			  $action = $_POST['action'];
	  			  $link = mysqli_connect("localhost" , "root" , "" , "cse_411");
	  			  if($action == "userInfo"){
	  			  		$name = $_POST['name'];
					  	$password = $_POST['password'];
					  	$email = $_POST['email'];
					  	$phoneNo = $_POST['phoneNo'];
					  	$age = $_POST['age'];
					  	$gender = $_POST['gender']; 	
		  			    $sql = "INSERT INTO userinfo (name,email,password,phoneNo,age,gender) VALUES('$name','$email','$password','$phoneNo',$age,'$gender')";
		  			        if(mysqli_query($link , $sql)){
	                             header("Location: Home.php");
	                             exit();
	                        }
	                    

	  			  }
	  			  else 
	  			  	if($action == "adminInfo"){
	  			  		
	  			  		$name = $_POST['name'];
					  	$password = $_POST['password'];
					  	$email = $_POST['email'];
					  	$phoneNo = $_POST['phoneNo'];
					  	$age = $_POST['age'];
					  	$gender = $_POST['gender'];
	  			        $sql = "INSERT INTO admin (name,email,password,phoneNo,age,gender) VALUES('$name','$email','$password','$phoneNo',$age,'$gender')";
	  			        if(mysqli_query($link , $sql)){
                             header("Location: AdminInfo.php");
                             exit();
                        }
	  			  }
	  			  else if($action == "package"){
	  			  		$place = $_POST['place'];
					  	$touristNumber = $_POST['touristNumber'];
					  	$stayAmount = $_POST['stayAmount'];
					  	$foodAmount = $_POST['foodAmount'];
					  	$busAmount = $_POST['busAmount'];
					  	$trainAmount = $_POST['trainAmount'];
					  	$planeAmount = $_POST['planeAmount'];
					  	$numberOfDay = $_POST['numberOfDay'];
					  	$numberOfNight = $_POST['numberOfNight'];
					  	$sql = "INSERT INTO package (place,touristNumber,stayAmount,foodAmount,busAmount,trainAmount,planeAmount,numberOfDay,numberOfNight) VALUES('$place','$touristNumber','$stayAmount','$foodAmount',$busAmount,'$trainAmount','$planeAmount','$numberOfDay','$numberOfNight')";
	  			        if(mysqli_query($link , $sql)){
                             header("Location: AdminHome.php");
                             exit();
                        }
	  			  }

	  			  else if($action == "detailPackage"){
	  			    	$name = $_POST['name'];
	  			  		$place = $_POST['place'];
					  	$touristNumber = $_POST['touristNumber'];
					  	$travelMedium = $_POST['travelMedium'];
					  	$totalAmount = $_POST['totalAmount'];
					  	$numberOfDay = $_POST['numberOfDay'];
					  	$numberOfNight = $_POST['numberOfNight'];
					  	$sql = "INSERT INTO confirmticket (place,touristNumber,numberOfDay,numberOfNight,totalAmount,travelMedium,name) VALUES('$place','$touristNumber','$numberOfDay','$numberOfNight','$totalAmount','$travelMedium','$name')";
	  			        if(mysqli_query($link , $sql)){
                             header("Location: ConfirmBooking.php?place=$place&name=$name&totalAmount=$totalAmount&travelMedium=$travelMedium");
                             exit();
                        }
	  			  }
	  			  else if($action == "bookingInfo"){
	  			    	$name = $_POST['name'];
	  			  		$place = $_POST['destination'];
					  	$touristNumber = $_POST['touristNumber'];
					  	$travelMedium = $_POST['travelMedium'];
					  	$totalAmount = $_POST['totalAmount'];
					  	$numberOfDay = $_POST['numberOfDay'];
					  	$numberOfNight = $_POST['numberOfNight'];
					  	$sql = "INSERT INTO confirmticket (place,touristNumber,numberOfDay,numberOfNight,totalAmount,travelMedium,name) VALUES('$place','$touristNumber','$numberOfDay','$numberOfNight','$totalAmount','$travelMedium','$name')";
	  			        if(mysqli_query($link , $sql)){
                             header("Location: ConfirmBooking.php?place=$place&name=$name&totalAmount=$totalAmount&travelMedium=$travelMedium");
                             exit();
                        }
	  			  }
	  			 
	  			  
	  		}
	  ?>

</body>
</html>