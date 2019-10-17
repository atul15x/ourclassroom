<?php 
	
	session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Our ClassRoom</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" type="text/css" href="css/animated.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body style="background: darkgray;">

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="#">Our ClassRoom</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		    </ul>

		    <form class="form-inline my-2 my-lg-0">
		    	<ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item ">
		        <a class="nav-link" href="#">About Us <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Setting<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item ">
		        <a class="nav-link" href="#"><?php echo $_SESSION['username']; ?> <span class="sr-only">(current)</span></a>
		      </li>
		      
		    </ul>
		      <button style="background:white;color:black;" class="btn btn-outline-success my-2 my-sm-0" type="submit"><a style="text-decoration: none;" href="index.html">Logout</a></button>
		    </form>
		  </div>
	</nav>


	<div class="background">
		<div class="container">
			<div class="mid-area">
				<div class="jumbotron jumbotron-fluid">
					<div class="container">
						<div class="form-inline justify-content-center">
							<h2>Search For Student Information</h2>
						</div>
						<div class="form-inline justify-content-center">
						    <input type="text" class="form-control col-md-6 mr-sm-2 " id="inputAddress2" placeholder="Search...">
						    <button class="btn btn-outline-success " type="submit">Search</button>
  						</div>
					</div>
				</div>

				<!-- Profile Menu -->

				<div class="container">
					<div class="form-inline justify-content-center" >
						<img id="profile-pic" src="photo/profile/Demo.jpg" alt="..." class="rounded-circle">
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

