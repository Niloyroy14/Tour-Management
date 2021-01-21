<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SpecialPackage Page</title>

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
               $name = $_GET['names'];
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
					   <li><a href="Barisal.php?names=<?php echo $names;?>">Barisal</a></li>
					     <li><a href="Comilla.php?names=<?php echo $names;?>">Comilla</a></li>
						 <li><a href="Rajsahi.php?names=<?php echo $names;?>">Rajsahi</a></li>
						   <li><a href="Chittagang.php?names=<?php echo $names;?>">Chittagang</a></li>
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
              <h1>Special Packages</h1>
             
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <table class="table">
                <thead style="background-color: black">
                    <tr style="color: white">
                      <td scope="col">Place</td>
                      <td scope="col">TouristNumber</td>
                      <td scope="col">NumberOfDay</td>
                      <td scope="col">NumberOfNight</td>
                      <td scope="col">TravelMedium</td>
                      <td scope="col">TotalAmount</td>
                    </tr>
                </thead>
                <?php
                  $totalAmount;
                  $link = mysqli_connect("localhost","root","","cse_411");
                  $sql = "select * from package";
                  $result = mysqli_query($link , $sql);
                  if($result){
                     if(mysqli_num_rows($result) > 0){
                       while($row = mysqli_fetch_array($result)){
                          $place = $row['place'];
                          $touristNumber = $row['touristNumber']; 
                          $numberOfDay = $row['numberOfDay'];
                          $numberOfNight = $row['numberOfNight'];
                          $stayAmount = $row['stayAmount'];
                          $foodAmount = $row['foodAmount'];
                          $busAmount = $row['busAmount'];
                          $trainAmount = $row['trainAmount'];
                          $planeAmount = $row['planeAmount'];
                ?>
                <tbody>
                    <tr>
                      <form method="post" action="InsertDatabase.php">
                            <input type="hidden" name="action" value="detailPackage">
                            <input id = "name" type="hidden" name="name" value="<?php echo $name; ?>">
                            <td>  <?php echo $place; ?>  </td>
                            <input id = "place" type="hidden" name="place" value="<?php echo $place; ?>">
                            <input id = "touristNumber" type="hidden" name="touristNumber" value="<?php echo $touristNumber; ?>">
                            <input id = "numberOfDay" type="hidden" name="numberOfDay" value="<?php echo $numberOfDay; ?>">
                            <input id = "numberOfNight" type="hidden" name="numberOfNight" value="<?php echo $numberOfNight;?>">
                            <input id = "travelMedium" type="hidden" name="travelMedium" value="bus"> 
                            <td>  <?php echo $touristNumber; ?>  </td>
                            <td>  <?php echo $numberOfDay; ?>  </td>
                            <td>  <?php echo $numberOfNight; ?>  </td>
                            <td> Bus </td>
                            <?php
                                $totalAmount = ( $busAmount + $stayAmount + $foodAmount );
                            ?>
                            <input id = "totalAmount" type="hidden" name="totalAmount" value="<?php echo $totalAmount; ?>"> 
                            <td> <?php echo $totalAmount; ?> </td>
                            <td><input type="submit" value="Confirm"></td>
                      </form>
                    </tr>
                    <tr>   
                      <form method="post" action="InsertDatabase.php">
                            <input type="hidden" name="action" value="detailPackage">
                            <input id = "name" type="hidden" name="name" value="<?php echo $name; ?>">
                            <td>  <?php echo $place; ?>  </td>
                            <input id = "place" type="hidden" name="place" value="<?php echo $place; ?>">
                            <input id = "touristNumber" type="hidden" name="touristNumber" value="<?php echo $touristNumber; ?>">
                            <input id = "numberOfDay" type="hidden" name="numberOfDay" value="<?php echo $numberOfDay; ?>">
                            <input id = "numberOfNight" type="hidden" name="numberOfNight" value="<?php echo $numberOfNight;?>">
                            <input id = "travelMedium" type="hidden" name="travelMedium" value="train"> 
                            <td>  <?php echo $touristNumber; ?>  </td>
                            <td>  <?php echo $numberOfDay; ?>  </td>
                            <td>  <?php echo $numberOfNight; ?>  </td>
                            <td> Train </td>
                            <?php
                                $totalAmount = ( $trainAmount + $stayAmount + $foodAmount );
                            ?>
                            <input id = "totalAmount" type="hidden" name="totalAmount" value="<?php echo $totalAmount; ?>"> 
                            <td> <?php echo $totalAmount; ?> </td>
                            <td><input type="submit" value="Confirm"></td>
                      </form>
                    </tr>
                    <tr>
                      <form method="post" action="InsertDatabase.php">
                            <input type="hidden" name="action" value="detailPackage">
                            <input id = "name" type="hidden" name="name" value="<?php echo $name; ?>">
                            <td>  <?php echo $place; ?>  </td>
                            <input id = "place" type="hidden" name="place" value="<?php echo $place; ?>">
                            <input id = "touristNumber" type="hidden" name="touristNumber" value="<?php echo $touristNumber; ?>">
                            <input id = "numberOfDay" type="hidden" name="numberOfDay" value="<?php echo $numberOfDay; ?>">
                            <input id = "numberOfNight" type="hidden" name="numberOfNight" value="<?php echo $numberOfNight;?>">
                            <input id = "travelMedium" type="hidden" name="travelMedium" value="plane"> 
                            <td>  <?php echo $touristNumber; ?>  </td>
                            <td>  <?php echo $numberOfDay; ?>  </td>
                            <td>  <?php echo $numberOfNight; ?>  </td>
                            <td> Plain </td>
                            <?php
                                $totalAmount = ( $planeAmount + $stayAmount + $foodAmount );
                            ?>
                            <input id = "totalAmount" type="hidden" name="totalAmount" value="<?php echo $totalAmount; ?>"> 
                            <td> <?php echo $totalAmount; ?> </td>
                            <td><input type="submit" value="Confirm"></td>
                      </form>
                    </tr>
                </tbody>
                <?php
                         }
                         mysqli_free_result($result);
                     }else{
                        echo "No records matching your query were found.";
                     }
                  }else{
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
