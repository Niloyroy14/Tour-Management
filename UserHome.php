<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home Page</title>

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
  

    <!-- Main Content -->
    <div class="maincontent clear">
		   
		   <div class="maincontentimage" >
		   
		     <img src="img/Home.png" alt="Logo Image" >
			 
			              <div class="centered">
			  
			                  <h1>Welcome to our family</h1>
                               <h2><p> We hereby want to provide you the best tourism experiene with us. We assure you the best service with maximum amusement within a minimum cost.</p></h2>
                                 <h3>  We are promised to you to give the best service!!!!!</h3>                             
						 </div>																																																																																						-																																																																											`
		   
		   </div>
		   
		  </div>

    

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

  </body>

</html>
