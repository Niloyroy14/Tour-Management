<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ConfirmTicketEdit Page</title>

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
              <a class="nav-link" href="AdminLogin.php">LogOut</a>
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
              <h1>View Booking Edit </h1>
             
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

                $id;$name = '';$place = '';$touristNumber;$numberOfDay;$numberOfNight;$totalAmount;$travelMedium = '';
                if($_SERVER["REQUEST_METHOD"] == "GET"){
                     $id = $_GET['id'];
                     $name = $_GET['name'];
                     $place = $_GET['place'];
                     $touristNumber = $_GET['touristNumber']; 
                     $numberOfDay = $_GET['numberOfDay'];
                     $numberOfNight = $_GET['numberOfNight'];
                     $totalAmount = $_GET['totalAmount'];
                     $travelMedium = $_GET['travelMedium'];

               }

            ?>
            <form id="frmBooking" action="UpdateDelete.php" method="post">
                <div class="form-group">
                    <label for="form">From:</label>
                    <table>
                        <tr>
                            <td>
                                <select id="from" name="from">
                                     <option value="dhaka">Dhaka</option>
                                 </select>
                            </td>
                        </tr>
                     </table>
                </div>
                <div class="form-group">
                    <label for="destination">Destination:</label>
                    <input type="hidden" name="action" value="bookingEdit"/>
                    <input type="hidden" name="id" value="<?php echo $id?>"/>
                    <input type="hidden" name="name" value="<?php echo $name?>"/>
                    <table>
                        <tr>
                            <td>
                                <select id="destination" name="destination" onchange="getCalculatedAmount();">
                                     <option value="bandarban" <?php echo ("bandarban" == $place ? 'selected' : '')?>>Bandarban
                                     </option>
                                     <option value="rangamati" <?php echo ("rangamati" == $place ? 'selected' : '')?>>Rangamati
                                     </option>
									   <option value="comilla" <?php echo ("comilla" == $place ? 'selected' : '')?>>Comilla
                                     </option>
								       <option value="sundarban" <?php echo ("sundarban" == $place ? 'selected' : '')?>>Sundarban
                                     </option>
									   <option value="sylhet" <?php echo ("sylhet" == $place ? 'selected' : '')?>>Shylhet
                                     </option>
									   <option value="chittagang" <?php echo ("chittagang" == $place ? 'selected' : '')?>>Chittagang
                                     </option>
									   <option value="rajsahi" <?php echo ("rajsahi" == $place ? 'selected' : '')?>>Rajsahi
                                     </option>
									   <option value="barisal" <?php echo ("barisal" == $place ? 'selected' : '')?>>Barisal
                                     </option>

                                 </select>
                            </td>
                        </tr>
                     </table>
                </div>
                <div class="form-group">
                    <label for="">TouristNumber:</label>
                    <table>
                        <tr>
                            <td>
                                <select id="touristNumber" name="touristNumber" onchange="getCalculatedAmount();">
                                     <option value="1" <?php echo (1 == $touristNumber ? 'selected' : '')?>>1</option>
                                     <option value="2" <?php echo (2 == $touristNumber ? 'selected' : '')?>>2</option>
									 <option value="3" <?php echo (3 == $touristNumber ? 'selected' : '')?>>3</option>
									 <option value="4" <?php echo (4 == $touristNumber ? 'selected' : '')?>>4</option>
									 <option value="5" <?php echo (5 == $touristNumber ? 'selected' : '')?>>5</option>
                                 </select>
                            </td>
                        </tr>
                     </table>
                </div>
                <div class="form-group">
                    <label for="travelMedium">TravelMedium:</label>
                    <table>
                        <tr>
                            <td>
                                <select id="travelMedium" name="travelMedium" onchange="getCalculatedAmount();">
                                     <option value="bus" <?php echo ("bus" == $travelMedium ? 'selected' : '')?>>Bus</option>
                                     <option value="train" <?php echo ("train" == $travelMedium ? 'selected' : '')?>>Train</option>
									   <option value="plane" <?php echo ("plane" == $travelMedium ? 'selected' : '')?>>Plane</option>
                                 </select>
                            </td>
                        </tr>
                     </table>
                </div>
                <div class="form-group">
                    <label for="numberOfDay">Number Of Days:</label>
                    <table>
                        <tr>
                            <td>
                                <select id = "numberOfDay" name="numberOfDay" onchange="getCalculatedAmount();">
                                     <option value="1" <?php echo (1 == $numberOfDay ? 'selected' : '')?>>1</option>
                                     <option value="2" <?php echo (2 == $numberOfDay ? 'selected' : '')?>>2</option>
									  <option value="3" <?php echo (3 == $numberOfDay ? 'selected' : '')?>>3</option>
									   <option value="4" <?php echo (4 == $numberOfDay ? 'selected' : '')?>>4</option>
									    <option value="5" <?php echo (5 == $numberOfDay ? 'selected' : '')?>>5</option>
                                     <h1>value</h1>
                                 </select>
                            </td>
                        </tr>
                     </table>
                </div>
                <div class="form-group">
                    <label for="numberOfNight">Number Of Nights:</label>
                    <table>
                        <tr>
                            <td>
                                <select id="numberOfNight" name="numberOfNight" onchange="getCalculatedAmount();">
                                     <option value="1" <?php echo (1 == $numberOfNight ? 'selected' : '')?>>1</option>
                                     <option value="2" <?php echo (2 == $numberOfNight ? 'selected' : '')?>>2</option>
									  <option value="3" <?php echo (3 == $numberOfDay ? 'selected' : '')?>>3</option>
									   <option value="4" <?php echo (4 == $numberOfDay ? 'selected' : '')?>>4</option>
									    <option value="5" <?php echo (5 == $numberOfDay ? 'selected' : '')?>>5</option>
                                 </select>
                            </td>
                        </tr>
                     </table>
                </div>
                <div class="form-group">
                    <label for="totalAmount">Total Amount(Include(Food*Stay*Bus)):</label>
                    <input class="form-control" id="totalAmount" type="text" value="<?php echo $totalAmount?>" name="totalAmount" placeholder="Total Amount"/>
                </div>
                <button type="submit" class="btn btn-success" onclick="return packages.onSubmit()">Submit</button>
            </form>
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
    <script type="text/javascript">
        function getCalculatedAmount() {
            var formData = $("#frmBooking").serialize();
            $.post(
                "http://localhost/project_411/BookingPageJson.php", 
                formData, 
                function (d, s) { 
                    if (s == "success") {
                      $("#totalAmount").val(d);
                    } else {
                      $("#totalAmount").val('');
                    }
                }
            );
          
        }
    </script>

    <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/clean-blog.min.js"></script>
    <script src="js/register.js"></script>

    

  </body>

</html>
