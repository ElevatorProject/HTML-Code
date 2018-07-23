<!DOCTYPE html>
<?php include "php/session_check.php";?>
<html lang="en">
	<head>
		<title>Videos</title>
		<meta name="description" content="This is the About page for our elevator project" />
		<meta name="robots" content="noindex nofollow" />
		<meta http-equiv="author" content="Dylan Kite" />
		<meta http-equiv= "pragma" content="no-cache" />

		<link href="css/style.css" type="text/css" rel="stylesheet" />
	
	  <!-- Latest compiled and minified CSS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<nav class="navbar navbar-default">
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
                            <li><a href="nodeTable.php">Node Table</a></li>

                            <li><a href="usersTable.php">Users Table</a></li>
                            <li><a href="floorTable.php">Floor Table</a></li>

                        </ul>

                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="request_access.html">Sign Up</a></li>
                    <li><a href="https://github.com/ElevatorProject">Github</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
                    <div class="jumbotron jumbotron-fluid">
                    <div class="container" align="center">
                      <h1 class="display-4">Project Videos</h1>
					</div>
       
	
	
	<body>
		<div class="container" align="center">	
		<p> Week 5 - Progress </p>

		<iframe width="560" height="315"
			src="https://www.youtube.com/embed/TWwmLeuprps"
			frameborder="0" allow="autoplay; encrypted-media"
			allowfullscreen>
		</iframe>
	<footer>&copy; Dylan Kite, Olivia Godwin, Blair Sharpe</footer>
	</div>
	</body>
		
</html>
