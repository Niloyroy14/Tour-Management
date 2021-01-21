<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Booking Page</title>

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
          $names = '';
          if($_SERVER["REQUEST_METHOD"] == "GET"){
               $names = $_GET['names'];
          }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="Register.php?names=<?php echo $names;?>">Register</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="UserHome.php?names=<?php echo $names;?>">Home</a>
            </li>
            <li class="nav-item">
               <a href="#" data-toggle="dropdown" class="dropdown-toggle">AllPackages <b class="caret"></b></a>
               <div class="dropdown"> 
                  <ul class="dropdown-menu">
                      <li><a href="Bandarban.php?names=<?php echo $names;?>">Bandarban</a></li>
                      <li><a href="Rangamati.php?names=<?php echo $names;?>">Rangamati</a></li>
                      <li><a href="Sylhet.php?names=<?php echo $names;?>">Sylhet</a></li>
                      <li><a href="Sundarban.php?names=<?php echo $names;?>">Sundarban</a></li>
					    <li><a href="Barisal.php?names=<?php echo $names;?>">Barisal</a></li>
					    <li><a href="Comilla.php?names=<?php echo $names;?>">Comilla</a></li>
						 <li><a href="Rajsahi.php?names=<?php echo $names;?>">Rajsahi</a></li>
						   <li><a href="Chittagang.php?names=<?php echo $names;?>">Chittagang</a></li>
                  </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="BookingPage.php?names=<?php echo $names; ?>">BookingPackage</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="SpecialPackage.php?names=<?php echo $names; ?>">SpecialPackage</a>
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
              <h1>Booking Package</h1>
             
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form id="frmBooking" action="InsertDatabase.php" method="post">
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
                    <input type="hidden" name="action" value="bookingInfo"/>
                    <input type="hidden" name="name" value="<?php echo $names; ?>"/>
                    <table>
                        <tr>
                            <td>
                                <select id="destination" name="destination" onchange="getCalculatedAmount();">
                                     <option value="bandarban">Bandarban</option>
                                     <option value="rangamati">Rangamati</option>
									   <option value="sylhet">Sylhet</option>
									    <option value="sundorbon">Sundorbon</option>
									     <option value="comilla">Comilla</option>
                                          <option value="barisal">Barisal</option>
                                           <option value="rajshahi">Rajshahi</option>
										   <option value="chittagang">Chittagang</option>
									
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
                                     <option value="1">1</option>
									  <option value="2">2</option>
									   <option value="3">3</option>
									      <option value="4">4</option>
										     <option value="5">5</option>
									 
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
                                     <option value="bus">Bus</option>
									  <option value="train">Train</option>
									   <option value="plane">Plane</option>
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
                                     <option value="1">1</option>
                                     <option value="2">2</option>
									   <option value="3">3</option>
									     <option value="4">4</option>
										   <option value="5">5</option>
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
                                     <option value="1">1</option>
                                     <option value="2">2</option>
									   <option value="3">3</option>
									     <option value="4">4</option>
										   <option value="5">5</option>
                                 </select>
                            </td>
                        </tr>
                     </table>
                </div>
                <div class="form-group">
                    <label for="totalAmount">Total Amount(Include(Food*Stay*Bus)):</label>
                    <input class="form-control" id="totalAmount" type="text" name="totalAmount" placeholder="Total Amount"/>
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
          });
      }

    </script>
  </body>

</html>
