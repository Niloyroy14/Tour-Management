<!DOCTYPE html>
<html>
<head>
	<title>Update Delete</title>
</head>
<body>
	  <?php
	  		$id = '';$action = '';
	  		if($_SERVER["REQUEST_METHOD"] == "GET"){
	  			  $id = $_GET['id'];
	  			  $action = $_GET['action'];
	  			  $from = $_GET['from'];
	  			  $link = mysqli_connect("localhost","root","","cse_411");
	  			  if($action == "delete"){
	  			  		if($from == "adminInfo"){
	  			  		     $sql = " delete from admin where id = '$id' ";
	  			  		}
	  			  		else if($from == "confirmTicketInfo"){
	  			  			 $sql = " delete from confirmTicket where id = '$id' ";
	  			  		}
	  			  		else{
	  			  			$sql = " delete from userinfo where id = '$id' ";
	  			  		}
	  			  		if(mysqli_query($link , $sql)){
	  			  			if($from == "adminInfo"){
	  			  			    header("Location: AdminInfo.php");
	  			  			}
	  			  			else if($from == "confirmTicketInfo"){
	  			  			    header("Location: ViewBookingPage.php");
	  			  			}
	  			  			else{
	  			  				header("Location: UserInfo.php");
	  			  			}
	  			  			exit();
	  			  		}
	  			  }

	  			  else if($action == "edit"){
	  			  		$name = '';$email = '';$password = '';$phoneNo = '';$gender = '';$age = '';
	  			  		if($from == "adminInfo"){
	  			  		     $sql = " select * from admin where id = '$id' ";
	  			  		}
	  			  		else if($from == "confirmTicketInfo"){
	  			  		     $sql = " select * from confirmTicket where id = '$id' ";
	  			  		}
	  			  		else{
	  			  			$sql = " select * from userinfo where id = '$id' ";
	  			  		}
	  			  		$result = mysqli_query($link , $sql);
						if($result){
							 if(mysqli_num_rows($result) > 0){
							 	 while($row = mysqli_fetch_array($result)){
							 	 	  if($from == "confirmTicketInfo"){
							 	 	  	   $id = $row['id'];
			                               $name = $row['name'];
			                               $place = $row['place'];
			                               $touristNumber = $row['touristNumber']; 
			                               $numberOfDay = $row['numberOfDay'];
			                               $numberOfNight = $row['numberOfNight'];
			                               $totalAmount = $row['totalAmount'];
			                               $travelMedium = $row['travelMedium'];
							 	 	  }
							 	 	  else{
								 	 	  $id = $row['id'];
								 	 	  $name = $row['name']; 
								 	 	  $password = $row['password'];
								 	 	  $email = $row['email'];
								 	 	  $phoneNo = $row['phoneNo'];
								 	 	  $gender = $row['gender'];
								 	 	  $age = $row['age'];
								 	 }
							 	}
							 	mysqli_free_result($result);
							 }
							 else{
							 	 echo "No Record selected from this database";
							 }
						}

						if($from == "confirmTicketInfo"){
							 $url = "ConfirmTicketEdit.php?id=$id&name=$name&place=$place&touristNumber=$touristNumber&numberOfDay=$numberOfDay&numberOfNight=$numberOfNight&totalAmount=$totalAmount&travelMedium=$travelMedium";
						     header("Location: $url");
						}
						else{
							 $url = "Edit.php?id=$id&name=$name&email=$email&password=$password&phoneNo=$phoneNo&gender=$gender&age=$age&from=$from";
						     header("Location: $url");
						}
	  			  }

	  		}

	  		else if($_SERVER["REQUEST_METHOD"] == "POST"){
	  			 $id = $_POST['id'];
	  			 $action = $_POST['action'];
	  			 $name = $_POST['name'];
	  			 $link = mysqli_connect("localhost","root","","cse_411");

	  			 if($action == "createEdit"){
		  			 $password = $_POST['password'];
		  			 $phoneNo = $_POST['phoneNo'];
		  			 $age = $_POST['age'];
		  			 $email = $_POST['email'];
		  			 $gender = $_POST['gender'];
		  			 $from = $_POST['from'];
	  			 	 if($from == "adminInfo"){
	  			  		  $sql = " update admin set name = '$name',email = '$email',password = '$password',phoneNo = '$phoneNo',age = '$age',gender = '$gender' where id = '$id' ";
	  			  	 }
	  			  	 else{
	  			  		  $sql = " update userinfo set name = '$name',email = '$email',password = '$password',phoneNo = '$phoneNo',age = '$age',gender = '$gender' where id = '$id' ";
	  			  	 }
	  			 	 
	  			 	if(mysqli_query($link , $sql)){
	  			 		  if($from == "adminInfo"){
	  			  		      header("Location: AdminInfo.php");
	  			  		  }
	  			  		  else{
	  			  		  	  header("Location: UserInfo.php");
	  			  		  }
	  			  		  exit();
	  			  	}
	  			 }
	  			 else{
	  			 	 $destination = $_POST['destination'];
                     $touristNumber = $_POST['touristNumber']; 
                     $numberOfDay = $_POST['numberOfDay'];
                     $numberOfNight = $_POST['numberOfNight'];
                     $totalAmount = $_POST['totalAmount'];
                     $travelMedium = $_POST['travelMedium'];

                     $sql = " update confirmTicket set name = '$name',place = '$destination',touristNumber = '$touristNumber',numberOfDay = '$numberOfDay',numberOfNight = '$numberOfNight',totalAmount = '$totalAmount',travelMedium = '$travelMedium' where id = '$id' ";
                     if(mysqli_query($link , $sql)){
                     	   header("Location: ViewBookingPage.php");
                     }
                     else{
                     	 header("Location: AdminHome.php");
                     }
	  			 }

	  		}
	  ?>
</body>
</html>