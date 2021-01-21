<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Package Page</title>

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
              <a class="nav-link" href="UserInfo.php">UserInfo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ViewPackageDetails.php">Viewpackagedetails</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Package.php">Add Packages </a>
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
              <h1>Add Tour Package</h1>
              
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form  action="InsertDatabase.php" method="post">
                <div class="form-group">
                      <label for="fr">From:</label>
                      <input class="form-control" type="text" name="fr" value="Dhaka" disabled/>
                </div>
                <div class="form-group">
                    <label for="place">To:</label>
                    <input type="hidden" name="action" value="package"/>
                    <table>
                        <tr>
                          <thead>
                            <td>
                                <select id="place" name="place">
                                     <option value="dhaka">Dhaka</option>
                                     <option value="comilla">Comilla</option>
                                     <option value="barisal">Barisal</option>
                                     <option value="rajshahi">Rajshahi</option>
                                     <option value="bandorbon">Bandorbon</option>
                                     <option value="sylhet">Sylhet</option>
                                     <option value="rangamati">Rangamati</option>
                                     <option value="sundorbon">Sundorbon</option>
									  <option value="chittagang">Chittagang</option>
                                 </select>
                            </td>
                          </thead>
                        </tr>
                     </table>
                </div>
                <div class="form-group">
                    <label for="">TouristNumber:</label>
                    <input class="form-control" id="touristNumber" type="text" name="touristNumber" placeholder="Number of Tourist"/>
                </div>
                <div class="form-group">
                    <label for="stayAmount">Stay Amount:</label>
                    <input class="form-control" id="stayAmount" type="text" name="stayAmount" placeholder="Stay Amount"/>
                </div>
                <div class="form-group">
                    <label for="foodAmount">Food Amount:</label>
                    <input class="form-control" id="foodAmount" type="text" name="foodAmount" placeholder="Food Amount"/>
                </div>
                <div class="form-group">
                    <label for="busAmount">Bus Amount:</label>
                    <input class="form-control" id="busAmount" type="text" name="busAmount" placeholder="Bus Amount"/>
                </div>
                <div class="form-group">
                    <label for="trainAmount">Train Amount:</label>
                    <input class="form-control" id="trainAmount" type="text" name="trainAmount" placeholder="Train Amount"/>
                </div>
                <div class="form-group">
                    <label for="planeAmount">Plane Amount:</label>
                    <input class="form-control" id="planeAmount" type="text" name="planeAmount" placeholder="Plane Amount"/>
                </div>
                <div class="form-group">
                    <label for="numberOfDay">Number Of Days:</label>
                    <table>
                        <tr>
                            <td>
                                <select id = "numberOfDay" name="numberOfDay">
                                     <option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option>
                                     <option value="4">4</option>
                                     <option value="5">5</option>
                                     <option value="6">6</option>
                                     <option value="7">7</option>
                                     <option value="8">8</option>
                                     <option value="9">9</option>
                                     <option value="10">10</option>
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
                                <select id="numberOfNight" name="numberOfNight">
                                     <option value="1">1</option>
                                     <option value="2">2</option>
                                     <option value="3">3</option>
                                     <option value="4">4</option>
                                     <option value="5">5</option>
                                     <option value="6">6</option>
                                     <option value="7">7</option>
                                     <option value="8">8</option>
                                     <option value="9">9</option>
                                     <option value="10">10</option>
                                 </select>
                            </td>
                        </tr>
                     </table>
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
    <script src="js/package.js"></script>

  </body>

</html>
