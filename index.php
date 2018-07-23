
<?php include "php/session_check.php";?>
<html lang="en">
	<head>

		<title>Project VI Home Page</title>
		<meta name="description" content="This is the Home page for our elevator project" />
		<meta name="robots" content="noindex nofollow" />
		<meta http-equiv="author" content="Dylan Kite" />
		<meta http-equiv= "pragma" content="no-cache" />

		<!-- Latest compiled and minified CSS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<link rel="stylesheet" href="css/index.css">
	</head>
	<nav class="navbar navbar-default" style="height:40px">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Home</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="about.php">about</a></li>
					<li><a href="documents.php">documents</a></li>
					<li><a href="videos.php">videos</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">logbooks<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="logbook_blair.php">Blair</a></li>
							<li><a href="logbook_olivia.php">Olivia</a></li>
							<li><a href="logbook_dylan.php">Dylan</a></li>
						</ul>

					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">database<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="nodeTable.php">node Table</a></li>

							<li><a href="usersTable.php">Users Table</a></li>
							<li><a href="floorTable.php">Floor Table</a></li>

						</ul>

					</li>

				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="login.html">Login</a></li>
					<li><a href="request_access.html">Sign Up</a></li>
					<li><a href="https://github.com/ElevatorProject">Github</a></li>
					<li><form action="php/logout.php"><button type="submit" class="btn navbar-btn btn-danger btn-sm">Log Out</button></form></li> 
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Elevator Controller</h1>
			<p class="lead">Control your elevator wirelessly with ease</p>
		</div>
	</div>
	<body>
		<section id="loginform" class="outer-wrapper" style="padding-top:40px;padding-bottom:40px" >
			<div class="inner-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-sm-offset-4">
							<h2 class="text-center">Pick a Floor</h2>
					<br>
					<h5 class="text-center" >Current Floor</h5>
					<div class="progress">
					  <script type="text/javascript" src="js/ajax.js"></script> 
					  <div id ="output" class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70"
					  aria-valuemin="0" aria-valuemax="100" style="width:70%">
					  </div>
					</div>
							<iframe name="ifloor" style="display:none;"></iframe>
							<form role="form" action="php/controller.php" method="post" target="ifloor">
								<div class="form-group" style="padding-top:20px">
									<label for="FloorNumber">Floor Number</label>
									<input min="1" max="3" type="number" class="form-control" name="FloorNumber" id="FloorNumber" placeholder="Floor Number">
								</div>
								<button type="submit" class="btn btn-success center-block">Submit</button>
							</form>
						<br>
					</div>
				</div>
			</div>
		</section> 


		<div id="result"></div>
		<div style="padding-top:20px;padding-bottom:40px"> 
			<h2 class="text-center" >Elevator Location</h2>
			<div id="map"></div>
<script>
// Initialize and add the map
function initMap() {
	// The location of Uluru
	var uluru = {lat:43.536 , lng:-80.289 };

	// The map, centered at Uluru
	var map = new google.maps.Map(
		document.getElementById('map'), {zoom: 4, center: uluru});
	// The marker, positioned at Uluru
	var marker = new google.maps.Marker({position: uluru, map: map});
}
</script>
			<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDX6WSgipf52X-T6zfIoy46PZ3O8owClp8&callback=initMap">
			</script>
		</div>

		<figure>
			<img src="images/logo.png" alt="professional Photo from shutterstock.com"
			      title="Current Status of the Elevator Project" />
		</figure>

		<p>Current Date & Time: <span id="datetime"></span></p>
		<footer>&copy; Dylan Kite, Olivia Godwin, Blair Sharpe</footer>

<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>

	</body>
</html>
