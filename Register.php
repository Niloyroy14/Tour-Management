<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Page</title>

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
    <?php 
          if($names != ""){
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
                  </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="BookingPage.php?names=<?php echo $names; ?>">BookingPage</a>
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
    <?php 
          }else{
    ?>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="Register.php">Register</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
               <a href="#" data-toggle="dropdown" class="dropdown-toggle">AllPackages <b class="caret"></b></a>
               <div class="dropdown"> 
                  <ul class="dropdown-menu">
                      
                  </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Login.php">Log In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php 
          }
    ?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/about-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h1>Registation</h1>
             
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form  id="register" action="InsertDatabase.php" method="post">
                <div class="form-group">
                    <label for="Name">Name:</label>
                    <input type="hidden" name="action" value="userInfo"/>
                    <input  class="form-control" id="name" type="text" name="name" placeholder="Enter Username"/>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" id="email" type="text" name="email" placeholder="Enter Email"/>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form-control" id="password" type="password" name="password" placeholder="Enter Password"/>
                </div>
                <div class="form-group">
                    <label for="conPassword">Confirm Password:</label>
                    <input class="form-control" id="conPassword" type="password" name="conPassword" placeholder="Enter Confirm Password"/>
                </div>
                <div class="form-group">
                    <label for="phoneNo">PhoneNo:</label>
                    <input class="form-control" id="phoneNo" type="text" name="phoneNo" placeholder="Enter Phone Number"/>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input class="form-control" id="age" type="text" name="age" placeholder="Enter Age"/>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <table>
                        <tr>
                            <td>
                                <input id = "gender" type="radio" name="gender" value="male"> Male
                                <input id = "gender" type="radio" name="gender" value="female"> Female
                                <input id = "gender" type="radio" name="gender" value="other"> Other
                            </td>
                        </tr>
                     </table>
                </div>
               
                <button type="submit" class="btn btn-success" onclick="return register.onSubmit()">Submit</button>
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
    <script src="js/register.js"></script>

    <!-- <script type="text/javascript">
         function getUserType(){
              var register = $("#register").serialize();
              $.get(
                    "http://localhost/Hotel Management/BookingPageJson.php", 
                     register,
                    function (d, s) { 
                        if(s == "success"){
                            var type = d;
                            if(type == "admin"){
                                window.location = 'http://localhost/Hotel Management/AdminLogin.php';
                            }
                        }
                    }
            );
         }
    </script> -->

  </body>

</html>
