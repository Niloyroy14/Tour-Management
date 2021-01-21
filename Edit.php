<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Page</title>

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
              <h1>Edit Page</h1>
             
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
              $id ='';$name = '';$email = '';$password = '';$phoneNo = '';$gender = '';$age;
              if($_SERVER["REQUEST_METHOD"] == "GET"){
                    $id = $_GET['id'];
                    $name = $_GET['name'];
                    $email = $_GET['email'];
                    $password = $_GET['password'];
                    $phoneNo = $_GET['phoneNo'];
                    $gender = $_GET['gender'];
                    $age = $_GET['age'];
                    $from = $_GET['from'];

                }
            ?>
            <form  action="UpdateDelete.php" method="post">
                <div class="form-group">
                    <label for="Name">Name:</label>
                    <?php
                         if($from == "adminInfo"){
                    ?>
                    <input type="hidden" name="from" value="adminInfo"/>
                    <?php
                          }else{
                    ?>
                    <input type="hidden" name="from" value="userInfo"/>
                    <?php
                          }
                    ?>
                    
                    <input type="hidden" name="action" value="createEdit"/>
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <input  class="form-control" id="name" type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter Username"/>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" id="email" type="text" name="email" value="<?php echo $email; ?>" placeholder="Enter Email"/>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input class="form-control" id="password" type="password" name="password" value="<?php echo $password; ?>" placeholder="Enter Password"/>
                </div>
                <div class="form-group">
                    <label for="conPassword">Confirm Password:</label>
                    <input class="form-control" id="conPassword" type="password" name="conPassword" value="<?php echo $password;?>" placeholder="Enter Confirm Password"/>
                </div>
                <div class="form-group">
                    <label for="phoneNo">PhoneNo:</label>
                    <input class="form-control" id="phoneNo" type="text" name="phoneNo"  value="<?php echo $phoneNo; ?>" placeholder="Enter Phone Number"/>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input class="form-control" id="age" type="text" name="age" value="<?php echo $age; ?>" placeholder="Enter Age"/>
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
    <script src="js/register.js"></script>

  </body>

</html>
