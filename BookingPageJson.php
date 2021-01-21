
	  <?php
		header('Content-type: application/json');

		$form = '';$destination = '';$touristNumber = '';;$numberOfDay = '';$numberOfNight = '';$totalAmount = '';$travelMedium = '';$names = '';
		if($_SERVER["REQUEST_METHOD"] == "POST"){
				$names = $_POST['name'];
				$form = $_POST['from'];
				$destination = $_POST['destination'];
				$touristNumber = $_POST['touristNumber'];
				$numberOfDay = $_POST['numberOfDay'];
				$numberOfNight = $_POST['numberOfNight'];
				$totalAmount = $_POST['totalAmount'];
				$travelMedium = $_POST['travelMedium'];

				$link = mysqli_connect("localhost" , "root" , "" , "cse_411");
				$sql = " select * from booking where form = '$form' and destination = '$destination' and touristNumber = '$touristNumber'  and numberOfDay = '$numberOfDay' and numberOfNight = '$numberOfNight' and travelMedium = '$travelMedium' ";
				if($result = mysqli_query($link , $sql)){
				 		if(mysqli_num_rows($result) > 0){
				 			  while ($row = mysqli_fetch_array($result)) {
				 			  	   $totalAmount = $row['totalAmount'];
				 			  }

				 			  echo json_encode($totalAmount);	
				 		}
				 		else{
				 			header("Location: bookingPage.php?names=$name");
				 			exit();
				 		}
				}
				else{
				 	 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
		}

		else if($_SERVER["REQUEST_METHOD"] == "GET"){
			 $userType = $_GET['userType'];
			 echo json_encode($userType);
		}
	 ?>
