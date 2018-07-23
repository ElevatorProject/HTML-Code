<!DOCTYPE html>
<html lang="en">
	<head>

		<title>Floor Table</title>
		<meta name="description" content="This is the Home page for our elevator project" />
		<meta name="robots" content="noindex nofollow" />
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
	<nav class="navbar navbar-default" style="height:50px">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Home</a>
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

</html>
<?php 
include "php/session_check.php";
$mysqli = new mysqli("localhost", "ese","ese");
if($mysqli=== false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if ($result = $mysqli->query("select * from elevator.elevatorNetwork")) {
	echo "<h1 align='center'><u>Floor Table</u></h1>";
	echo "<br><br><table border='1' style='width: 2px' align='center'class='table table-striped table-dark'>
		<tr>
		<th>date</th>
		<th>time</th>
		<th>node ID</th>
		<th>status</th>
		<th>current floor</th>
		<th>requested floor</th>
		</tr>";

while($row = mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['date'] . "</td>";
	echo "<td>" . $row['time'] . "</td>";
	echo "<td>" . $row['nodeID'] . "</td>";
	echo "<td>" . $row['status'] . "</td>";
	echo "<td>" . $row['currentFloor'] . "</td>";
	echo "<td>" . $row['requestedFloor'] . "</td>";
	echo "</tr>";
}
echo "</table>";

$mysqli->close();
}else{
   echo("Error description: " . mysqli_error($mysqli));
}
?>
