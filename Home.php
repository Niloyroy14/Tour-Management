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

   <hr>
   
   
   
   <?php
	
 $con=mysqli_connect("localhost" , "root" , "");
$db=mysqli_select_db($con,'cse_411');
	$query="SELECT * FROM `images` where name='home' ";
	$query_run=mysqli_query($con,$query);
	
	
	  ?>
	
   
   
   
   
   
   
   
   
   
  <div class="container">
  
  
              <?php  
				  while($row=mysqli_fetch_array($query_run)){
					  
				  ?>
  
  
  
    <h2 style="text-align: center;">Gallery</h2>
        <div class="row">
              <div class="col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $row['images1']?>" alt="Nature" style="width:100%">
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $row['images2']?>" alt="Nature" style="width:100%">
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $row['images3']?>" alt="Nature" style="width:100%">
                </div>
              </div>
        </div>
        <br>
        <br>
        <div class="row">
              <div class="col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $row['images4']?>" alt="Nature" style="width:100%">
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $row['images5']?>" alt="Nature" style="width:100%">
                </div>
              </div>
              <div class="col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $row['images6']?>" alt="Nature" style="width:100%">
                </div>
              </div>
        </div>
		
		 <?php } ?>
  </div>
  <hr>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <p class="copyright text-muted">All Copyright &copy Reserved to Niloy and Rafa; </p>
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
