<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chittagang Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	 <link href="assets/css/bootstrap.css" rel="stylesheet" />

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
              <?php
                    if($names == ''){
              ?>
              <a class="nav-link" href="Home.php?names=<?php echo $names;?>">Home</a>
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
                <a class="nav-link" href="About.php">About</a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="Login.php">Log In</a>
              </li>
              <?php
                    }else{
              ?>
             <a class="nav-link" href="UserHome.php?names=<?php echo $names;?>">Home</a>
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
              <?php
                    }
              ?>
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
              <h1>Chittagang Packages</h1>
             
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
	
	
    <!--Package SECTION-->    
	
	
    <section  id="services-sec">
        <div class="container">
            <div class="row ">
                <div class="text-center g-pad-bottom">
                 
                  
                </div>
                  </div>
                <div class="row go-marg">
                  
                    <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">Tour Package One #1 </h4>
                              <p> 2 person</p>
								<p> 2 days 1 night</p> 
								  <p> By Bus</p> 
                                    <p> Hotel Ocean Paradise</p> 
                             
                             <span class="label label-danger">Cost: 4000 Tk</span>
							  <a href="BookingPage.php" style="background-color:green;color:white;padding:3px">Add</a>
                        </div>
                    </div> 
                            
                    </div>
                   <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">Tour Package Two #2 </h4>
                                 <p> 3 person</p>
								<p> 3 days 2 night</p> 
								  <p> By Train</p> 
                                    <p>Hotel Cox's Today</p> 
                              <span class="label label-danger">Cost: 5000 Tk</span>
							   <a href="BookingPage.php" style="background-color:green;color:white;padding:3px">Add</a>
                            
                        </div>
                    </div> 
                            
                    </div>
                     <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">Tour Package Three #3 </h4>
                                 <p> 2 person</p>
								<p> 2 days 1 night</p> 
								  <p> By Plane</p> 
                                    <p>Hotel Ocean Paradise</p> 
                             <span class="label label-danger">Cost: 6000 Tk</span>
							  <a href="BookingPage.php" style="background-color:green;color:white;padding:3px">Add</a>
                        </div>
                    </div> 
                            
                    </div>
                </div>
          <div class="row go-marg">
                  
                    <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">Tour Package Four #4 </h4>
                              <p> 3 person</p>
								<p> 3 days 2 night</p> 
								  <p> By Bus</p> 
                                    <p>Hotel Ocean Paradise</p> 
                             <span class="label label-danger">Cost: 5000 Tk</span>
							  <a href="BookingPage.php" style="background-color:green;color:white;padding:3px">Add</a>
                        </div>
                    </div> 
                            
                    </div>
                   <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">Tour Package Five #5 </h4>
                             <p> 3 person</p>
								<p> 4 days 3 night</p> 
								  <p> By Train</p> 
                                    <p>Hotel Cox's Today</p> 
                             
                             <span class="label label-danger">Cost: 6000 Tk</span>
							  <a href="BookingPage.php" style="background-color:green;color:white;padding:3px">Add</a>
                        </div>
                    </div> 
                            
                    </div>
                     <div class="col-md-4 col-sm-4">
                          <div class="panel panel-default">
                       
                        <div class="panel-body">
                             <h4 class="adjst">Tour Package Six #6 </h4>
                              <p> 4 person</p>
								<p> 2 days 1 night</p> 
								  <p> By Plane</p> 
                                    <p>Hotel Ocean Paradise</p> 
                             
                             <span class="label label-danger">Cost: 7000 Tk</span>
							  <a href="BookingPage.php" style="background-color:green;color:white;padding:3px">Add</a>
                        </div>
                    </div> 
                            
                    </div>
                </div>
        </div>
    </section>	
	
	

	</br>
	</br>
	
	
	
	
	
	
	
	
	

	
	<?php
	
 $con=mysqli_connect("localhost" , "root" , "");
$db=mysqli_select_db($con,'cse_411');
	$query="SELECT * FROM `images` where name='chittagang' ";
	$query_run=mysqli_query($con,$query);
	
	
	  ?>
	
	

    <div class="container">
	
	
	          <?php  
				  while($row=mysqli_fetch_array($query_run)){
					  
				  ?>
	
	
	
      <h2 style="text-align: center;">Chittagang View</h2>
	  </br>
          <div class="row">
                <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="<?php echo $row['images1']?>" alt="Nature" style="width:100%">
                      <div class="caption">
                          <p>Cox's Bazar.</p>
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="<?php echo $row['images2']?>" alt="Nature" style="width:100%">
                      <div class="caption">
                          <p>Saint Martin.</p>
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="thumbnail">
                      <img src="<?php echo $row['images3']?>" alt="Nature" style="width:100%">
                      <div class="caption">
                          <p>Potenga.</p>
                      </div>
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
                    <div class="caption">
                        <p>Hotel Ocean Paradise</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo $row['images5']?>" alt="Nature" style="width:100%">
                    </div>
                    <div class="caption">
                        <p>Hanif Bus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="<?php echo $row['images6']?>" alt="Nature" style="width:100%">
                    </div>
                    <div class="caption">
                        <p>Hotel Cox's Today.</p>
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
