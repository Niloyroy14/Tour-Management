<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ViewBooking Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
       
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="AdminHome.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ViewBookingPage.php">ViewBooking</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="UserInfo.php">UserInfo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ViewPackageDetails.php">Viewpackagedetails</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Package.php">Add package</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="AdminInfo.php">AdminInfo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Home.php">LogOut</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/about-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>View Booking </h1>
             
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-11 col-md-2 mx-auto">
           <table class="table">
              <tr>
                  <thead style="background-color: black">
                    <tr style="color: white">
                      <td scope="col">Id</td>
                      <td scope="col">Name</td>
                      <td scope="col">Email</td>
                      <td scope="col">PhoneNo</td>
                      <td scope="col">Place</td>
                      <td scope="col">TouristNumber</td>
                      <td scope="col">NumberOfDay</td>
                      <td scope="col">NumberOfNight</td>
                      <td scope="col">TravelMedium</td>
                      <td scope="col">TotalAmount</td>
                      <td scope="col">Active</td>
                      <!-- <td scope="col">Fileupload</td> -->
                    </tr>
                  </thead>
              </tr>
              <?php
                 $phoneNo='';$email ='';$name = '';$place = '';$touristNumber = '';$numberOfDay = '';$numberOfNight = '';$totalAmount = '';$travelMedium = '';
                 $link = mysqli_connect("localhost" , "root" , "" , "cse_411");
                 $sql = " select * from confirmTicket";
                 if($result = mysqli_query($link , $sql)){
                    if(mysqli_num_rows($result) > 0){
                         while($row = mysqli_fetch_array($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $place = $row['place'];
                            $touristNumber = $row['touristNumber']; 
                            $numberOfDay = $row['numberOfDay'];
                            $numberOfNight = $row['numberOfNight'];
                            $totalAmount = $row['totalAmount'];
                            $travelMedium = $row['travelMedium'];
                            $sql = " select * from userinfo where name = '$name' ";
                            if($results = mysqli_query($link , $sql)){
                                if(mysqli_num_rows($results) > 0){
                                     while($rows = mysqli_fetch_array($results)){
                                        $email = $rows['email'];
                                        $phoneNo = $rows['phoneNo'];     
                                    } 
                                }
                                else{
                                    echo "No Record11 selected from this database";
                                }
                             }
                             else{
                               echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                             }
                ?>
                <tbody>
                    <tr>
                        <td>  <?php echo $id; ?>  </td>
                        <td>  <?php echo $name; ?>  </td>
                        <td>  <?php echo $email; ?>  </td>
                        <td>  <?php echo $phoneNo; ?>  </td>
                        <td>  <?php echo $place; ?>  </td>
                        <td>  <?php echo $touristNumber; ?>  </td>
                        <td>  <?php echo $numberOfDay; ?>  </td>
                        <td>  <?php echo $numberOfNight; ?>  </td>
                        <td>  <?php echo $travelMedium; ?>  </td>
                        <td>  <?php echo $totalAmount; ?>  </td>
                        <td>
                          <a class="button" href="UpdateDelete.php?id=<?php echo $id;?>&action=edit&from=confirmTicketInfo">Edit</a>
                          <a class="button" href="UpdateDelete.php?id=<?php echo $id;?>&action=delete&from=confirmTicketInfo">Delete</a>
                        </td>
                        <!-- <td>  <?php echo $fileupload; ?>  </td> -->
                    </tr>
                </tbody>
              <?php
                        } 
                    }
                    else{
                        echo "No Record selected from this database";
                    }
                 }
                 else{
                   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                 }
             ?>
          </table>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
