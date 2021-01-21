<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ConfirmBooking Page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <?php
          $name = '';
          if($_SERVER["REQUEST_METHOD"] == "GET"){
              $name = $_GET['name'];
          }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="index.html">Register</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="UserHome.php?names=<?php echo $name;?>">Home</a>
            </li>
            <li class="nav-item">
               <a href="#" data-toggle="dropdown" class="dropdown-toggle">AllPackages <b class="caret"></b></a>
               <div class="dropdown"> 
                  <ul class="dropdown-menu">
                      <li><a href="Bandarban.php?names=<?php echo $name;?>">Bandarban</a></li>
                      <li><a href="Rangamati.php?names=<?php echo $name;?>">Rangamati</a></li>
                      <li><a href="Sylhet.php?names=<?php echo $name;?>">Sylhet</a></li>
                      <li><a href="Sundarban.php?names=<?php echo $name;?>">Sundarban</a></li>
                  </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="BookingPage.php?names=<?php echo $name; ?>">BookingPackge</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="SpecialPackage.php?names=<?php echo $name; ?>">SpecialPackage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Home.php">Log Out</a>
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
              <h1>Confirm Booking</h1>
             
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

        <?php
          $phoneNo='';$email ='';$place = '';$touristNumber = '';$numberOfDay = '';$numberOfNight = '';$totalAmount = '';$travelMedium = '';
          if($_SERVER["REQUEST_METHOD"] == "GET"){
               $place = $_GET['place'];
               $totalAmount = $_GET['totalAmount'];
               $travelMedium = $_GET['travelMedium'];
               $link = mysqli_connect("localhost" , "root" , "" , "cse_411");
               $sql = " select * from userinfo where name = '$name' ";
               if($result = mysqli_query($link , $sql)){
                  if(mysqli_num_rows($result) > 0){
                       while($row = mysqli_fetch_array($result)){
                          $email = $row['email'];
                          $phoneNo = $row['phoneNo'];     
                      } 
                  }
                  else{
                      echo "No Record selected from this database";
                  }
               }
               else{
                 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
               }

               $sql = " select * from confirmTicket where place = '$place' and totalAmount = '$totalAmount' and travelMedium = '$travelMedium' ";
               if($result = mysqli_query($link , $sql)){
                  if(mysqli_num_rows($result) > 0){
                       while($row = mysqli_fetch_array($result)){
                          $place = $row['place'];
                          $touristNumber = $row['touristNumber']; 
                          $numberOfDay = $row['numberOfDay'];
                          $numberOfNight = $row['numberOfNight'];
                          $totalAmount = $row['totalAmount'];
                          $travelMedium = $row['travelMedium'];    
                      } 
                  }
                  else{
                      echo "No Record selected from this database";
                  }
               }
               else{
                 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
               }
          }
        ?>
        <table class="table table-bordered">
              <tr>
                  <td>UserName</td>
                  <td><?php echo $name; ?></td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td><?php echo $email; ?></td>
              </tr>
              <tr>
                  <td>PhoneNo</td>
                  <td><?php echo $phoneNo; ?></td>
              </tr>
              <tr>
                  <td>Place</td>
                  <td><?php echo $place; ?></td>
              </tr>
              <tr>
                  <td>TravelMedium</td>
                  <td><?php echo $travelMedium; ?></td>
              </tr>
              <tr>
                  <td>TouristNumber</td>
                  <td><?php echo $touristNumber; ?></td>
              </tr>
              <tr>
                  <td>NumberOfDay</td>
                  <td><?php echo $numberOfDay; ?></td>
              </tr>
              <tr>
                  <td>NumberOfNight</td>
                  <td><?php echo $numberOfNight; ?></td>
              </tr>
              <tr>
                  <td>TotalAmount</td>
                  <td><?php echo $totalAmount; ?></td>
              </tr>
        </table>
        <h3 style="color: red;text-align: center">Your Booking is Confirm</h3>
        </div>
      </div>
    </div>

    <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p class="copyright text-muted">All Copyright &copy Reserved to Niloy and Rafa;</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
    <script src="js/login.js"></script>

  </body>

</html>
